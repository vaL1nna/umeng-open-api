<?php

namespace moyi\umeng\uapp\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengUappDateCountInfo extends SDKDomain
{

       	
    private $dates;
    
    /**
     * @return 统计日期数组
     */
    public function getDates()
    {
        return $this->dates;
    }
    
    /**
     * 设置统计日期数组     
     * @param array include @see String[] $dates     
     * 参数示例：<pre>"2018-01-01","2018-01-02"</pre>     
     * 此参数必填     
     */
    public function setDates($dates)
    {
        $this->dates = $dates;
    }
    
        	
    private $data;
    
    /**
     * @return 统计数据数组
     */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * 设置统计数据数组     
     * @param array include @see Integer[] $data     
     * 参数示例：<pre>1234,5678</pre>     
     * 此参数必填    
     */
    public function setData($data)
    {
        $this->data = $data;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "dates", $this->stdResult )) {
    		$this->dates = $this->stdResult->{"dates"};
    	}
    	if (array_key_exists ( "data", $this->stdResult )) {
    		$this->data = $this->stdResult->{"data"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "dates", $this->arrayResult )) {
    		$this->dates = $arrayResult['dates'];
    	}
    	if (array_key_exists ( "data", $this->arrayResult )) {
    		$this->data = $arrayResult['data'];
    	}
    }
}
