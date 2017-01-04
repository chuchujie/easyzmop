<?php

return [

    'gatewayUrl'=> 'https://zmopenapi.zmxy.com.cn/openapi.do', //芝麻信用网关地址

    'appId'=> '1234', //芝麻分配给商户的 appId

    'charset'=> 'UTF-8',   //数据编码格式

    'privateKeyFilePath'=>storage_path("app/rsa_private_key.pem"),  //商户私钥文件

    'zhiMaPublicKeyFilePath'=>storage_path("app/rsa_public_key2.pem"),  //芝麻公钥文件

];
