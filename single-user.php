<?php
	include 'module/header2.php';
?>
	<div class="container">
		<div class="row">
			<div class="">
				<h2>Daftar Lot Sigit Sedayu</h2>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#1" ><i class="icon-globe"></i>Relawan</a></li>
					<li><a href="#2" ><i class="icon-lightbulb"></i> Investor</a></li>
				</ul>
			</div>
			<div class="row">
				<div class="span9">
					<ul id="new-projects" class="thumbnails">
						<?php
							$i = 0;
							while ( $i <= 5) {
								include 'module/content-lot-as-user.php';
								$i ++;
							}
						?>
					</ul>
					
					<?php include 'module/pagination.php'; ?>
				</div>
				<div class="span3">
					<?php include 'module/user-info.php';?>
					<div id="sidebar">
						<?php include 'module/widget-filter-by-status.php';?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>