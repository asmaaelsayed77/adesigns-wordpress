<!-- Footer -->
		
		<footer class="container-fluid text-center">

			<h5 style="color:white; padding-top: 10px;">It's time to connect with me!</h5>
			
			<div class="row m-auto">

				<?php  get_sidebar(); ?>
	
			</div><!-- row -->
			
		</footer>


	<!-- Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	<!-- parallax -->
	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@4.0.0/dist/simpleParallax.min.js"></script>

	<script>
		var image = document.getElementsByClassName('thumbnail');
		new simpleParallax(image);
	</script>
		<!--smooth scrolling -->
	<script>
		$(document).ready(function(){
		  // Add smooth scrolling to all links
		  $("a").on('click', function(event) {

		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
		  });
		});
	</script>

	<script>
		$(function() {
	    $('.quickflip-wrapper').quickFlip();
	});
	</script>

	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.easy_slides.js"></script>

	<script type="text/javascript">
		
		$('.slider').EasySlides({
	      'autoplay': true, 
	      'loop': true,
	      'timeout': 3000,
	      'show': 5, 
	      'vertical': false,  
	      'reverse': false, 
	      'touchevents': true, 
	      'delayaftershow': 300, 
	      'stepbystep': true, 
	      'startslide': 0,  
	      'beforeshow': function () {},
	      'aftershow': function () {},      
		});
	</script>
    
	<?php wp_footer(); ?>
	</body>
</html>
