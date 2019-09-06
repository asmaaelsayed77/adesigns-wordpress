<?php get_header(); ?>

		<!--header slides-->
		<div class="bd-example">
		  	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		    </ol>
		    <div class="carousel-inner">
		       	<div class="carousel-item active">
		        	<img src="<?php bloginfo( 'template_url' ); ?>/images/monitor.jpg" class="d-block w-100" alt="monitor">
		        <div class="carousel-caption d-none d-md-block">
		          	<h2 style="color:white;">Responsive websites</h2>
		            <p style="text-shadow: 2px 2px 4px #000000;">When design meets code...The magic starts!</p>
		        </div>
		      	</div>
		    <div class="carousel-item">
		        <img src="<?php bloginfo( 'template_url' ); ?>/images/web.jpg" class="d-block w-100" alt="web">
		        <div class="carousel-caption d-none d-md-block">		          
		        </div>
		    </div>
		      <div class="carousel-item">
		        <img src="<?php bloginfo( 'template_url' ); ?>/images/web2.jpg" class="d-block w-100" alt="web2">
		        <div class="carousel-caption d-none d-md-block">
		            <h2>Cool...eh!</h2>
		        </div>
		      	</div>
		    </div>
		    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		      	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		      	<span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		      	<span class="carousel-control-next-icon" aria-hidden="true"></span>
		      	<span class="sr-only">Next</span>
		    </a>
		  	</div>
		</div>

<br>
<br>
	<div class="container web-brand">
		<h4 style="color: #142f86; font-size: 1.8em; text-align: center; ">When it comes to web design, a creative code must blend with a beautiful design</h4>
	</div>
<br>
<br>

	<!--my work-->
		<div class="card-group"><!-- The whole cards -->

<!-- start custom loop wp query here -->
<?php 
					$criteria = array (
					    'category_name' => 'web-portfolio'
					   
					);
					$results = new WP_Query( $criteria );
					 
					if ( $results->have_posts() ) {
					    while ( $results->have_posts() ) {
					    $results->the_post();
					?>
					 

		  	<div class="card">
			    <?php the_post_thumbnail(); ?>
			    <div class="card-body">
			        <h5 class="card-title"><?php the_title(); ?></h5>
			        <p class="card-text"><?php the_content(); ?></p>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php the_ID(); ?>">
					  VIEW MORE
					</button>
			    </div>
		  	</div>

			<!-- Modal 1 -->
			<div class="modal fade" id="exampleModal<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
					    
					<?php
					    }
					} else {
					     echo "<p>No post found</p>";
					}
					    
					// Restore original Post Data
					wp_reset_postdata();
					?>
					
		</div><!-- The whole cards -->

<br>
<br>
	
	<?php get_footer(); ?>