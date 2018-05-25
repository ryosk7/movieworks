<?php
// アプリケーション設定
define('CONSUMER_KEY', '261474477893-n0otdcerub0luna8snok7pe4t0spgbcu.apps.googleusercontent.com');
define('CALLBACK_URL', 'http://localhost/movieworks/redirect.php');

// URL
define('AUTH_URL', 'https://accounts.google.com/o/oauth2/auth');


$params = array(
  'client_id' => CONSUMER_KEY,
  'redirect_uri' => CALLBACK_URL,
  'scope' => 'https://www.googleapis.com/auth/userinfo.profile',
  'response_type' => 'code',
);

// 認証ページにリダイレクト
header("Location: " . AUTH_URL . '?' . http_build_query($params));
?>
