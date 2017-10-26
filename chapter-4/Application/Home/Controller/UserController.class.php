<?php

namespace Home\Controller;

use Think\Controller;

class UserController extends Controller
{
    public function _empty($name)
    {
        $this->view($name);
    }

    private function view($name){
        echo 'name:'.$name;
    }
}