<?php
$head_title = "ログイン画面";
$css_file = "login-form.css";
require_once("header.tmp.php");
?>

<body>
	<span style="color:#77a; font-size: 18px">Ver.2 改修予定</span>
	<ol style="list-style-type: cjk-ideographic">
		<li>ユーザー登録・削除機能</li>
		Ver1では登録済み固定ユーザー認証のみで全体の機能・画面完成を優先
		<li>ユーザー認証</li>
			パスワードのハッシュ化、バリデーション(orサニタイズ)チェック強化
	</ol>
	<hr>
	<h1 id="title">ログイン画面</h1>
	<div class="login-form">
		<form method="post" action="./login_check.php">
			<h2>ログイン</h2>
			<hr>
			<div class="inputs">
				<p>
					ユーザーID
					<input type="text" name="userID" class="textbox" size="15" maxlength="15">
				</p>
				<p>
					パスワード
					<input type="password" name="password" class="textbox" size="15" maxlength="15">
				</p>
				<span>
				※テスト用ユーザー※</br>
				ユーザーID: user01 パスワード: pass01
				</span>
			</div>
			<p class="btn-wrapper">
				<input class="btn" type="submit" value="ログイン">
			</p>
		</form>
	</div>
</body>
</html>
