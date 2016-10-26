<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Request;
class Login extends Controller{
	
	public function login(){
		//echo Request::instance()->cookie('name');
		return $this->fetch();
	}
	//用于进行用户登录的检查
	public function logincheck(){
		$data = array();
		$data['username'] = input("post.username");
		$data['password'] = input("post.password");
		//初始化检测
		$result = $this->validate($data,'Member.login');
		if(true !== $result){
			$this->error($result,'admin/login/login');
		}else{
			$user = Db::name('t_yhdl')->where($data)->find();
			if($user){
				foreach ($user as $key => $value) {
					session($key,$value);
				}
				unset($user);
				$this->success("登录成功","admin/content/main_layout");	
			}else{
				$this->error("账号密码错误","admin/login/login");
			}
		}
	}
}

