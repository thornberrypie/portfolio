<?php
global $user;
$node = menu_get_object();
if ($node && isset($node->nid)) {
    $node = node_load($node->nid);
	node_build_content($node);
	$nodeID = $node->nid;
	$pageKeywords = ''/*render($node->content['field_keywords'])*/;
	$pageDescription = ''/*render($node->content['field_description'])*/;
}else{
	$nodeID = 0; $pageKeywords = ''; $pageDescription = '';
}

if($node->type == 'form'){
	function THEMENAME_preprocess_page(&$variables) {
	  global $node;
	  $customFormField = $node->field_form['und'][0]['value'];
	  $variables['node']->theForm = drupal_get_form(render($customFormField));
	}
}

//------------Put this in settings.php---------------------------

function get_sitename(){
	$u = $_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]);
	$u = str_replace("\\", "", $u);
	$u = rtrim($u, '/');
	return $u;
}
$sitename = get_sitename();
//----------------------------------------------------
define('SITE_URL', 'http://'.$sitename.'/');
define('THEME_PATH', SITE_URL.path_to_theme());
define('PROD_IMG_PATH', SITE_URL.'sites/default/files/styles/uc_product/public/');
define('CURRENT_URL', $_SERVER['REQUEST_URI']);
define('CURRENT_NODE_ID', $nodeID);
define('META_KEYWORDS', $pageKeywords);
define('META_DESCRIPTION', $pageDescription);

/*-----------------Functions------------------------*/
function get_product_content($c){
	$p = array();
	$p['price'] = number_format($c['sell_price']['#value'], 2, '.', '');
	$p['href'] = $c['links']['node']['#links']['node-readmore']['href'];
	$p['cart'] = render($c['add_to_cart']);
	$p['length'] = $c['dimensions']['#length'];
	$p['width'] = $c['dimensions']['#width'];
	$p['height'] = $c['dimensions']['#height'];
	$p['size_units'] = $c['dimensions']['#units'];
	$p['sku'] = $c['model']['#model'];
	$p['weight'] = $c['weight']['#amount'];
	$p['weight_units'] = $c['weight']['#units'];
	$p['body'] = $c['body'];
	$imgObj = $c['uc_product_image']['#object'];
	$p['img'] = PROD_IMG_PATH.$imgObj->uc_product_image['und'][0]['filename'];
	/*$p['img'] = render($c['uc_product_image']);*/
	return $p;
}
function get_mlid($nid){
	$item =  menu_get_item();    
	$mlid = db_select('menu_links' , 'ml')->condition('ml.link_path' , $item['href'])->fields('ml' , array('mlid'))->execute()->fetchField();
	return $mlid;
}
function get_plid($nid){
	$item =  menu_get_item();    
	$plid = db_select('menu_links' , 'pl')->condition('pl.link_path' , $item['href'])->fields('pl' , array('plid'))->execute()->fetchField();
	return $plid;
}
function get_link_path($mlid){
	$result = db_query("SELECT link_path FROM menu_links WHERE mlid=".$mlid);
	foreach($result as $r){ $lp = $r->link_path;}
	return $lp;
}
function get_custom_menu($menu){
	$tree = menu_tree_page_data($menu);
	$m = menu_tree_output($tree);
	return $m;
}
function get_taxonomy_term_id_using_title_and_vocab($title, $vid){
	$tInfo = taxonomy_term_load_multiple(array(), array('name' => trim($title), 'vid' => $vid));
	foreach($tInfo as $t){ $tid = $t->tid;}
	return $tid;
}
function convert_bytes($b){
	$s = $b / 1024;
    if($s < 1024){
        $s = number_format($s, 2); $s .= ' KB';
    }else{ 
		$s = number_format($s / 1024, 2); $s .= ' MB'; 
	}
	return $s;
}
function convert_seconds($s){
	return sprintf( "%02.2d:%02.2d", floor( $s / 60 ), $s % 60 );
}
function get_youtube_vids($channel, $maxResults, $orderby = 'viewCount'){
	libxml_use_internal_errors(true);
	$user = 'http://gdata.youtube.com/feeds/api/users/'.$channel.'/uploads/?max-results='.$maxResults.'&orderby='.$orderby;
	$e = 0; $c = '<ul class="menu youtube-vids clearfix">';
	$xml = simplexml_load_file($user) or $e = 1;
	foreach($xml->entry as $entry){
	//get nodes in media: namespace for media information
		$media = $entry->children('http://search.yahoo.com/mrss/');
	//get title
		$title = $media->group->title;
	//get video player URL
		$attrs = $media->group->player->attributes();
		$watch = $attrs['url']; 
	//get video thumbnail
		$attrs = $media->group->thumbnail[0]->attributes();
		$thumbnail = $attrs['url']; 	
	//get <yt:duration> node for video length
		$yt = $media->children('http://gdata.youtube.com/schemas/2007');
		$attrs = $yt->duration->attributes();
		$length = convert_seconds($attrs['seconds']); 
	//get <yt:stats> node for viewer statistics
		$yt = $entry->children('http://gdata.youtube.com/schemas/2007');
		$attrs = $yt->statistics->attributes();
		$viewCount = $attrs['viewCount']; 
	//get <gd:rating> node for video ratings
		$gd = $entry->children('http://schemas.google.com/g/2005'); 
		if ($gd->rating) {
			$attrs = $gd->rating->attributes();
			$rating = $attrs['average']; 
		} else {
			$rating = 0; 
		}
	//Append content to list
		$c .= '<li><a href="'.$watch.'">'.$title.' ('.$length.')</a></li>';
	}
	$c .= '</ul>';
	return ($e == 0) ? $c : $e;
}

function formname_mail($key, &$message, $params) {

  $headers = array(
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/html; charset=UTF-8;',
    'Content-Transfer-Encoding' => '8Bit',
    'X-Mailer' => 'Drupal'
  );

  foreach ($headers as $key => $value) {
    $message['headers'][$key] = $value;
  }

  $message['subject'] = $params['subject'];
  $message['body'] = $params['body'];
}

function send_email($f){
  
  $to = 'gdthornber@gmail.com';
  $from = 'test@test.com';
  $subject = 'Test Mail';
  $body[] = 'Test mail body';
  $params = array(
    'body' => $body,
    'subject' => $subject,
    );
	
	if (drupal_mail($f, 'some_mail_key', $to, language_default(), $params, $from, TRUE))
    {
        drupal_set_message('Thanks, we will be in contact with more information soon.');    
    } else {
        drupal_set_message('Sorry, there was an error sending the mail. Please try again later');
    }
}

function formname_form($form, &$form_state){
	$form['name'] = array('#type' => 'textfield', '#title' => 'Your Name');
	$form['email'] = array('#type' => 'textfield', '#title' => 'Your E-Mail', '#required' => TRUE);
	$form['select'] = array('#type' => 'select', '#title' => 'Your Choice',
		'#empty_option' => '-- Please select --',
		'#options' => array(0 => 'Option1', 1 => 'Option2',)
	);
	$form['nachricht'] = array('#type' => 'textarea', '#title' => 'Your Message');
	$form['submit'] = array('#type' => 'submit', '#value' => 'Submit');
	return $form;
}

function formname_form_validate($form, &$form_state) { drupal_set_message('...an extra error');}

function formname_form_submit($form, &$form_state) {
	$name = $form_state['values']['name'];
	send_email('formname_form');
	$form_state['redirect'] = 'http://www.redirctme.here';
	drupal_set_message($messages,'Thanks for submitting the form');
}
?>