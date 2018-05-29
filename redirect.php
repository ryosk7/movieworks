<?php session_start(); ?>
<?php require_once 'vendor/autoload.php';  ?>
<?php
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// アプリケーション設定
define('CONSUMER_KEY', $_ENV['CONSUMER_KEY']);
define('CONSUMER_SECRET', $_ENV['CONSUMER_SECRET']);
define('CALLBACK_URL', 'http://localhost/phpensyu/movieworks/redirect.php');

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
$result = json_decode($res, true);
$u_id = $result['id'];
echo $access_token;
echo "<br>";
echo strlen($access_token);
?>

<?php
$db_name = "movieworks";
$host_name = "localhost";
$p_id = "root";
$p_pass = "";

$pdo = new PDO("mysql:dbname={$db_name};
								host={$host_name}; charset=utf8",
								"{$p_id}", "{$p_pass}");

if (!$pdo) {
	echo "error";
}

$regist = $pdo -> prepare("INSERT INTO token (
															u_token, u_id
													)VALUES(?,?)");
$regist -> bindParam("u_token",$access_token);
$regist -> bindParam("u_id",$u_id);

$regist -> execute(array($access_token,$u_id));

if (!$regist) {
	echo "ERROR";
}else {
	echo "<h2>登録完了しました。</h2>";
}

$_SESSION["u_id"] = $result["id"];
$_SESSION["name"] = $result["name"];
$_SESSION["picture"] = $result["picture"];
$u_id = $_SESSION["u_id"];
$name = $_SESSION["name"];
$picture = $_SESSION["picture"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>GoogleのOAuth2.0を使ってプロフィールを取得</title>
</head>
<body>
	<a href="localhost/phpensyu/movieworks/profile.php">プロフィール</a>
	<!-- <h2>ユーザー情報</h2>
	<table>
		<tr><td>ID</td><td><?php echo $u_id; ?></td></tr>
		<tr><td>ユーザー名</td><td><?php echo $name; ?></td></tr>
	</table>
	<h2>プロフィール画像</h2>
	<img src="<?php echo $picture; ?>" width="100"> -->
</body>
</html>
