<?php
/**
 * Created by PhpStorm.
 * User: vinosn
 * Date: 2017/3/1
 * Time: 0:12
 */

ini_set('date.timezone','Asia/Shanghai');
//error_reporting(E_ERROR);
require_once "lib/WxPay.JsApiPay.php";

class wxpay{

    /**
     * 微信统一订单号
     */
    public function orderSn(){

        //获取微信openid
        $tools = new JsApiPay();var_dump('eee');exit;
        $openId = $tools->GetOpenid();
        var_dump($openId);exit;
        //生产统一订单
        $input = new WxPayUnifiedOrder();
        $input->SetBody("test");
        $input->SetAttach("test");
        $input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
        $input->SetTotal_fee("1");
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url("http://paysdk.weixin.qq.com/example/notify.php");
        $input->SetTrade_type("JSAPI");
        $input->SetOpenid($openId);
        $order = WxPayApi::unifiedOrder($input);
        echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>';
        printf_info($order);
        $jsApiParameters = $tools->GetJsApiParameters($order);
        return $jsApiParameters;
    }
}


