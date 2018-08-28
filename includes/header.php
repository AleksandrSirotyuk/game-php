<?php require 'authorization.php'; ?>
<header>
	<div class="container_12">
		<div class="grid_3">
da
		</div>
		<div class="grid_4">
da
		</div>
		<div class="grid_3" id = "top_text">
			Присоединяйтесь!
		</div>
<?php
		if(isset($_SESSION["logged_player"])){?>
			<div class="grid_2">
				<p>Привет, <?php echo $_SESSION["logged_player"]; ?>
					<br/>
					<a href="../personal_area.php">Личный кабинет</a> 
					<a href="../logout.php">Выйти</a>
				</p>
			</div>
<?php
		}
		else{?>
			<div class="grid_2">
				<button onclick="javascript:openDialog();">Войти</button>
			</div>
<?php
		}?>
	</div>
	<div class="banner">
		<nav class="container">
			<div class="container_12">
				<div class="grid_7">
					<span><a href="/">Главная</a></span>
					<span><a href="information.php" target="_blank">Информация</a></span>
					<span><a href="rating.php" target="_blank">Рейтинг игроков</a></span>
					<span><a href="feedback.php" target="_blank">Обратная связь</a></span>
				</div>
			</div>
		</nav>
	</div>
</header>
	<a id="showHere"></a>
