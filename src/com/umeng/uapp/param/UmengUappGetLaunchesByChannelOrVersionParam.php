<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengUappGetLaunchesByChannelOrVersionParam
{

        
    /**
     * @return 应用ID
     */
    public function getAppkey()
    {
        $tempResult = $this->sdkStdResult["appkey"];
        return $tempResult;
    }
    
    /**
     * 设置应用ID     
     * @param String $appkey     
     * 参数示例：<pre></pre>     
     * 此参数必填    
     */
    public function setAppkey($appkey)
    {
        $this->sdkStdResult["appkey"] = $appkey;
    }
    
        
    /**
     * @return 查询起始日期
     */
    public function getStartDate() 
    {
        $tempResult = $this->sdkStdResult["startDate"];
        return $tempResult;
    }
    
    /**
     * 设置查询起始日期     
     * @param String $startDate     
     * 参数示例：<pre>2018-01-01</pre>     
     * 此参数必填    
     */
    public function setStartDate($startDate)
    {
        $this->sdkStdResult["startDate"] = $startDate;
    }
    
        
    /**
     * @return 查询截止日期
     */
    public function getEndDate()
    {
        $tempResult = $this->sdkStdResult["endDate"];
        return $tempResult;
    }
    
    /**
     * 设置查询截止日期     
     * @param String $endDate     
     * 参数示例：<pre>2018-01-01</pre>     
     * 此参数必填     
     */
    public function setEndDate($endDate)
    {
        $this->sdkStdResult["endDate"] = $endDate;
    }
    
        
    /**
     * @return 查询类型（按日daily,按周weekly,按月monthly 查询）
     */
    public function getPeriodType()
    {
        $tempResult = $this->sdkStdResult["periodType"];
        return $tempResult;
    }
    
    /**
     * 设置查询类型（按日daily,按周weekly,按月monthly 查询）     
     * @param String $periodType     
     * 参数示例：<pre>daily</pre>     
     * 此参数必填     
     */
    public function setPeriodType($periodType)
    {
        $this->sdkStdResult["periodType"] = $periodType;
    }
    
        
    /**
     * @return 渠道名称（App%20Store）
     */
    public function getChannels()
    {
        $tempResult = $this->sdkStdResult["channels"];
        return $tempResult;
    }
    
    /**
     * 设置渠道名称（App%20Store）     
     * @param String $channels     
     * 参数示例：<pre>App%20Store</pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setChannels($channels)
    {
        $this->sdkStdResult["channels"] = $channels;
    }
    
        
    /**
     * @return 版本名称（1.0.0）
     */
    public function getVersions()
    {
        $tempResult = $this->sdkStdResult["versions"];
        return $tempResult;
    }
    
    /**
     * 设置版本名称（1.0.0）     
     * @param String $versions     
     * 参数示例：<pre>1.0.0</pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setVersions($versions)
    {
        $this->sdkStdResult["versions"] = $versions;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }

}
