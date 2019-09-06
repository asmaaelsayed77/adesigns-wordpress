<?php get_header(); ?>

		<!-- carousel slider -->
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="<?php bloginfo( 'template_url' ); ?>/images/eyemachine.jpg" class="d-block w-100" alt="eyemachine">
		    </div>
		    <div class="carousel-item">
		      <img src="<?php bloginfo( 'template_url' ); ?>/images/moment-record.jpg" class="d-block w-100" alt="moment">
		    </div>		  
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

<br>
<br>
<br>
<br>
				<!--my work-->
		<div class="container video">
		  	<h4 style="color: #3c1767;">Some of my work</h4>
		<div class="row">

	  	
	  		<!-- start custom loop wp query here -->
<?php 
					$criteria = array (
					    'category_name' => 'interactive-portfolio'
					   
					);
					$results = new WP_Query( $criteria );
					 
					if ( $results->have_posts() ) {
					    while ( $results->have_posts() ) {
					    $results->the_post();
					?>
	    	<div class="embed-responsive embed-responsive-16by9 col-lg-4 m-auto">
	    		<?php the_content(); ?>
	    		</div>
<?php
					    }
					} else {
					     echo "<p>No post found</p>";
					}
					    
					// Restore original Post Data
					wp_reset_postdata();
					?>
	  	

		</div><!-- row-->
		</div><!-- container-->
<br>
<br>
		<?php get_footer(); ?>