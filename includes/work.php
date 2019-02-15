<?php include 'data/work-data.php' ?>

<article class="work article">
	<div id="sitebg-wrap">
		<div id="sitebg" class="hidden"></div>
	</div>
	<div class="inner">
		<h3 class="selection">Some of my work over the last decade:</h3>
		<div id="siteinfo"></div>
		<ul class="clearfix">
      <?php
      $index = 0;
      foreach($projects as $key => $item) {
        echo '
        <li class="site site'.($index+1).' '.$key.'">
          <div class="box">
            <div class="text">'.$item['text'].'</div>
            <span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
            <div class="info">
              <strong>
                <a class="siteTitle" href="'.$item['href'].'" target="_blank" title="Visit Website">'.$item['url'].'</a>
              </strong> - '.$item['content'].'
            </div>
          </div>
          <div class="year">'.$item['year'].'</div>
        </li>';

        $index++;
      }
      ?>
      <?php /*
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
					<div class="text"><h3>Kiwirail</h3><h3>Silverstripe CMS</h3><h4>Pure.css / BEM</h4></div>
					<span class="layer"></span><span class="img"></span><span class="button"></span><span class="bg1"></span><span class="bg2"></span>
					<div class="info"><strong><a class="siteTitle" href="//www.greatjourneysofnz.co.nz" target="_blank" title="Visit Website">www.greatjourneysofnz.co.nz</a></strong> - From November 2016 and for the next 2 years I worked with the fantastic team at <a href="//dna.co.nz">DNA</a>. For this project I built the vast majority of the front-end using BEM methodology and the Pure.css framework whilst greatly increasing my knowledge of Silverstripe's back-end. Daily meetings with the client ensured that the process went very smoothly and was a big win for everyone involved.</div>
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
      */ ?>
		</ul>
		<h3 class="disclaimer">All sites above between 2010-2018 contain PHP and jQuery.</h3>
	</div>
</article>
