<?php

namespace moyi\example\param\apiexample;

use moyi\client\entity\ByteArray; 
use moyi\client\entity\SDKDomain;
use moyi\example\param\apiexample\ExampleFamily;

class ExampleFamilyPostParam
{
	
	/**
	 *
	 * @return 上传Family对象信息
	 */
	public function getFamily()
	{
		$tempResult = $this->sdkStdResult["family"];
		return $tempResult;
	}
	
	/**
	 * 设置上传Family对象信息
	 * 
	 * @param ExampleFamily $family
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setFamily(ExampleFamily $family)
	{
		$this->sdkStdResult ["family"] = $family;
	}
	
	/**
	 *
	 * @return 备注信息
	 */
	public function getComments()
	{
		$tempResult = $this->sdkStdResult ["comments"];
		return $tempResult;
	}
	
	/**
	 * 设置备注信息
	 * 
	 * @param String $comments
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setComments($comments)
	{
		$this->sdkStdResult ["comments"] = $comments;
	}
	
	/**
	 *
	 * @return 房屋信息
	 */
	public function getHouseImg()
	{
		$tempResult = $this->sdkStdResult ["houseImg"];
		return $tempResult;
	}
	
	/**
	 * 设置房屋信息
	 * 
	 * @param
	 *        	array include @see Byte[] $houseImg
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setHouseImg($houseImg)
	{
		$this->sdkStdResult ["houseImg"] = $houseImg;
	}

	private $sdkStdResult = array();

	public function getSdkStdResult()
	{
		return $this->sdkStdResult;
	}
}
