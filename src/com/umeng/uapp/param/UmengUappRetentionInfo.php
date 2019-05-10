<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengUappRetentionInfo extends SDKDomain
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
    
        	
    private $totalInstallUser;
    
    /**
     * @return 当日安装用户数
     */
    public function getTotalInstallUser() 
    {
        return $this->totalInstallUser;
    }
    
    /**
     * 设置当日安装用户数     
     * @param Integer $totalInstallUser     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setTotalInstallUser( $totalInstallUser) 
    {
        $this->totalInstallUser = $totalInstallUser;
    }
    
        	
    private $retentionRate;
    
    /**
     * @return 相对之后几日的留存用户数，安装日期到今日之间7天（每天），14天后，30天后留存用户占比（不包含今日）
     */
    public function getRetentionRate() 
    {
        return $this->retentionRate;
    }
    
    /**
     * 设置相对之后几日的留存用户数，安装日期到今日之间7天（每天），14天后，30天后留存用户占比（不包含今日）     
     * @param array include @see Double[] $retentionRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setRetentionRate( $retentionRate) 
    {
        $this->retentionRate = $retentionRate;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "date", $this->stdResult )) {
    		$this->date = $this->stdResult->{"date"};
    	}
    	if (array_key_exists ( "totalInstallUser", $this->stdResult )) {
    		$this->totalInstallUser = $this->stdResult->{"totalInstallUser"};
    	}
    	if (array_key_exists ( "retentionRate", $this->stdResult )) {
    		$this->retentionRate = $this->stdResult->{"retentionRate"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "date", $this->arrayResult )) {
    		$this->date = $arrayResult['date'];
    	}
    	if (array_key_exists ( "totalInstallUser", $this->arrayResult )) {
    		$this->totalInstallUser = $arrayResult['totalInstallUser'];
    	}
    	if (array_key_exists ( "retentionRate", $this->arrayResult )) {
    		$this->retentionRate = $arrayResult['retentionRate'];
    	}
    }
  
}
