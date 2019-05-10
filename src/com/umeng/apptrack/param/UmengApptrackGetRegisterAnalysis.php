<?php

namespace moyi\umeng\apptrack\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengApptrackGetRegisterAnalysis extends SDKDomain 
{

       	
    private $registerId;
    
    /**
     * @return 注册id
     */
    public function getRegisterId() 
    {
        return $this->registerId;
    }
    
    /**
     * 设置注册id     
     * @param String $registerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setRegisterId($registerId) 
    {
        $this->registerId = $registerId;
    }
    
        	
    private $eventDs;
    
    /**
     * @return 注册日期
     */
    public function getEventDs() 
    {
        return $this->eventDs;
    }
    
    /**
     * 设置注册日期     
     * @param String $eventDs     
     * 参数示例：<pre></pre>     
     * 此参数必填    
     */
    public function setEventDs($eventDs) 
    {
        $this->eventDs = $eventDs;
    }
    
        	
    private $activateDs;
    
    /**
     * @return 激活日期
     */
    public function getActivateDs() 
    {
        return $this->activateDs;
    }
    
    /**
     * 设置激活日期     
     * @param String $activateDs     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setActivateDs($activateDs) 
    {
        $this->activateDs = $activateDs;
    }
    
        	
    private $clickDs;
    
    /**
     * @return 点击日期
     */
    public function getClickDs() 
    {
        return $this->clickDs;
    }
    
    /**
     * 设置点击日期     
     * @param String $clickDs     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setClickDs($clickDs) 
    {
        $this->clickDs = $clickDs;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) 
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "registerId", $this->stdResult )) {
    		$this->registerId = $this->stdResult->{"registerId"};
    	}
    	if (array_key_exists ( "eventDs", $this->stdResult )) {
    		$this->eventDs = $this->stdResult->{"eventDs"};
    	}
    	if (array_key_exists ( "activateDs", $this->stdResult )) {
    		$this->activateDs = $this->stdResult->{"activateDs"};
    	}
    	if (array_key_exists ( "clickDs", $this->stdResult )) {
    		$this->clickDs = $this->stdResult->{"clickDs"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "registerId", $this->arrayResult )) {
    		$this->registerId = $arrayResult['registerId'];
    	}
    	if (array_key_exists ( "eventDs", $this->arrayResult )) {
    		$this->eventDs = $arrayResult['eventDs'];
    	}
    	if (array_key_exists ( "activateDs", $this->arrayResult )) {
    		$this->activateDs = $arrayResult['activateDs'];
    	}
    	if (array_key_exists ( "clickDs", $this->arrayResult )) {
    		$this->clickDs = $arrayResult['clickDs'];
    	}
    }
 
}
