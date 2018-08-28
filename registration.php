<?php
	require 'includes/head.php';
	require 'includes/header.php';
	if (isset ($_POST["sign_up"])){
		$data = $_POST;
		$_SESSION["name"] = $data["name"];
		$_SESSION["email"] = $data["email"];
		$error = false;
		if(trim($data["name"]) == ''){?>  	
			<script type="text/javascript"> alert("Введите имя");</script>
<?php
			$error = true;
		}

		if(trim($data["email"]) == ''){?>
			<script type="text/javascript"> alert("Введите ваш Email");</script>
<?php
			$error = true;
		}	
		if($data["password"] == ''){?>
			<script type="text/javascript"> alert("Введите ваш пароль");</script>
<?php
			$error = true;
		}
		if($data["password"]!=$data["password_2"]){?>
			<script type="text/javascript"> alert("Повторный пароль введен не верно");</script>
<?php	
			$error = true;
		}
		if (R::count("players", "name = ?", array($data["name"]))>0){?>
			<script type="text/javascript"> alert("Пользователь с таким именем уже существует");</script>
<?php	
			$error = true;
		}
		if (R::count("players", "email = ?", array($data["email"]))>0){?>
			<script type="text/javascript"> alert("Пользователь с таким email уже существует");</script>
<?php	
			$error = true;
		}			
		if($error == false)
		{
			$player = R::dispense("players");
			$player->name = $data["name"];
			$player->email = $data["email"];
			$player->password = password_hash($data["password"], PASSWORD_DEFAULT);
			R::store($player);?>
			<script type="text/javascript"> alert("Вы успешно зарегистрировались");</script>
<?php
		}
	} 
?>
			<form id="reg" name="registration" action="" method="POST">
				<h2>Регистрация</h2>
				<label>Ваше имя: </label><br />
				<input type="text" name = "name" placeholder = "Ваше имя" value="<?=$_SESSION["name"]?>"/> 
				<br />
				<label>Ваш Email: </label><br />
				<input type="text" name = "email" placeholder = "Ваш Email" value="<?=$_SESSION["email"]?>"/>
				<br />
				<label>Ваш пароль: </label><br />
				<input type="password" name = "password" maxlength = "16"  placeholder = "Ваш пароль"><br/>
				<label>Введите ваш пароль еще раз: </label><br />
				<input type="password" name = "password_2" maxlength = "16"  placeholder = "Ваш повторный пароль"><br/>
				<button type="submit" onclick="javascript:closeDialog();" name="sign_up">Зарегистрироваться</button>
			</form>
	<?php 
	require 'includes/footer.php';
	?>
