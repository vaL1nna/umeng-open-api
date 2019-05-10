<?php

namespace moyi\umeng\brand\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandGetMonitoringCodeListParam 
{

        
    /**
     * @return 营销活动id
     */
    public function getCampaignId() 
    {
        $tempResult = $this->sdkStdResult["campaignId"];
        return $tempResult;
    }
    
    /**
     * 设置营销活动id     
     * @param Integer $campaignId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setCampaignId($campaignId) 
    {
        $this->sdkStdResult["campaignId"] = $campaignId;
    }
    
        
    /**
     * @return 第几页，默认第1页
     */
    public function getPageNum() 
    {
        $tempResult = $this->sdkStdResult["pageNum"];
        return $tempResult;
    }
    
    /**
     * 设置第几页，默认第1页     
     * @param Integer $pageNum     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setPageNum($pageNum)
    {
        $this->sdkStdResult["pageNum"] = $pageNum;
    }
    
        
    /**
     * @return 单页条数，默认10条
     */
    public function getPageSize()
    {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置单页条数，默认10条     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setPageSize($pageSize)
    {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult = array();
    
    public function getSdkStdResult() 
    {
    	return $this->sdkStdResult;
    }

}
