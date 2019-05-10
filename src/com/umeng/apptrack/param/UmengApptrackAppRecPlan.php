<?php

namespace moyi\umeng\apptrack\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengApptrackAppRecPlan extends SDKDomain
{

       	
    private $planId;
    
    /**
     * @return 计划Id
     */
    public function getPlanId()
    {
        return $this->planId;
    }
    
    /**
     * 设置计划Id     
     * @param Integer $planId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setPlanId($planId)
    {
        $this->planId = $planId;
    }
    
        	
    private $planName;
    
    /**
     * @return 计划名称
     */
    public function getPlanName()
    {
        return $this->planName;
    }
    
    /**
     * 设置计划名称     
     * @param String $planName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setPlanName($planName) 
    {
        $this->planName = $planName;
    }
    
        	
    private $startDay;
    
    /**
     * @return 计划开始日期
     */
    public function getStartDay()
    {
        return $this->startDay;
    }
    
    /**
     * 设置计划开始日期     
     * @param String $startDay     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setStartDay($startDay)
    {
        $this->startDay = $startDay;
    }
    
        	
    private $endDay;
    
    /**
     * @return 计划结束日期
     */
    public function getEndDay() 
    {
        return $this->endDay;
    }
    
    /**
     * 设置计划结束日期     
     * @param String $endDay     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setEndDay($endDay) 
    {
        $this->endDay = $endDay;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "planId", $this->stdResult )) {
    		$this->planId = $this->stdResult->{"planId"};
    	}
    	if (array_key_exists ( "planName", $this->stdResult )) {
    		$this->planName = $this->stdResult->{"planName"};
    	}
    	if (array_key_exists ( "startDay", $this->stdResult )) {
    		$this->startDay = $this->stdResult->{"startDay"};
    	}
    	if (array_key_exists ( "endDay", $this->stdResult )) {
    		$this->endDay = $this->stdResult->{"endDay"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "planId", $this->arrayResult )) {
    		$this->planId = $arrayResult['planId'];
    	}
    	if (array_key_exists ( "planName", $this->arrayResult )) {
    		$this->planName = $arrayResult['planName'];
    	}
    	if (array_key_exists ( "startDay", $this->arrayResult )) {
    		$this->startDay = $arrayResult['startDay'];
    	}
    	if (array_key_exists ( "endDay", $this->arrayResult )) {
    		$this->endDay = $arrayResult['endDay'];
    	}
    }
  
}
