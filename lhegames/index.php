<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lhe Games | Games Store</title>
	<?php include "header.php"; ?>
	<!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
</head>

<body>
	<!--  -->
	<?php include "navi.php"; ?>
	<hr>
	<h2 class="text-left marginleft">Featured Games</h2>
	<div class="container mt-3">
		<div class="row">
			<div class="col-12">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleControls" data-slide-to="1"></li>
						<li data-target="#carouselExampleControls" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<a href="sekiro.php"><img class="d-block w-100" src="images/sekiro 1920x500.jpg"
									alt="sekiro-header"></a>
						</div>
						<div class="carousel-item">
							<a href="ffxiii.php"><img class="d-block w-100" src="images/ffxiii 1920x500.jpg"
									alt="ffxiii-header"></a>
						</div>
						<div class="carousel-item">
							<a href="skyrim.php"><img class="d-block w-100" src="images/skyrim 1920x500.jpg"
									alt="skyrim-header"></a>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<h2 class="text-left marginleft">Recommended Games for You</h2>
	<hr>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-4 pb-1 pb-md-0">
				<a href="aco.php">
					<div class="card">
						<img class="card-img-top" src="images/aco 460x215.jpg" alt="Card image cap">
						<div class="card-price">
							<h6>Assassin's Creed® Origins</h6>
							<div class="price">Rp 689 000</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 pb-1 pb-md-0">
				<a href="sotr.php">
					<div class="card">
						<img class="card-img-top" src="images/sotr 460x215.jpg" alt="Card image cap">
						<div class="card-price">
							<h6>Shadow of the Tomb Raider</h6>
							<div class="price">Rp 645 300</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 pb-1 pb-md-0">
				<a href="eso.php">
					<div class="card">
						<img class="card-img-top" src="images/eso 460x215.jpg" alt="Card image cap">
						<div class="card-price">
							<h6>The Elder Scrolls® Online</h6>
							<div class="price">Rp 266 000</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row text-center mt-4">
			<div class="col-md-4 pb-1 pb-md-0">
				<a href="fallout4.php">
					<div class="card">
						<img class="card-img-top" src="images/fallout4 460x215.jpg" alt="Card image cap">
						<div class="card-price">
							<h6>Fallout 4</h6>
							<div class="price">Rp 400 000</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 pb-1 pb-md-0">
				<a href="farcry5.php">
					<div class="card">
						<img class="card-img-top" src="images/farcry5 460x215.jpg" alt="Card image cap">
						<div class="card-price">
							<h6>Far Cry® 5</h6>
							<div class="price">Rp 689 000</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 pb-1 pb-md-0">
				<a href="witcher3.php">
					<div class="card">
						<img class="card-img-top" src="images/witcher3 460x215.jpg" alt="Card image cap">
						<div class="card-price">
							<h6>The Witcher® 3: Wild Hunt</h6>
							<div class="price">Rp 359 999</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<hr>
	<footer class="text-center">

		<div class="container">
			Copyright © <span class="tahun">Tahun</span> Ryan Nugraha Adhithama
		</div>
	</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.0.0.js"></script>
	<script src="js/date.js"></script>
	<script>
		var getHash = location.hash;
		if (getHash != '') {
			getHash = getHash.replace('#ref=', '')
			var r = window.confirm('use referal from ' + getHash + '?')
			if (r == true) {

			} else {
				location.hash = '';
			}
		}
	</script>
	<!--<script>var link = $('a[href]');
for(let i = 0; i < link.length; i++ ){
  if(link[i] != $('.navbar-brand')[0] | link[i] != $('.nav-link')[0]){
	 $('a[href]')[i].target = "_blank";
	 }
}</script>-->
</body>

</html>

<!-- Ryan 0046, Lutfi 0013, Royan 0044 STMIK WIDYA PRATAMA-->