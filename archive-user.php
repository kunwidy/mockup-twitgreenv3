<?php
	include 'module/header2.php';
?>
	<div class="container">
		<h2>DAFTAR USER</h2>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#1">Semua</a></li>
			<li><a href="#2">Investor</a></li>
			<li><a href="#2">Relawan</a></li>
			<li><a href="#2">Petani</a></li>
			<li><a href="#2">Pemilik Lahan</a></li>
		</ul>
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
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>