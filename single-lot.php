<?php
	include 'module/header2.php';
	
?>
<div class="container">
	<div class="row">
		<div id="big-content" class="span9">
			<div class="featured-project">
				<div id="text-featured">
					<h1 class="large center">
						<a href="#">Neglasari 48</a>
					</h1>
				</div>
				<div class="row">
					<div class="span5">
						<img src="upload/G15.jpg"/>
					</div>
					<div class="span4">
						<div class="center">
							<iframe  width= "300" height="223" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=202307682006862239086.0004ad0c32699912aca45&amp;ie=UTF8&amp;t=m&amp;ll=-6.991071,107.627435&amp;spn=0,0&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=202307682006862239086.0004ad0c32699912aca45&amp;ie=UTF8&amp;t=m&amp;ll=-6.991071,107.627435&amp;spn=0,0&amp;source=embed" style="color:#0000FF;text-align:left">rumah abi</a> in a larger map</small>
						</div>
						<div class="social-plugin">
							<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://twitgreen.com" data-via="kunw" data-related="kunw" data-hashtags="twitgreen" data-dnt="true">Tweet</a>
							
							<div class="fb-like" data-href="http://twitgreen.com" data-send="false" data-layout="button_count" data-width="250" data-show-faces="false"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span9">
						<p class="des">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span9">	
					<div class="tabbable">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#1" data-toggle="tab">Semua Cerita</a></li>
							<li><a href="#2" data-toggle="tab">Catatan</a></li>
							<li><a href="#2" data-toggle="tab">Galeri</a></li>
						</ul>
					</div>
					<?php include 'module/all-story.php'; ?>
				</div>
			</div>
		</div>
		
		<div id="sidebar" class="span3">
			<?php
				include 'module/widget-sponsor-banner.php'; // kalo udah ada sponsor
				include 'module/widget-lot-statistic.php';
				include 'module/widget-lot-document.php';
			?>			
		</div>
	</div>
</div>
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>