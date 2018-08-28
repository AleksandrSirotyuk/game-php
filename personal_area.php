<?php 
	session_start();
	require 'includes/head.php';
	require 'includes/header.php';
	$name = $_SESSION["logged_player"];
?>
<div id = "personal_area">
	<h>Личный кабинет</h> <br/>
	<span>
		<?php
			$rating = R::getAll( 'SELECT players.name, points.points 
				FROM `points` 
				JOIN players ON points.id = players.id 
				WHERE players.name = "$name"');
				echo 'Ваш ник: ';
				echo $rating[0]["name"];
				echo '<br/>';
				echo "Всего очков: "; 
				echo $rating[0]["points"];
		?>
	</span>
</div>
<?php 
	require 'includes/footer.php';
?>