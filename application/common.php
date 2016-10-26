<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function echoActive($conf_controller,$conf_action,$current_controller,$current_action){
	//return  strpos($current_controller,$conf_controller);//strcmp($current_controller,$conf_controller);//==$current_controller;//mb_detect_encoding($current_action);//$current_action; 
	if($conf_action === $current_action && $conf_controller == $current_controller){
		return "class='active'";
	}
}