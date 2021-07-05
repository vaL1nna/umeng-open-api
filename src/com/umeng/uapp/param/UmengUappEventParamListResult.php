<?php

namespace moyi\umeng\uapp\param;

class UmengUappEventParamListResult
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
     * @param array include @see UmengUappParamInfo[] $paramInfos     
     * 此参数必填     
     */
    public function setParamInfos(UmengUappParamInfo $paramInfos)
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
				$UmengUappParamInfoResult=new UmengUappParamInfo();
				$UmengUappParamInfoResult->setArrayResult($arrayobject );
				$this->paramInfos [$i] = $UmengUappParamInfoResult;
			}
		}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "paramInfos", $this->arrayResult )) {
    		$paramInfosResult=$arrayResult['paramInfos'];
    		$this->paramInfos = new UmengUappParamInfo();
    		$this->paramInfos->setStdResult ( $paramInfosResult);
    	}
    }

}
