<?php

namespace moyi\client;

use moyi\client\serialize\SerializerProvider;
use moyi\client\util\SignatureUtil;
use moyi\client\policy\ClientPolicy;
use moyi\client\policy\RequestPolicy;
use moyi\client\util\DateUtil;

class SyncAPIClient
{
	public $clientPolicy;
	
	/**
	 *
	 * @param ClientPolicy $clientPolicy        	
	 */
	public function __construct(ClientPolicy $clientPolicy)
	{
		$this->clientPolicy = $clientPolicy;
	}

	public function send(APIRequest $request, $resultDefiniation, RequestPolicy $requestPolicy)
	{
		$urlRequest = $this->generateRequestPath ( $request, $requestPolicy, $this->clientPolicy );
		if ($requestPolicy->useHttps) {
			if($this->clientPolicy->httpsPort==443){
				$urlRequest = "https://" . $this->clientPolicy->serverHost . $urlRequest;
			}else{
				$urlRequest = "https://" . $this->clientPolicy->serverHost .":".$this->clientPolicy->httpsPort . $urlRequest;
			}
		} else {
			if($this->clientPolicy->httpPort==80){
				$urlRequest = "http://" . $this->clientPolicy->serverHost . $urlRequest;
			}else{
				$urlRequest = "http://" . $this->clientPolicy->serverHost .":".$this->clientPolicy->httpPort . $urlRequest;
			}
		}
		
		$serializerTools = SerializerProvider::getSerializer ( $requestPolicy->requestProtocol );
		$requestData = $serializerTools->serialize ( $request->requestEntity );
		$requestData = array_merge ( $requestData, $request->addtionalParams );
		if ($requestPolicy->needAuthorization) {
			$requestData ["access_token"] = $request->accessToken;
		}
		if ($requestPolicy->requestSendTimestamp) {
			// $requestData ["_aop_timestamp"] = time();
		}
		$requestData ["_aop_datePattern"] = DateUtil::getDateFormatInServer ();
		if ($requestPolicy->useSignture) {
			if ($this->clientPolicy->appKey != null && $this->clientPolicy->secKey != null) {
				$pathToSign = $this->generateAPIPath ( $request, $requestPolicy, $this->clientPolicy );
				$signaturedStr = SignatureUtil::signature ( $pathToSign, $requestData, $requestPolicy, $this->clientPolicy );
				$requestData ["_aop_signature"] = $signaturedStr;
			}
		}
		$ch = curl_init ();
		$paramToSign = "";
		foreach ( $requestData as $k => $v ) {
			$paramToSign = $paramToSign . $k . "=" . urlencode($v) . "&";
		}
		$paramLength = strlen ( $paramToSign );
		if ($paramLength > 0) {
			$paramToSign = substr ( $paramToSign, 0, $paramLength - 1 );
		}
		if ($requestPolicy->httpMethod === "GET") {
			$urlRequest = $urlRequest . "?" . $paramToSign;
			curl_setopt ( $ch, CURLOPT_URL, $urlRequest );
			curl_setopt ( $ch, CURLOPT_HEADER, false );
			curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 120 );
			curl_setopt ( $ch, CURLOPT_POST, 0 );
			curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, false );
			curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false );
			
			$result = $newclient->get ( $urlRequest, $requestData );
		} else {
			curl_setopt ( $ch, CURLOPT_URL, $urlRequest );
			curl_setopt ( $ch, CURLOPT_HEADER, false );
			curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 120 );
			curl_setopt ( $ch, CURLOPT_POST, 1 );
			curl_setopt ( $ch, CURLOPT_POSTFIELDS, $paramToSign );
			curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, false );
			curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false );
			$data = curl_exec ( $ch );
		}
		$data = curl_exec ( $ch );
		if ($data) {
			$content = $data;
			$deSerializerTools = SerializerProvider::getDeSerializer ( $requestPolicy->responseProtocol );
			$status = curl_getinfo ( $ch, CURLINFO_HTTP_CODE );
			curl_close ( $ch );
			if ($status >= 400 && $status <= 599) {
				$resultException = $deSerializerTools->buildException ( $content, $resultDefiniation );
				throw $resultException;
			} else {
				$resultDefiniation = $deSerializerTools->deSerialize ( $content, $resultDefiniation );
				return $resultDefiniation;
			}
		} else {
			$status = curl_getinfo ( $ch, CURLINFO_HTTP_CODE );
			curl_close ( $ch );
			return $status;
		}
	}

	private function generateRequestPath(APIRequest $request, RequestPolicy $requestPolicy, ClientPolicy $clientPolicy)
	{
		$urlResult = "";
		if ($requestPolicy->accessPrivateApi) {
			$urlResult = "/api";
		} else {
			$urlResult = "/openapi";
		}
		
		$defs = array (
				$urlResult,
				"/",
				$requestPolicy->requestProtocol,
				"/",
				$request->apiId->version,
				"/",
				$request->apiId->namespace,
				"/",
				$request->apiId->name,
				"/",
				$clientPolicy->appKey 
		);
		
		$urlResult = implode ( $defs );
		
		return $urlResult;
	}

	private function generateAPIPath(APIRequest $request, RequestPolicy $requestPolicy, ClientPolicy $clientPolicy)
	{
		$urlResult = "";
		$defs = array (
				$urlResult,
				$requestPolicy->requestProtocol,
				"/",
				$request->apiId->version,
				"/",
				$request->apiId->namespace,
				"/",
				$request->apiId->name,
				"/",
				$clientPolicy->appKey 
		);
		
		$urlResult = implode ( $defs );
		
		return $urlResult;
	}
}
