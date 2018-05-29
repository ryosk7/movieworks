<?php require_once 'vendor/autoload.php';  ?>
<?php
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
// アプリケーション設定
define('CONSUMER_KEY', $_ENV['CONSUMER_KEY']);
define('CALLBACK_URL', 'http://localhost/phpensyu/movieworks/redirect.php');

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
