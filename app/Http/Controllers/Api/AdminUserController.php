<?php
namespace App\Http\Controller\Api;

class AdminUserController extends Controller{
     
     public function getUserInfo(){
     	
     	$userInfo=User::find($id);
     	return $userInfo();
     }
	
}
?>