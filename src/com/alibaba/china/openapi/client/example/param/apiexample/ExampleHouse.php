<?php

namespace moyi\example\param\apiexample;

use moyi\client\entity\ByteArray;
use moyi\client\entity\SDKDomain;

class ExampleHouse extends SDKDomain
{
	private $location;
	
	/**
	 *
	 * @return
	 *
	 */
	public function getLocation()
	{
		return $this->location;
	}
	
	/**
	 * 设置
	 * 
	 * @param String $location
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setLocation($location)
	{
		$this->location = $location;
	}

	private $areaSize;
	
	/**
	 *
	 * @return
	 *
	 */
	public function getAreaSize()
	{
		return $this->areaSize;
	}
	
	/**
	 * 设置
	 * 
	 * @param Integer $areaSize
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setAreaSize($areaSize)
	{
		$this->areaSize = $areaSize;
	}

	private $rent;
	
	/**
	 *
	 * @return
	 *
	 */
	public function getRent()
	{
		return $this->rent;
	}
	
	/**
	 * 设置
	 * 
	 * @param Boolean $rent
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setRent($rent)
	{
		$this->rent = $rent;
	}

	private $rooms;
	
	/**
	 *
	 * @return
	 *
	 */
	public function getRooms()
	{
		return $this->rooms;
	}
	
	/**
	 * 设置
	 * 
	 * @param Integer $rooms
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setRooms($rooms)
	{
		$this->rooms = $rooms;
	}

	private $stdResult;

	public function setStdResult($stdResult)
	{
		$this->stdResult = $stdResult;
		if (array_key_exists ( "location", $this->stdResult )) {
			$this->location = $this->stdResult->{"location"};
		}
		if (array_key_exists ( "areaSize", $this->stdResult )) {
			$this->areaSize = $this->stdResult->{"areaSize"};
		}
		if (array_key_exists ( "rent", $this->stdResult )) {
			$this->rent = $this->stdResult->{"rent"};
		}
		if (array_key_exists ( "rooms", $this->stdResult )) {
			$this->rooms = $this->stdResult->{"rooms"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult)
	{
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "location", $this->arrayResult )) {
			$this->location = $arrayResult ['location'];
		}
		if (array_key_exists ( "areaSize", $this->arrayResult )) {
			$this->areaSize = $arrayResult ['areaSize'];
		}
		if (array_key_exists ( "rent", $this->arrayResult )) {
			$this->rent = $arrayResult ['rent'];
		}
		if (array_key_exists ( "rooms", $this->arrayResult )) {
			$this->rooms = $arrayResult ['rooms'];
		}
	}
}
