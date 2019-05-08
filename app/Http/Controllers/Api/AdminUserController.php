<?php
namespace App\Http\Controller\Api;


class AdminUserController extends Controller{
     
     public function getUserInfo(){
     	
     	Log::info(11);
     	 
     	$userInfo=User::find($id);
     	return $userInfo();
     }
	
}
?>