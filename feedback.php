<?php 
	require 'includes/head.php';
	require 'includes/header.php';
?>
<?php
	if(isset($_POST["send"])){
		$error = false;
		$from_name = $_POST["from_name"];
		$from_email = $_POST["from_email"];
		$message = $_POST["message"];
		$_SESSION["from_name"] = $from_name;
		$_SESSION["from_email"] = $from_email;
		$_SESSION["message"] = $message;
		if($from_name == ""){
	?>
		<script type="text/javascript"> alert("Введите имя");</script>	
	<?php
		$error = true;
		}
	?>
	<?php
		if($from_email == "" || !preg_match("/@/", $from_email)){
	?>
		<script type="text/javascript"> alert("Введите корректный Email");</script>
	<?php
		$error = true;
		}
	?>
	<?php
		if(strlen($message) == 0){
	?>
		<script type="text/javascript"> alert("Введите корректное сообщение");</script>
	<?php
		$error = true;
		}
		if ($error == false){
			$letter = "Письмо: \r\n";
			$letter .="Имя отправителя:" .$_SESSION["from_name"]."\r\n";
			$letter .="Email отправителя:".$_SESSION["from_email"]."\r\n";
			$letter .="Текст сообщения:" .$_SESSION["message"]."\r\n";
			mail("aleksandrharada@yandex.ru", "game", $letter);
		?>
		<script type="text/javascript"> alert("Ваше сообщение успешно отправлено");</script>
		<?php
		}
	}
?>
<section id = "feedback">
		<div class="container_12">
			<form name = "feedback" action="" method="POST">
			<label>Ваше имя:</label> <br/>
			<input type="text" name="from_name" placeholder="Ваше имя" value="<?=$_SESSION["from_name"]?>"> <br/>
			<label>Ваш Email:</label> <br/>
			<input type="text" name="from_email" placeholder="Ваш Email" value="<?=$_SESSION["from_email"]?>"> <br/>
			<label>Сообщение:</label> <br/>
			<textarea name = "message" cols="35" rows="5" placeholder="Ваше сообщение"><?=$_SESSION["message"]?></textarea><br/>
			<input id = "send" type="submit" name="send" value="Отправить"/>
			</form>
	</div>
</section>
<?php 
	require 'includes/footer.php';
?>