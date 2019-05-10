<?php

namespace moyi\umeng\brand\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandEditCampaignParam
{

        
    /**
     * @return 活动id
     */
    public function getCampaignId() 
    {
        $tempResult = $this->sdkStdResult["campaignId"];
        return $tempResult;
    }
    
    /**
     * 设置活动id     
     * @param Integer $campaignId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setCampaignId($campaignId) 
    {
        $this->sdkStdResult["campaignId"] = $campaignId;
    }
    
        
    /**
     * @return 活动名称，长度不大于50个字符
     */
    public function getCampaignName() 
    {
        $tempResult = $this->sdkStdResult["campaignName"];
        return $tempResult;
    }
    
    /**
     * 设置活动名称，长度不大于50个字符     
     * @param String $campaignName     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setCampaignName($campaignName) 
    {
        $this->sdkStdResult["campaignName"] = $campaignName;
    }
    
        
    /**
     * @return 开始日期，格式：yyyy-MM-dd
     */
    public function getStartDay() 
    {
        $tempResult = $this->sdkStdResult["startDay"];
        return $tempResult;
    }
    
    /**
     * 设置开始日期，格式：yyyy-MM-dd     
     * @param String $startDay     
     * 参数示例：<pre>2018-02-08</pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setStartDay($startDay) 
    {
        $this->sdkStdResult["startDay"] = $startDay;
    }
    
        
    /**
     * @return 结束日期，格式：yyyy-MM-dd
     */
    public function getEndDay() 
    {
        $tempResult = $this->sdkStdResult["endDay"];
        return $tempResult;
    }
    
    /**
     * 设置结束日期，格式：yyyy-MM-dd     
     * @param String $endDay     
     * 参数示例：<pre>2018-02-08</pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setEndDay($endDay)
    {
        $this->sdkStdResult["endDay"] = $endDay;
    }
    
        
    /**
     * @return 自定义字段，格式如：{"k1":"v1","k2":"v2"}
     */
    public function getCustomizeInfos() 
    {
        $tempResult = $this->sdkStdResult["customizeInfos"];
        return $tempResult;
    }
    
    /**
     * 设置自定义字段，格式如：{"k1":"v1","k2":"v2"}     
     * @param String $customizeInfos     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setCustomizeInfos($customizeInfos)
    {
        $this->sdkStdResult["customizeInfos"] = $customizeInfos;
    }
    
        
    private $sdkStdResult = array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }

}
