<?php

namespace moyi\client\util;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class SDKDomainUtil
{
	public function generateSDKDomainArray($sdkDomain)
	{
		$serializedResult = array ();
		$ref = new \ReflectionObject ( $sdkDomain );
		foreach ( $ref->getMethods () as $tempMethod ) {
			$methodName = $tempMethod->name;
			if (strpos ( $methodName, "get" ) === 0) {
				$propertyName = substr ( $methodName, 3 );
				$propertyName = lcfirst ( $propertyName );
				$resultValue = $tempMethod->invoke ( $sdkDomain );
				if (($resultValue instanceof DateTime)) {
					$timeValue =$resultValue->getTimestamp();
					$strTime = DateUtil::parseToString ($timeValue );
		
					$serializedResult [$propertyName] = $strTime;
				} else if (($resultValue instanceof ByteArray)) {
					$tempValue = base64_encode ( $resultValue->getByteValue () );
					$serializedResult [$propertyName] = $tempValue;
				} else if (($resultValue instanceof SDKDomain)) {
					$sdkDomainUtil = new SDKDomainUtil ();
					$tempArray = $sdkDomainUtil->generateSDKDomainArray ( $resultValue );
					$serializedResult [$propertyName] = $tempArray;
				} else if (is_array ( $resultValue )) {
					$sdkDomainSubArrayArray = array ();
					foreach ( $resultValue as $tempValue ) {
						$result = processSDKDomain ( $tempValue );
						array_push ( $sdkDomainSubArrayArray, $result );
					}
					$serializedResult [$propertyName] = $sdkDomainSubArrayArray;
				} else {
					$serializedResult [$propertyName] = $resultValue;
				}
			}
		}
		return $serializedResult;
	}
	
	private function processSDKDomain($resultValue)
	{
		if (($resultValue instanceof DateTime)) {
			return $resultValue;
		} else if (($resultValue instanceof ByteArray)) {
			$tempValue = base64_encode ( $resultValue->getByteValue () );
			return $tempValue;
		} else if (($resultValue instanceof SDKDomain)) {
			$sdkDomainSubArray = $this->generateSDKDomainArray ( $resultValue );
			return $tempValue;
		} else if (is_array ( $resultValue )) {
			$sdkDomainSubArrayArray = array ();
			foreach ( $resultValue as $tempValue ) {
				$result = processSDKDomain ( $tempValue );
				array_push ( $sdkDomainSubArrayArray, $result );
			}
			return $sdkDomainSubArrayArray;
		} else {
			return $resultValue;
		}
	}
}
