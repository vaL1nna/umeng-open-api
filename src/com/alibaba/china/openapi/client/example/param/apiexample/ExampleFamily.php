<?php

namespace moyi\example\param\apiexample;

use moyi\client\entity\ByteArray; 
use moyi\client\entity\SDKDomain;
use moyi\example\param\apiexample\ExamplePerson;
use moyi\example\param\apiexample\ExampleCar;
use moyi\example\param\apiexample\ExampleHouse;

class ExampleFamily extends SDKDomain
{
	private $familyNumber;
	
	/**
	 *
	 * @return 家庭编号
	 */
	public function getFamilyNumber()
	{
		return $this->familyNumber;
	}
	
	/**
	 * 设置家庭编号
	 * 
	 * @param Integer $familyNumber
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setFamilyNumber($familyNumber)
	{
		$this->familyNumber = $familyNumber;
	}

	private $father;
	
	/**
	 *
	 * @return 父亲对象，可以为空
	 */
	public function getFather()
	{
		return $this->father;
	}
	
	/**
	 * 设置父亲对象，可以为空
	 * 
	 * @param ExamplePerson $father
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setFather(ExamplePerson $father)
	{
		$this->father = $father;
	}

	private $mother;
	
	/**
	 *
	 * @return 母亲对象，可以为空
	 */
	public function getMother()
	{
		return $this->mother;
	}
	
	/**
	 * 设置母亲对象，可以为空
	 * 
	 * @param ExamplePerson $mother
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setMother(ExamplePerson $mother)
	{
		$this->mother = $mother;
	}

	private $children;
	
	/**
	 *
	 * @return 孩子列表
	 */
	public function getChildren()
	{
		return $this->children;
	}
	
	/**
	 * 设置孩子列表
	 * 
	 * @param
	 *        	array include @see ExamplePerson[] $children
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setChildren(ExamplePerson $children)
	{
		$this->children = $children;
	}

	private $ownedCars;
	
	/**
	 *
	 * @return 拥有的汽车信息
	 */
	public function getOwnedCars()
	{
		return $this->ownedCars;
	}
	
	/**
	 * 设置拥有的汽车信息
	 * 
	 * @param
	 *        	array include @see ExampleCar[] $ownedCars
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setOwnedCars(ExampleCar $ownedCars)
	{
		$this->ownedCars = $ownedCars;
	}

	private $myHouse;
	
	/**
	 *
	 * @return 所住的房屋信息
	 */
	public function getMyHouse()
	{
		return $this->myHouse;
	}
	
	/**
	 * 设置所住的房屋信息
	 * 
	 * @param ExampleHouse $myHouse
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setMyHouse(ExampleHouse $myHouse)
	{
		$this->myHouse = $myHouse;
	}

	private $stdResult;

	public function setStdResult($stdResult)
	{
		$this->stdResult = $stdResult;
		$object =  json_encode ( $stdResult );
		if (array_key_exists ( "familyNumber", $this->stdResult )) {
			$this->familyNumber = $this->stdResult->{"familyNumber"};
		}
		if (array_key_exists ( "father", $this->stdResult )) {
			$fatherResult = $this->stdResult->{"father"};
			$this->father = new ExamplePerson ();
			$this->father->setStdResult ( $fatherResult );
		}
		if (array_key_exists ( "mother", $this->stdResult )) {
			$motherResult = $this->stdResult->{"mother"};
			$this->mother = new ExamplePerson ();
			$this->mother->setStdResult ( $motherResult );
		}
		if (array_key_exists ( "children", $this->stdResult )) {
			$childrenResult = $this->stdResult->{"children"};
			$object = json_decode ( json_encode ( $childrenResult ), true );
			$this->children = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new ArrayObject ( $object [$i] );
				$ExamplePersonResult = new ExamplePerson ();
				$ExamplePersonResult->setArrayResult ( $arrayobject );
				$this->children [$i] = $ExamplePersonResult;
			}
		}
		if (array_key_exists ( "ownedCars", $this->stdResult )) {
			$ownedCarsResult = $this->stdResult->{"ownedCars"};
			$object = json_decode ( json_encode ( $ownedCarsResult ), true );
			$this->ownedCars = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new ArrayObject ( $object [$i] );
				$ExampleCarResult = new ExampleCar ();
				$ExampleCarResult->setArrayResult ( $arrayobject );
				$this->ownedCars [$i] = $ExampleCarResult;
			}
		}
		if (array_key_exists ( "myHouse", $this->stdResult )) {
			$myHouseResult = $this->stdResult->{"myHouse"};
			$this->myHouse = new ExampleHouse ();
			$this->myHouse->setStdResult ( $myHouseResult );
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult)
	{
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "familyNumber", $this->arrayResult )) {
			$this->familyNumber = $arrayResult ['familyNumber'];
		}
		if (array_key_exists ( "father", $this->arrayResult )) {
			$fatherResult = $arrayResult ['father'];
			$this->father = new ExamplePerson ();
			$this->father->$this->setStdResult ( $fatherResult );
		}
		if (array_key_exists ( "mother", $this->arrayResult )) {
			$motherResult = $arrayResult ['mother'];
			$this->mother = new ExamplePerson ();
			$this->mother->$this->setStdResult ( $motherResult );
		}
		if (array_key_exists ( "children", $this->arrayResult )) {
			$childrenResult = $arrayResult ['children'];
			$this->children = ExamplePerson ();
			$this->children->$this->setStdResult ( $childrenResult );
		}
		if (array_key_exists ( "ownedCars", $this->arrayResult )) {
			$ownedCarsResult = $arrayResult ['ownedCars'];
			$this->ownedCars = ExampleCar ();
			$this->ownedCars->$this->setStdResult ( $ownedCarsResult );
		}
		if (array_key_exists ( "myHouse", $this->arrayResult )) {
			$myHouseResult = $arrayResult ['myHouse'];
			$this->myHouse = new ExampleHouse ();
			$this->myHouse->$this->setStdResult ( $myHouseResult );
		}
	}
}
