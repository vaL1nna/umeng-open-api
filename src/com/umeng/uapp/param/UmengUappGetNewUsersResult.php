<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;
use moyi\umeng\uapp\param\UmengUappCountData;

class UmengUappGetNewUsersResult
{

        	
    private $newUserInfo;
    
    /**
     * @return umeng.uapp.count.Data[]
     */
    public function getNewUserInfo()
    {
        return $this->newUserInfo;
    }
    
    /**
     * 设置umeng.uapp.count.Data[]     
     * @param array include @see UmengUappCountData[] $newUserInfo     
     * 此参数必填     
     */
    public function setNewUserInfo(UmengUappCountData $newUserInfo) 
    {
        $this->newUserInfo = $newUserInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "newUserInfo", $this->stdResult )) {
			$newUserInfoResult=$this->stdResult->{"newUserInfo"};
			$object = json_decode ( json_encode ( $newUserInfoResult ), true );
			$this->newUserInfo = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new ArrayObject ( $object [$i] );
				$UmengUappCountDataResult=new UmengUappCountData();
				$UmengUappCountDataResult->setArrayResult($arrayobject );
				$this->newUserInfo [$i] = $UmengUappCountDataResult;
			}
		}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		
        if (array_key_exists ( "newUserInfo", $this->arrayResult )) {
    		$newUserInfoResult=$arrayResult['newUserInfo'];
    			
            $this->newUserInfo = new UmengUappCountData();
    		$this->newUserInfo->setStdResult ( $newUserInfoResult);
    	}
    }

}