<?php

namespace moyi\umeng\brand\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandAddMonitoringResult
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
     * 此参数必填     
     */
    public function setMonitoringId( $monitoringId) 
    {
        $this->monitoringId = $monitoringId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "monitoringId", $this->stdResult )) {
    		$this->monitoringId = $this->stdResult->{"monitoringId"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "monitoringId", $this->arrayResult )) {
    		$this->monitoringId = $arrayResult['monitoringId'];
    	}
    }

}
