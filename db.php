<?php
require 'libs/rb-mysql.php'; 
R::setup( 'mysql:host=127.0.0.1;dbname=game',
        'root', '' ); 
if(!R::testConnection())
 	{
 		exit('Нет подключения к Базе Данных');
 	}
?>