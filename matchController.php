<?php
/**
 * 比赛操作相关控制器功能类
 */
class MatchController{
    /**
     * 比赛列表操作
     */
    public function listAction(){
        $is_run = true;//执行因素
        if(isset($is_run)){
            echo '执行';
        }else{
            echo '不执行';
        }
    }
    /**
     * 比赛删除
     */
    public function removeAction(){

    }
}