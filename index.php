<?php include 'includes/functions.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/png" href="images/gt-profile-196.png">
	<link rel="apple-touch-icon-precomposed" href="images/gt-profile-180.png">
	<link rel="stylesheet" media="all" href="build/index.min.css">
	<link rel="stylesheet" media="print" href="css/print.css">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro|Reem+Kufi" rel="stylesheet">
	<!--[if IE]>
		<link rel="shortcut icon" href="favicon.ico">
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script><link rel="stylesheet" media="all" href="css/ie.css" />
	<![endif]-->
	<title>Graeme Thornber: Kiwi Web Expert</title>
	<meta name="author" content="Thornberry Pie">
	<meta name="description" content="Portfolio of Auckland Web Developer Graeme Thornber: Front-end expert and PHP CMS specialist." />
	<meta property="og:title" content="Graeme Thornber: Kiwi Web Expert" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="//graemethornber.com/images/gt-gat.jpg" />
	<meta property="og:url" content="//graemethornber.com" />
	<meta property="og:description" content="Portfolio of Auckland Web Developer Graeme Thornber: Front-end expert and PHP CMS specialist." />
</head>
<body>
	<header class="header">
		<div class="inner clearfix">
			<div class="hgroup">
				<h1><a href="/"><span class="big">G</span><span>raeme</span> <span class="big">T</span><span>hornber</span></a></h1>
				<h2>Web Developer based in Whitianga, NZ</h2>
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
				<div id="gat"></div>
			</div>
			<div class="home-left">
				<p>I'm an Open-source Web Developer with a firm arsenal of Digital Web skills and over a decade of industry experience creating Web Applications in New Zealand and Europe.</p>
				<p>I've worked with several Digital Agencies and corporates in Auckland, Wellington and Bonn, Germany for clients such as Barkers, BNZ, Burger King, Chelsea Sugar, Delegat, Deutsche Telekom, Fonterra, Frucor, Huffer, Kiwirail, Meredith Connell, Methven, Overland Footwear, Roche, Toyota, Spark and&nbsp;Volkswagen.
				<p>I stand out amongst developers due to my social nature, ability to communicate effectively, experience acting, singing and <a id="guitar-link" href="//youtube.graemethornber.com" target="_blank">playing guitar</a>.</p>
			</div>
			<!--<aside class="currentStatus">
				<h4>One of my latest home projects uses AngularJS, Google&nbsp;Maps, and a database from the NZ Ministry&nbsp;of&nbsp;Education. <a href="//schools.graemethornber.com" target="_blank">View it here</a>.<span class="extra">...and a blast from the past: <a target="_blank" href="//placetrace.graemethornber.com">my first PHP site</a>, now one decade&nbsp;old.</span></h4>
			</aside>-->
		</div>
	</article>
	<article class="work article">
		<div id="sitebg-wrap">
			<div id="sitebg" class="hidden"></div>
		</div>
		<div class="inner">
			<p class="selection">A reverse chronology of my work from the past few years:</p>
			<div id="siteinfo"></div>
			<ul class="clearfix">
				<li class="site1 kiwirail">
					<div class="box">
						<div class="text"><h3>Kiwirail</h3><h3>Silverstrpe CMS</h3><h4>Pure.css / BEM</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.greatjourneysofnz.co.nz" target="_blank" title="Visit Website">www.greatjourneysofnz.co.nz</a></strong> - Since November 2016 I've been working with the fantastic team at <a href="//dna.co.nz">DNA</a>. For this project I built the vast majority of the front-end using BEM methodology and the Pure.css framework whilst greatly increasing my knowledge of Silverstripe's back-end. Daily meetings with the client ensured that the process went very smoothly and was a big win for everyone involved.</div>
					</div>
				</li>
				<li class="site2 oysterbay">
					<div class="box">
						<div class="text"><h3>Oyster Bay Wines</h3><h3>Concrete5 / Gulp</h3><h4>Parallax / SASS</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//oysterbaywines.com" target="_blank" title="Visit Website">www.oysterbaywines.com</a></strong> - In 2016 I worked with digital agency <a target="_blank" href="//www.spitfire.co.nz">Spitfire</a> and boutique designer <a href="http://www.pandpdashwood.com/" target="_blank">Paola Dashwood</a> to build this charming little site using the open source CMS <a href="http://www.concrete5.org/" target="_blank">Concrete5</a>. Despite several setbacks and challenges along the way, the site was delivered on time with all of the desired features due to a great collaborative effort and perseverance to deliver a top quality product.</div>
					</div>
				</li>
				<li class="site3 roche">
					<div class="box">
						<div class="text"><h3>Roche NZ</h3><h3>Concrete5 / Grunt</h3><h4>3 SASS theme builds</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.roche.co.nz" target="_blank" title="Visit Website">www.roche.co.nz</a></strong> - For the duration of 2016 I worked with one of Auckland's top digital agencies <a target="_blank" href="//www.spitfire.co.nz">Spitfire</a> to deliver a suite of sites for Swiss pharmaceuticals: <a href="//www.roche.co.nz" target="_blank">roche.co.nz</a>, <a href="//www.cancerinfo.co.nz" target="_blank">cancerinfo.co.nz</a> and <a href="//www.roche-plus.co.nz" target="_blank">roche-plus.co.nz</a>. These sites were crafted in PHP CMS Concrete5 with custom-made modules and templates. During my time at <a target="_blank" href="//www.spitfire.co.nz">Spitfire</a> I've also had the opportunity to do extensive work on one of New Zealand's most popular recipe websites: <a target="_blank" href="//www.chelsea.co.nz">Chelsea Sugar NZ</a> and their Aussie affiliates <a target="_blank" href="//www.csrsugar.com.au">CSR Sugar Australia</a>.</div>
					</div>
				</li>
				<li class="site4 ffs">
					<div class="box">
						<div class="text"><h4>Fonterra Foodservice</h4><h3>Bolt CMS / Twig</h3><h4>Bootstrap / LESS / Git</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.fonterrafoodservice.co.nz" target="_blank" title="Visit Website">www.fonterrafoodservice.co.nz</a></strong> - In late 2015 I collaborated with <a target="_blank" href="//www.satellitemedia.co.nz/">Satellite Media</a> to build Fonterra's new Foodservice website. It's' built with a sophisticated CMS called <a href="//bolt.cm/" target="_blank">Bolt</a> and contains some delicious recipes!. During my time at <a target="_blank" href="//www.satellitemedia.co.nz/">Satellite</a> I also had the opportunity to work on <a target="_blank" href="//www.betterliving.co.nz/">www.betterliving.co.nz</a></div>
					</div>
				</li>
				<li class="site5 stoptober">
					<div class="box">
						<div class="text"><h4>Stoptober NZ</h4><h3>Node.js / Express</h3><h4>Stylus / JADE / Mongo</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.ash.org.nz" target="_blank" title="Visit Website">www.stoptober.nz</a><em> (No longer online)</em></strong> - Stoptober is an annual campaign to help people stop smoking, and in August 2015 after quitting smoking myself a month earlier I built the web application that runs the 2015 campaign. Working with <a target="_blank" href="//www.touchcast.co.nz/">Touchcast</a>, I built both front and back end using the most cutting-edge web technologies: Node, Express 4, JADE, Stylus, and Mongoose with MongoDB.</div>
					</div>
				</li>
				<li class="site6 mc">
					<div class="box">
						<div class="text"><h4>Meredith Connell</h4><h3>Drupal / LESS</h3><h4>Front-End / Isotope</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.mc.co.nz" target="_blank" title="Visit Website">www.mc.co.nz</a></strong> - Early in 2015 I built the front end for NZ law firm Meredith Connell's new Drupal website with the talented folks at <a href="//www.insightcreative.co.nz" target="_blank">Insight&nbsp;Creative</a>. Although the back-end developer was in Wellington and I was working in Auckland, we collaborated daily and were able to deliver the polished product one week ahead of schedule using modern technologies such as git, beanstalk and of course the good old telephone.</div>
					</div>
				</li>
				<li class="site7 coats">
					<div class="box">
						<div class="text"><h3>Coats Design</h3><h4>Wordpress / SASS</h4><h4>Bootstrap 3 / Masonry</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//coatsdesign.co.nz/" target="_blank" title="Visit Website">www.coatsdesign.co.nz</a></strong> - Early in 2014, I worked with <a href="//www.tinsoldier.co.nz">Tin&nbsp;Soldier</a> to create a custom Wordpress site for Coats Design. For this I built a responsive HTML5 theme with Bootstrap 3, compiled plenty of CSS using SASS, and fine-tuned the UI by extending Javascript with jQuery and Isotope/Masonry.</div>
					</div>
				</li>
				<!--<li class="site6 liftoff">
					<div class="box">
						<div class="text"><h3>Lift Off</h3><h5>HTML5 / CSS3 / jQuery</h5><h4>Git / JIRA / Bitbucket</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//liftoff.co.nz/" target="_blank" title="Visit Website">www.liftoff.co.nz</a></strong> - In March and April of 2014 I worked with <a href="//idesignmedia.co.nz/" target="_blank">iDesign&nbsp;Media</a> to create one of New Zealand's first Equity Crowdfunding platforms. My role in this project was to produce the majority of the front-end code and integrate this into iDesign's custom framework. During this process, I worked mostly from home and collaborated with iDesign using Git.</div>
					</div>
				</li>-->
				<li class="site8 sff">
					<div class="box">
						<div class="text"><h3>Silver Fern Farms</h3><h4>Silverstripe / SASS</h4><h4>Mobile Front-End</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.silverfernfarms.co.nz" target="_blank" title="Visit Website">www.silverfernfarms.co.nz</a></strong> - During a 3 month contract with <a href="//www.colensobbdo.co.nz" target="_blank">Colenso&nbsp;BBDO</a>, I skinned the mobile version of this website as well as working on several small campaigns and projects for clients such as BNZ (<a href="//www.powerofadollarchallenge.co.nz/" target="_blank">Power&nbsp;of&nbsp;a&nbsp;Dollar</a> campaign), Burger&nbsp;King (Outlaw&nbsp;campaign), Fonterra (iPad app for Memphis&nbsp;Meltdown), Frucor (migration of <a href="//www.v.co.nz" target="_blank">V&nbsp;website</a>) and Volkswagen (email newsletter templates).</div>
					</div>
				</li>
				<li class="site9 scopevisio">
					<div class="box">
						<div class="text"><h3>Scopevisio</h3><h4>Drupal / SOAP / XML</h4><h4>JSON / Web Services</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.scopevisio.com" target="_blank" title="Visit Website">www.scopevisio.com</a></strong> - During my time in Germany, I was employed by Scopevisio&nbsp;AG and spent a large amount of my time there building their company website with Drupal 8. With a minimal amount of plugins being used, I wrote most of the code myself and much of the content is generated using XML files and through Web Services using SOAP and JSON. During my time at Scopevisio, I really felt that I had made the transition from intermediate to senior developer.</div>
					</div>
				</li>
				<li class="site10 nzso">
					<div class="box">
						<div class="text"><h3>NZSO</h3><h4>Wordpress CMS</h4><h4>Front-End / Git</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.nzso.co.nz" target="_blank" title="Visit Website">www.nzso.co.nz</a></strong> - The final site I worked on with <a href="//www.thechurch.co.nz" target="_blank">The&nbsp;Church</a> and the last site I built which was non-responsive, I wrote the entire front-end in the form of a Wordpress theme for the New Zealand Symphony Orchestra website. During my time at The&nbsp;Church I also built sites for <a href="//www.toyota.co.nz/">Toyota</a>, <a href="//www.rjslicorice.co.nz" target="_blank">RJ's&nbsp;Licorice</a>, <a href="//www.ngatitoa.iwi.nz" target="_blank">Ngati&nbsp;Toa Rangatira</a>, <a href="//www.toiwhakaari.ac.nz" target="_blank">Toi&nbsp;Whakaari</a> and <a href="//www.fingertapps.com" target="_blank">Fingertapps</a>.</div>
					</div>
				</li>
				<!--<li class="site10 toptobottom">
					<div class="box">
						<div class="text"><h3>Toyota</h3><h4>Google Maps API v3</h4><h4>Wordpress theme build</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.toptobottom.co.nz" target="_blank" title="Visit Website">www.toptobottom.co.nz</a><em> (No longer online)</em></strong> - A mashup of Wordpress and Google&nbsp;Maps, designed by Saatchi&nbsp;&amp;&nbsp;Saatchi for a Toyota campaign that involved Marc&nbsp;Ellis driving the length of New&nbsp;Zealand in a 60 year old FJ&nbsp;Cruiser. In 2010 <a href="//www.thechurch.co.nz" target="_blank">The&nbsp;Church</a> were approached by Aim Proximity who had picked up this job but hadn't the manpower to meet the strict deadline. I eagerly rose to the challenge and single-handedly wrote 90% of the site during the summer holidays then passed it back to the agency to complete the finishing touches and meet the deadline to coincide with the TV, radio and print campaigns.</div>
					</div>
				</li>-->
				<li class="site11 hito">
					<div class="box">
						<div class="text"><h3>HITO</h3><h3>Wordpress CMS</h3><h4>Front-End / UX</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a class="siteTitle" href="//www.hito.org.nz" target="_blank" title="Visit Website">www.hito.org.nz</a></strong> - Working with amazing designers at <a href="//www.thechurch.co.nz" target="_blank">The&nbsp;Church</a> in Wellington, I produced a custom Wordpress theme for the NZ Hairdressing Industry Training Organisation. I worked closely with the client on a daily basis through the whole process and helped transform into web their many ideas and desires. I was the sole devoloper working on this project, writing the front-end and server-side code.</div>
					</div>
				</li>
				<li class="site12 dryitonline">
					<div class="box">
						<div class="text"><h3>DryitOnline</h3><h4>E-Commerce SaaS</h4><h4>Front-End / ASP.NET</h4></div>
						<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
						<div class="info"><strong><a href="http://www.dryitonline.co.nz/" target="_blank" title="Visit Website">DryItOnline</a></strong> - As well as this site, in 2009 and 2010 I wrote the entire front-end for over 50 websites with <a href="http://www.solutionists.co.nz" target="_blank">Solutionists</a> and integrated these into their custom .NET e-commerce CMS framework. I also scripted over 100 HTML EDMs in Campaign Monitor for <a href="http://www.overlandfootwear.co.nz" target="_blank" title="Visit Website">Overland Footwear</a>, <a href="http://www.barkersonline.co.nz" target="_blank">Barkers</a> and others. Most of the sites I build for clients such as Overland, Huffer Store, Deuce Shoes have since been replaced but a couple that remain unchanged are <a href="http://www.bigmanclothing.co.nz/" target="_blank">Big&nbsp;Man&nbsp;Clothing</a>, and <a href="http://www.publichealthworkforce.org.nz/" target="_blank">NZ&nbsp;Ministry&nbsp;of&nbsp;Health</a>.</div>
					</div>
				</li>
			</ul>
			<p class="disclaimer"><em>All sites above contain PHP, HTML, CSS and Javascript&nbsp;with&nbsp;jQuery.</em></p>
		</div>
	</article>
	<article class="about article">
		<div class="inner clearfix">
			<!--<h3>A bit about me...</h3>-->
			<p>Originally from England, now based in the Coromandel, I grew up in Auckland and have also lived in Wellington, London, and Bonn,&nbsp;Germany.</p>
			<p class="tright">After finishing my studies at Howick College, I worked in hospitality for several years before receiving my Diploma in Web Development from <strike>Natcoll</strike>... <strike>Yoobee</strike>... Logical? in&nbsp;2006.</p>
			<p>Since then I have worked in a variety of capacities with digital agencies, corporates and startups in all aspects of producing modern web applications built using fancy tech like AngularJS, Apache, concrete5, CSS3, Drupal, Git, Grunt, Gulp, HTML5, Javascript, Joomla, jQuery, MySQL, Node.js and PHP, Silverstripe and&nbsp;Wordpress.</p>
			<p class="tright">Being a huge music fan I play guitar and as many other instruments as I can get my hands on. I also enjoy travelling, swimming, fishing, cooking and lucid&nbsp;dreaming.</p>
			<p><a href="//schools.graemethornber.com" target="_blank">My latest personal project</a> was built as an aid to house-hunting in NZ and uses AngularJS with Google Maps.</p>
			<?php /*<div class="suburbs hidden">Arch Hill, Glenfield, Grafton, Howick, Morningside, Mt Eden, Musick Point, New Lynn, Pakuranga, Ponsonby, Red Hill, Sunnynook, Torbay, Totara&nbsp;Vale</div>*/ ?>
		</div>
	</article>
	<article class="contact article">
		<div class="inner">
			<aside class="clearfix">
				<div class="download clearfix">
					<p class="heading">Download CV</p>
					<a class="pdf" href="assets/CV/2017/Graeme-Thornber-CV2017.pdf" target="_blank" title="PDF format"></a>
					<a class="ms" href="assets/CV/2017/Graeme-Thornber-CV2017-word.zip" target="_blank" title="Microsoft Word format"></a>
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
	<script src="build/main.min.js"></script>
	<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M59LS4"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-M59LS4');</script>
	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-41497075-1', 'graemethornber.com');
		ga('send', 'pageview');
	</script>
</body>
