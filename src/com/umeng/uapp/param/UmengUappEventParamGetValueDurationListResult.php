<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;
use moyi\umeng\uapp\param\UmengUappParamValueInfo;

class UmengUappEventParamGetValueDurationListResult
{

    private $paramInfos;
    
    /**
     * @return 
     */
    public function getParamInfos()
    {
        return $this->paramInfos;
    }
    
    /**
     * 设置     
     * @param array include @see UmengUappParamValueInfo[] $paramInfos     
     * 此参数必填     
     */
    public function setParamInfos(UmengUappParamValueInfo $paramInfos)
    {
        $this->paramInfos = $paramInfos;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "paramInfos", $this->stdResult )) {
			$paramInfosResult=$this->stdResult->{"paramInfos"};
			$object = json_decode ( json_encode ( $paramInfosResult ), true );
			$this->paramInfos = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject ( $object [$i] );
				$UmengUappParamValueInfoResult=new UmengUappParamValueInfo();
				$UmengUappParamValueInfoResult->setArrayResult($arrayobject );
				$this->paramInfos [$i] = $UmengUappParamValueInfoResult;
			}
		}
	}
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "paramInfos", $this->arrayResult )) {
    		$paramInfosResult=$arrayResult['paramInfos'];
			$this->paramInfos = new UmengUappParamValueInfo();
			$this->paramInfos->setStdResult ( $paramInfosResult);
		}
    }
}
