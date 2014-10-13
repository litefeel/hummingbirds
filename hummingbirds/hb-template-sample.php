<?php

require( dirname(__FILE__) . '/hb-verify.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php hb_title(); ?></title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php hb_style(); ?>
<?php hb_script(); ?>
</head>
<body>
<?php hb_body_nav(); ?>
<div id="main">
<?php hb_body_main(); ?>
</div>
<footer>
    <a target="_blank" href="http://www.litefeel.com">在线支持 www.litefeel.com</a>
</footer>
<?php hb_body_end(); ?>
</body>
</html>
