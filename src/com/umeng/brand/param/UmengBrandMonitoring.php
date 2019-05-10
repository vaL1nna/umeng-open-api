<?php

namespace moyi\umeng\brand\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandMonitoring extends SDKDomain 
{

       	
    private $campaignId;
    
    /**
     * @return 活动ID
     */
    public function getCampaignId() 
    {
        return $this->campaignId;
    }
    
    /**
     * 设置活动ID     
     * @param Integer $campaignId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setCampaignId($campaignId) 
    {
        $this->campaignId = $campaignId;
    }
    
        	
    private $landingPageUrl;
    
    /**
     * @return 推广地址
     */
    public function getLandingPageUrl() 
    {
        return $this->landingPageUrl;
    }
    
    /**
     * 设置推广地址     
     * @param String $landingPageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setLandingPageUrl($landingPageUrl) 
    {
        $this->landingPageUrl = $landingPageUrl;
    }
    
        	
    private $mediaType;
    
    /**
     * @return 媒体类型，单选（1:搜索引擎 2:门户资讯 3:视频直播 4:垂直平台 5:精准投放 6:社交媒体 7:移动应用 8:电商平台 9:其他）
     */
    public function getMediaType() 
    {
        return $this->mediaType;
    }
    
    /**
     * 设置媒体类型，单选（1:搜索引擎 2:门户资讯 3:视频直播 4:垂直平台 5:精准投放 6:社交媒体 7:移动应用 8:电商平台 9:其他）     
     * @param Integer $mediaType     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setMediaType($mediaType) 
    {
        $this->mediaType = $mediaType;
    }
    
        	
    private $mediaName;
    
    /**
     * @return 媒体名称
     */
    public function getMediaName() 
    {
        return $this->mediaName;
    }
    
    /**
     * 设置媒体名称     
     * @param String $mediaName     
     * 参数示例：<pre></pre>     
     * 此参数必填    
     */
    public function setMediaName($mediaName) 
    {
        $this->mediaName = $mediaName;
    }
    
        	
    private $terminalType;
    
    /**
     * @return 终端类型（1:PC 2:移动3:OTT）
     */
    public function getTerminalType() 
    {
        return $this->terminalType;
    }
    
    /**
     * 设置终端类型（1:PC 2:移动3:OTT）     
     * @param Integer $terminalType     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setTerminalType($terminalType) 
    {
        $this->terminalType = $terminalType;
    }
    
        	
    private $positionType;
    
    /**
     * @return 广告位类型
     */
    public function getPositionType() 
    {
        return $this->positionType;
    }
    
    /**
     * 设置广告位类型     
     * @param Integer $positionType     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setPositionType($positionType) 
    {
        $this->positionType = $positionType;
    }
    
        	
    private $positionName;
    
    /**
     * @return 广告位名称
     */
    public function getPositionName() 
    {
        return $this->positionName;
    }
    
    /**
     * 设置广告位名称     
     * @param String $positionName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setPositionName($positionName) 
    {
        $this->positionName = $positionName;
    }
    
        	
    private $creativityName;
    
    /**
     * @return 创意名称
     */
    public function getCreativityName() 
    {
        return $this->creativityName;
    }
    
    /**
     * 设置创意名称     
     * @param String $creativityName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setCreativityName($creativityName) 
    {
        $this->creativityName = $creativityName;
    }
    
        	
    private $customizeInfos;
    
    /**
     * @return 用户自定义信息，格式如：{"k1":"v1","k2":"v2"}
     */
    public function getCustomizeInfos() 
    {
        return $this->customizeInfos;
    }
    
    /**
     * 设置用户自定义信息，格式如：{"k1":"v1","k2":"v2"}     
     * @param String $customizeInfos     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setCustomizeInfos($customizeInfos) 
    {
        $this->customizeInfos = $customizeInfos;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) 
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "campaignId", $this->stdResult )) {
    		$this->campaignId = $this->stdResult->{"campaignId"};
    	}
    	if (array_key_exists ( "landingPageUrl", $this->stdResult )) {
    		$this->landingPageUrl = $this->stdResult->{"landingPageUrl"};
    	}
    	if (array_key_exists ( "mediaType", $this->stdResult )) {
    		$this->mediaType = $this->stdResult->{"mediaType"};
    	}
    	if (array_key_exists ( "mediaName", $this->stdResult )) {
    		$this->mediaName = $this->stdResult->{"mediaName"};
    	}
    	if (array_key_exists ( "terminalType", $this->stdResult )) {
    		$this->terminalType = $this->stdResult->{"terminalType"};
    	}
    	if (array_key_exists ( "positionType", $this->stdResult )) {
    		$this->positionType = $this->stdResult->{"positionType"};
    	}
    	if (array_key_exists ( "positionName", $this->stdResult )) {
    		$this->positionName = $this->stdResult->{"positionName"};
    	}
    	if (array_key_exists ( "creativityName", $this->stdResult )) {
    		$this->creativityName = $this->stdResult->{"creativityName"};
    	}
    	if (array_key_exists ( "customizeInfos", $this->stdResult )) {
    		$this->customizeInfos = $this->stdResult->{"customizeInfos"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "campaignId", $this->arrayResult )) {
    		$this->campaignId = $arrayResult['campaignId'];
    	}
    	if (array_key_exists ( "landingPageUrl", $this->arrayResult )) {
    		$this->landingPageUrl = $arrayResult['landingPageUrl'];
    	}
    	if (array_key_exists ( "mediaType", $this->arrayResult )) {
    		$this->mediaType = $arrayResult['mediaType'];
    	}
    	if (array_key_exists ( "mediaName", $this->arrayResult )) {
    		$this->mediaName = $arrayResult['mediaName'];
    	}
    	if (array_key_exists ( "terminalType", $this->arrayResult )) {
    		$this->terminalType = $arrayResult['terminalType'];
    	}
    	if (array_key_exists ( "positionType", $this->arrayResult )) {
    		$this->positionType = $arrayResult['positionType'];
    	}
    	if (array_key_exists ( "positionName", $this->arrayResult )) {
    		$this->positionName = $arrayResult['positionName'];
    	}
    	if (array_key_exists ( "creativityName", $this->arrayResult )) {
    		$this->creativityName = $arrayResult['creativityName'];
    	}
    	if (array_key_exists ( "customizeInfos", $this->arrayResult )) {
    		$this->customizeInfos = $arrayResult['customizeInfos'];
    	}
    }
 
}
