<?php
/**
 * Created by PhpStorm.
 * User: vinosn
 * Date: 2017/3/1
 * Time: 19:33
 */

class WeixinService extends BaseService {

    /**
     * 创建微信支付配置
     */
    public function createWeixinConfig($data = array()){
        //基础微信H5验证
        $weixin = new weixin();
        $weixinConfig = $weixin->createWeixinConfig();
        //H5微信支付配置信息
        $wxpay = new wxpay();
        $wxpayConfig = $wxpay->orderSn();

        $result = array(
            'wxConfig'      => $weixinConfig,
            'wxpayConfig'   => $wxpayConfig
        );

        return $result;
    }
}