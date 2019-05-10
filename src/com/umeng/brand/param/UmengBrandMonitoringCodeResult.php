<?php

namespace moyi\umeng\brand\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandMonitoringCodeResult extends SDKDomain
{

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
     * @param Integer $monitoringId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setMonitoringId( $monitoringId) 
    {
        $this->monitoringId = $monitoringId;
    }
    
        	
    private $clickUrl;
    
    /**
     * @return 点击ulr
     */
    public function getClickUrl() 
    {
        return $this->clickUrl;
    }
    
    /**
     * 设置点击ulr     
     * @param String $clickUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setClickUrl($clickUrl) 
    {
        $this->clickUrl = $clickUrl;
    }
    
        	
    private $viewUrl;
    
    /**
     * @return 曝光url
     */
    public function getViewUrl()
    {
        return $this->viewUrl;
    }
    
    /**
     * 设置曝光url     
     * @param String $viewUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setViewUrl($viewUrl) 
    {
        $this->viewUrl = $viewUrl;
    }
    
        	
    private $s2sClickUrl;
    
    /**
     * @return s2s点击url
     */
    public function getS2sClickUrl()
    {
        return $this->s2sClickUrl;
    }
    
    /**
     * 设置s2s点击url     
     * @param String $s2sClickUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setS2sClickUrl($s2sClickUrl) 
    {
        $this->s2sClickUrl = $s2sClickUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "monitoringId", $this->stdResult )) {
    		$this->monitoringId = $this->stdResult->{"monitoringId"};
    	}
    	if (array_key_exists ( "clickUrl", $this->stdResult )) {
    		$this->clickUrl = $this->stdResult->{"clickUrl"};
    	}
    	if (array_key_exists ( "viewUrl", $this->stdResult )) {
    		$this->viewUrl = $this->stdResult->{"viewUrl"};
    	}
    	if (array_key_exists ( "s2sClickUrl", $this->stdResult )) {
    		$this->s2sClickUrl = $this->stdResult->{"s2sClickUrl"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "monitoringId", $this->arrayResult )) {
    		$this->monitoringId = $arrayResult['monitoringId'];
    	}
    	if (array_key_exists ( "clickUrl", $this->arrayResult )) {
    		$this->clickUrl = $arrayResult['clickUrl'];
    	}
    	if (array_key_exists ( "viewUrl", $this->arrayResult )) {
    		$this->viewUrl = $arrayResult['viewUrl'];
    	}
    	if (array_key_exists ( "s2sClickUrl", $this->arrayResult )) {
    		$this->s2sClickUrl = $arrayResult['s2sClickUrl'];
    	}
    }
 
}
