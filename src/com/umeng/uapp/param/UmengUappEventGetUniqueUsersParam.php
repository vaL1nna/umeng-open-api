<?php

namespace moyi\umeng\uapp\param;

class UmengUappEventGetUniqueUsersParam
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
     * @return 自定义事件名称（通过umeng.uapp.event.list获取）
     */
    public function getEventName()
    {
        $tempResult = $this->sdkStdResult["eventName"];
        return $tempResult;
    }
    
    /**
     * 设置自定义事件名称（通过umeng.uapp.event.list获取）     
     * @param String $eventName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setEventName($eventName)
    {
        $this->sdkStdResult["eventName"] = $eventName;
    }
    
        
    private $sdkStdResult = array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }
}
