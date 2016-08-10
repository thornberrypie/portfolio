var url = 'json.php';
$.getJSON(url, function(data) {
	var content = '<ul>';
	$.each(data, function(key, val) {
		content += '<li id="item-'+key+'">'+val+'</li>';
	});
	content += '</ul>';
	$('body').html(content);
});