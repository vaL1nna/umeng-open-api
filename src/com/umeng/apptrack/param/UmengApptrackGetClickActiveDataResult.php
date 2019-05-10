<?php

namespace moyi\umeng\apptrack\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengApptrackGetClickActiveDataResult
{

        	
    private $clickPv;
    
    /**
     * @return 点击pv
     */
    public function getClickPv()
    {
        return $this->clickPv;
    }
    
    /**
     * 设置点击pv     
     * @param Long $clickPv        
     * 此参数必填     
     */
    public function setClickPv($clickPv) 
    {
        $this->clickPv = $clickPv;
    }
    
        	
    private $clickUv;
    
    /**
     * @return 点击uv
     */
    public function getClickUv()
    {
        return $this->clickUv;
    }
    
    /**
     * 设置点击uv     
     * @param Long $clickUv     
     * 此参数必填     
     */
    public function setClickUv($clickUv)
    {
        $this->clickUv = $clickUv;
    }
    
        	
    private $activateUv;
    
    /**
     * @return 激活真人数
     */
    public function getActivateUv()
    {
        return $this->activateUv;
    }
    
    /**
     * 设置激活真人数     
     * @param Long $activateUv     
     * 此参数必填     
     */
    public function setActivateUv($activateUv)
    {
        $this->activateUv = $activateUv;
    }
    
        	
    private $activateRate;
    
    /**
     * @return 点击激活比率
     */
    public function getActivateRate() 
    {
        return $this->activateRate;
    }
    
    /**
     * 设置点击激活比率     
     * @param BigDecimal $activateRate     
     * 此参数必填     
     */
    public function setActivateRate($activateRate)
    {
        $this->activateRate = $activateRate;
    }
    
        	
    private $totalActivateUv;
    
    /**
     * @return 总激活
     */
    public function getTotalActivateUv() 
    {
        return $this->totalActivateUv;
    }
    
    /**
     * 设置总激活     
     * @param Long $totalActivateUv       
     * 此参数必填     
     */
    public function setTotalActivateUv($totalActivateUv) 
    {
        $this->totalActivateUv = $totalActivateUv;
    }
    
        	
    private $activateDevice;
    
    /**
     * @return 点击激活
     */
    public function getActivateDevice() 
    {
        return $this->activateDevice;
    }
    
    /**
     * 设置点击激活     
     * @param Long $activateDevice     
     * 此参数必填     
     */
    public function setActivateDevice( $activateDevice) 
    {
        $this->activateDevice = $activateDevice;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) 
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "clickPv", $this->stdResult )) {
    		$this->clickPv = $this->stdResult->{"clickPv"};
    	}
    	if (array_key_exists ( "clickUv", $this->stdResult )) {
    		$this->clickUv = $this->stdResult->{"clickUv"};
    	}
    	if (array_key_exists ( "activateUv", $this->stdResult )) {
    		$this->activateUv = $this->stdResult->{"activateUv"};
    	}
    	if (array_key_exists ( "activateRate", $this->stdResult )) {
    		$this->activateRate = $this->stdResult->{"activateRate"};
    	}
    	if (array_key_exists ( "totalActivateUv", $this->stdResult )) {
    		$this->totalActivateUv = $this->stdResult->{"totalActivateUv"};
    	}
    	if (array_key_exists ( "activateDevice", $this->stdResult )) {
    		$this->activateDevice = $this->stdResult->{"activateDevice"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "clickPv", $this->arrayResult )) {
    		$this->clickPv = $arrayResult['clickPv'];
    	}
    	if (array_key_exists ( "clickUv", $this->arrayResult )) {
    		$this->clickUv = $arrayResult['clickUv'];
    	}
    	if (array_key_exists ( "activateUv", $this->arrayResult )) {
    		$this->activateUv = $arrayResult['activateUv'];
    	}
    	if (array_key_exists ( "activateRate", $this->arrayResult )) {
    		$this->activateRate = $arrayResult['activateRate'];
    	}
    	if (array_key_exists ( "totalActivateUv", $this->arrayResult )) {
    		$this->totalActivateUv = $arrayResult['totalActivateUv'];
    	}
    	if (array_key_exists ( "activateDevice", $this->arrayResult )) {
    		$this->activateDevice = $arrayResult['activateDevice'];
    	}
    }

}
