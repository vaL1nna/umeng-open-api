<?php

namespace moyi\umeng\brand\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;
use moyi\umeng\brand\param\UmengBrandMonitoringCodeResult;

class UmengBrandGetMonitoringCodeListResult 
{
	
    private $monitoringCodeList;
    
    /**
     * @return 
     */
    public function getMonitoringCodeList()
    {
        return $this->monitoringCodeList;
    }
    
    /**
     * 设置     
     * @param array include @see UmengBrandMonitoringCodeResult[] $monitoringCodeList     
     * 此参数必填     
     */
    public function setMonitoringCodeList(UmengBrandMonitoringCodeResult $monitoringCodeList) 
    {
        $this->monitoringCodeList = $monitoringCodeList;
    }
    
        	
    private $total;
    
    /**
     * @return 总条数
     */
    public function getTotal() 
    {
        return $this->total;
    }
    
    /**
     * 设置总条数     
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
		if (array_key_exists ( "monitoringCodeList", $this->stdResult )) {
		    $monitoringCodeListResult=$this->stdResult->{"monitoringCodeList"};
			$object = json_decode ( json_encode ( $monitoringCodeListResult ), true );
			$this->monitoringCodeList = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject ( $object [$i] );
				$UmengBrandMonitoringCodeResultResult=new UmengBrandMonitoringCodeResult();
				$UmengBrandMonitoringCodeResultResult->setArrayResult($arrayobject );
				$this->monitoringCodeList [$i] = $UmengBrandMonitoringCodeResultResult;
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
		if (array_key_exists ( "monitoringCodeList", $this->arrayResult )) {
    		$monitoringCodeListResult=$arrayResult['monitoringCodeList'];
    		$this->monitoringCodeList = new UmengBrandMonitoringCodeResult();
    		$this->monitoringCodeList->setStdResult ( $monitoringCodeListResult);
    	}
    	if (array_key_exists ( "total", $this->arrayResult )) {
    		$this->total = $arrayResult['total'];
    		}
    	}

}
