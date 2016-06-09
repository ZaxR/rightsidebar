</div><!-- #content -->
	
			<?php
				$copyright 			= get_theme_mod( 'copyright_textbox');
				$copyright_flag = get_theme_mod( 'copyright_flag' );
				$copyright_link	= get_theme_mod( 'copyright_link' );
				if( $copyright_flag ) {
					printf( '<a href="%s">%s</a>', esc_url( $copyright_link ), $copyright );
				}else{
					echo $copyright;
				}
			?>
			<span class="sep"> | </span>
				<?php printf( __( 'WordPress Theme by <a href="%s" target="_blank">%s</a>', 'Zax' ), esc_url( 'http://zaxrosenberg.com/' ), 'Zax Rosenberg'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
	</body>
</html>
