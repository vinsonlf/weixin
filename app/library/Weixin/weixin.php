<?php
/**
 * Created by PhpStorm.
 * User: vinosn
 * Date: 2017/3/1
 * Time: 19:30
 */
require_once "jssdk.php";

class weixin{

    public function createWeixinConfig(){
        $jssdk = new JSSDK("yourAppID", "yourAppSecret");
        $signPackage = $jssdk->GetSignPackage();
        var_dump($signPackage);exit;
        return $signPackage;
    }
}