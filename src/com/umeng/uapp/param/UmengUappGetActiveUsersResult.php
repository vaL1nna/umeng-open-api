<?php

namespace moyi\umeng\uapp\param;

class UmengUappGetActiveUsersResult
{

    private $activeUserInfo;
    
    /**
     * @return umeng.uapp.count.Data[]
     */
    public function getActiveUserInfo()
    {
        return $this->activeUserInfo;
    }
    
    /**
     * 设置umeng.uapp.count.Data[]     
     * @param array include @see UmengUappCountData[] $activeUserInfo     
     * 此参数必填     
     */
    public function setActiveUserInfo(UmengUappCountData $activeUserInfo)
    {
        $this->activeUserInfo = $activeUserInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if ($this->stdResult->activeUserInfo) {
    		$activeUserInfoResult=$this->stdResult->{"activeUserInfo"};
    		$object = json_decode ( json_encode ( $activeUserInfoResult ), true );
			$this->activeUserInfo = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject ( $object [$i] );
				$UmengUappCountDataResult=new UmengUappCountData();
				$UmengUappCountDataResult->setArrayResult($arrayobject );
				$this->activeUserInfo [$i] = $UmengUappCountDataResult;
			}
		}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "activeUserInfo", $this->arrayResult )) {
    		$activeUserInfoResult=$arrayResult['activeUserInfo'];
    		$this->activeUserInfo = new UmengUappCountData();
    		$this->activeUserInfo->setStdResult ( $activeUserInfoResult);
    	}
    }

}
