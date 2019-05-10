<?php

namespace moyi\umeng\brand\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandAddCampaignParam
{

        
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
     * 此参数必填     
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
     * 此参数必填     
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
     * 此参数必填     
     */
    public function setEndDay($endDay)
    {
        $this->sdkStdResult["endDay"] = $endDay;
    }
    
        
    /**
     * @return 转化周期（1：触达后续15天 2：触达后续30天 3：触达后续60天）
     */
    public function getConvertType() 
    {
        $tempResult = $this->sdkStdResult["convertType"];
        return $tempResult;
    }
    
    /**
     * 设置转化周期（1：触达后续15天 2：触达后续30天 3：触达后续60天）     
     * @param Integer $convertType     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setConvertType($convertType)
    {
        $this->sdkStdResult["convertType"] = $convertType;
    }
    
        
    /**
     * @return 地区匹配ip库（1：阿里IP库2：广协IP库）
     */
    public function getIpType() 
    {
        $tempResult = $this->sdkStdResult["ipType"];
        return $tempResult;
    }
    
    /**
     * 设置地区匹配ip库（1：阿里IP库2：广协IP库）     
     * @param Integer $ipType     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setIpType($ipType)
    {
        $this->sdkStdResult["ipType"] = $ipType;
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
