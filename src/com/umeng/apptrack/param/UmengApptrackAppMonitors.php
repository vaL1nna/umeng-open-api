<?php

namespace moyi\umeng\apptrack\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengApptrackAppMonitors extends SDKDomain 
{

       	
    private $mid;
    
    /**
     * @return 单元id
     */
    public function getMid() 
    {
        return $this->mid;
    }
    
    /**
     * 设置单元id     
     * @param Long $mid     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setMid($mid) 
    {
        $this->mid = $mid;
    }
    
        	
    private $mName;
    
    /**
     * @return 单元名称
     */
    public function getMName() 
    {
        return $this->mName;
    }
    
    /**
     * 设置单元名称     
     * @param String $mName     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setMName($mName) 
    {
        $this->mName = $mName;
    }
    
        	
    private $chanName;
    
    /**
     * @return 渠道名称
     */
    public function getChanName()
    {
        return $this->chanName;
    }
    
    /**
     * 设置渠道名称     
     * @param String $chanName     
     * 参数示例：<pre></pre>     
     * 此参数必填    
     */
    public function setChanName($chanName)
    {
        $this->chanName = $chanName;
    }
    
        	
    private $downloadUrl;
    
    /**
     * @return 下载地址
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }
    
    /**
     * 设置下载地址     
     * @param String $downloadUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setDownloadUrl($downloadUrl) 
    {
        $this->downloadUrl = $downloadUrl;
    }
    
        	
    private $shortUrl;
    
    /**
     * @return 短链地址
     */
    public function getShortUrl()
    {
        return $this->shortUrl;
    }
    
    /**
     * 设置短链地址     
     * @param String $shortUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setShortUrl($shortUrl) 
    {
        $this->shortUrl = $shortUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) 
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "mid", $this->stdResult )) {
    		$this->mid = $this->stdResult->{"mid"};
    	}
    	if (array_key_exists ( "mName", $this->stdResult )) {
    		$this->mName = $this->stdResult->{"mName"};
    	}
    	if (array_key_exists ( "chanName", $this->stdResult )) {
    		$this->chanName = $this->stdResult->{"chanName"};
    	}
    	if (array_key_exists ( "downloadUrl", $this->stdResult )) {
    		$this->downloadUrl = $this->stdResult->{"downloadUrl"};
    	}
    	if (array_key_exists ( "shortUrl", $this->stdResult )) {
    		$this->shortUrl = $this->stdResult->{"shortUrl"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "mid", $this->arrayResult )) {
    		$this->mid = $arrayResult['mid'];
    	}
    	if (array_key_exists ( "mName", $this->arrayResult )) {
    		$this->mName = $arrayResult['mName'];
    	}
    	if (array_key_exists ( "chanName", $this->arrayResult )) {
    		$this->chanName = $arrayResult['chanName'];
    	}
    	if (array_key_exists ( "downloadUrl", $this->arrayResult )) {
    		$this->downloadUrl = $arrayResult['downloadUrl'];
    	}
    	if (array_key_exists ( "shortUrl", $this->arrayResult )) {
    		$this->shortUrl = $arrayResult['shortUrl'];
    	}
    }
  
}
