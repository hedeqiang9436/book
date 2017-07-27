<?php

return [

  'APPID' => 'wx124021e64d14c088',
  'APPSECRET' => '67a77f8405e05364b8bcd54163ce1eb8',
  
  'MCHID' => '1433115902',
  'KEY' => 'q1w2e3r4t5y6u7i8o9p0p1341215001A',

  //=======【证书路径设置】=====================================
  /**
   * TODO：设置商户证书路径
   * 证书路径,注意应该填写绝对路径（仅退款、撤销订单时需要，可登录商户平台下载，
   * API证书下载地址：https://pay.weixin.qq.com/index.php/account/api_cert，下载之前需要安装商户操作证书）
   * @var path
   */
  'SSLCERT_PATH' => '../cert/apiclient_cert.pem',
  'SSLKEY_PATH' => '../cert/apiclient_key.pem'

];
