(function($) {
	/**
	 * Throw errors, for "unsafe" actions, and bad code
	 */
    "use strict";
    /**
     * Add schema url to all links
     */
    $( "a" ).attr( "itemprop", "url" );
    /**
	 * Options toggle button
	 */
	$( "a#options" ).on( "click", function(e) {
	    e.preventDefault();

		$( ".input-option-hidden" ).toggleClass( "visuallyhidden" );
        var text = $( "a#options" ).text();
        $( "a#options" ).text( text == "Advanced Options" ? "Close Options" : "Advanced Options" );
    });
    /**
     * Select generated password on focus
     */
     $( "input#generatedpassword" ).on( "click", function() {
         $( "#generatedpassword" ).select();
     });
    /**
     * Copy generated password to clipboard
     */
    $( "#copy-generated" ).on( "click", function(e) {
        e.preventDefault();

        if ( $( "#generatedpassword" ).val() != "" )
        {
            $( "#generatedpassword" ).select();
            document.execCommand( "copy" );
            $( "#copied-to-clipboard" ).fadeIn( 200 ).delay( 1200 ).fadeOut( 500 );
        }
    });
})(jQuery);