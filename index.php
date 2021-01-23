<?php
session_start();
include "app/autoloader.php";//Pour l'inclusion automatique des classe a partir de leur namespace ou l'or d'un new

use app\core\Route;
use app\App;

ob_start();//debut de l'enregistrement du contenue dans une variable

if(isset($_GET['p'])){
	if(isset($_GET['content_type'])){
		Route::getPage($_GET['p'],".".$_GET['content_type']);
	}else{
		Route::getPage($_GET['p']);
	}
}else{
	Route::home();
}

$content=ob_get_clean();//tout le contenue a afficher se retrouve dans cette variable $content

include "public/template.php";