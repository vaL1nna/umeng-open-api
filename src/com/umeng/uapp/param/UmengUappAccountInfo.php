<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;

class UmengUappAccountInfo extends SDKDomain
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
     * 参数示例：<pre>2018-01-01</pre>     
     * 此参数必填     
     */
    public function setDate($date)
    {
        $this->date = $date;
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
    
        	
    private $newAccount;
    
    /**
     * @return 新增账号
     */
    public function getNewAccount()
    {
        return $this->newAccount;
    }
    
    /**
     * 设置新增账号     
     * @param Integer $newAccount     
     * 参数示例：<pre></pre>     
     * 此参数必填    
     */
    public function setNewAccount($newAccount)
    {
        $this->newAccount = $newAccount;
    }
    
        	
    private $hourNewUser;
    
    /**
     * @return 小时新增用户（按小时查询时）
     */
    public function getHourNewUser()
    {
        return $this->hourNewUser;
    }
    
    /**
     * 设置小时新增用户（按小时查询时）     
     * @param array include @see Integer[] $hourNewUser     
     * 参数示例：<pre>[11,65,49,4,4,8,25,29,31,29,32,29,38,63,39,33,34,41,40,53,12,77,86,50]</pre>     
     * 此参数必填     
     */
    public function setHourNewUser($hourNewUser)
    {
        $this->hourNewUser = $hourNewUser;
    }
    
        	
    private $hourNewAccount;
    
    /**
     * @return 小时新增账号（按小时查询时）
     */
    public function getHourNewAccount()
    {
        return $this->hourNewAccount;
    }
    
    /**
     * 设置小时新增账号（按小时查询时）     
     * @param array include @see Integer[] $hourNewAccount     
     * 参数示例：<pre>[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]</pre>     
     * 此参数必填     
     */
    public function setHourNewAccount($hourNewAccount)
    {
        $this->hourNewAccount = $hourNewAccount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists("date", $this->stdResult)) {
    		$this->date = $this->stdResult->{"date"};
    	}
    	if (array_key_exists("newUser", $this->stdResult)) {
    		$this->newUser = $this->stdResult->{"newUser"};
    	}
    	if (array_key_exists("newAccount", $this->stdResult)) {
    		$this->newAccount = $this->stdResult->{"newAccount"};
    	}
    	if (array_key_exists("hourNewUser", $this->stdResult)) {
    		$this->hourNewUser = $this->stdResult->{"hourNewUser"};
    	}
        if (array_key_exists("hourNewAccount", $this->stdResult)) {
    		$this->hourNewAccount = $this->stdResult->{"hourNewAccount"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists("date", $this->arrayResult)) {
    		$this->date = $arrayResult['date'];
    	}
    	if (array_key_exists("newUser", $this->arrayResult)) {
    		$this->newUser = $arrayResult['newUser'];
    	}
    	if (array_key_exists("newAccount", $this->arrayResult)) {
    		$this->newAccount = $arrayResult['newAccount'];
    	}
    	if (array_key_exists("hourNewUser", $this->arrayResult)) {
    		$this->hourNewUser = $arrayResult['hourNewUser'];
    	}
    	if (array_key_exists("hourNewAccount", $this->arrayResult)) {
    		$this->hourNewAccount = $arrayResult['hourNewAccount'];
    	}
    }
}
