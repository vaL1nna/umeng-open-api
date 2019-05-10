<?php

namespace moyi\umeng\uapp\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;
use moyi\umeng\uapp\param\UmengUappDailyDataInfo;

class UmengUappGetTodayYesterdayDataResult
{

        	
    private $todayData;
    
    /**
     * @return 
     */
    public function getTodayData()
    {
        return $this->todayData;
    }
    
    /**
     * 设置     
     * @param UmengUappDailyDataInfo $todayData     
     * 此参数必填     
     */
    public function setTodayData(UmengUappDailyDataInfo $todayData)
    {
        $this->todayData = $todayData;
    }
    
        	
    private $yesterdayData;
    
    /**
     * @return 
     */
    public function getYesterdayData()
    {
        return $this->yesterdayData;
    }
    
    /**
     * 设置     
     * @param UmengUappDailyDataInfo $yesterdayData     
     * 此参数必填     
     */
    public function setYesterdayData(UmengUappDailyDataInfo $yesterdayData)
    {
        $this->yesterdayData = $yesterdayData;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "todayData", $this->stdResult )) {
    		$todayDataResult=$this->stdResult->{"todayData"};
    		$this->todayData = new UmengUappDailyDataInfo();
    		$this->todayData->setStdResult ( $todayDataResult);
    	}
    	if (array_key_exists ( "yesterdayData", $this->stdResult )) {
    		$yesterdayDataResult=$this->stdResult->{"yesterdayData"};
    		$this->yesterdayData = new UmengUappDailyDataInfo();
    		$this->yesterdayData->setStdResult ( $yesterdayDataResult);
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "todayData", $this->arrayResult )) {
    		$todayDataResult=$arrayResult['todayData'];
    		$this->todayData = new UmengUappDailyDataInfo();
    		$this->todayData->setStdResult ( $todayDataResult);
    	}
    	if (array_key_exists ( "yesterdayData", $this->arrayResult )) {
    		$yesterdayDataResult=$arrayResult['yesterdayData'];
    		$this->yesterdayData = new UmengUappDailyDataInfo();
    		$this->yesterdayData->setStdResult ( $yesterdayDataResult);
    	}
    }

}
