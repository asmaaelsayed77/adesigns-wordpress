<!-- GET HEADER.PHP -->
<?php get_header(); ?>

<section class="clearfix">
    <div class="content">
    
    <!-- THE LOOP -->
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
        <div class="post">
            <h1>"<?php the_permalink(); ?>"><?php the_title(); ?></h1>
 
            <div class="entry">
                <!-- THE ACTUAL CONTENT OF THE POST -->
                <?php the_content(); ?>
 
                <!-- POST METADATA -->
                <h6 class="postmetadata">
                    Filed under <?php the_category(', ') ?> by <?php  the_author(); ?><br />
                    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                </h6>

                <!-- COMMENTS TEMPLATE TO DISPLAY AND CREATE COMMENTS-->
                <div class="comments-template">
                    <?php comments_template( '', true ); ?>
                </div>
 
            </div><!-- END ENTRY-->
        </div><!-- END POST -->
    <hr>
     
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    <!-- END OF THE LOOP -->
          
</div><!-- END DIV CONTENT -->
   
<!-- LOAD SIDEBAR -->
<?php get_sidebar(); ?>
   
</section>

<!-- LOAD FOOTER -->  
<?php get_footer(); ?>