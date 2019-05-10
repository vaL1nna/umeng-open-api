<?php

namespace moyi\umeng\uapp\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;
use moyi\umeng\uapp\param\UmengUappAllAppData;

class UmengUappGetAllAppDataResult
{

    private $allAppData;
    
    /**
     * @return 
     */
    public function getAllAppData()
    {
        return $this->allAppData;
    }
    
    /**
     * 设置     
     * @param array include @see UmengUappAllAppData[] $allAppData     
     * 此参数必填     
     */
    public function setAllAppData(UmengUappAllAppData $allAppData)
    {
        $this->allAppData = $allAppData;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "allAppData", $this->stdResult )) {
			$allAppDataResult=$this->stdResult->{"allAppData"};
			$object = json_decode ( json_encode ( $allAppDataResult ), true );
			$this->allAppData = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject ( $object [$i] );
				$UmengUappAllAppDataResult=new UmengUappAllAppData();
				$UmengUappAllAppDataResult->setArrayResult($arrayobject );
				$this->allAppData [$i] = $UmengUappAllAppDataResult;
			}
		}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "allAppData", $this->arrayResult )) {
    		$allAppDataResult=$arrayResult['allAppData'];
    		$this->allAppData = new UmengUappAllAppData();
    		$this->allAppData->setStdResult ( $allAppDataResult);
    	}
    }

}
