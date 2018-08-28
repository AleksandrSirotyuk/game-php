<?php require 'libs/rb-mysql.php';
$data = "Hello";
 R::setup( 'mysql:host=127.0.0.1;dbname=game',
        'root', '' ); 
 if(!R::testConnection())
 	{
 		exit('Нет подключения к Базе Данных');
 	}
$player = R::dispense( 'players' );
$player->name = "$data";
R::store($player);
?>