<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;

class UmengUappAllAppData extends SDKDomain
{
  	
    private $todayActivityUsers;
    
    /**
     * @return 今日活跃用户
     */
    public function getTodayActivityUsers()
    {
        return $this->todayActivityUsers;
    }
    
    /**
     * 设置今日活跃用户     
     * @param Integer $todayActivityUsers     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setTodayActivityUsers($todayActivityUsers)
    {
        $this->todayActivityUsers = $todayActivityUsers;
    }
    
        	
    private $todayNewUsers;
    
    /**
     * @return 今日新增用户
     */
    public function getTodayNewUsers()
    {
        return $this->todayNewUsers;
    }
    
    /**
     * 设置今日新增用户     
     * @param Integer $todayNewUsers     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setTodayNewUsers($todayNewUsers)
    {
        $this->todayNewUsers = $todayNewUsers;
    }
    
        	
    private $todayLaunches;
    
    /**
     * @return 今日启动次数
     */
    public function getTodayLaunches()
    {
        return $this->todayLaunches;
    }
    
    /**
     * 设置今日启动次数     
     * @param Integer $todayLaunches     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setTodayLaunches($todayLaunches)
    {
        $this->todayLaunches = $todayLaunches;
    }
    
        	
    private $yesterdayActivityUsers;
    
    /**
     * @return 昨日活跃用户
     */
    public function getYesterdayActivityUsers()
    {
        return $this->yesterdayActivityUsers;
    }
    
    /**
     * 设置昨日活跃用户     
     * @param Integer $yesterdayActivityUsers     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setYesterdayActivityUsers($yesterdayActivityUsers)
    {
        $this->yesterdayActivityUsers = $yesterdayActivityUsers;
    }
    
        	
    private $yesterdayNewUsers;
    
    /**
     * @return 昨日新增用户
     */
    public function getYesterdayNewUsers()
    {
        return $this->yesterdayNewUsers;
    }
    
    /**
     * 设置昨日新增用户     
     * @param Integer $yesterdayNewUsers     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setYesterdayNewUsers($yesterdayNewUsers)
    {
        $this->yesterdayNewUsers = $yesterdayNewUsers;
    }
    
        	
    private $yesterdayLaunches;
    
    /**
     * @return 昨日启动次数
     */
    public function getYesterdayLaunches()
    {
        return $this->yesterdayLaunches;
    }
    
    /**
     * 设置昨日启动次数     
     * @param Integer $yesterdayLaunches     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setYesterdayLaunches($yesterdayLaunches)
    {
        $this->yesterdayLaunches = $yesterdayLaunches;
    }
    
        	
    private $yesterdayUniqNewUsers;
    
    /**
     * @return 昨日独立新增用户数
     */
    public function getYesterdayUniqNewUsers()
    {
        return $this->yesterdayUniqNewUsers;
    }
    
    /**
     * 设置昨日独立新增用户数     
     * @param Integer $yesterdayUniqNewUsers     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setYesterdayUniqNewUsers($yesterdayUniqNewUsers)
    {
        $this->yesterdayUniqNewUsers = $yesterdayUniqNewUsers;
    }
    
        	
    private $yesterdayUniqActiveUsers;
    
    /**
     * @return 昨日独立活跃用户数
     */
    public function getYesterdayUniqActiveUsers()
    {
        return $this->yesterdayUniqActiveUsers;
    }
    
    /**
     * 设置昨日独立活跃用户数     
     * @param Integer $yesterdayUniqActiveUsers     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setYesterdayUniqActiveUsers($yesterdayUniqActiveUsers)
    {
        $this->yesterdayUniqActiveUsers = $yesterdayUniqActiveUsers;
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
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists("todayActivityUsers", $this->stdResult)) {
    		$this->todayActivityUsers = $this->stdResult->{"todayActivityUsers"};
    	}
        if (array_key_exists("todayNewUsers", $this->stdResult)) {
    		$this->todayNewUsers = $this->stdResult->{"todayNewUsers"};
    	}
    	if (array_key_exists("todayLaunches", $this->stdResult)) {
    		$this->todayLaunches = $this->stdResult->{"todayLaunches"};
    	}
    	if (array_key_exists("yesterdayActivityUsers", $this->stdResult)) {
    		$this->yesterdayActivityUsers = $this->stdResult->{"yesterdayActivityUsers"};
    	}
    	if (array_key_exists("yesterdayNewUsers", $this->stdResult)) {
    		$this->yesterdayNewUsers = $this->stdResult->{"yesterdayNewUsers"};
    	}
    	if (array_key_exists("yesterdayLaunches", $this->stdResult)) {
    		$this->yesterdayLaunches = $this->stdResult->{"yesterdayLaunches"};
    	}
    	if (array_key_exists("yesterdayUniqNewUsers", $this->stdResult)) {
    		$this->yesterdayUniqNewUsers = $this->stdResult->{"yesterdayUniqNewUsers"};
    	}
    	if (array_key_exists("yesterdayUniqActiveUsers", $this->stdResult)) {
    		$this->yesterdayUniqActiveUsers = $this->stdResult->{"yesterdayUniqActiveUsers"};
    	}
    	if (array_key_exists("totalUsers", $this->stdResult)) {
    		$this->totalUsers = $this->stdResult->{"totalUsers"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists("todayActivityUsers", $this->arrayResult)) {
    		$this->todayActivityUsers = $arrayResult['todayActivityUsers'];
    	}
    	if (array_key_exists("todayNewUsers", $this->arrayResult)) {
    		$this->todayNewUsers = $arrayResult['todayNewUsers'];
    	}
        if (array_key_exists("todayLaunches", $this->arrayResult)) {
    		$this->todayLaunches = $arrayResult['todayLaunches'];
    	}
    	if (array_key_exists("yesterdayActivityUsers", $this->arrayResult)) {
    		$this->yesterdayActivityUsers = $arrayResult['yesterdayActivityUsers'];
    	}
        if (array_key_exists("yesterdayNewUsers", $this->arrayResult)) {
    		$this->yesterdayNewUsers = $arrayResult['yesterdayNewUsers'];
    	}
    	if (array_key_exists("yesterdayLaunches", $this->arrayResult)) {
    		$this->yesterdayLaunches = $arrayResult['yesterdayLaunches'];
    	}
    	if (array_key_exists("yesterdayUniqNewUsers", $this->arrayResult)) {
    		$this->yesterdayUniqNewUsers = $arrayResult['yesterdayUniqNewUsers'];
    	}
    	if (array_key_exists("yesterdayUniqActiveUsers", $this->arrayResult)) {
    		$this->yesterdayUniqActiveUsers = $arrayResult['yesterdayUniqActiveUsers'];
    	}
    	if (array_key_exists("totalUsers", $this->arrayResult)) {
    		$this->totalUsers = $arrayResult['totalUsers'];
    	}
    }
}
