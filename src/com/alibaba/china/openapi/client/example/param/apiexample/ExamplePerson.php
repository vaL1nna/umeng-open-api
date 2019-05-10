<?php

namespace moyi\example\param\apiexample;

use moyi\client\entity\ByteArray; 
use moyi\client\entity\SDKDomain;

class ExamplePerson extends SDKDomain
{
	private $name;
	
	/**
	 *
	 * @return
	 *
	 */
	public function getName()
	{
		return $this->name;
	}
	
	/**
	 * 设置
	 * 
	 * @param String $name
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	private $age;
	
	/**
	 *
	 * @return
	 *
	 */
	public function getAge()
	{
		return $this->age;
	}
	
	/**
	 * 设置
	 * 
	 * @param Integer $age
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setAge($age)
	{
		$this->age = $age;
	}

	private $birthday;
	
	/**
	 *
	 * @return
	 *
	 */
	public function getBirthday()
	{
		return $this->birthday;
	}
	
	/**
	 * 设置
	 * 
	 * @param Date $birthday
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setBirthday($birthday)
	{
		$this->birthday = $birthday;
	}

	private $mobileNumber;
	
	/**
	 *
	 * @return
	 *
	 */
	public function getMobileNumber()
	{
		return $this->mobileNumber;
	}
	
	/**
	 * 设置
	 * 
	 * @param String $mobileNumber
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setMobileNumber($mobileNumber)
	{
		$this->mobileNumber = $mobileNumber;
	}

	private $stdResult;

	public function setStdResult($stdResult)
	{
		$this->stdResult = $stdResult;
		if (array_key_exists ( "name", $this->stdResult )) {
			$this->name = $this->stdResult->{"name"};
		}
		if (array_key_exists ( "age", $this->stdResult )) {
			$this->age = $this->stdResult->{"age"};
		}
		if (array_key_exists ( "birthday", $this->stdResult )) {
			$this->birthday = $this->stdResult->{"birthday"};
		}
		if (array_key_exists ( "mobileNumber", $this->stdResult )) {
			$this->mobileNumber = $this->stdResult->{"mobileNumber"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult)
	{
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "name", $this->arrayResult )) {
			$this->name = $arrayResult ['name'];
		}
		if (array_key_exists ( "age", $this->arrayResult )) {
			$this->age = $arrayResult ['age'];
		}
		if (array_key_exists ( "birthday", $this->arrayResult )) {
			$this->birthday = $arrayResult ['birthday'];
		}
		if (array_key_exists ( "mobileNumber", $this->arrayResult )) {
			$this->mobileNumber = $arrayResult ['mobileNumber'];
		}
	}
}
