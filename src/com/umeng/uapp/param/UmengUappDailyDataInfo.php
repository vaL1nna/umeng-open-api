<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;

class UmengUappDailyDataInfo extends SDKDomain
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
    
        	
    private $activityUsers;
    
    /**
     * @return 活跃用户数
     */
    public function getActivityUsers()
    {
        return $this->activityUsers;
    }
    
    /**
     * 设置活跃用户数     
     * @param Integer $activityUsers     
     * 参数示例：<pre></pre>     
     * 此参数必填    
     */
    public function setActivityUsers($activityUsers)
    {
        $this->activityUsers = $activityUsers;
    }
    
        	
    private $totalUsers;
    
    /**
     * @return 总用户数
     */
    public function getTotalUsers()
    {
        return $this->totalUsers;
    }
    
    /**
     * 设置总用户数     
     * @param Integer $totalUsers     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setTotalUsers($totalUsers)
    {
        $this->totalUsers = $totalUsers;
    }
    
        	
    private $launches;
    
    /**
     * @return 启动数
     */
    public function getLaunches()
    {
        return $this->launches;
    }
    
    /**
     * 设置启动数     
     * @param Integer $launches     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setLaunches($launches)
    {
        $this->launches = $launches;
    }
    
        	
    private $newUsers;
    
    /**
     * @return 新增用户数
     */
    public function getNewUsers()
    {
        return $this->newUsers;
    }
    
    /**
     * 设置新增用户数     
     * @param Integer $newUsers     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setNewUsers($newUsers)
    {
        $this->newUsers = $newUsers;
    }
    
        	
    private $payUsers;
    
    /**
     * @return 游戏付费用户数（仅游戏sdk）
     */
    public function getPayUsers()
    {
        return $this->payUsers;
    }
    
    /**
     * 设置游戏付费用户数（仅游戏sdk）     
     * @param Integer $payUsers     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setPayUsers($payUsers)
    {
        $this->payUsers = $payUsers;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "date", $this->stdResult )) {
    		$this->date = $this->stdResult->{"date"};
    	}
    	if (array_key_exists ( "activityUsers", $this->stdResult )) {
    		$this->activityUsers = $this->stdResult->{"activityUsers"};
    	}
    	if (array_key_exists ( "totalUsers", $this->stdResult )) {
    		$this->totalUsers = $this->stdResult->{"totalUsers"};
    	}
    	if (array_key_exists ( "launches", $this->stdResult )) {
    		$this->launches = $this->stdResult->{"launches"};
    	}
    	if (array_key_exists ( "newUsers", $this->stdResult )) {
    		$this->newUsers = $this->stdResult->{"newUsers"};
    	}
    	if (array_key_exists ( "payUsers", $this->stdResult )) {
    		$this->payUsers = $this->stdResult->{"payUsers"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "date", $this->arrayResult )) {
    		$this->date = $arrayResult['date'];
    	}
        if (array_key_exists ( "activityUsers", $this->arrayResult )) {
    		$this->activityUsers = $arrayResult['activityUsers'];
    	}
        if (array_key_exists ( "totalUsers", $this->arrayResult )) {
    		$this->totalUsers = $arrayResult['totalUsers'];
    	}
    	if (array_key_exists ( "launches", $this->arrayResult )) {
    		$this->launches = $arrayResult['launches'];
    	}
    	if (array_key_exists ( "newUsers", $this->arrayResult )) {
    		$this->newUsers = $arrayResult['newUsers'];
    	}
    	if (array_key_exists ( "payUsers", $this->arrayResult )) {
    		$this->payUsers = $arrayResult['payUsers'];
    	}
    }
}
