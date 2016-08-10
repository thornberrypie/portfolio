<?php
//Make any form messages global for use in template files
$msgs = ($messages) ? $messages : '';
define('FORM_MESSAGES', $msgs);
?>
<header class="main clearfix">
	<div id="logo">
		<?php if ($logo): ?>
		  <a href="<?php print $front_page; ?>" title="<?php print $site_name.' logo'; ?>">
			<img src="<?php print $logo; ?>" alt="<?php print $site_name.' logo'; ?>" />
		  </a>
		<?php endif; ?>
	</div>
	<div id="navigation">
		<?php if ($page['navigation'] || $main_menu): ?>
			<?php print theme('links__system_main_menu', array(
			  'links' => $main_menu,
			  'attributes' => array(
				'id' => 'main-menu',
				'class' => array('menu'),
			  ),
			)); ?>
			<?php print render($page['navigation']); ?>
		<?php endif; ?>
	</div>
	<div id="admin-menu">
		<?php print theme('links__system_secondary_menu', array(
		  'links' => $secondary_menu,
		  'attributes' => array(
			'id' => 'admin-links',
			'class' => array('menu'),
		  ),
		)); ?>
	</div>
</header>
<section class="main">
	<div id="breadcrumb"><?php print $breadcrumb; ?></div>
	<div id="main-content" class="clearfix">
		<div id="sidebar">
			<?php print render($page['sidebar_first']); ?>
			<?php print render($page['sidebar_second']); ?>
		</div>
		<div id="content">
			<?php print render($page['content']); ?>
		</div>
	</div>
	
</section>
<footer class="main clearfix">
	<?php print render($page['footer']); ?>
</footer>


    
