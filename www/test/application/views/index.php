		<div id="main-content">
			<section id="promotion">
				<section class="change-slide">
					<figure id = "pre-slide"><img <?php echo 'src="'. base_url("./images/before.png"). '">' ?></figure>
				</section>
				<section id="ads">
					<figure class="img-container">							<a href="#"><img class="home-slides" <?php echo 'src="'. base_url("./images/ads1.jpg"). '">' ?></a>
						<a href="#"><img class="home-slides" <?php echo 'src="'. base_url("./images/ads2.jpg"). '">' ?></a>
						<a href="#"><img class="home-slides" <?php echo 'src="'. base_url("./images/ads3.jpg"). '">' ?></a>
						</figure>
				</section>
				<section class="change-slide">
					<figure id = "next-slide"><img <?php echo 'src="'. base_url("./images/next.png"). '">' ?></figure>
				</section>
			</section>
			
			<section id="items" <?php 
						if (!isset($_SESSION["email"])) {
							echo 'style="display:none;';
						} ?>>
				<h2>|| recommendation</h2>
				<article class="recom">
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					
				</article>
				<article class="recom">
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					
				</article>
				<article class="recom">
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					<figure class="recom-item">
						<img <?php echo 'src="'. base_url("./images/lipstick.jpg"). '">' ?>
						<article class="item-description">
							<p>There is a short item description, which is written by seller</p>
						</article>
					</figure>
					
				</article>
			</section>
			
		</div>