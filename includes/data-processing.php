<?php
/**
 * Created by PhpStorm.
 * User: Robert Wilde
 * Date: 23/04/2014
 * Time: 12:36 PM
 */

/*
 * DATA PROCESSING
 * =======================================================
 */

/**
 * Error Logging
 */
if ( ! function_exists( '_log' ) ) {
	function _log( $message ) {
		if ( WP_DEBUG === TRUE ) {
			if ( is_array( $message ) || is_object( $message ) ) {
				error_log( print_r( $message, TRUE ) );
			} else {
				error_log( $message );
			}
		}
	}
}
