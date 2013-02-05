<?php
	include 'module/header2.php';
	// include 'module/infographic-global.php';
?>
	<div class="container">
		<h2>DAFTAR LOT TERBARU :</h2>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#1">Semua</a></li>
			<li><a href="#2">Lot Terbuka</a></li>
		</ul>
		<div class="row">
			<div id="big-content" class="span9">
				<ul id="new-projects" class="thumbnails">
					<?php
						$i = 0;
						while ( $i <= 2) {
							include 'module/content-lot-sponsored.php';
							$i ++;
						}
					?>
				</ul>
				<ul id="new-projects" class="thumbnails">
					<?php
						$i = 0;
						while ( $i <= 8) {
							include 'module/content-lot.php';
							$i ++;
						}
					?>
				</ul>
				<?php include 'module/pagination.php'; ?>
			</div>
			<div id="sidebar" class="span3">
				<?php
					// include 'module/widget-sponsor-banner.php';
					include 'module/widget-list-project.php'; // jadi list project
					include 'module/widget-featured-relawan.php';
					include 'module/widget-filter-by-status.php';
				?>
			</div>
		</div>
	</div>
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>