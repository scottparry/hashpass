<?php
/**
 * Require our base85 class to encode
 * the final password.
 */
require( "base85.php" );
/**
 * Get the full name.
 * @param string $fullname
 */
if ( ! empty( $_POST['fullname'] ) ) :
    $fullname = strip_tags( trim( $_POST['fullname'] ) );
endif;
/**
 * Get the site URL.
 *
 * @param mixed $site
 */
if ( ! empty( $_POST['website'] ) ) :
    $site = strip_tags( trim( $_POST['website'] ) );
endif;
/**
 * Get the master password, min 8 chars.
 *
 * @param mixed $masterpassword
 */
if ( ! empty( $_POST['masterpassword'] ) && strlen( $_POST['masterpassword'] ) >= 8 ) :
    $masterpassword = strip_tags( trim( $_POST['masterpassword'] ) );
endif;
/**
 * Password length, min 8 chars.
 *
 * @param int $length
 */
if ( ! empty( $_POST['length'] ) && strlen( $_POST['length'] >= 8 ) && is_numeric( $_POST['length'] ) ) :
    $length = strip_tags( trim( $_POST['length'] ) );
else :
    $length = 16;
endif;
/**
 * This allows the password to be changed
 * without changing the master password.
 *
 * @param int $counter
 */
if ( ! empty( $_POST['counter'] ) && is_numeric( $_POST['counter'] ) ) :
    $counter = strip_tags( trim( $_POST['counter'] ) );
else :
    $counter = 1;
endif;
/**
 * Create pbkdf2 password from site and login.
 *
 * @param mixed $fullname
 * @param mixed $site
 * @param mixed $password
 */
if ( ! empty( $fullname ) && ! empty( $site ) ) :
    $password = $fullname . ' ' . $site;
else :
    $password = "";
endif;
/**
 * Create pbkdf2 salt from the master
 * password and counter.
 *
 * @param mixed $masterpassword
 * @param int $counter
 * @param mixed $salt
 */
if ( ! empty( $masterpassword ) && ! empty( $counter ) ) :
    $salt = $masterpassword . $counter;
endif;
/**
 * The number of internal iterations
 * to perform for the derivation.
 *
 * @param int $iterations
 */
$iterations = 200000;
/**
 * Ensure we have some data to hash.
 */
if ( ! empty( $password ) && ! empty( $salt ) ) :
    /**
     * Hash the string with pbkdf2.
     * string hash_pbkdf2 ( string $algo , string $password , string $salt , int $iterations [, int $length = 0 [, bool $raw_output = FALSE ]] )
     */
    $hash = hash_pbkdf2( "sha512", $password, $salt, $iterations, $length );
    /**
     * base85_encode the hash so the generated
     * password contains letters, numbers and symbols.
     */
    $generated_password = base85::encode( $hash );
else :
    $generated_password = "";
endif;