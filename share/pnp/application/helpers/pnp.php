<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
*
* 
*/
class pnp_Core {

	public static function clean($string = FALSE){
	    if($string === FALSE){
	        return;
	    }

	    if (1 == get_magic_quotes_gpc()){
	       $string = stripslashes($string);
	    }
	    $string = preg_replace('/[ :\/\\\\]/', "_", $string);
	    return $string;
	
	}

} 