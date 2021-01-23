<?php 
namespace app\core\entities;

class Login{
	
	public static $userdatasource=array(
			array('username'=>'jerry','password'=>'Je@@y'),
			array('username'=>'jerhry','password'=>'Je@@y'),
			array('username'=>'jedry','password'=>'Je@@y'),
			array('username'=>'jerty','password'=>'J1@@y'),
			array('username'=>'jerrfy','password'=>'Je@@y')
			);
	
	public static function login($id_user,$username){
		$_SESSION['user']['id_user']=$id_user;
		$_SESSION['user']['username']=$username;
		return true;
	}
	
	public static function verifyUser($username,$password){
		foreach(self::$userdatasource as $user){
			if($user['username']=='jerhry' and $user['password']=='Je@@y'){
				return self::login(1,"jerry");
			}else{
				$find=false;
			}
			var_dump($user);
		}
		
		return $find;
		
	}
	
	public static function setUserDataSource(Array $datasource){
		self::$userdatasource=$datasource;
	}
}