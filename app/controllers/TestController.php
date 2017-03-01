<?php
/**
 * Created by PhpStorm.
 * User: vinosn
 * Date: 2017/2/28
 * Time: 23:25
 */

class TestController extends ControllerBase{

    public function indexAction(){
        //调用微信服务
        $wxService = new WeixinService();
        $result = $wxService->createWeixinConfig();

        $this->view->setVar('result',$result);
    }
}