# 友盟umeng

## Introduction
> this project is a umeng composer sdk

## Installation
#### Require this package with composer.
```shell
composer require moyi\umeng
```

#### Usage eg:Get new user

```php
<?php

...
use moyi\client\APIId;
use moyi\client\APIRequest;
use moyi\client\SyncAPIClient;
use moyi\client\policy\ClientPolicy;
use moyi\client\policy\RequestPolicy;
use moyi\umeng\uapp\param\UmengUappGetNewUsersParam;
use moyi\umeng\uapp\param\UmengUappGetNewUsersResult;

public function getUmengData() {
  $date = now()->toDateString();

  $clientPolicy = new ClientPolicy(
      config('your umeng key'),
      config('your umeng secret'),
      'gateway.open.umeng.com'
  );
  
  $syncAPIClient = new SyncAPIClient($clientPolicy);
  
  $reqPolicy                       = new RequestPolicy();
  $reqPolicy->useHttps             = true;
  $reqPolicy->requestSendTimestamp = false;
  
  $param = new UmengUappGetNewUsersParam();
  $param->setAppkey('your umeng app key');
  $param->setStartDate($date);
  $param->setEndDate($date);
  
  $request = new APIRequest();
  $apiId   = new APIId(
      "com.umeng.uapp",
      "umeng.uapp.getNewUsers",
      1
  );
  
  $request->apiId         = $apiId;
  $request->requestEntity = $param;
  
  $result = new UmengUappGetNewUsersResult();
  
  $syncAPIClient->send($request, $result, $reqPolicy);
  
  $res  = $result->getNewUserInfo();
  $data = $res[0]->getValue() ?? 0;
}

```

