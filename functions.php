<?php

function register_my_menus() {
  register_nav_menus(
    array(
    		'navigation_menu_location' => __( 'Navigation menu location' )
     )
   );
 }
 
 add_action( 'init', 'register_my_menus' );

 ?>