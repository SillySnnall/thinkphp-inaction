<?php
/**
 * Created by PhpStorm.
 * User: SillySnnall
 * Date: 2017/12/30
 * Time: 13:15
 */

namespace Test\Controller;


use Think\Controller;

class TestController extends Controller
{
    public function postData()
    {
//        echo "sasasasasasa";
//        $id = $_POST['id'];
//        $name = $_POST['name'];
//        echo "ID:" . $id . "NAME:" . $name;
        $testBean = new TestBean();
        $testBean->id = $_POST['id'];
        $testBean->name = $_POST['name'];

        $arr = array(
            'id' => $testBean->id,
            'name' => $testBean->name
        );
        $this->ajaxReturn($arr, 'XML', 1);
    }
}