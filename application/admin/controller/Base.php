<?php 
namespace app\admin\controller;
use think\Controller;

class Base extends Controller{
		public function _initialize(){
			if(null ===session("userid")){
				$this->redirect("admin\login\login");
			}
			$this->assign('current_controller', $this->request->controller());
        	$this->assign('current_action', $this->request->action());
        	//echo $this->request->controller();
        	//die;
		}
 }



 ?>
