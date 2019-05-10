<?php

namespace moyi\client\entity;

class ParentResult
{
	
	private $stdResult;
	
	public function setStdResult($stdResult)
	{
		$this->stdResult = $stdResult;
	}

	public function getStdResult()
	{
		return $this->stdResult;
	}

	private $responseStatus;
}
