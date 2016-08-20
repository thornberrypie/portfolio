function activateGuitarHover(){
	var link = $('#guitar-link');
	link.mouseenter(function(){
		fadeInGatSection();
	}).mouseleave(function(){
		fadeOutGatSection();
	});
}

function fadeInGatSection(){
	var ranNum = getRandomArbitrary(1, numPlayers);
	//Times ranNum by width of pic to get random background position
	var xPos = (ranNum * playerWidth) * -1;
	console.log(xPos);
	//$('#gat').css('background-position', xPos+' 0').addClass('active');
}

function fadeOutGatSection(){
	$('#gat').removeClass('active');
}

function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

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
	var page = $('article.'+id);
	var pos = page.offset().top;
	scrollPage(pos);
}

//Animate thumbnail effects on mouseover/mouseout
function animateThumb(e, f){ //e=(obj) element, f=(string) function(open or close)
	var bg1 = e.find('.bg1');
	var bg2 = e.find('.bg2');
	var layer = e.find('.layer');
	var text = e.find('p');
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
	var fadeDif = speed / $('.acronyms span').length;
	var fadeDelay = 0;
	var acronymBox = $('.home-right .acronyms');
//Add acronyms to DOM
	/*for(i=0; i < acronyms.length; i++){
		acronymBox.append('<span class="a'+i+'">'+acronyms[i]+' </span>');
	}*/
//Scroll to start page
	animateNavPage(startPage);
//Fade in intro text
	$('.intro1').delay(1333).fadeIn(666, function(){
		$('.intro2').delay(999).fadeIn(666, function(){
		//Progressively fade acronyms in faster
			acronymBox.find('span').each(function(){
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
	if(siteInfoOrigHeight !== 0) siteinfo.removeAttr('style');
	var info = e.find('.info').html();
	siteinfo.html(info);
	var siteInfoNewHeight = siteinfo.height();
	siteinfo.height(siteInfoOrigHeight);
	if(siteInfoOrigHeight === 0) siteinfo.css('display','block');
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
	var pageid = (id==='') ? 'home' : id;
	animateNavPage(id);
}
