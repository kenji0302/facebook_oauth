<?php
/**
 * callback処理
 */

$APP_ID = getenv('APP_ID');
$APP_SECRET = getenv('APP_SECRET');
$OAUTH_CALLBACK ='http://127.0.0.1/callback.php';

if (empty($_GET['code'])){
    echo "error";
    exit;
}
$code = $_GET['code'];

//access token取得
$access_token_response = file_get_contents("https://graph.facebook.com/v2.8/oauth/access_token?"
   ."client_id={$APP_ID}"
   ."&redirect_uri={$OAUTH_CALLBACK}"
   ."&client_secret={$APP_SECRET}"
   ."&code={$code}"
);

if ($access_token_response === false) {
    echo "error";
    exit;
}

$access_token_response_json = json_decode($access_token_response);
$acces_otken = ($access_token_response_json->access_token);


//ユーザー情報取得
$me = file_get_contents("https://graph.facebook.com/me?fields=id,name,email&access_token={$acces_otken}");

if ($me === false) {
    echo "error";
    exit;
}
$me_json = json_decode($me);
var_dump($me_json);
