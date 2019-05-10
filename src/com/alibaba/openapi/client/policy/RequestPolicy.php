<?php

namespace moyi\client\policy;

class RequestPolicy
{
	
	public $requestSendTimestamp;
	public $useHttps = false;
	public $requestProtocol = DataProtocol::param2;
	public $responseProtocol = DataProtocol::param2;
	public $responseCompress = true;
	public $requestCompressThreshold = - 1;
	public $timeout = 5000;
	public $httpMethod = "POST";
	public $queryStringCharset = "GB18030";
	public $contentCharset = "UTF-8";
	public $useSignture = true;
	public $needAuthorization = false;
	public $accessPrivateApi = false;
	public $defaultApiVersion = 1;
	
}
