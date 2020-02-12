<?php

/**
 * Ask for input, but make it hidden.
 */
function ask_hidden( $prompt ) {
	echo $prompt;

	echo "\033[30;40m";  // black text on black background
	$input = fgets( STDIN );
	echo "\033[0m";      // reset

	return rtrim( $input, "\n" );
}

$pass = ask_hidden( 'pass: ' );
var_dump( $pass );