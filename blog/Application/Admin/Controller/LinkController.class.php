<?php


/**
 * Created by PhpStorm.
 * User: SillySnnall
 * Date: 2017/12/29
 * Time: 17:34
 * 友情链接控制器
 */

use Think\Model;
use Think\Page;

header("Content-type: text/html; charset=utf-8");// 解决乱码问题
class LinkController extends BaseController
{
    /**
     * 由于该博客系统是一直在线上运行的，所以数据量不可预测，在列表页需要进行分页处理
     */
    public function index()
    {
        $model = new Model('Link');
        $count = $model->count();
        $page = new Page($count);
        $show = $page->show();
        $list = $model->order('linkId DESC')->limit($page->firstRow . ',' . $page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }
}