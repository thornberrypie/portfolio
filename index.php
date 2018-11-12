<?php include 'includes/functions.php' ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-41497075-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-41497075-1');
	</script>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/png" href="/images/gt-profile-196.png">
	<link rel="apple-touch-icon-precomposed" href="/images/gt-profile-180.png">
	<link rel="stylesheet" media="all" href="/dist/css/styles.css">
	<link rel="stylesheet" media="print" href="/dist/css/print.css">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro|Reem+Kufi" rel="stylesheet">
	<!--[if IE]>
		<link rel="shortcut icon" href="favicon.ico">
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="/app/js/vendor/html5shiv.js"></script><link rel="stylesheet" media="all" href="/dist/css/ie.css" />
	<![endif]-->
	<title>Graeme Thornber: Web Developer, Musician, Actor, Adventurer</title>
	<meta name="author" content="Graeme Thornber">
	<meta name="description" content="Web Developer & App Engineer, Musician, Actor, Adventurer">
	<meta property="og:title" content="Graeme Thornber">
	<meta property="og:type" content="website">
	<meta property="og:image" content="http://thornberrypie.com/images/gt-gat.jpg">
	<meta property="og:url" content="http://thornberrypie.com">
	<meta property="og:description" content="Web Developer & App Engineer, Musician, Actor, Adventurer">
</head>
<body>
	<header class="header">
		<div class="inner clearfix">
			<div class="hgroup">
				<h1><a href="/"><span class="big">T</span><span>hornberry</span><span class="big">P</span><span>ie</span><span class="suffix">.com</span></a></h1>
				<h2>Portfolio of Web Developer Graeme&nbsp;Thornber</h2>
			</div>
			<div class="nav-wrapper">
				<nav class="nav-home">
					<div id="nav-slider"></div>
					<ul class="clearfix">
						<li id="nav-home"><a>Home</a></li>
						<li id="nav-work"><a>Work</a></li>
						<li id="nav-about"><a>About</a></li>
						<li id="nav-contact"><a>Contact</a></li>
					</ul>
				</nav>
			</div>
			<noscript><br /><br /><br />{Please enable Javascript}</noscript>
		</div>
	</header>
	<article class="home article">
		<div class="inner clearfix">
			<div class="home-right">
				<p class="intro"><span class="intro1">My work involves many acronyms,</span> <span class="intro2">such as:</span></p>
				<h2 class="acronyms">
					<?php outputAcronyms() ?>
					<div class="acronimg"></div>
				</h2>
			</div>
			<div class="home-left">
                <p>Hi, I'm Graeme. I build modern web applications writing code in a variety of open-source languages including but not limited to:</p>
                    <ul>
                        <li><b>HTML5</b>: with a focus on SEO, accessibility and web standards using a variety of templating engines and frameworks.</li>
                        <li><b>CSS3</b>: mobile-first, cross-browser, cross-platform with SASS & LESS and newer techniques like Flexbox and CSS Grid.</li>
                        <li><b>Javascript</b>: expert jQuery skills as well as ES6, Node.js and modern frameworks like Express, ReactJS, Angular and Vue.js</li>
                        <li><b>PHP & MySQL</b>: CMS and MVC frameworks like Silverstripe, Wordpress, Symfony, Laravel, Drupal, Bolt, Zend and Magento</li>
                    </ul>
            </div>
			<!--<aside class="currentStatus">
				<h4>One of my latest home projects uses AngularJS, Google&nbsp;Maps, and a database from the NZ Ministry&nbsp;of&nbsp;Education. <a href="//schoolz.nz" target="_blank">View it here</a>.<span class="extra">...and a blast from the past: <a target="_blank" href="//placetrace.thornberrypie.com">my first PHP site</a>, now one decade&nbsp;old.</span></h4>
			</aside>-->
		</div>
	</article>
	<article class="work article">
		<div id="sitebg-wrap">
			<div id="sitebg" class="hidden"></div>
		</div>
		<div class="inner">
			<p class="selection">Some of my work over the last decade:</p>
			<div id="siteinfo"></div>
			<ul class="clearfix">
                <li class="site site1 ffs">
					<div class="box">
						<div class="text"><h4>MBIE GCCRS</h4><h3>Silverstripe CMS</h3><h4>CWP / Solr</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="https://www.gccrs.govt.nz/" target="_blank" title="Visit Website">www.gccrs.govt.nz</a></strong> - With a timeframe of 6 weeks from briefing to production, this was a great example of how a finely-tuned multi-functional Agile team can deliver great results with a very tight timeframe and limited budget. Working with <a href="https://dna.co.nz/" target="_blank">DNA</a> and <a href="https://www.mbie.govt.nz/" target="_blank">MBIE</a> I built this site using a codebase we inherited from another agency and that I incrementally improved during builds for <a href="https://www.tradingstandards.govt.nz/" target="_blank">tradingstandards.govt.nz</a> and <a href="https://www.pikeriverrecovery.govt.nz/" target="_blank">pikeriverrecovery.govt.nz</a></div>
                    </div>
                    <div class="year">2018</div>
				</li>
				<li class="site site2 kiwirail">
					<div class="box">
						<div class="text"><h3>Kiwirail</h3><h3>Silverstrpe CMS</h3><h4>Pure.css / BEM</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.greatjourneysofnz.co.nz" target="_blank" title="Visit Website">www.greatjourneysofnz.co.nz</a></strong> - Since November 2016 I've been working with the fantastic team at <a href="//dna.co.nz">DNA</a>. For this project I built the vast majority of the front-end using BEM methodology and the Pure.css framework whilst greatly increasing my knowledge of Silverstripe's back-end. Daily meetings with the client ensured that the process went very smoothly and was a big win for everyone involved.</div>
					</div>
                    <div class="year">2017</div>
				</li>
				<li class="site site3 oysterbay">
					<div class="box">
						<div class="text"><h3>Oyster Bay Wines</h3><h3>Concrete5 / Gulp</h3><h4>Parallax / SASS</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//oysterbaywines.com" target="_blank" title="Visit Website">www.oysterbaywines.com</a></strong> - In 2016 I worked with digital agency <a target="_blank" href="//www.spitfire.co.nz">Spitfire</a> and boutique designer <a href="http://www.pandpdashwood.com/" target="_blank">Paola Dashwood</a> to build this charming little site using the open source CMS <a href="http://www.concrete5.org/" target="_blank">Concrete5</a>. Despite several setbacks and challenges along the way, the site was delivered on time with all of the desired features due to a great collaborative effort and perseverance to deliver a top quality product.</div>
                    </div>
                    <div class="year">2016</div>
				</li>
				<li class="site site4 roche">
					<div class="box">
						<div class="text"><h3>Roche NZ</h3><h3>Concrete5 / Grunt</h3><h4>3 SASS theme builds</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.roche.co.nz" target="_blank" title="Visit Website">www.roche.co.nz</a></strong> - For the duration of 2016 I worked with one of Auckland's top digital agencies <a target="_blank" href="//www.spitfire.co.nz">Spitfire</a> to deliver a suite of Swiss pharmaceutical sites: <a href="//www.roche.co.nz" target="_blank">roche.co.nz</a>, <a href="//www.cancerinfo.co.nz" target="_blank">cancerinfo.co.nz</a> and <a href="//www.roche-plus.co.nz" target="_blank">roche-plus.co.nz</a>. These were crafted in PHP CMS Concrete5 with custom-made modules and templates. During my time at <a target="_blank" href="//www.spitfire.co.nz">Spitfire</a> I've also had the opportunity to do extensive work on one of New Zealand's most popular recipe websites: <a target="_blank" href="//www.chelsea.co.nz">Chelsea Sugar NZ</a> and their Aussie affiliates <a target="_blank" href="//www.csrsugar.com.au">CSR Sugar Australia</a>.</div>
                    </div>
                    <div class="year">2016</div>
				</li>

				<li class="site site5 stoptober">
					<div class="box">
						<div class="text"><h4>Stoptober NZ</h4><h3>Node.js / Express</h3><h4>Stylus / JADE / Mongo</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.ash.org.nz" target="_blank" title="Visit Website">www.stoptober.nz</a><em> (No longer online)</em></strong> - Stoptober is an annual campaign to help people stop smoking, and in August 2015 after quitting smoking myself a month earlier I built the web application that runs the 2015 campaign. Working with <a target="_blank" href="//www.touchcast.co.nz/">Touchcast</a>, I built both front and back end using the most cutting-edge web technologies: Node, Express 4, JADE, Stylus, and Mongoose with MongoDB.</div>
                    </div>
                    <div class="year">2015</div>
				</li>
				<li class="site site6 mc">
					<div class="box">
						<div class="text"><h4>Meredith Connell</h4><h3>Drupal / LESS</h3><h4>Front-End / Isotope</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.mc.co.nz" target="_blank" title="Visit Website">www.mc.co.nz</a></strong> - Early in 2015 I built the front end for NZ law firm Meredith Connell's new Drupal website with the talented folks at <a href="//www.insightcreative.co.nz" target="_blank">Insight&nbsp;Creative</a>. Although the back-end developer was in Wellington and I was working in Auckland, we collaborated daily and were able to deliver the polished product one week ahead of schedule using modern technologies such as git, beanstalk and of course the good old telephone.</div>
                    </div>
                    <div class="year">2014</div>
				</li>
				<li class="site site7 coats">
					<div class="box">
						<div class="text"><h3>Coats Design</h3><h4>Wordpress / SASS</h4><h4>Bootstrap 3 / Masonry</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//coatsdesign.co.nz/" target="_blank" title="Visit Website">www.coatsdesign.co.nz</a></strong> - Early in 2014, I worked with <a href="//www.tinsoldier.co.nz">Tin&nbsp;Soldier</a> to create a custom Wordpress site for Coats Design. For this I built a responsive HTML5 theme with Bootstrap 3, compiled plenty of CSS using SASS, and fine-tuned the UI by extending Javascript with jQuery and Isotope/Masonry.</div>
                    </div>
                    <div class="year">2014</div>
				</li>
				<!--<li class="site6 liftoff">
					<div class="box">
						<div class="text"><h3>Lift Off</h3><h5>HTML5 / CSS3 / jQuery</h5><h4>Git / JIRA / Bitbucket</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//liftoff.co.nz/" target="_blank" title="Visit Website">www.liftoff.co.nz</a></strong> - In March and April of 2014 I worked with <a href="//idesignmedia.co.nz/" target="_blank">iDesign&nbsp;Media</a> to create one of New Zealand's first Equity Crowdfunding platforms. My role in this project was to produce the majority of the front-end code and integrate this into iDesign's custom framework. During this process, I worked mostly from home and collaborated with iDesign using Git.</div>
					</div>
				</li>-->
				<li class="site site8 sff">
					<div class="box">
						<div class="text"><h3>Silver Fern Farms</h3><h4>Silverstripe / SASS</h4><h4>Mobile Front-End</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.silverfernfarms.co.nz" target="_blank" title="Visit Website">www.silverfernfarms.co.nz</a></strong> - During a 3 month contract with <a href="//www.colensobbdo.co.nz" target="_blank">Colenso&nbsp;BBDO</a>, I skinned the mobile version of this website as well as working on several small campaigns and projects for clients such as BNZ (<a href="//www.powerofadollarchallenge.co.nz/" target="_blank">Power&nbsp;of&nbsp;a&nbsp;Dollar</a> campaign), Burger&nbsp;King (Outlaw&nbsp;campaign), Fonterra (iPad app for Memphis&nbsp;Meltdown), Frucor (migration of <a href="//www.v.co.nz" target="_blank">V&nbsp;website</a>) and Volkswagen (email newsletter templates).</div>
                    </div>
                    <div class="year">2013</div>
				</li>
				<li class="site site9 scopevisio">
					<div class="box">
						<div class="text"><h3>Scopevisio</h3><h4>Drupal / SOAP / XML</h4><h4>JSON / Web Services</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.scopevisio.com" target="_blank" title="Visit Website">www.scopevisio.com</a></strong> - During my time in Germany, I was employed by Scopevisio&nbsp;AG and spent a large amount of my time there building their company website with Drupal. With a minimal amount of plugins being used, I wrote most of the code myself and much of the content is generated using XML files and through Web Services using SOAP and JSON. During my time at Scopevisio, I really felt that I had made the transition from intermediate to senior developer.</div>
                    </div>
                    <div class="year">2012</div>
				</li>
				<li class="site site10 nzso">
					<div class="box">
						<div class="text"><h3>NZSO</h3><h4>Wordpress CMS</h4><h4>Front-End / Git</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.nzso.co.nz" target="_blank" title="Visit Website">www.nzso.co.nz</a></strong> - The final site I worked on with <a href="//www.thechurch.co.nz" target="_blank">The&nbsp;Church</a> and the last site I built which was non-responsive, I wrote the entire front-end in the form of a Wordpress theme for the New Zealand Symphony Orchestra website. During my time at The&nbsp;Church I also built sites for <a href="//www.toyota.co.nz/">Toyota</a>, <a href="//www.rjslicorice.co.nz" target="_blank">RJ's&nbsp;Licorice</a>, <a href="//www.ngatitoa.iwi.nz" target="_blank">Ngati&nbsp;Toa Rangatira</a>, <a href="//www.toiwhakaari.ac.nz" target="_blank">Toi&nbsp;Whakaari</a> and <a href="//www.fingertapps.com" target="_blank">Fingertapps</a>.</div>
                    </div>
                    <div class="year">2011</div>
				</li>
				<!--<li class="site10 toptobottom">
					<div class="box">
						<div class="text"><h3>Toyota</h3><h4>Google Maps API v3</h4><h4>Wordpress theme build</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.toptobottom.co.nz" target="_blank" title="Visit Website">www.toptobottom.co.nz</a><em> (No longer online)</em></strong> - A mashup of Wordpress and Google&nbsp;Maps, designed by Saatchi&nbsp;&amp;&nbsp;Saatchi for a Toyota campaign that involved Marc&nbsp;Ellis driving the length of New&nbsp;Zealand in a 60 year old FJ&nbsp;Cruiser. In 2010 <a href="//www.thechurch.co.nz" target="_blank">The&nbsp;Church</a> were approached by Aim Proximity who had picked up this job but hadn't the manpower to meet the strict deadline. I eagerly rose to the challenge and single-handedly wrote 90% of the site during the summer holidays then passed it back to the agency to complete the finishing touches and meet the deadline to coincide with the TV, radio and print campaigns.</div>
					</div>
				</li>-->
				<li class="site site11 hito">
					<div class="box">
						<div class="text"><h3>HITO</h3><h3>Wordpress CMS</h3><h4>Front-End / UX</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.hito.org.nz" target="_blank" title="Visit Website">www.hito.org.nz</a></strong> - Working with amazing designers at <a href="//www.thechurch.co.nz" target="_blank">The&nbsp;Church</a> in Wellington, I produced a custom Wordpress theme for the NZ Hairdressing Industry Training Organisation. I worked closely with the client on a daily basis through the whole process and helped transform into web their many ideas and desires. I was the sole developer working on this project, writing the front-end and server-side code.</div>
                    </div>
                    <div class="year">2010</div>
				</li>
				<li class="site site12 dryitonline">
					<div class="box">
						<div class="text"><h3>DryitOnline</h3><h4>E-Commerce SaaS</h4><h4>Front-End / ASP.NET</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a href="http://www.dryitonline.co.nz/" target="_blank" title="Visit Website">DryItOnline</a></strong> - As well as this site, in 2009 and 2010 I wrote the entire front-end for over 50 websites with <a href="http://www.solutionists.co.nz" target="_blank">Solutionists</a> and integrated these into their custom .NET e-commerce CMS framework. I also scripted over 100 HTML EDMs in Campaign Monitor for <a href="http://www.overlandfootwear.co.nz" target="_blank" title="Visit Website">Overland Footwear</a>, <a href="http://www.barkersonline.co.nz" target="_blank">Barkers</a> and others. Most of the sites I build for clients such as Overland, Huffer Store, Deuce Shoes have since been replaced but a couple that remain unchanged are <a href="http://www.bigmanclothing.co.nz/" target="_blank">Big&nbsp;Man&nbsp;Clothing</a>, and <a href="http://www.publichealthworkforce.org.nz/" target="_blank">NZ&nbsp;Ministry&nbsp;of&nbsp;Health</a>.</div>
                    </div>
                    <div class="year">2009</div>
				</li>
			</ul>
			<p class="disclaimer"><em>All sites above contain PHP, HTML, CSS and Javascript&nbsp;with&nbsp;jQuery.</em></p>
		</div>
	</article>
	<article class="about article">
		<div class="inner clearfix">
            <p>I was born in England, grew up in Auckland and have also lived in Wellington, London and Bonn, Germany. I love playing <a href="https://www.youtube.com/watch?v=KcXUD8sjd4Y" target="_blank">guitar</a>, singing and acting. In 2018 I joined Whitianga's Offbeat Theatre to act in my 5th play, and co-founded a local improv theatre group.</p>
            <p>Due to my interest in both maps and education, in 2016 I built <a href="http://schoolz.nz" target="_blank">this site with AngularJS</a> as an aid to house-hunting in New Zealand. My next venture is to become a skilled mobile app developer, I currently have two apps in development using React Native.</p>
            <h5>Latest website launched October 2018:</h5>
            <p class="latest">
                <strong>Greater Christchurch Claims Resolution Service</strong><br>
                <a href="https://www.gccrs.govt.nz/" target="_blank">www.gccrs.govt.nz</a>
            </p>
        </div>
	</article>
	<article class="contact article">
		<div class="inner">
			<aside class="clearfix">
				<div class="download clearfix">
					<p class="heading">Download CV</p>
					<a class="pdf" href="assets/CV/2018/Graeme-Thornber-CV-Nov-2018.pdf" target="_blank" title="PDF format"></a>
					<a class="ms" href="assets/CV/2018/Graeme-Thornber-CV-Nov-2018.docx.zip" target="_blank" title="Microsoft Word format"></a>
				</div>
			</aside>
			<ul class="deats">
				<li class="con-em">
					<label class="heading">Write me:</label>
					<span>View e-mail address</span>
					<em>&nbsp;</em>
				</li>
				<li class="con-ph">
					<label class="heading">Call me:</label>
					<span>View phone number</span>
					<em>&nbsp;</em>
				</li>
				<li class="con-so clearfix">
					<label class="heading">Stalk me:</label>
					<ul class="social">
						<li class="link facebook">
							<a href="//www.facebook.com/thornberrypie" target="_blank">facebook.com/thornberrypie</a>
						</li>
						<li class="link linkedin">
							<a href="//www.linkedin.com/in/thornberrypie" target="_blank">linkedin.com/in/thornberrypie</a>
						</li>
						<li class="link github">
							<a href="//github.com/ThornberryPie" target="_blank">github.com/thornberrypie</a>
						</li>
						<li class="link stackoverflow">
							<a href="//stackoverflow.com/users/3352080/thornberrypie" target="_blank">stackoverflow.com/users/3352080/thornberrypie</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="contact-bg"></div>
		</div>
	</article>
	<footer class="footer">
		<p>&copy; <?php echo date('Y') ?> Thornberry Pie. All Rights Reserved</p>
	</footer>
	<script src="/dist/js/app.min.js"></script>
</body>
