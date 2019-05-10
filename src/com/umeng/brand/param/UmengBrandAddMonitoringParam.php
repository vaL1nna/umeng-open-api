<?php

namespace moyi\umeng\brand\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandAddMonitoringParam
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
     * @return 落地页URL，长度不大于1000个字符
     */
    public function getLandingPageUrl() 
    {
        $tempResult = $this->sdkStdResult["landingPageUrl"];
        return $tempResult;
    }
    
    /**
     * 设置落地页URL，长度不大于1000个字符     
     * @param String $landingPageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setLandingPageUrl($landingPageUrl)
    {
        $this->sdkStdResult["landingPageUrl"] = $landingPageUrl;
    }
    
        
    /**
     * @return 媒体类型，单选（1:搜索引擎 2:门户资讯 3:视频直播 4:垂直平台 5:精准投放 6:社交媒体 7:移动应用 8:电商平台 9:其他）
     */
    public function getMediaType() 
    {
        $tempResult = $this->sdkStdResult["mediaType"];
        return $tempResult;
    }
    
    /**
     * 设置媒体类型，单选（1:搜索引擎 2:门户资讯 3:视频直播 4:垂直平台 5:精准投放 6:社交媒体 7:移动应用 8:电商平台 9:其他）     
     * @param Integer $mediaType     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setMediaType($mediaType)
    {
        $this->sdkStdResult["mediaType"] = $mediaType;
    }
    
        
    /**
     * @return 媒体名称，长度不大于60个字符
     */
    public function getMediaName() 
    {
        $tempResult = $this->sdkStdResult["mediaName"];
        return $tempResult;
    }
    
    /**
     * 设置媒体名称，长度不大于60个字符     
     * @param String $mediaName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setMediaName($mediaName)
    {
        $this->sdkStdResult["mediaName"] = $mediaName;
    }
    
        
    /**
     * @return 媒体终端,单选（1:PC 2:移动3:OTT）
     */
    public function getTerminalType() 
    {
        $tempResult = $this->sdkStdResult["terminalType"];
        return $tempResult;
    }
    
    /**
     * 设置媒体终端,单选（1:PC 2:移动3:OTT）     
     * @param Integer $terminalType     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setTerminalType($terminalType)
    {
        $this->sdkStdResult["terminalType"] = $terminalType;
    }
    
        
    /**
     * @return 广告位类型，单选
（1:贴片 2:暂停 3:信息流 4:开屏 5:富媒体 6:banner 7:焦点图 8:软文9:文字链 10:icon 11:push 12:内嵌墙13:推荐墙 0:其他）
     */
    public function getPositionType()
    {
        $tempResult = $this->sdkStdResult["positionType"];
        return $tempResult;
    }
    
    /**
     * 设置广告位类型，单选
（1:贴片 2:暂停 3:信息流 4:开屏 5:富媒体 6:banner 7:焦点图 8:软文9:文字链 10:icon 11:push 12:内嵌墙13:推荐墙 0:其他）     
     * @param Integer $positionType     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setPositionType($positionType)
    {
        $this->sdkStdResult["positionType"] = $positionType;
    }
    
        
    /**
     * @return 广告位名称，长度不大于100个字符
     */
    public function getPositionName() 
    {
        $tempResult = $this->sdkStdResult["positionName"];
        return $tempResult;
    }
    
    /**
     * 设置广告位名称，长度不大于100个字符     
     * @param String $positionName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setPositionName($positionName)
    {
        $this->sdkStdResult["positionName"] = $positionName;
    }
    
        
    /**
     * @return 创意名称，长度不大于100个字符
     */
    public function getCreativityName() 
    {
        $tempResult = $this->sdkStdResult["creativityName"];
        return $tempResult;
    }
    
    /**
     * 设置创意名称，长度不大于100个字符     
     * @param String $creativityName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setCreativityName($creativityName)
    {
        $this->sdkStdResult["creativityName"] = $creativityName;
    }
    
        
    /**
     * @return 用户自定义信息，格式如：{"k1":"v1","k2":"v2"}
     */
    public function getCustomizeInfos()
    {
        $tempResult = $this->sdkStdResult["customizeInfos"];
        return $tempResult;
    }
    
    /**
     * 设置用户自定义信息，格式如：{"k1":"v1","k2":"v2"}     
     * @param String $customizeInfos     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setCustomizeInfos($customizeInfos)
    {
        $this->sdkStdResult["customizeInfos"] = $customizeInfos;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }

}
