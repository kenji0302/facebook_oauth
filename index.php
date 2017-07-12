<html>
    <head>
    </head>
<body>

<?php
$APP_ID = getenv('APP_ID');
?>

<h1>Facebook Login</h1>

PHP / <a href="js.php">JavaScript</a>

<p>
    <a href="https://www.facebook.com/v2.8/dialog/oauth?client_id=<?php echo $APP_ID?>&scope=email&redirect_uri=<?php echo urlencode('http://127.0.0.1/callback.php')?>"?>redirect</a>


    <a href="https://www.facebook.com/v2.9/dialog/oauth?client_id=<?php echo $APP_ID?>&redirect_uri=<?php echo urlencode('http://127.0.0.1/callback.php')?>&auth_type=rerequest&scope=email">rerequest</a>
</p>


</body>
</html>
