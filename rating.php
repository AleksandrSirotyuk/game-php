<?php 
	require 'includes/head.php';
	require 'includes/header.php';
?>
<div id = "rating">
	<h>Рейтинг игроков:</h> <br/>
	<span>
		<?php
			$rating = R::getAll( 'SELECT players.name, points.points 
				FROM `points` 
				JOIN players ON points.id = players.id 
				ORDER BY points.points DESC' );
			for($i = 0; $i < 3; $i++){
				echo $rating[$i]["name"];
				echo ": "; 
				echo $rating[$i]["points"];
				echo " очков";?>
				<br/>
		<?php
			}
		?>
	</span>
</div>
<?php 
	require 'includes/footer.php';
?>