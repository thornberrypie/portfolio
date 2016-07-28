var startPage = 'home';
var navPos = {'nav-home':27, 'nav-work':95, 'nav-about':166, 'nav-contact':248};
var navBreaks = [62, 136, 204];
var navWidth = 287;
var navSpeed = 456;
var thumbSpeed = 555;
var siteImgWidth = 2132;
var acronymFadeSpeed = 666;
var emailName = '<a href="mailto:gdthornber@gmail.com" target="_blank">gdthornber';
var emailDomain = 'gmail.com</a>';
var phoneNumber = '+64 (0)21 0292 4529';
var fbAddress = '<a href="http://www.facebook.com/thornberrypie" target="_blank">facebook.com/thornberrypie</a>';
var acronyms = ['PHP','HTML','CSS','SQL','AJAX','XML','LAMP','SEO','OOP','MVC','JSON','LESS','CMS','REST','CDN','JS','URL','CURL','GUI','WYSIWYG','SOAP','AGILE','GUI','SASS','YAML','WWW','PSD','CLI','PDF','DNS','HTTP','API','RSS','MAMP'];
$(document).ready(function(){
//Preload images for "work" section
	var thumbs = new Image(); thumbs.src = '/images/thumbs-169x133-2015.jpg';
	var sites1 = new Image(); sites1.src = '/images/websites1y515.jpg';
	var sites2 = new Image(); sites2.src = '/images/websites2y515.jpg';
//Set up acronyms for home section
	setUpPage();
//Set up navigation slider
	$('#nav-slider').slider({
		min: 0,
		max: navWidth,
		step: 1,
		value: navPos['nav-'+startPage],
		range: "min",
		animate: true,
		stop: function(event, ui){
			var num = ui.value;
			stopDraggingNav(num);
		}
	});
//Animate logo on mouseover
	$('h1 a').mouseenter(function(){
		$(this).children('.big').stop().animate({'top':0}, 222);
	}).mouseleave(function(){
		$(this).children('.big').stop().animate({'top':'4px'}, 222);
	});
//Activate navigation slider and page scrolling when link is clicked
	$('nav ul a').click(function(e){
		e.preventDefault();
		var navActive = $('nav').attr('class');
		var navid = $(this).parents('li').attr('id');
		var pageid = navid.replace('nav-', '');
		animateNavPage(pageid);
	//Stop "work" animation and hide text
		leaveWorkArea();
	});
//Show site thumbnail on mouseover
	$('.work li').mouseenter(function(){
		$(this).addClass('over');
		animateThumb($(this), 'open');
	}).mouseleave(function(){
		$(this).removeClass('over');
		if(!$(this).hasClass('active')){
			animateThumb($(this), 'close');
		}
	});
//Show site info and bg when site thumbnail is clicked
	$('.work li').click(function(){
		var clicked = $(this);
		var bg = $('#sitebg');
		$('p.selection').hide();
		clicked.removeClass('over');
		$('.work li.active').each(function(){
			if($(this).attr('class') != clicked.attr('class')){
				animateThumb($(this), 'close');
			}
		});
	//Pause bg instead of changing if same item is clicked
		if(clicked.hasClass('active')){
			if(clicked.hasClass('paused')){
				clicked.removeClass('paused');
				animateBackground(bg);
			}else{
				bg.stop();
				clicked.addClass('paused');
			}
	//Change/show bg and text when first/ different item is clicked
		}else{
			var clickedClass = clicked.attr('class');
			$('.work li').removeClass('active').removeClass('paused');
		//Fade bg and change image if a different item is selected
			if(bg.hasClass('hidden')){
				bg.attr('class','').css('left',0).addClass(clickedClass+'-bg');
				$('#sitebg-wrap').css('display','none').fadeIn(999);
			}else{
				$('#sitebg-wrap').fadeOut(222, function(){
					bg.attr('class','').css('left',0).addClass(clickedClass+'-bg');
					$('#sitebg-wrap').fadeIn(222);
				});
			}
			clicked.addClass('active');
		//Show site description
			showSiteText(clicked);
		//Animate background image
			animateBackground(bg);
		//Animate to "work" page in case not there already
			animateNavPage('work');
		}
	}); //end $('.work li').click(function(){

	//Run function on resize
	var timeoutid;
	$(window).resize(function() {
		clearTimeout(timeoutid);
		timeoutid = setTimeout(doneResizing, 333);
	});
}); //end $(document).ready(function(){

/*--------------------------Functions------------------------------*/

function animateBackground(bg){
	var speed = siteImgWidth*10;
//Calculate speed to set using left value of bg if animation has been paused
	var leftVal = bg.css('left');
	leftVal = parseFloat(leftVal.replace('-', '').replace('px', ''));
	speed = (siteImgWidth - leftVal)*10;
	bg.stop().animate({'left':'-'+siteImgWidth+'px'}, speed, 'linear', function(){
		bg.css('left',0);
		animateBackground(bg);
	});
}

function animateNavPage(id){
	var navid = 'nav-'+id;
//Animate navigation
	$('.ui-slider-handle').animate({'left':navPos[navid]}, navSpeed, function(){
		$('nav').removeClass().addClass(navid);
		$('#nav-slider').slider({ value:navPos[navid] });
	});
//Activate page scrolling
	var page = $("article[class='"+id+"']");
	var pos = page.offset().top;
	scrollPage(pos);
}

//Animate thumbnail effects on mouseover/mouseout
function animateThumb(e, f){ //e=(obj) element, f=(string) function(open or close)
	var bg1 = e.children('.bg1');
	var bg2 = e.children('.bg2');
	var layer = e.children('.layer');
	var text = e.children('p');
	var bg1val = 0; var bg2val = 0;
	if(f == 'open'){
		bg1val = '-100%'; bg2val = '100%';
		layer.stop().fadeOut(thumbSpeed);
		text.stop().fadeOut(thumbSpeed);
	}else{
		layer.fadeIn(thumbSpeed);
		text.fadeIn(thumbSpeed);
	}
	bg1.stop().animate({'top':bg1val, 'left':bg1val}, thumbSpeed);
	bg2.stop().animate({'top':bg2val, 'left':bg2val}, thumbSpeed);
}

function doneResizing(){
	var activeItem = $('.work li.active');
	if(activeItem.length > 0){
		showSiteText(activeItem);
		activeItem.trigger('click');
	}
}

function leaveWorkArea(){
	if(!$('#sitebg').hasClass('hidden')){
		$('#sitebg-wrap').fadeOut(222, function(){
			$('#sitebg').attr('class','').css('left',0).addClass('hidden');
			$('.work li').removeClass('active').removeClass('paused');
			$('#sitebg-wrap').fadeIn(222);
		});
		$('#siteinfo').animate({'height':0}, 222, function(){
			$(this).html('').removeAttr('style');
		});
		animateThumb($('.work li.active'), 'close');
	}
}

function scrollPage(pos){
	var headerHeight = $('header').height();
	var newPos = pos - (headerHeight);
	$('html,body').animate({scrollTop: newPos}, navSpeed);
	//Detect change nav depending on scroll position when scrolling has ended

}

function setupContact(){
//Add information to contact area when activated
	$('.contact li span').click(function(){
		var liClass = $(this).parents('li').attr('class');
		var showHtml = '';
		switch(liClass){
			case 'con-em': showHtml = emailName+'@'+emailDomain; break;
			case 'con-ph': showHtml = phoneNumber; break;
			case 'con-fb': showHtml = fbAddress; break;
		}
		$(this).fadeOut(333, function(){
			$('.'+liClass+' em').html(showHtml).show(666);
		});
	});
}

function setUpPage(){
	var speed = acronymFadeSpeed;
	var fadeDif = speed/acronyms.length;
	var fadeDelay = 0;
//Add acronyms to DOM
	for(i=0; i < acronyms.length; i++){
		$('.home-right h3').append('<span class="a'+i+'">'+acronyms[i]+' </span>');
	}
//Scroll to start page
	animateNavPage(startPage);
//Fade in intro text
	$('.intro1').delay(1333).fadeIn(666, function(){
		$('.intro2').delay(999).fadeIn(666, function(){
		//Progressively fade acronyms in faster
			$('.home-right h3 span').each(function(){
				$(this).delay(fadeDelay).fadeIn(speed);
				speed = Math.round(speed-fadeDif);
				fadeDelay = fadeDelay+speed;
			});
		});
	});
	setupContact();
}

//Animate to correct height and show text when work item is clicked
function showSiteText(e){
	var siteinfo = $('#siteinfo');
	var siteInfoOrigHeight = siteinfo.height();
	if(siteInfoOrigHeight != 0) siteinfo.removeAttr('style');
	var info = e.children('.info').html();
	siteinfo.html(info);
	var siteInfoNewHeight = siteinfo.height();
	siteinfo.height(siteInfoOrigHeight);
	if(siteInfoOrigHeight == 0) siteinfo.css('display','block');
	siteinfo.stop().animate({'height':siteInfoNewHeight}, 333);
}

//Animate to nearest page when slider has stopped being dragged
function stopDraggingNav(num){
	var id = '';
	if(num < navBreaks[2]){
		if(num < navBreaks[1]){
			id = (num < navBreaks[0]) ? 'home' : 'work';
		}else{
			id = 'about';
		}
	}else{
		id = 'contact';
	}
	var pageid = (id=='') ? 'home' : id;
	animateNavPage(id);
}