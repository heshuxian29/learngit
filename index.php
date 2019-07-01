<?php
header('Content-Type: text/html;charset=utf-8');
//动作
$default_action = 'list';
$a = isset($_GET['a'])?$_GET['a']:$default_action;


setCode('match','$is_run = true;//执行因素',2);

//实例化控制器类
require './matchController.php';
//实例化
$controller = new MatchController();
//调用方法
$action_name = $a.'Action';
$controller -> $action_name();//可变方法

echo  '123';die;
//修改是否执行
function setCode($controller,$code,$type){
    $file_content = file_get_contents('./'.$controller.'Controller.php');

    if($type == '1'){
        $file_content = str_replace($code,'//$is_run = true;//执行因素',$file_content);
    }else{
        $file_content = str_replace('//'.$code,'$is_run = true;//执行因素',$file_content);
    }

    file_put_contents('./'.$controller.'Controller.php',$file_content);
    return true;
}
