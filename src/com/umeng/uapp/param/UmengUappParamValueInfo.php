<?php

namespace moyi\umeng\uapp\param; 

use moyi\client\entity\SDKDomain;

class UmengUappParamValueInfo extends SDKDomain
{

       	
    private $name;
    
    /**
     * @return 参数值名称
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * 设置参数值名称     
     * @param String $name     
     * 参数示例：<pre>%e7%a4%ba%e4%be%8b（示例）</pre>     
     * 此参数必填     
     */
    public function setName($name) 
    {
        $this->name = $name;
    }
    
        	
    private $count;
    
    /**
     * @return 统计的消息数
     */
    public function getCount() 
    {
        return $this->count;
    }
    
    /**
     * 设置统计的消息数     
     * @param Integer $count     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setCount($count) 
    {
        $this->count = $count;
    }
    
        	
    private $percent;
    
    /**
     * @return 当前事件下此参数值消息数的占比
     */
    public function getPercent()
    {
        return $this->percent;
    }
    
    /**
     * 设置当前事件下此参数值消息数的占比     
     * @param Double $percent     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setPercent($percent) 
    {
        $this->percent = $percent;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "name", $this->stdResult )) {
    		$this->name = $this->stdResult->{"name"};
    	}
    	if (array_key_exists ( "count", $this->stdResult )) {
    		$this->count = $this->stdResult->{"count"};
    	}
    	if (array_key_exists ( "percent", $this->stdResult )) {
    		$this->percent = $this->stdResult->{"percent"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "name", $this->arrayResult )) {
    		$this->name = $arrayResult['name'];
    	}
    	if (array_key_exists ( "count", $this->arrayResult )) {
    		$this->count = $arrayResult['count'];
    	}
    	if (array_key_exists ( "percent", $this->arrayResult )) {
    		$this->percent = $arrayResult['percent'];
    	}
    }
  
}
