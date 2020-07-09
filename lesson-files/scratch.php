<?php
ini_set( 'error_reporting', 0 );
if ( file_exists('inc/variables.php') ) {
    require_once( 'inc/variables.php' ); 
}

echo $title;