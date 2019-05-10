<?php

namespace moyi\umeng\brand\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandGetMonitoringDataParam 
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
     * 此参数为可选参数
     * 默认值：<pre>null</pre>
     */
    public function setCampaignId($campaignId)
    {
        $this->sdkStdResult["campaignId"] = $campaignId;
    }
    
        
    /**
     * @return 媒体id
     */
    public function getMediaId() 
    {
        $tempResult = $this->sdkStdResult["mediaId"];
        return $tempResult;
    }
    
    /**
     * 设置媒体id     
     * @param Long $mediaId     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre>null</pre>
     */
    public function setMediaId($mediaId)
    {
        $this->sdkStdResult["mediaId"] = $mediaId;
    }
    
        
    /**
     * @return 单元id
     */
    public function getMId()
    {
        $tempResult = $this->sdkStdResult["mId"];
        return $tempResult;
    }
    
    /**
     * 设置单元id     
     * @param Long $mId     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre>null</pre>
     */
    public function setMId($mId)
    {
        $this->sdkStdResult["mId"] = $mId;
    }
    
        
    /**
     * @return 查询开始日期
     */
    public function getStartDate()
    {
        $tempResult = $this->sdkStdResult["startDate"];
        return $tempResult;
    }
    
    /**
     * 设置查询开始日期     
     * @param String $startDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setStartDate($startDate) 
    {
        $this->sdkStdResult["startDate"] = $startDate;
    }
    
        
    /**
     * @return 查询结束日期
     */
    public function getEndDate() 
    {
        $tempResult = $this->sdkStdResult["endDate"];
        return $tempResult;
    }
    
    /**
     * 设置查询结束日期     
     * @param String $endDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setEndDate($endDate) 
    {
        $this->sdkStdResult["endDate"] = $endDate;
    }
    
        
    /**
     * @return 当前页数
     */
    public function getPageNum() 
    {
        $tempResult = $this->sdkStdResult["pageNum"];
        return $tempResult;
    }
    
    /**
     * 设置当前页数     
     * @param Integer $pageNum     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre>1</pre>
     */
    public function setPageNum($pageNum) 
    {
        $this->sdkStdResult["pageNum"] = $pageNum;
    }
    
        
    /**
     * @return 每页显示的单元数
     */
    public function getPageSize() 
    {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页显示的单元数     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre>10</pre>
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
