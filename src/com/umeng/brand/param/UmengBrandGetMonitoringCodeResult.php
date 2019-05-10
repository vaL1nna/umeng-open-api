<?php

namespace moyi\umeng\brand\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandGetMonitoringCodeResult 
{

        	
    private $clickUrl;
    
    /**
     * @return 点击跳转链接
     */
    public function getClickUrl() 
    {
        return $this->clickUrl;
    }
    
    /**
     * 设置点击跳转链接     
     * @param String $clickUrl     
     * 此参数必填     
     */
    public function setClickUrl($clickUrl) 
    {
        $this->clickUrl = $clickUrl;
    }
    
        	
    private $s2sClickUrl;
    
    /**
     * @return 点击s2s链接
     */
    public function getS2sClickUrl() 
    {
        return $this->s2sClickUrl;
    }
    
    /**
     * 设置点击s2s链接     
     * @param String $s2sClickUrl     
     * 此参数必填     
     */
    public function setS2sClickUrl($s2sClickUrl) 
    {
        $this->s2sClickUrl = $s2sClickUrl;
    }
    
        	
    private $viewUrl;
    
    /**
     * @return 曝光链接
     */
    public function getViewUrl() 
    {
        return $this->viewUrl;
    }
    
    /**
     * 设置曝光链接     
     * @param String $viewUrl     
     * 此参数必填     
     */
    public function setViewUrl($viewUrl) 
    {
        $this->viewUrl = $viewUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) 
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "clickUrl", $this->stdResult )) {
    		$this->clickUrl = $this->stdResult->{"clickUrl"};
    	}
    	if (array_key_exists ( "s2sClickUrl", $this->stdResult )) {
    		$this->s2sClickUrl = $this->stdResult->{"s2sClickUrl"};
    	}
    	if (array_key_exists ( "viewUrl", $this->stdResult )) {
    		$this->viewUrl = $this->stdResult->{"viewUrl"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "clickUrl", $this->arrayResult )) {
    		$this->clickUrl = $arrayResult['clickUrl'];
    	}
    	if (array_key_exists ( "s2sClickUrl", $this->arrayResult )) {
    		$this->s2sClickUrl = $arrayResult['s2sClickUrl'];
    	}
    	if (array_key_exists ( "viewUrl", $this->arrayResult )) {
    		$this->viewUrl = $arrayResult['viewUrl'];
    	}
    }

}
