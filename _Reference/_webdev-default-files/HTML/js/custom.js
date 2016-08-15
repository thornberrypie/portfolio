(function($){ $(document).ready(function() {
	
	function urlify(text) {
		var urlRegex = /(^|\s)((https?:\/\/)?[\w-]+(\.[\w-]+)+\.?(:\d+)?(\/\S*)?)/gi;
		return text.replace(urlRegex, function(url) {
			var prefix = 'http://';
			if(url.indexOf('https') != -1){
				url = url.replace('https://', '');
				prefix = 'https://';
			}
			if(url.indexOf('http') != -1){
				url = url.replace('http://', '');
			}
			return '<a href="'+prefix+$.trim(url)+'" target="_blank">'+url+'</a>';
		})
	}
}); })(jQuery);