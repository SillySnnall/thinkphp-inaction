<?php

namespace Home\Controller;

use Home\Model\PostModel;
use Home\Model\PostViewModel;
use Home\Model\UserModel;
use Think\Controller;

header("Content-type: text/html; charset=utf-8");// 解决乱码问题
class IndexController extends Controller
{
    public function index()
    {
        $user = new UserModel();
        $data = array(
            'username' => 'zhangsanxxx',
            'password' => '1111111',
            'repassword' => '1111111'
        );
        if (!$user->create($data)) {
            echo $user->getError();
            exit;
        } else {
            $id = $user->add();
            print_r($user->find($id));
        }
//        echo 'ok';

//        $user->create($data);
//        $user->add($data);
    }

    public function update()
    {
        $user = new UserModel();
        $data = array(
            'id' => 2,
            'username' => 'zhangsan',
            'password' => '5464654654654'
        );
        if (!$user->create($data)) {
            echo $user->getError();
            exit;
        } else {
            $user->save();
            print_r($user->find(2));
        }
    }

    public function posts(){
        $m = new PostViewModel();
        $data = $m->select();
        dump($data);
    }

    public function posts2(){
       $m =  new UserModel();
       $data = $m->relation('extra')->find(6);
       $this->dump($data);
    }

    public function posts3(){
        $m = new PostModel();
        $data = $m->relation('author')->find();
        $this->dump($data);
    }

    public function posts4(){
        $m = new UserModel();
        $data = $m->relation('posts')->find(6);
        $this->dump($data);
    }

    /**
     * 格式化 print_r
     * @param $vars
     * @param string $label
     * @param bool $return
     * @return null|string
     */
    function dump($vars, $label = '', $return = false) {
        if (ini_get('html_errors')) {
            $content = "<pre>\n";
            if ($label != '') {
                $content .= "<strong>{$label} :</strong>\n";
            }
            $content .= htmlspecialchars(print_r($vars, true));
            $content .= "\n</pre>\n";
        } else {
            $content = $label . " :\n" . print_r($vars, true);
        }
        if ($return) { return $content; }
        echo $content;
        return null;
    }
}