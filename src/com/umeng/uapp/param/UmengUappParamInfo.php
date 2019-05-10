<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengUappParamInfo extends SDKDomain
{

       	
    private $paramId;
    
    /**
     * @return 参数ID
     */
    public function getParamId()
    {
        return $this->paramId;
    }
    
    /**
     * 设置参数ID     
     * @param String $paramId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setParamId($paramId)
    {
        $this->paramId = $paramId;
    }
    
        	
    private $name;
    
    /**
     * @return 参数名称
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * 设置参数名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填    
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
        	
    private $displayName;
    
    /**
     * @return 参数显示名称
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }
    
    /**
     * 设置参数显示名称     
     * @param String $displayName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "paramId", $this->stdResult )) {
    		$this->paramId = $this->stdResult->{"paramId"};
    	}
    	if (array_key_exists ( "name", $this->stdResult )) {
    		$this->name = $this->stdResult->{"name"};
    	}
    	if (array_key_exists ( "displayName", $this->stdResult )) {
    		$this->displayName = $this->stdResult->{"displayName"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "paramId", $this->arrayResult )) {
    		$this->paramId = $arrayResult['paramId'];
    	}
    	if (array_key_exists ( "name", $this->arrayResult )) {
    		$this->name = $arrayResult['name'];
    	}
    	if (array_key_exists ( "displayName", $this->arrayResult )) {
    		$this->displayName = $arrayResult['displayName'];
    	}
    }
 
   
}
