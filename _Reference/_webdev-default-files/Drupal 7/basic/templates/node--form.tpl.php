<h1><?php print $title; ?></h1>
<div id="page-content">
<?php //print render($content['body']);
//print $content['body'][0]['#markup'];
print render($content);
//print render(block_get_blocks_by_region('customblock')); ?>
<?php
print FORM_MESSAGES;
print render($theForm);
?>
</div>