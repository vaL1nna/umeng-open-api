<?php

namespace moyi\umeng\uapp\param;

class UmengUappGetDailyDataResult
{
	
    private $dailyData;
    
    /**
     * @return UmengUappDailyDataInfo
     */
    public function getDailyData()
    {
        return $this->dailyData;
    }
    
    /**
     * 设置UmengUappDailyDataInfo     
     * @param UmengUappDailyDataInfo $dailyData     
     * 此参数必填     
     */
    public function setDailyData(UmengUappDailyDataInfo $dailyData)
    {
        $this->dailyData = $dailyData;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) 
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "dailyData", $this->stdResult )) {
    		$dailyDataResult=$this->stdResult->{"dailyData"};
    		$this->dailyData = new UmengUappDailyDataInfo();
    		$this->dailyData->setStdResult ( $dailyDataResult);
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		
        if (array_key_exists ( "dailyData", $this->arrayResult )) {
    		$dailyDataResult=$arrayResult['dailyData'];
    		$this->dailyData = new UmengUappDailyDataInfo();
    		$this->dailyData->setStdResult ( $dailyDataResult);
    	}
    }

}
