<?php

namespace moyi\umeng\uapp\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;
use moyi\umeng\uapp\param\UmengUappAccountInfo;

class UmengUappGetNewAccountsResult
{

        	
    private $newAccountInfo;
    
    /**
     * @return UmengUappAccountInfo[]
     */
    public function getNewAccountInfo()
    {
        return $this->newAccountInfo;
    }
    
    /**
     * 设置UmengUappAccountInfo[]     
     * @param array include @see UmengUappAccountInfo[] $newAccountInfo     
     * 此参数必填     
     */
    public function setNewAccountInfo(UmengUappAccountInfo $newAccountInfo)
    {
        $this->newAccountInfo = $newAccountInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "newAccountInfo", $this->stdResult )) {
    		$newAccountInfoResult=$this->stdResult->{"newAccountInfo"};
    		$object = json_decode ( json_encode ( $newAccountInfoResult ), true );
			$this->newAccountInfo = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject ( $object [$i] );
				$UmengUappAccountInfoResult=new UmengUappAccountInfo();
				$UmengUappAccountInfoResult->setArrayResult($arrayobject );
				$this->newAccountInfo [$i] = $UmengUappAccountInfoResult;
			}
		}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "newAccountInfo", $this->arrayResult )) {
    		$newAccountInfoResult=$arrayResult['newAccountInfo'];
    		$this->newAccountInfo = new UmengUappAccountInfo();
    		$this->newAccountInfo->setStdResult ( $newAccountInfoResult);
    	}
    }

}
