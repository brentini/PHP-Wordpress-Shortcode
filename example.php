<?php
/**
  * Slightly edited version of the WordPress ShortCode API to be used in PHP Projects
  *
  * - Tamal Dey | info@tapied.com | www.tapied.com | WordPress Developer
  *
  */

// Including the main Lib.
include_once 'shortcodes.php';

// Adding a new shortcode (WordPress Style)
function bartag_func( $atts ) {
    $args = shortcode_atts( array(
      'foo' => 'no foo',
      'baz' => 'default baz',
    ), $atts );

    return "foo = {$args['foo']}";
}
add_shortcode( 'bartag', 'bartag_func' );



// A common string, say its coming form mySql etc...
$string = "Neque porro quisquam est qui dolorem ipsum quia dolor [bartag] sit amet, consectetur, adipisci velit";


// Output the String and process the ShortCode
echo do_shortcode($string);