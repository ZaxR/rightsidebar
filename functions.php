<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function zax_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar 1',
		'id'            => 'sidebar-1',
		'description'   => '',
        	'class'         => '',
		'before_widget' => '<div class="panel panel-default">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="panel-heading">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => 'Home footer 1',
		'id'            => 'sidebar-2',
		'description'   => '',
        	'class'         => '',
		'before_widget' => '<div class="panel panel-default">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="panel-heading">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'zax_widgets_init' );
?>