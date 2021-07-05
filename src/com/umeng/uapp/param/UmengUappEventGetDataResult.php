<?php

namespace moyi\umeng\uapp\param;

class UmengUappEventGetDataResult
{

        	
    private $eventData;
    
    /**
     * @return 
     */
    public function getEventData()
    {
        return $this->eventData;
    }
    
    /**
     * 设置     
     * @param array include @see UmengUappDateCountInfo[] $eventData     
     * 此参数必填     
     */
    public function setEventData(UmengUappDateCountInfo $eventData)
    {
        $this->eventData = $eventData;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "eventData", $this->stdResult )) {
    		$eventDataResult=$this->stdResult->{"eventData"};
    		$object = json_decode ( json_encode ( $eventDataResult ), true );
			$this->eventData = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject ( $object [$i] );
				$UmengUappDateCountInfoResult=new UmengUappDateCountInfo();
				$UmengUappDateCountInfoResult->setArrayResult($arrayobject );
				$this->eventData [$i] = $UmengUappDateCountInfoResult;
			}
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "eventData", $this->arrayResult )) {
    		$eventDataResult=$arrayResult['eventData'];
    		$this->eventData = new UmengUappDateCountInfo();
    		$this->eventData->setStdResult ( $eventDataResult);
    	}
    }
}
