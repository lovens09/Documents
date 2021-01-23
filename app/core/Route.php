<?php
namespace app\core;

class Route{
	public static function getPage($page,$extension=".php"){
		if(!@include "public/pages/".$page.".php"){
			include "public/pages/404.php";
		}
	}
	public static function home(){
		self::getPage("home");
	}
}