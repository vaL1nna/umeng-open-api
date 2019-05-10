<?php

namespace moyi\umeng\brand\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;
use moyi\umeng\brand\param\UmengBrandGetMonitoringData;

class UmengBrandGetMonitoringDataResult 
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
     * @param array include @see UmengBrandGetMonitoringData[] $data     
     * 此参数必填     
     */
    public function setData(UmengBrandGetMonitoringData $data) 
    {
        $this->data = $data;
    }
    
        	
    private $total;
    
    /**
     * @return 所有符合条件的监测单元数量
     */
    public function getTotal() 
    {
        return $this->total;
    }
    
    /**
     * 设置所有符合条件的监测单元数量     
     * @param Integer $total     
     * 此参数必填     
     */
    public function setTotal($total) 
    {
        $this->total = $total;
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
				$UmengBrandGetMonitoringDataResult=new UmengBrandGetMonitoringData();
				$UmengBrandGetMonitoringDataResult->setArrayResult($arrayobject );
				$this->data [$i] = $UmengBrandGetMonitoringDataResult;
			}
		}
    	if (array_key_exists ( "total", $this->stdResult )) {
    		$this->total = $this->stdResult->{"total"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "data", $this->arrayResult )) {
    		$dataResult=$arrayResult['data'];
    		$this->data = new UmengBrandGetMonitoringData();
    		$this->data->setStdResult ( $dataResult);
    	}
    	if (array_key_exists ( "total", $this->arrayResult )) {
    		$this->total = $arrayResult['total'];
    	}
    }

}
