<?php

namespace moyi\umeng\uapp\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengUappVersionInfo extends SDKDomain
{

       	
    private $date;
    
    /**
     * @return 统计日期
     */
    public function getDate() 
    {
        return $this->date;
    }
    
    /**
     * 设置统计日期     
     * @param String $date     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setDate($date) 
    {
        $this->date = $date;
    }
    
        	
    private $totalUserRate;
    
    /**
     * @return 当前版本总用户数在总用户数中的比例
     */
    public function getTotalUserRate()
    {
        return $this->totalUserRate;
    }
    
    /**
     * 设置当前版本总用户数在总用户数中的比例     
     * @param Double $totalUserRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setTotalUserRate( $totalUserRate) 
    {
        $this->totalUserRate = $totalUserRate;
    }
    
        	
    private $activeUser;
    
    /**
     * @return 活跃用户
     */
    public function getActiveUser() 
    {
        return $this->activeUser;
    }
    
    /**
     * 设置活跃用户     
     * @param Integer $activeUser     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setActiveUser($activeUser) 
    {
        $this->activeUser = $activeUser;
    }
    
        	
    private $newUser;
    
    /**
     * @return 新增用户
     */
    public function getNewUser()
    {
        return $this->newUser;
    }
    
    /**
     * 设置新增用户     
     * @param Integer $newUser     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setNewUser($newUser)
    {
        $this->newUser = $newUser;
    }
    
        	
    private $totalUser;
    
    /**
     * @return 当前版本总用户数
     */
    public function getTotalUser()
    {
        return $this->totalUser;
    }
    
    /**
     * 设置当前版本总用户数     
     * @param Integer $totalUser     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setTotalUser($totalUser) 
    {
        $this->totalUser = $totalUser;
    }
    
        	
    private $version;
    
    /**
     * @return 版本号
     */
    public function getVersion()
    {
        return $this->version;
    }
    
    /**
     * 设置版本号     
     * @param String $version     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "date", $this->stdResult )) {
    		$this->date = $this->stdResult->{"date"};
    	}
    	if (array_key_exists ( "totalUserRate", $this->stdResult )) {
    		$this->totalUserRate = $this->stdResult->{"totalUserRate"};
    	}
    	if (array_key_exists ( "activeUser", $this->stdResult )) {
    		$this->activeUser = $this->stdResult->{"activeUser"};
    	}
    	if (array_key_exists ( "newUser", $this->stdResult )) {
    		$this->newUser = $this->stdResult->{"newUser"};
    	}
    	if (array_key_exists ( "totalUser", $this->stdResult )) {
    		$this->totalUser = $this->stdResult->{"totalUser"};
    	}
    	if (array_key_exists ( "version", $this->stdResult )) {
    		$this->version = $this->stdResult->{"version"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "date", $this->arrayResult )) {
    		$this->date = $arrayResult['date'];
    	}
    	if (array_key_exists ( "totalUserRate", $this->arrayResult )) {
    		$this->totalUserRate = $arrayResult['totalUserRate'];
    	}
    	if (array_key_exists ( "activeUser", $this->arrayResult )) {
    		$this->activeUser = $arrayResult['activeUser'];
    	}
    	if (array_key_exists ( "newUser", $this->arrayResult )) {
    		$this->newUser = $arrayResult['newUser'];
    	}
    	if (array_key_exists ( "totalUser", $this->arrayResult )) {
    		$this->totalUser = $arrayResult['totalUser'];
    	}
    	if (array_key_exists ( "version", $this->arrayResult )) {
    		$this->version = $arrayResult['version'];
    	}
    }
   
}
