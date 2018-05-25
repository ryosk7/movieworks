<?php
// アプリケーション設定
define('CONSUMER_KEY', '261474477893-n0otdcerub0luna8snok7pe4t0spgbcu.apps.googleusercontent.com');
define('CONSUMER_SECRET', '3oSKisiSqIcOw7-oLz4CDNA-');
define('CALLBACK_URL', 'http://localhost/movieworks/redirect.php');

// URL
define('TOKEN_URL', 'https://accounts.google.com/o/oauth2/token');
define('INFO_URL', 'https://www.googleapis.com/oauth2/v1/userinfo');

$params = array(
	'code' => $_GET['code'],
	'grant_type' => 'authorization_code',
	'redirect_uri' => CALLBACK_URL,
	'client_id' => CONSUMER_KEY,
	'client_secret' => CONSUMER_SECRET,
);

$params = http_build_query($params, "", "&");

$header = array(
  'Content-Type: application/x-www-form-urlencoded',
  'Content-Length: ' .strlen($params)
);

// POST送信
// $options = array('http' => array(
//   'method' => 'POST',
//   'header' => implode("\r\n", $header),
//   'content' => $params
// ));

$options = stream_context_create(array(
  'http' => array(
    'method' => 'POST',
    'header' => implode("\r\n", $header),
    'content' => $params
  )
));

// アクセストークンの取得
$res = file_get_contents(TOKEN_URL, false, $options);

// レスポンス取得
$token = json_decode($res, true);
if(isset($token['error'])){
	echo 'エラー発生';
	exit;
}

$access_token = $token['access_token'];

$params = array('access_token' => $access_token);

// ユーザー情報取得
$res = file_get_contents(INFO_URL . '?' . http_build_query($params));

//表示
echo $res;
?>
