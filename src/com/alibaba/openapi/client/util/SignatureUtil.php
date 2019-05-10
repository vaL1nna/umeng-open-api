<?php

namespace moyi\client\util;

use moyi\client\policy\RequestPolicy;
use moyi\client\policy\ClientPolicy;

class SignatureUtil
{
	
	/**
	 *
	 * @param unknown $path        	
	 * @param array $parameters        	
	 * @param RequestPolicy $requestPolicy        	
	 * @param ClientPolicy $clientPolicy        	
	 * @return string
	 */
	public static function signature($path, array $parameters, RequestPolicy $requestPolicy, ClientPolicy $clientPolicy)
	{
		$paramsToSign = array ();
		foreach ( $parameters as $k => $v ) {
			$paramToSign = $k . $v;
			Array_push ( $paramsToSign, $paramToSign );
		}
		sort ( $paramsToSign );
		$implodeParams = implode ( $paramsToSign );
		$pathAndParams = $path . $implodeParams;
		$sign = hash_hmac ( "sha1", $pathAndParams, $clientPolicy->secKey, true );
		$signHexWithLowcase = bin2hex ( $sign );
		$signHexUppercase = strtoupper ( $signHexWithLowcase );
		return $signHexUppercase;
	}
}
