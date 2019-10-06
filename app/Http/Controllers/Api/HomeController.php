<?php
class home{
	//index处理方式
	public funtion index(){
		return view("123");
	}

	//index处理方式
	public funtion getDataList(){
		$retData=array();
		return response(ReturnCode::success,$retData);
	}
}
?>