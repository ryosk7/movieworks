<?php

define('INFO_URL', 'https://www.googleapis.com/oauth2/v1/userinfo');

$db_name = "movieworks";
$host_name = "localhost";
$p_id = "root";
$p_pass = "";

$pdo = new PDO("mysql:dbname={$db_name};
								host={$host_name}; charset=utf8mb4",
								"{$p_id}", "{$p_pass}");


$list = $pdo -> prepare("SELECT * FROM token");

$list -> execute();

if (!$list) {
	echo "ERROR";
}else {
	echo <<< EOM

EOM;

 while ($data = $list -> fetch()) {
	 $access_token = $data["u_token"];
 }
}

$params = array('access_token' => $access_token);

// ユーザー情報取得
$res = file_get_contents(INFO_URL . '?' . http_build_query($params));

//表示
$result = json_decode($res, true);
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>GoogleのOAuth2.0を使ってプロフィールを取得</title>
</head>
<body>
	<h2>ユーザー情報</h2>
	<table>
		<tr><td>ID</td><td><?php echo $result['id']; ?></td></tr>
		<tr><td>ユーザー名</td><td><?php echo $result['name']; ?></td></tr>
		<tr><td>苗字</td><td><?php echo $result['family_name']; ?></td></tr>
		<tr><td>名前</td><td><?php echo $result['given_name']; ?></td></tr>
		<tr><td>場所</td><td><?php echo $result['locale']; ?></td></tr>
	</table>
	<h2>プロフィール画像</h2>
	<img src="<?php echo $result['picture']; ?>" width="100">
</body>
</html>
