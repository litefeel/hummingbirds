<?php

/**  define hummingbirds constent, it is must. */
define('HUMMINGBIRDS', true);

/**  require hb-core, it is must. */
require( dirname( __FILE__ ) . '/hummingbirds/hb-core.php' );


/**  show page, the param is page filename. */
hb_do_web('page1');

?>
