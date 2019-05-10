<?php

namespace moyi\umeng\apptrack\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengApptrackAppEvent extends SDKDomain
{
 	
    private $eventName;
    
    /**
     * @return 自定义事件名称
     */
    public function getEventName() 
    {
        return $this->eventName;
    }
    
    /**
     * 设置自定义事件名称     
     * @param String $eventName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setEventName($eventName) 
    {
        $this->eventName = $eventName;
    }
    
        	
    private $eventNumber;
    
    /**
     * @return 自定义事件值
     */
    public function getEventNumber() 
    {
        return $this->eventNumber;
    }
    
    /**
     * 设置自定义事件值     
     * @param Long $eventNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setEventNumber($eventNumber) 
    {
        $this->eventNumber = $eventNumber;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "eventName", $this->stdResult )) {
    		$this->eventName = $this->stdResult->{"eventName"};
    	}
    	if (array_key_exists ( "eventNumber", $this->stdResult )) {
    		$this->eventNumber = $this->stdResult->{"eventNumber"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "eventName", $this->arrayResult )) {
    		$this->eventName = $arrayResult['eventName'];
    	}
    	if (array_key_exists ( "eventNumber", $this->arrayResult )) {
    		$this->eventNumber = $arrayResult['eventNumber'];
    	}
    }
   
}
