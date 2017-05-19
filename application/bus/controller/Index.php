<?php
namespace app\bus\controller;
use think\Controller;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/19 0019
 * Time: 9:56
 */
class Index extends Controller
{
    public function lookup(){
        $view = view('lookup');
        return $view;
    }

    public function hello(){
        return $this->fetch();
    }
}