<?php
namespace app\bus\controller;
use think\Controller;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/19 0019
 * Time: 10:14
 */
class Fake extends Controller
{
    public function fakeAdd(){
        return $this->fetch();
    }

    public function fakeSearch(){
        return $this->fetch();
    }

    public function hello(){
        return $this->fetch();
    }

    public function lookup(){
        return $this->fetch();
    }
}