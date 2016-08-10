var wp_ajaxloc = '/sites/all/themes/scopevisio/webservice/get-blog-posts.php';
$.getJSON(wp_ajaxloc+'?numposts=4', function(data) {
	var content = '';
	$.each(data, function(key, val) {
		var c = jQuery.parseJSON(val);
		$.each(c, function(k, v) {
			content += '<div class="feed">';
			content += '<h3><a href="'+v.url+'">'+v.title+'</a></h3>';
			content += '</div>';
		});
	});
	$('#home-left #wp-feed').html(content);
});