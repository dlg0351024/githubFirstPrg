<?php
namespace App\Http\Controller\Api;

class User{
     
     public function getUserInfo(){
     	
     	$userInfo=User::find($id);
     	return $userInfo();
     }
	
}
?>