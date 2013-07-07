<?php

if ( !empty( $_GET['domain'] ) ) {
	
	$domain = $_GET['domain'];
	
	$extensions = array( '.com', '.net', '.org' );
	$www = "/www./";
	
	$str = '/' . str_replace( '.', '\\.', join('|', $extensions ) ) . '/';
	$thedomain = preg_replace( $str, '', $domain );
	
	$regdomain = "/$thedomain./";
	$extension = preg_replace( $regdomain, '', $domain );
	$extension = preg_replace( $www, '', $extension );
	
	header( 'Location: https://billing.servercrate.com/cart.php?sld='.$thedomain.'&tld=.'.$extension.'&a=add&pid=7');

}

else header( 'Location: index.php' ) ;

?>