<?php

namespace moyi\umeng\brand\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandMonitoringResult extends SDKDomain 
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
     * 此参数必填     */
    public function setMonitoringId($monitoringId) 
    {
        $this->monitoringId = $monitoringId;
    }
    
        	
    private $code;
    
    /**
     * @return 状态码 0 正常,其他失败
     */
    public function getCode() 
    {
        return $this->code;
    }
    
    /**
     * 设置状态码 0 正常,其他失败     
     * @param Integer $code     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setCode($code) 
    {
        $this->code = $code;
    }
    
        	
    private $message;
    
    /**
     * @return 错误信息
     */
    public function getMessage()
    {
        return $this->message;
    }
    
    /**
     * 设置错误信息     
     * @param String $message     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setMessage($message) 
    {
        $this->message = $message;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "monitoringId", $this->stdResult )) {
    	    $this->monitoringId = $this->stdResult->{"monitoringId"};
    	}
    	if (array_key_exists ( "code", $this->stdResult )) {
    		$this->code = $this->stdResult->{"code"};
    	}
    	if (array_key_exists ( "message", $this->stdResult )) {
    		$this->message = $this->stdResult->{"message"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "monitoringId", $this->arrayResult )) {
    		$this->monitoringId = $arrayResult['monitoringId'];
    	}
    	if (array_key_exists ( "code", $this->arrayResult )) {
    		$this->code = $arrayResult['code'];
    	}
    	if (array_key_exists ( "message", $this->arrayResult )) {
    		$this->message = $arrayResult['message'];
    	}
    }
  
}
