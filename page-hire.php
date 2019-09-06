<?php get_header(); ?>

		<!--header-->
		<div class="container-fluid">
			<div class="row">
			<section class="parallax">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/hire.jpg" class="thumbnail" alt="hire">
				<div class="content">
					<h1 style="color: white;">Creativity starts here</h1>
					<h4 style="color: white;"> send me your request</h4>
				<div class="container">
					<a href="#form"><button type="button" class="btn btn-primary btn-lg">Start here</button></a>
				</div><!-- btn container -->
				</div><!-- content -->
			</section>
			</div>
		</div>

<br>
<br>
	<div class="container-fluid"> <!--the whole one  -->
		<div class="row"><!--  whole row -->
			<div class="col-lg-8"> <!--form col  -->
				<div class="container" id="form">
				<h4 style="color: #142f86; font-size: 1.8em; text-align: center; ">please fill out the form below with a brief description about your project and I will contact you as soon as possible</h4>
				</div>
		<br>
		<br>
				<!--Form-->
				<form>
				  <div class="form-row container m-auto">
				    <div class="col-lg-5 m-auto">
				      <input type="text" class="form-control" placeholder="First name">
				    </div>
				    <div class="col-lg-5 m-auto">
				      <input type="text" class="form-control" placeholder="Last name">
				    </div>
				  </div>
				  <br>
				  <div class="form-row">
				  	<div class="col-lg-10 m-auto">
				      <input type="text" class="form-control" placeholder="Your message">
				    </div>
				  </div>
				  <br>
				  <div class="col-lg-10 text-center">
				  	<a href="mailto:elsa0070@algonquinlive.com"><button type="submit" class="btn btn-primary mb-2">Submit</button></a>
				  </div>

				</form>
			</div> <!--form col end -->
			
			<div class="col-lg-4"><!-- side bar -->			
				<div class="list-group"><!-- list group!-->
				  

<?php 
// define specifics for what type of content and/or what order you need
// find more here: https://codex.wordpress.org/Class_Reference/WP_Query
$args = array (
	'post_type'	=>	'page',
	'post_name__in' => ['interactive-media', 'graphic-design', 'web-design']
);

// run the custom query with the supplied arguments from above
$myquery = new WP_Query( $args );

// if there is information that match that criteria, run a loop
if ( $myquery->have_posts() ) {
	while ( $myquery->have_posts() ) {
		$myquery->the_post();
?>

<!-- build your template here using HTML and template tags -->



				  <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1"><?php the_title(); ?></h5>
				    </div>
				    <?php //the_content(); ?>
				  </a>

<?php
	}
} else {
	// if there was nothing found, display an error message
    echo "<p>Error: Content not found.</p>";
}

// resets the loop data so you can either go back to using your one allowed standard loop
// or build more custom queries. You must use this to reset the loop after each custom
// query you use or things will break!
wp_reset_postdata();
?>
				
				</div><!-- list group!-->			
			</div><!-- side bar end -->
		</div><!--  whole row -->
	</div> <!--the whole one  -->
	
<br>
<br>

	
	<?php get_footer(); ?>