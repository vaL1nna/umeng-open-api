<?php

namespace moyi\umeng\apptrack\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengApptrackGetStayTrendDataParam 
{

        
    /**
     * @return 计划id
     */
    public function getPlanId() 
    {
        $tempResult = $this->sdkStdResult["planId"];
        return $tempResult;
    }
    
    /**
     * 设置计划id     
     * @param Long $planId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setPlanId($planId) 
    {
        $this->sdkStdResult["planId"] = $planId;
    }
    
        
    /**
     * @return 单元id
     */
    public function getUnitId() 
    {
        $tempResult = $this->sdkStdResult["unitId"];
        return $tempResult;
    }
    
    /**
     * 设置单元id     
     * @param Long $unitId     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre>null</pre>
     */
    public function setUnitId($unitId)
    {
        $this->sdkStdResult["unitId"] = $unitId;
    }
    
        
    /**
     * @return 查询日期
     */
    public function getQueryDate() 
    {
        $tempResult = $this->sdkStdResult["queryDate"];
        return $tempResult;
    }
    
    /**
     * 设置查询日期     
     * @param String $queryDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setQueryDate($queryDate) 
    {
        $this->sdkStdResult["queryDate"] = $queryDate;
    }
    
        
    private $sdkStdResult = array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }

}
