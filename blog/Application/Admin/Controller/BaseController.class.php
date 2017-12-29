<?php
/**
 * Created by PhpStorm.
 * User: SillySnnall
 * Date: 2017/12/29
 * Time: 17:38
 */

use Think\Controller;

header("Content-type: text/html; charset=utf-8");// 解决乱码问题
class BaseController extends Controller
{
    /**
     *由于admin模块属于受保护的模块，所以以上4个控制器必须登录后才能正常访问，
     * 为了不写重复代码，需要新建一个控制器处理登录检测，
     * 以上4个控制器继承该基本控制器实现统一权限检测
     */
    protected function _initialize()
    {
        if (session('admin.adminId') === null) {
            $this->error('请登录', U('admin/index/login'));
        }
        C('LAYOUT_NAME','admin');
    }
}