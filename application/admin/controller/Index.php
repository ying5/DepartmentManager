<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Request;
class Index extends Controller{
	
	public function index(){
		//echo Request::instance()->cookie('name');
		//return $this->fetch();
		if(null !== session('userid')){
			echo '已经登录';
			$this->redirect('admin/content/main_layout');	
		}else{
			$this->redirect('admin/login/login');
		}
	}
	public function check(){
		$username = $this->request->post("username");
		$password = $this->request->post("password");
		//echo $username;
		//echo $password;
		$arry = db("t_yhdl")->where('username',$username)->select();
		//echo dump($arry);
		//die;
		if(!$arry){
			echo "账号密码错误";
			$this->fetch("index");
			return;
		}
		if($password == $arry[0]['password']){
			$_SESSION['name'] = $username;
			$this->success();
		}else{
			echo "账号密码错误";
		}
		//echo $this->request->param();
	}
	public function index2(){
		return $this->fetch("index2");
	}
		
}

