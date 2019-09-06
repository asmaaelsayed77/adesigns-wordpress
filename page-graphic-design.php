<?php get_header(); ?>

		<!--header parallax-->
	
		<div class="container-fluid homepage">
			<div class="row">
			<section class="parallax">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/branding.jpg" class="thumbnail" alt="eye">
				<div class="content col-xs-3">
					<h1 style="color: white;">Taking identity to the next level with branding</h1>
					<h4 style="color: white;"> check samples</h4>
				
				</div><!-- content -->
			</section>
			</div>
		</div>

<br>
<br>
		<!-- my work -->
		<div class="container">
			<h4 style="color: #3c1767;">Some of my work</h4>

					<div class="slider slider_clock">
			        	
<!-- start custom loop wp query here -->
<?php 
					$criteria = array (
					    'category_name' => 'graphic-portfolio'
					   
					);
					$results = new WP_Query( $criteria );
					 
					if ( $results->have_posts() ) {
					    while ( $results->have_posts() ) {
					    $results->the_post();
					?>
					 
					<div><?php the_post_thumbnail(); ?></div>
					    
					<?php
					    }
					} else {
					     echo "<p>No post found</p>";
					}
					    
					// Restore original Post Data
					wp_reset_postdata();
					?>

			        	<div class="next_button"></div>
			        	<div class="prev_button"></div>
			    	</div>

		</div>
		
		<?php get_footer(); ?>