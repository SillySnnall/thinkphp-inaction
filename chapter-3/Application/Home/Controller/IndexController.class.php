<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "year:".$_GET['year'].", month:".$_GET['month'].", day:".$_GET['day'];
    }
}