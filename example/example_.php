<?php

require( dirname(__FILE__) . '/../hummingbirds/hb-verify.php');

/** add page for nav. */
hb_add_page('example', 'example.php');

$pagename = 'example';

hb_add_filter('hb_title', 'on_title', $pagename);
function on_title($text) {
    echo 'hummingbirds example';
}

hb_add_filter('hb_body_main', 'body_main', $pagename);
function on_body_main($text) {
?>
<h1>hummingbirds</h1>
<br/>
this is example for hummingbirds.
<?php
}

?>
