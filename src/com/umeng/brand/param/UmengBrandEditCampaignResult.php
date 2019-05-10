<?php

namespace moyi\umeng\brand\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengBrandEditCampaignResult
{

        	
    private $campaignId;
    
    /**
     * @return 活动id
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }
    
    /**
     * 设置活动id     
     * @param Integer $campaignId     
     * 此参数必填     
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "campaignId", $this->stdResult )) {
    		$this->campaignId = $this->stdResult->{"campaignId"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		
        if (array_key_exists ( "campaignId", $this->arrayResult )) {
    			
            $this->campaignId = $arrayResult['campaignId'];
    	}
    }

}
