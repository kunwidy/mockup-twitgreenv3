<?php
	include 'module/header2.php';
?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>DAFTAR USER</h2>
				<div class="tabbable">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#1">Semua</a></li>
						<li><a href="#2">Investor</a></li>
						<li><a href="#2">Relawan</a></li>
						<li><a href="#2">Petani</a></li>
						<li><a href="#2">Pemilik Lahan</a></li>
					</ul>
				</div>


				
				<ul id="list-user" class="thumbnails">
					<?php
						$i = 0;
						while ( $i <= 30) {
							include 'module/content-user.php';
							$i ++;
						}
					?>
				</ul>
				
				<?php include 'module/pagination.php'; ?>
			</div>
		
	</div>
	
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>