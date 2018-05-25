<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/css/profile.css">

  <title>プロフィール画面</title>
</head>
<body>
  <div class="prof-body">
    <div class="prof-text">
      <h3 class="prof-title">プロフィール画面</h3>
      <form action="" method="post" id="mail_form">
  		<dl>
  			<dt> 名前  <span></span></dt>
  			<dd class="required"><input type="text" id="name_1" name="name_1" value="" /></dd>

  			<dt> メールアドレス <span></span></dt>
  			<dd class="required"><input type="email" id="mail_address" name="mail_address" value="" /></dd>

  			<dt> プロフィール <span></span></dt>
  			<dd class="required"><textarea id="mail_contents" name="mail_contents" cols="40" rows="10"></textarea></dd>
  		</dl>

  		<p id="form_submit">
        <input type="button" id="form_submit_button" value="  更新  " />
      </p>
  	</form>
    </div>
    <div class="prof-movie">
      <iframe width="350" height="230" src="//www.youtube.com/embed/d6SSnbVCmEg" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</body>
</html>
