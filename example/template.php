<?php
require( dirname(__FILE__) . '/../hummingbirds/hb-verify.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php hb_title(); ?></title>
<?php hb_style(); ?>
<?php hb_script(); ?>
</head>
<body>
<?php hb_body_nav(); ?>
<div id="main">
<?php hb_body_main(); ?>
</div>
<footer>
    Power by HummingBirds. Theme by <a href="http://www.litefeel.com">LiteFeel</a>.
</footer>
<?php hb_body_end(); ?>
</body>
</html>
