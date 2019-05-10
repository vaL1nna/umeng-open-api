<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;
use moyi\umeng\uapp\param\UmengUappDateCountInfo;

class UmengUappEventGetUniqueUsersResult
{

        	
    private $uniqueUsers;
    
    /**
     * @return 
     */
    public function getUniqueUsers()
    {
        return $this->uniqueUsers;
    }
    
    /**
     * 设置     
     * @param array include @see UmengUappDateCountInfo[] $uniqueUsers     
     * 此参数必填     
     */
    public function setUniqueUsers(UmengUappDateCountInfo $uniqueUsers)
    {
        $this->uniqueUsers = $uniqueUsers;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "uniqueUsers", $this->stdResult )) {
    		$uniqueUsersResult=$this->stdResult->{"uniqueUsers"};
    		$object = json_decode ( json_encode ( $uniqueUsersResult ), true );
			$this->uniqueUsers = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
			    $arrayobject = new \ArrayObject ( $object [$i] );
				$UmengUappDateCountInfoResult=new UmengUappDateCountInfo();
				$UmengUappDateCountInfoResult->setArrayResult($arrayobject );
				$this->uniqueUsers [$i] = $UmengUappDateCountInfoResult;
			}
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "uniqueUsers", $this->arrayResult )) {
    		$uniqueUsersResult=$arrayResult['uniqueUsers'];
    		$this->uniqueUsers = new UmengUappDateCountInfo();
    		$this->uniqueUsers->setStdResult ( $uniqueUsersResult);
    	}
    }
}
