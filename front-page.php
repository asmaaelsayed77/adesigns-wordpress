
<?php get_header(); ?>

		<!--header parallax-->
	
		<div class="container-fluid homepage">
			<div class="row">
			<section class="parallax">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/eye.jpg" class="thumbnail" alt="eye">
				<div class="content col-xs-3">
					<h1 style="color: white;">Design is a shade of colors</h1>
					<h4 style="color: white;"> What's your favorite one!</h4>
				<div class="container">
					<a href="#services"><button type="button" class="homebtn btn btn-primary btn-lg">Discover mine!</button></a>
				</div><!-- btn container -->
				</div><!-- content -->
			</section>
			</div>
		</div>

<br>
<br>
	<!-- Services -->
	<div class="container-fluid text-center mt-5 auto mb-5 pt-5 pb-5" id="services">
		<h1> Services </h1>
		<br>
		<div class="row">
			<div class="col-sm-4">
				<h4>Web  <i class="fas fa-globe" style="color:#167ffb;"></i> Design</h4>
			</div>	
			<div class="col-sm-4">
				<h4>Graphic  <i class="fas fa-paint-brush" style="color:#167ffb;"></i> Design</h4>
			</div>
			<div class="col-sm-4">
				<h4>Interactive  <i class="fas fa-video" style="color:#167ffb;"></i> Media</h4>
			</div>			
		</div><!-- row -->
	</div><!-- container -->

<br>
<br>

	<!--some info -->
	
		<div class="parallax2"></div>
			
<br>		

	<!-- Tetemonials -->
	<div class="container-fluid text-center mt-5 auto mb-5 pt-5 pb-5">
		<h1> Testimonials </h1> 
<br>
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  			<div class="carousel-inner">
  			  <div class="carousel-item active">
  			      <h4>"I had a great experience for my logo design"</h4>
  			  </div>
  			  <div class="carousel-item">
  			    <h4>"I highly recommend A Designs, Great work!"</h4>
  			  </div>
  			  <div class="carousel-item">
  			    <h4>"Affordable prices and great customer service experience"</h4>
  			  </div>
  			</div>
		</div>
	</div>
<br>

	<?php get_footer(); ?>