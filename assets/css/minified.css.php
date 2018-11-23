<?php
/**
 * Grab all individual stylesheets, concatenate
 * minify and compress
 */
header( 'Content-type: text/css' );
ob_start( 'compress' );

	function compress( $buffer )
	{
		/* remove comments */
    	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

    	/* remove tabs, spaces, newlines, etc. */
    	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

    	return $buffer;
	}

  	/* css files for compression */
  	include( 'workless.css' );
	include( 'scaffolding.css' );
	include( 'helpers.css' );
  	include( 'forms.css' );
	include( 'buttons.css' );
  	include( 'typography.css' );
  	include( 'application.css' );
ob_end_flush();