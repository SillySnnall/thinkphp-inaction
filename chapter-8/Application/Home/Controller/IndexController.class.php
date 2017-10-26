<?php
namespace Home\Controller;
use Think\Controller;
use Think\Log;
use Think\Model;

header("Content-type: text/html; charset=utf-8");// 解决乱码问题
class IndexController extends Controller {
    public function index(){
        $a = $_GET['a'];
        if (empty($a)){
            E('参数错误');
        }
    }

    public function log(){
        Log::record('ERR-record',Log::ERR);
        Log::write('INFO-record',Log::INFO);
        Log::record('INFO-record',Log::INFO);
    }

    public function dump(){
        $a=[
            'username'=>'admin',
            'age'=>100
        ];
        dump($a);
    }

    public function profile(){
        G('start');
        $sum=0;
        for ($i=1;$i<=1000000;$i++){
            $sum+=$i;
        }
        G('end');
        echo G('start','end').'秒<br>';
        echo G('start','end','m').'KB';
    }

    public function db(){
        $m=new Model('Post');
        $list=$m->select();
        dump($list);
        echo $m->getLastSql();
    }
}