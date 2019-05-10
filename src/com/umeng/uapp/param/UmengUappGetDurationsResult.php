<?php

namespace moyi\umeng\uapp\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;
use moyi\umeng\uapp\param\UmengUappDurationInfo;

class UmengUappGetDurationsResult
{

    private $durationInfos;
    
    /**
     * @return 
     */
    public function getDurationInfos() {
        return $this->durationInfos;
    }
    
    /**
     * 设置     
     * @param array include @see UmengUappDurationInfo[] $durationInfos     
     * 此参数必填     
     */
    public function setDurationInfos(UmengUappDurationInfo $durationInfos)
    {
        $this->durationInfos = $durationInfos;
    }
    
        	
    private $average;
    
    /**
     * @return 每次启动的平均使用时长
     */
    public function getAverage()
    {
        return $this->average;
    }
    
    /**
     * 设置每次启动的平均使用时长     
     * @param Double $average     
     * 此参数必填     
     */
    public function setAverage($average) 
    {
        $this->average = $average;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "durationInfos", $this->stdResult )) {
			$durationInfosResult=$this->stdResult->{"durationInfos"};
			$object = json_decode ( json_encode ( $durationInfosResult ), true );
			$this->durationInfos = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject ( $object [$i] );
				$UmengUappDurationInfoResult=new UmengUappDurationInfo();
				$UmengUappDurationInfoResult->setArrayResult($arrayobject );
				$this->durationInfos [$i] = $UmengUappDurationInfoResult;
			}
		}
    	if (array_key_exists ( "average", $this->stdResult )) {
    		$this->average = $this->stdResult->{"average"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
				    		    		
        if (array_key_exists ( "durationInfos", $this->arrayResult )) {
    		$durationInfosResult=$arrayResult['durationInfos'];
    		$this->durationInfos = new UmengUappDurationInfo();
    		$this->durationInfos->setStdResult ( $durationInfosResult);
    	}
    	if (array_key_exists ( "average", $this->arrayResult )) {
    		$this->average = $arrayResult['average'];
    	}
    }

}
