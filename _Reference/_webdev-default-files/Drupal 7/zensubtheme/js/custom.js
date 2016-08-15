(function ($) { $(document).ready(function() {

});
//-----------------Functions--------------------------------
function getCleanURL(s, c){
	var r = s.replace(/[ ?,&.\\\/:;=@\[\]+*'"(){}%$§!´`|<>~]/g, c);
	r = r.replace(/ä/g, 'ae').replace(/ö/g, 'oe').replace(/ü/g, 'ue').replace(/ß/g, 'ss');
	return r;
}

})(jQuery);