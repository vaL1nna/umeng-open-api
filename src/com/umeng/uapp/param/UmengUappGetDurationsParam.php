<?php

namespace moyi\umeng\uapp\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengUappGetDurationsParam 
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
    public function setAppkey( $appkey) 
    {
        $this->sdkStdResult["appkey"] = $appkey;
    }
    
        
    /**
     * @return 查询日期
     */
    public function getDate() 
    {
        $tempResult = $this->sdkStdResult["date"];
        return $tempResult;
    }
    
    /**
     * 设置查询日期     
     * @param String $date     
     * 参数示例：<pre>2018-01-01</pre>     
     * 此参数必填     
     */
    public function setDate($date) 
    {
        $this->sdkStdResult["date"] = $date;
    }
    
        
    /**
     * @return 查询时长统计类型（按天daily，按次daily_per_launch）
     */
    public function getStatType() 
    {
        $tempResult = $this->sdkStdResult["statType"];
        return $tempResult;
    }
    
    /**
     * 设置查询时长统计类型（按天daily，按次daily_per_launch）     
     * @param String $statType     
     * 参数示例：<pre>daily</pre>     
     * 此参数为可选参数
     * 默认值：<pre>daily</pre>
     */
    public function setStatType($statType)
    {
        $this->sdkStdResult["statType"] = $statType;
    }
    
        
    /**
     * @return 渠道名称（仅限一个App%20Store）
     */
    public function getChannel()
    {
        $tempResult = $this->sdkStdResult["channel"];
        return $tempResult;
    }
    
    /**
     * 设置渠道名称（仅限一个App%20Store）     
     * @param String $channel     
     * 参数示例：<pre>App%20Store</pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setChannel($channel)
    {
        $this->sdkStdResult["channel"] = $channel;
    }
    
        
    /**
     * @return 版本名称（仅限一个1.0.0）
     */
    public function getVersion()
    {
        $tempResult = $this->sdkStdResult["version"];
        return $tempResult;
    }
    
    /**
     * 设置版本名称（仅限一个1.0.0）     
     * @param String $version     
     * 参数示例：<pre>1.0.0</pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setVersion($version)
    {
        $this->sdkStdResult["version"] = $version;
    }
    
        
    private $sdkStdResult = array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }

}
