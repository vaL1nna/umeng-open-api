<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengUappGetVersionDataParam
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
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }

}
