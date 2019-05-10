<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengUappEventCreateParam
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
     * @return 自定义事件名（英文和数字，不允许特殊符号?/.\<>）
     */
    public function getEventName() 
    {
        $tempResult = $this->sdkStdResult["eventName"];
        return $tempResult;
    }
    
    /**
     * 设置自定义事件名（英文和数字，不允许特殊符号?/.\<>）     
     * @param String $eventName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setEventName($eventName)
    {
        $this->sdkStdResult["eventName"] = $eventName;
    }
    
        
    /**
     * @return 自定义事件显示名（中文，英文和数字，不允许特殊符号?/.\<>）
     */
    public function getEventDisplayName()
    {
        $tempResult = $this->sdkStdResult["eventDisplayName"];
        return $tempResult;
    }
    
    /**
     * 设置自定义事件显示名（中文，英文和数字，不允许特殊符号?/.\<>）     
     * @param String $eventDisplayName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setEventDisplayName($eventDisplayName) 
    {
        $this->sdkStdResult["eventDisplayName"] = $eventDisplayName;
    }
    
        
    /**
     * @return true  计算事件（数值型），用于统计数值型变量的累计值、均值及分布。false  计数事件（字符串型），用于统计字符串型变量的消息数及触发设备数。
     */
    public function getEventType()
    {
        $tempResult = $this->sdkStdResult["eventType"];
        return $tempResult;
    }
    
    /**
     * 设置true  计算事件（数值型），用于统计数值型变量的累计值、均值及分布。false  计数事件（字符串型），用于统计字符串型变量的消息数及触发设备数。     
     * @param Boolean $eventType     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     
     */
    public function setEventType($eventType)
    {
        $this->sdkStdResult["eventType"] = $eventType;
    }
    
        
    private $sdkStdResult = array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }
}
