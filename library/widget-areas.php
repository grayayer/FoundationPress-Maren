<?php

function foundationpress_sidebar_widgets() {
  register_sidebar(array(
      'id' => 'sidebar-widgets',
      'name' => __('Sidebar widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
  ));

  register_sidebar(array(
      'id' => 'footer-widgets-first',
      'name' => __('Footer widget first', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="medium-3 hide-for-small-only columns widget %2$s first" >',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'      
  ));

  register_sidebar(array(
      'id' => 'footer-widgets-middle',
      'name' => __('Footer widget middle', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'      
  ));

  register_sidebar(array(
      'id' => 'footer-widgets-last',
      'name' => __('Footer widget last', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="medium-4 large-4 large-offset-1 columns widget %2$s last">',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'      
  ));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );

?>