<?php

/**
 *
 *
 *
 */

/** 
 * (option) define config filename.
 * Default $(hummingbirds)/hb-config.php
 */
define('HB_CONFIG', dirname(__FILE__) . '/config.php');


/** define hummingbirds constent. */
define('HUMMINGBIRDS', true);

/**  require hb-core, it is must. */
require( dirname( __FILE__ ) . '/../hummingbirds/hb-core.php' );


/** show page, the param is page filename. */
hb_do_web('example');

echo $xxx;

$xxx->a;

echo (aass