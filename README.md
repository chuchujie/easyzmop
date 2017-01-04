<p align="center">
<a href="https://zmop.org/">
<img src="https://zmop.org/logo.svg" alt="zmop" width="160">
</a>

<p align="center">📦 Maybe it is the best SDK for develop zmop App.</p>

<p align="center">
<a href="https://travis-ci.org/overtrue/wechat"><img src="https://travis-ci.org/overtrue/wechat.svg?branch=master" alt="Build Status"></a>
<a href="https://packagist.org/packages/overtrue/wechat"><img src="https://poser.pugx.org/overtrue/wechat/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/overtrue/wechat"><img src="https://poser.pugx.org/overtrue/wechat/v/unstable.svg" alt="Latest Unstable Version"></a>
<a href="https://scrutinizer-ci.com/g/overtrue/wechat/build-status/master"><img src="https://scrutinizer-ci.com/g/overtrue/wechat/badges/build.png?b=master" alt="Build Status"></a>
<a href="https://scrutinizer-ci.com/g/overtrue/wechat/?branch=master"><img src="https://scrutinizer-ci.com/g/overtrue/wechat/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://scrutinizer-ci.com/g/overtrue/wechat/?branch=master"><img src="https://scrutinizer-ci.com/g/overtrue/wechat/badges/coverage.png?b=master" alt="Code Coverage"></a>
<a href="https://packagist.org/packages/overtrue/wechat"><img src="https://poser.pugx.org/overtrue/wechat/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/overtrue/wechat"><img src="https://poser.pugx.org/overtrue/wechat/license" alt="License"></a>
</p>

</div>

## Supporting zmop

zmop 是一个 MIT 协议的开源项目. 它的发展离不开背后的支持者。

特别感谢他们的慷慨赞助:

<a href="https://laravist.com">
  <img width="160" src="https://o0dpls1ru.qnssl.com/laravist.com-logo.png">
</a>

## Feature

 - 命名不那么乱七八糟；
 - 隐藏开发者不需要关注的细节；
 - 方法使用更优雅，不必再去研究那些奇怪的的方法名或者类名是做啥用的；
 - 自定义缓存方式；
 - 符合 [PSR](https://github.com/php-fig/fig-standards) 标准，你可以各种方便的与你的框架集成；
 - 高度抽象的消息类，免去各种拼json与xml的痛苦；
 - 详细 Debug 日志，一切交互都一目了然；

## Requirement

1. PHP >= 5.5.9
2. **[composer](https://getcomposer.org/)**
3. openssl 拓展
4. fileinfo 拓展（素材管理模块需要用到）

> SDK 对所使用的框架并无特别要求

## Installation

```shell
- composer require "akasha/zmop" -vvv
- Run `php artisan vendor:publish`
```

## Usage

### 授权:

```
        //1:按照手机号进行授权 {"mobileNo":"15158657683"}
        //2:按照身份证+姓名进行授权 {"name":"张三","certType":"IDENTITY_CARD","certNo":"330100xxxxxxxxxxxx"}
        $request = new ZhimaAuthInfoAuthorizeRequest();
        $request->setChannel("app");
        $request->setPlatform("zmop");
        $req->setIdentityType("2");// 必要参数
        $req->setIdentityParam("{\"name\":\"张三\",\"certType\":\"IDENTITY_CARD\",\"certNo\":\"330100xxxxxxxxxxxx\"}");// 必要参数
        $req->setBizParams("{\"auth_code\":\"M_H5\",\"channelType\":\"app\",\"state\":\"商户自定义\"}");//
        $req->setChannel("app");
        $req->setPlatform("zmop");
        $url = Zmop::generatePageRedirectInvokeUrl($req)
```

### 信用评分:

```
         $request = new ZhimaCreditScoreGetRequest();
         $request->setChannel("apppc");
         $request->setPlatform("zmop");
         $request->setTransactionId("201512100936588040000000465158");// 必要参数
         $request->setProductCode("w1010100100000000001");// 必要参数
         $request->setOpenId("268810000007909449496");// 必要参数
         $response = Zmop::execute($request);
         echo json_encode($response);
```
## Config

set the options in **config/zmop.php** ,

## Documention

- Homepage: https://b.zmxy.com.cn/technology/openDoc.htm?LEFT_MENU_MODE=LEFT_BLANK&productId=w1010100200000000001-all

> 强烈建议看懂芝麻信用文档后再来使用本 SDK。

## License

MIT
