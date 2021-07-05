<?php

namespace moyi\umeng\uapp\param;

class UmengUappEventListParam
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
     * @return 每页显示数量（最大100）
     */
    public function getPerPage()
    {
        $tempResult = $this->sdkStdResult["perPage"];
        return $tempResult;
    }
    
    /**
     * 设置每页显示数量（最大100）     
     * @param Integer $perPage     
     * 参数示例：<pre>10</pre>     
     * 此参数为可选参数
     * 默认值：<pre>10</pre>
     */
    public function setPerPage($perPage)
    {
        $this->sdkStdResult["perPage"] = $perPage;
    }
    
        
    /**
     * @return 页数
     */
    public function getPage()
    {
        $tempResult = $this->sdkStdResult["page"];
        return $tempResult;
    }
    
    /**
     * 设置页数     
     * @param Integer $page     
     * 参数示例：<pre>1</pre>     
     * 此参数为可选参数
     * 默认值：<pre>1</pre>
     */
    public function setPage($page)
    {
        $this->sdkStdResult["page"] = $page;
    }
    
        
    /**
     * @return 应用版本号
     */
    public function getVersion()
    {
        $tempResult = $this->sdkStdResult["version"];
        return $tempResult;
    }
    
    /**
     * 设置应用版本号     
     * @param String $version     
     * 参数示例：<pre></pre>     
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
