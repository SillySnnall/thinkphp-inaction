<?php

namespace Home\Controller;

use Think\Controller;

header("Content-type: text/html; charset=utf-8");// 解决乱码问题
class IndexController extends Controller
{

//    public function _before_index()
//    {
//        echo 'before';
//    }

    public function index()
    {
//        $data=array(
//            'status'=>1,
//            'data'=>'data'
//        );
//        $this->ajaxReturn($data,'xml');

        $this->redirect('login','role=admin',3,'请登录');
    }

//    public function _after_index()
//    {
//        echo 'after';
//    }

    public function bind($id = 1)
    {
        echo U('Blog/view',array('id'=>1),'shtml');
    }

    public function login(){
        if (IS_POST){
            echo '当前为POST请求方法，需要处理登录逻辑';
        }else if (IS_GET){
            echo '当前为空GET请求方法，需要显示登录界面';
        }else{
            echo '非法请求';
        }
    }

    public function buy(){
        $this->success('购买成功,1秒后跳转首页','',5);

    }

    public function buyerror(){
        $this->error('错误','',5);
    }
}