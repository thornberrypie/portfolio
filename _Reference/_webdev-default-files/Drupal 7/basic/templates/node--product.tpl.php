<?php $p = get_product_content($content); ?>
<div class="product-content"><?php print'
	<h2><a href="'.$p['href'].'">'.$title.'</a></h2>
	<div class="body-desc">'.$content['body'][0]['#markup'].'</div>
	<div class="p_img"><a href="'.$p['href'].'"><img src="'.$p['img'].'" alt="" /></a></div>
	<div class="p_price">$'.$p['price'].'</div>
	<div class="p_sku">'.$p['sku'].'</div>
	<div class="p_info">
		<span class="p_">Length: '.$p['length'].'</span>
		<span class="p_">Width: '.$p['width'].'</span>
		<span class="p_">Height: '.$p['height'].'</span>
		<span class="p_">Size Units: '.$p['size_units'].'</span>
		<span class="p_">Weight: '.$p['weight'].'</span>
		<span class="p_">Weight Units: '.$p['weight_units'].'</span>
	</div>
	<div class="p_actions">'.$p['cart'].'</div>'; ?>
</div>