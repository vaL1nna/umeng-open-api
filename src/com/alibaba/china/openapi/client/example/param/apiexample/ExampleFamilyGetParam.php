<?php

namespace moyi\example\param\apiexample;

use moyi\client\entity\ByteArray;
use moyi\client\entity\SDKDomain;

class ExampleFamilyGetParam
{
	
	/**
	 *
	 * @return 可接受参数1或者2，其余参数无法找到family对象
	 */
	public function getFamilyNumber()
	{
		$tempResult = $this->sdkStdResult ["familyNumber"];
		return $tempResult;
	}
	
	/**
	 * 设置可接受参数1或者2，其余参数无法找到family对象
	 * 
	 * @param Integer $familyNumber
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setFamilyNumber($familyNumber)
	{
		$this->sdkStdResult["familyNumber"] = $familyNumber;
	}

	private $sdkStdResult = array();

	public function getSdkStdResult()
	{
		return $this->sdkStdResult;
	}
}
