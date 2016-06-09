  <!--right-->

<div class="col-sm-3">
        <h2>Side</h2>

            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            		<?php dynamic_sidebar( 'sidebar-1' ); ?>
            	</div><!-- #primary-sidebar -->
            <?php endif; ?>
        <hr>

        <div class="panel panel-default">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.</div>
        </div>
        <hr>
  </div>
  
  <!--/right-->