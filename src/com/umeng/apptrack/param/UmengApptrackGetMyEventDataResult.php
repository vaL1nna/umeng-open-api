<?php

namespace moyi\umeng\apptrack\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;
use moyi\umeng\apptrack\param\UmengApptrackAppEvent;

class UmengApptrackGetMyEventDataResult
{

        	
    private $data;
    
    /**
     * @return 
     */
    public function getData() 
    {
        return $this->data;
    }
    
    /**
     * 设置     
     * @param array include @see UmengApptrackAppEvent[] $data     
     * 此参数必填     
     */
    public function setData(UmengApptrackAppEvent $data)
    {
        $this->data = $data;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "data", $this->stdResult )) {
	        $dataResult=$this->stdResult->{"data"};
			$object = json_decode ( json_encode ( $dataResult ), true );
			$this->data = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject ( $object [$i] );
				$UmengApptrackAppEventResult=new UmengApptrackAppEvent();
				$UmengApptrackAppEventResult->setArrayResult($arrayobject );
				$this->data [$i] = $UmengApptrackAppEventResult;
			}
		}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "data", $this->arrayResult )) {
    		$dataResult=$arrayResult['data'];
    		$this->data = new UmengApptrackAppEvent();
    		$this->data->setStdResult ( $dataResult);
    	}
    }

}
