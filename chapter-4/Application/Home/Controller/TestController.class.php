<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html; charset=utf-8");// 解决乱码问题
class TestController extends Controller {
    public function testAction(){
        echo '您访问了 home/test/test';
    }
    public function listAction(){
        echo '您访问了home/test/list';
    }
}