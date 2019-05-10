<?php

namespace moyi\client\entity;

class ByteArray
{

	private $bytesValue;
	
	public function setBytesValue($bytesValue)
	{
		$this->bytesValue = $bytesValue;
	}
	
	public function getByteValue()
	{
		return $this->bytesValue;
	}
}
