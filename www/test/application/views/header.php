<!DOCTYPE html>
<html>
	<head>
		<title>EASYGET</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css');?>">

		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

		<?php 
			if (isset($_SESSION['active_time'])) {
				if (time() - $_SESSION['active_time'] > 90) {
					unset($_SESSION['email'], $_SESSION['active_time']);
					redirect(base_url(). "home/");
					exit;
				} else {
					$_SESSION['active_time'] = time();
				}
			} 
		?>

	</head>
	<body>
		<header>
			<figure id="logo">
				<a <?php echo 'href="'.base_url().'home/"'?>><img <?php echo 'src="'. base_url("./images/logo.png"). '">' ?></a>
			</figure>
			<nav>
				<ul id="nav-left">
					<li id="motor-drop">
	                    <a class = "dropbtn" href="#">Motors</a>
	                    <div class="drop-content">
	                        <h3><a href = "#">View All Motors >></a></h3>
	                        <ul>
	                            <li><a href="#">Cars</a></li>
	                            <li><a href="#">Motorbike & Scooters</a></li>
	                            <li><a href="#">Vans</a></li>
	                            <li><a href="#">Trucks</a></li>
	                            <li><a href="#">Accessories</a></li>
	                            <li><a href="#">Others</a></li>
	                        </ul>
	                    </div> 
	                </li>
	                <li id="furn-drop">
	                    <a class = "dropbtn" href="#">Home</a>
	                    <div class="drop-content">
	                        <h3><a href = "#">View All Home >></a></h3>
	                        <ul>
	                            <li><a href="#">Bathroom</a></li>
	                            <li><a href="#">Bedroom</a></li>
	                            <li><a href="#">Cooking</a></li>
	                            <li><a href="#">Living room</a></li>
	                            <li><a href="#">Laundry</a></li>
	                            <li><a href="#">Others</a></li>
	                        </ul>
	                    </div> 
	                </li>
	                <li id="electronic-drop">
	                    <a class = "dropbtn" href="#">Electronic</a>
	                    <div class="drop-content">
	                        <h3><a href = "#">View All Electronics >></a></h3>
	                        <ul>
	                            <li><a href="#">Computers & Tablets</a></li>
	                            <li><a href="#">Tvs</a></li>
	                            <li><a href="#">headphones</a></li>
	                            <li><a href="#">Moblie phones</a></li>
	                            <li><a href="#">Gaming</a></li>
	                            <li><a href="#">Others</a></li>
	                        </ul>
	                    </div>
	                </li>
					<li><a class = "dropbtn" href="#">OTHERS</a></li>
					<li><?php echo '<a class = "dropbtn" href="'.base_url().'profile/">ABOUT</a></li>' ?>
					<li>
						<?php 
						if (isset($_SESSION["email"])) {
							echo '<a class = "dropbtn" href="'.base_url().'login/logout">LOGOUT</a></li>';
						} else {
							echo '<a class = "dropbtn" href="'.base_url().'login/">LOGIN</a></li>';
						}
						?>
						
				</ul>
				<ul id="nav-right">
					<li>
						<form method="GET" action = "<?php echo base_url();?>search/result">
							<input type="text" name="search" id="search">
						</form>
					</li>
					<li><a <?php echo 'href="'.base_url().'wishlist/"'?>>
						<figure id="cart">
							<img <?php echo 'src="'. base_url("./images/smart-cart.png"). '">' ?>
						</figure>
					</a></li>
				</ul>
			</nav>
		</header>
		