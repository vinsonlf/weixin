<?php
/**
 * Created by PhpStorm.
 * User: vinosn
 * Date: 2017/2/28
 * Time: 23:25
 */

class TestController extends ControllerBase{

    public function indexAction(){
        $wxpay = new wxpay();
        $res = $wxpay->orderSn();
        var_dump($res);exit;
    }
}