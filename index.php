<?php session_start(); ?>
<?php
    $sid = session_id();
    $ip = $_SERVER['REMOTE_ADDR'];
    include("config.php");
    include("class/class.ipblock.php");
    $ipblock = new Ipblock();
    $ipblock->add($ip, $sid);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>This is site</title>
    </head>
    <body>
        Sample Index file.
    </body>
</html>
