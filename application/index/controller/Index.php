<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{
    public function index()
    {
    	//echo $this->request->param();
    	return $this->fetch();
        //return 'hello';
    }
}
