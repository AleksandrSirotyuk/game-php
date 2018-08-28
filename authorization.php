<?php 
require 'db.php';
if(isset($_POST["sign_in"])){
	$data = $_POST;
	$player = R::findOne("players", "name = ?", array($data["name"]));
	if($player == true){
		if(password_verify($data["password"], $player->password) == true){
			$_SESSION["logged_player"] = $player->name; ?>
			<script type="text/javascript">alert("Вы успешно авторизировались");</script>
<?php
		}
		else{?>
			<script type="text/javascript"> alert("Неправильно введен пароль");</script>
<?php
		}
	}
	else{?>
		<script type="text/javascript">alert("Пользователь с таким именем не найден");</script>
<?php
	}
}
?>
<aside id="default-popup" class="avgrund-popup">
			<h2>Авторизация</h2>
			<form id="auth" name="authorization" action="" method="POST">
				<label>Ваше имя: </label><br />
				<input type="text" name = "name" placeholder = "Ваше имя" value="<?=$_SESSION["name"]?>"/> 
				<br />
				<label>Ваш пароль: </label><br />
				<input type="password" name = "password" maxlength = "16"  placeholder = "Ваш пароль"><br/>
				<button type="submit" onclick="javascript:closeDialog();" name="sign_in">Войти</button>
			</form>
			<a href="registration.php">Зарегистрироваться</a>
	</aside>