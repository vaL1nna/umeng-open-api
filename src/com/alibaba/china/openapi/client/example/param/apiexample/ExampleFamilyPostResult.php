<?php

namespace moyi\example\param\apiexample;

use moyi\client\entity\ByteArray;
use moyi\client\entity\SDKDomain;
use moyi\example\param\apiexample\ExampleFamily;

class ExampleFamilyPostResult
{
	private $result;
	
	/**
	 *
	 * @return 返回的接听信息
	 */
	public function getResult()
	{
		return $this->result;
	}
	
	/**
	 * 设置返回的接听信息
	 * 
	 * @param ExampleFamily $result
	 *        	此参数必填
	 */
	public function setResult(ExampleFamily $result)
	{
		$this->result = $result;
	}

	private $resultDesc;
	
	/**
	 *
	 * @return 返回结果描述
	 */
	public function getResultDesc()
	{
		return $this->resultDesc;
	}
	
	/**
	 * 设置返回结果描述
	 * 
	 * @param String $resultDesc
	 *        	此参数必填
	 */
	public function setResultDesc($resultDesc)
	{
		$this->resultDesc = $resultDesc;
	}

	private $stdResult;

	public function setStdResult($stdResult)
	{
		$this->stdResult = $stdResult;
		if (array_key_exists ( "result", $this->stdResult )) {
			$resultResult = $this->stdResult->{"result"};
			$this->result = new ExampleFamily ();
			$this->result->setStdResult ( $resultResult );
		}
		if (array_key_exists ( "resultDesc", $this->stdResult )) {
			$this->resultDesc = $this->stdResult->{"resultDesc"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult)
	{
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "result", $this->arrayResult )) {
			$resultResult = $arrayResult ['result'];
			$this->result = new ExampleFamily ();
			$this->result->$this->setStdResult ( $resultResult );
		}
		if (array_key_exists ( "resultDesc", $this->arrayResult )) {
			$this->resultDesc = $arrayResult ['resultDesc'];
		}
	}
}
