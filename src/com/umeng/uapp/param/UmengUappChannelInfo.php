<?php

namespace moyi\umeng\uapp\param; 

use moyi\client\entity\SDKDomain;

class UmengUappChannelInfo extends SDKDomain
{
  	
    private $launch;
    
    /**
     * @return 启动数（昨日及以前可查询）
     */
    public function getLaunch()
    {
        return $this->launch;
    }
    
    /**
     * 设置启动数（昨日及以前可查询）     
     * @param Integer $launch     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setLaunch($launch)
    {
        $this->launch = $launch;
    }
    
        	
    private $duration;
    
    /**
     * @return 使用时长（昨日及以前可查询）
     */
    public function getDuration()
    {
        return $this->duration;
    }
    
    /**
     * 设置使用时长（昨日及以前可查询）     
     * @param String $duration     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
    
        	
    private $date;
    
    /**
     * @return 日期
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * 设置日期     
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
     * @return 当前渠道总用户数在总用户数中的比例
     */
    public function getTotalUserRate()
    {
        return $this->totalUserRate;
    }
    
    /**
     * 设置当前渠道总用户数在总用户数中的比例     
     * @param Double $totalUserRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setTotalUserRate($totalUserRate)
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
     * @return 总用户数
     */
    public function getTotalUser()
    {
        return $this->totalUser;
    }
    
    /**
     * 设置总用户数     
     * @param Integer $totalUser     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setTotalUser($totalUser)
    {
        $this->totalUser = $totalUser;
    }
    
        	
    private $channel;
    
    /**
     * @return 渠道名称
     */
    public function getChannel()
    {
        return $this->channel;
    }
    
    /**
     * 设置渠道名称     
     * @param String $channel     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }
    
        	
    private $id;
    
    /**
     * @return 渠道ID
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * 设置渠道ID     
     * @param String $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists("launch", $this->stdResult)) {
    		$this->launch = $this->stdResult->{"launch"};
    	}
    	if (array_key_exists("duration", $this->stdResult)) {
    		$this->duration = $this->stdResult->{"duration"};
    	}
    	if (array_key_exists("date", $this->stdResult)) {
    		$this->date = $this->stdResult->{"date"};
    	}
    	if (array_key_exists("totalUserRate", $this->stdResult)) {
    		$this->totalUserRate = $this->stdResult->{"totalUserRate"};
    	}
    	if (array_key_exists("activeUser", $this->stdResult)) {
    		$this->activeUser = $this->stdResult->{"activeUser"};
    	}
    	if (array_key_exists("newUser", $this->stdResult)) {
    		$this->newUser = $this->stdResult->{"newUser"};
    	}
        if (array_key_exists("totalUser", $this->stdResult)) {
    		$this->totalUser = $this->stdResult->{"totalUser"};
    	}
    	if (array_key_exists("channel", $this->stdResult)) {
    		$this->channel = $this->stdResult->{"channel"};
    	}
    	if (array_key_exists("id", $this->stdResult)) {
    		$this->id = $this->stdResult->{"id"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists("launch", $this->arrayResult)) {
    		$this->launch = $arrayResult['launch'];
    	}
    	if (array_key_exists("duration", $this->arrayResult)) {
    		$this->duration = $arrayResult['duration'];
    	}
    	if (array_key_exists("date", $this->arrayResult)) {
    		$this->date = $arrayResult['date'];
    		}
    	if (array_key_exists("totalUserRate", $this->arrayResult)) {
    		$this->totalUserRate = $arrayResult['totalUserRate'];
    	}
    	if (array_key_exists("activeUser", $this->arrayResult)) {
    		$this->activeUser = $arrayResult['activeUser'];
    	}
    	if (array_key_exists("newUser", $this->arrayResult)) {
    		$this->newUser = $arrayResult['newUser'];
    	}
    	if (array_key_exists("totalUser", $this->arrayResult)) {
    		$this->totalUser = $arrayResult['totalUser'];
    	}
        if (array_key_exists("channel", $this->arrayResult)) {
    		$this->channel = $arrayResult['channel'];
    	}
    	if (array_key_exists("id", $this->arrayResult)) {
    		$this->id = $arrayResult['id'];
    	}
    } 
}
