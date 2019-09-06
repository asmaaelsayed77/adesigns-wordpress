<?php get_header(); ?>

		<!--header-->
	<header>
		<div class="container-fluid">
			<div class="row">
			<section class="parallax">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/my-pic.jpg" class="thumbnail" alt="myimage">
				<div class="content">
					<h1 style="color: white;">Just a little bit about me!</h1>
					<h4 style="color: white;"> Want to figure out more?</h4>
				<div class="container">
					<a href="#about"><button type="button" class="btn btn-primary btn-lg">Hit here!</button></a>
				</div><!-- btn container -->
				</div><!-- content -->
			</section>
			</div>
		</div>
	</header>

<br>
<br>
	<div class="container" id="about">
	<h4 style="color: #142f86; font-size: 1.8em; text-align: center; ">I design cutting-edge media that helps companies to deliver a compelling powerful message to their customers</h4>
	</div>
<br>
<br>

	<!-- card 1 -->
	<div class="container-fluid">
		<div class="row">
			
			<?php 
				$aboutme = array (
				    'category_name' => 'about-me',
				    'pagination' => false,
				    'posts_per_page' => '4',
				    'order' => 'ASC',
				    'orderby' => 'date'
				);
				$results = new WP_Query( $aboutme );
				 
				if ( $results->have_posts() ) {
				    while ( $results->have_posts() ) {
				    $results->the_post();
				?>

			<div class="card border-success m-auto col-lg-3" style="max-width: 18rem;">
	  			<div class="card-header bg-transparent border-success">
	  				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	  			</div>
	  			<div class="card-body text-success">
	  		  		<p class="card-text"><?php the_content(); ?></p>		
	  			</div>  		
			</div>

			<?php
			    }
			} else {
			     echo "<p>Please add Posts to Category: <em>About Me</em></p>";
			}
			    
// Restore original Post Data
wp_reset_postdata();
?>
			
		</div>
	</div>


<br>
<br>

<?php get_footer(); ?>
