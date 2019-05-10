<?php

namespace moyi\umeng\brand\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandGetMonitoringCodeParam 
{

        
    /**
     * @return 监测单元id
     */
    public function getMonitoringId() 
    {
        $tempResult = $this->sdkStdResult["monitoringId"];
        return $tempResult;
    }
    
    /**
     * 设置监测单元id     
     * @param Integer $monitoringId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setMonitoringId($monitoringId) 
    {
        $this->sdkStdResult["monitoringId"] = $monitoringId;
    }
    
        
    private $sdkStdResult = array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }

}
