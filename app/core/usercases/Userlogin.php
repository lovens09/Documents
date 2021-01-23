<?php
namespace app\core\usercases;
use app\core\entities\Login;

class  Userlogin{
	public static function logUser(username,password){
		return Login::verifyUser(username,password);
	}
}