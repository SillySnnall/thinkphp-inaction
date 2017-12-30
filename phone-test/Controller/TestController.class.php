<?php
/**
 * Created by PhpStorm.
 * User: SillySnnall
 * Date: 2017/12/30
 * Time: 10:27
 */

class TestController extends \Think\Controller
{
    public function postData()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $this->ajaxReturn("ID:" + $id + "NAME:" + $name, '成功', 1);
    }
}