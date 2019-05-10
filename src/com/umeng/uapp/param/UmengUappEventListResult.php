<?php

namespace moyi\umeng\uapp\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;
use moyi\umeng\uapp\param\UmengUappEventInfo;

class UmengUappEventListResult
{

    private $eventInfo;
    
    /**
     * @return 
     */
    public function getEventInfo()
    {
        return $this->eventInfo;
    }
    
    /**
     * 设置     
     * @param array include @see UmengUappEventInfo[] $eventInfo     
     * 此参数必填     
     */
    public function setEventInfo(UmengUappEventInfo $eventInfo)
    {
        $this->eventInfo = $eventInfo;
    }
    
        	
    private $page;
    
    /**
     * @return 页数
     */
    public function getPage()
    {
        return $this->page;
    }
    
    /**
     * 设置页数     
     * @param Integer $page     
     * 此参数必填     
     */
    public function setPage($page)
    {
        $this->page = $page;
    }
    
        	
    private $totalPage;
    
    /**
     * @return 总页数
     */
    public function getTotalPage()
    {
        return $this->totalPage;
    }
    
    /**
     * 设置总页数     
     * @param Integer $totalPage     
     * 此参数必填     
     */
    public function setTotalPage($totalPage)
    {
        $this->totalPage = $totalPage;
    }
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "eventInfo", $this->stdResult )) {
		    $eventInfoResult=$this->stdResult->{"eventInfo"};
			$object = json_decode ( json_encode ( $eventInfoResult ), true );
			$this->eventInfo = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new ArrayObject ( $object [$i] );
				$UmengUappEventInfoResult=new UmengUappEventInfo();
				$UmengUappEventInfoResult->setArrayResult($arrayobject );
				$this->eventInfo [$i] = $UmengUappEventInfoResult;
			}
		}
    	if (array_key_exists ( "page", $this->stdResult )) {
    		$this->page = $this->stdResult->{"page"};
    	}
    	if (array_key_exists ( "totalPage", $this->stdResult )) {
    		$this->totalPage = $this->stdResult->{"totalPage"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "eventInfo", $this->arrayResult )) {
    		$eventInfoResult=$arrayResult['eventInfo'];
    		$this->eventInfo = new UmengUappEventInfo();
    		$this->eventInfo->setStdResult ( $eventInfoResult);
    	}
    	if (array_key_exists ( "page", $this->arrayResult )) {
    		$this->page = $arrayResult['page'];
    	}
    	if (array_key_exists ( "totalPage", $this->arrayResult )) {
    		$this->totalPage = $arrayResult['totalPage'];
    	}
    }
}
