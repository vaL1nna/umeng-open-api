<?php

namespace moyi\umeng\uapp\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengUappGetAppCountResult
{

        	
    private $count;
    
    /**
     * @return 应用数量
     */
    public function getCount() 
    {
        return $this->count;
    }
    
    /**
     * 设置应用数量     
     * @param Integer $count     
     * 此参数必填     
     */
    public function setCount($count)
    {
        $this->count = $count;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "count", $this->stdResult )) {
    		$this->count = $this->stdResult->{"count"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "count", $this->arrayResult )) {
    		$this->count = $arrayResult['count'];
    	}
    }

}
