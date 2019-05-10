<?php

namespace moyi\umeng\brand\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandGetMonitoringData extends SDKDomain
{

    private $impressionPv;
    
    /**
     * @return 曝光pv
     */
    public function getImpressionPv() 
    {
        return $this->impressionPv;
    }
    
    /**
     * 设置曝光pv     
     * @param Long $impressionPv     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setImpressionPv($impressionPv) 
    {
        $this->impressionPv = $impressionPv;
    }
    
        	
    private $impressionUv;
    
    /**
     * @return 曝光uv
     */
    public function getImpressionUv()
    {
        return $this->impressionUv;
    }
    
    /**
     * 设置曝光uv     
     * @param Long $impressionUv     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setImpressionUv($impressionUv)
    {
        $this->impressionUv = $impressionUv;
    }
    
        	
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
     * 参数示例：<pre></pre>     
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
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setClickUv($clickUv) 
    {
        $this->clickUv = $clickUv;
    }
    
        	
    private $date;
    
    /**
     * @return 日期
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * 设置日期     
     * @param String $date     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setDate($date) 
    {
        $this->date = $date;
    }
    
        	
    private $monitoringId;
    
    /**
     * @return 监测单元id
     */
    public function getMonitoringId() 
    {
        return $this->monitoringId;
    }
    
    /**
     * 设置监测单元id     
     * @param Long $monitoringId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setMonitoringId($monitoringId)
    {
        $this->monitoringId = $monitoringId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) 
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "impressionPv", $this->stdResult )) {
    		$this->impressionPv = $this->stdResult->{"impressionPv"};
    	}
    	if (array_key_exists ( "impressionUv", $this->stdResult )) {
    		$this->impressionUv = $this->stdResult->{"impressionUv"};
    	}
    	if (array_key_exists ( "clickPv", $this->stdResult )) {
    		$this->clickPv = $this->stdResult->{"clickPv"};
    	}
    	if (array_key_exists ( "clickUv", $this->stdResult )) {
    		$this->clickUv = $this->stdResult->{"clickUv"};
    	}
    	if (array_key_exists ( "date", $this->stdResult )) {
    		$this->date = $this->stdResult->{"date"};
    	}
    	if (array_key_exists ( "monitoringId", $this->stdResult )) {
    		$this->monitoringId = $this->stdResult->{"monitoringId"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "impressionPv", $this->arrayResult )) {
    		$this->impressionPv = $arrayResult['impressionPv'];
    	}
    	if (array_key_exists ( "impressionUv", $this->arrayResult )) {
    		$this->impressionUv = $arrayResult['impressionUv'];
    	}
    	if (array_key_exists ( "clickPv", $this->arrayResult )) {
    		$this->clickPv = $arrayResult['clickPv'];
    	}
    	if (array_key_exists ( "clickUv", $this->arrayResult )) {
    		$this->clickUv = $arrayResult['clickUv'];
    	}
    	if (array_key_exists ( "date", $this->arrayResult )) {
    		$this->date = $arrayResult['date'];
    	}
    	if (array_key_exists ( "monitoringId", $this->arrayResult )) {
    		$this->monitoringId = $arrayResult['monitoringId'];
    	}
    }
   
}
