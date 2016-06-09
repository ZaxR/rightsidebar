<?php get_header(); ?>
<div class="container"> <!--change to container-fluid for full width body instead of centered page-->
  
  <!--left-->

  <div class="col-sm-9">
    <div class="row">
      <div class="col-xs-12">
     			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
			?>
      </div>
    </div>
  </div>
  
  <!--/left-->

<?php get_sidebar(); ?>

</div><!--/container-fluid-->

<?php get_footer(); ?>