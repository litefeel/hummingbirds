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
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-27650005-1',{'cookieDomain':'www.litefeel.com'});
ga('send', 'pageview');
</script>
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=2&amp;pos=right&amp;uid=316858" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
</body>
</html>
