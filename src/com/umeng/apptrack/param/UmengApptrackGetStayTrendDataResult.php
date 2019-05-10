<?php

namespace moyi\umeng\apptrack\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengApptrackGetStayTrendDataResult 
{

        	
    private $stay1;
    
    /**
     * @return 次日留存数据
     */
    public function getStay1() 
    {
        return $this->stay1;
    }
    
    /**
     * 设置次日留存数据     
     * @param Long $stay1       
     * 此参数必填     
     */
    public function setStay1($stay1) 
    {
        $this->stay1 = $stay1;
    }
    
        	
    private $stay2;
    
    /**
     * @return 第3日留存数据
     */
    public function getStay2() 
    {
        return $this->stay2;
    }
    
    /**
     * 设置第3日留存数据     
     * @param Long $stay2     
     * 此参数必填     
     */
    public function setStay2($stay2) 
    {
        $this->stay2 = $stay2;
    }
    
        	
    private $stay3;
    
    /**
     * @return 第4日留存数据
     */
    public function getStay3() 
    {
        return $this->stay3;
    }
    
    /**
     * 设置第4日留存数据     
     * @param Long $stay3     
     * 此参数必填     
     */
    public function setStay3($stay3) 
    {
        $this->stay3 = $stay3;
    }
    
        	
    private $stay4;
    
    /**
     * @return 第5日留存数据
     */
    public function getStay4() 
    {
        return $this->stay4;
    }
    
    /**
     * 设置第5日留存数据     
     * @param Long $stay4     
     * 此参数必填     
     */
    public function setStay4($stay4) 
    {
        $this->stay4 = $stay4;
    }
    
        	
    private $stay5;
    
    /**
     * @return 第6日留存数据
     */
    public function getStay5() 
    {
        return $this->stay5;
    }
    
    /**
     * 设置第6日留存数据     
     * @param Long $stay5     
     * 此参数必填     
     */
    public function setStay5( $stay5) 
    {
        $this->stay5 = $stay5;
    }
    
        	
    private $stay6;
    
    /**
     * @return 第7日留存数据
     */
    public function getStay6() 
    {
        return $this->stay6;
    }
    
    /**
     * 设置第7日留存数据     
     * @param Long $stay6     
     * 此参数必填     
     */
    public function setStay6($stay6) 
    {
        $this->stay6 = $stay6;
    }
    
        	
    private $stay7;
    
    /**
     * @return 第8日留存数据
     */
    public function getStay7() 
    {
        return $this->stay7;
    }
    
    /**
     * 设置第8日留存数据     
     * @param Long $stay7     
     * 此参数必填     
     */
    public function setStay7($stay7) 
    {
        $this->stay7 = $stay7;
    }
    
        	
    private $stay8;
    
    /**
     * @return 第9日留存数据
     */
    public function getStay8() 
    {
        return $this->stay8;
    }
    
    /**
     * 设置第9日留存数据     
     * @param Long $stay8     
     * 此参数必填     
     */
    public function setStay8($stay8) 
    {
        $this->stay8 = $stay8;
    }
    
        	
    private $stay9;
    
    /**
     * @return 第10日留存数据
     */
    public function getStay9() 
    {
        return $this->stay9;
    }
    
    /**
     * 设置第10日留存数据     
     * @param Long $stay9     
     * 此参数必填     
     */
    public function setStay9($stay9) 
    {
        $this->stay9 = $stay9;
    }
    
        	
    private $stay10;
    
    /**
     * @return 第11日留存数据
     */
    public function getStay10() 
    {
        return $this->stay10;
    }
    
    /**
     * 设置第11日留存数据     
     * @param Long $stay10     
     * 此参数必填     
     */
    public function setStay10($stay10) 
    {
        $this->stay10 = $stay10;
    }
    
        	
    private $stay11;
    
    /**
     * @return 第12日留存数据
     */
    public function getStay11() 
    {
        return $this->stay11;
    }
    
    /**
     * 设置第12日留存数据     
     * @param Long $stay11       
     * 此参数必填     
     */
    public function setStay11($stay11) 
    {
        $this->stay11 = $stay11;
    }
    
        	
    private $stay12;
    
    /**
     * @return 第13日留存数据
     */
    public function getStay12() 
    {
        return $this->stay12;
    }
    
    /**
     * 设置第13日留存数据     
     * @param Long $stay12        
     * 此参数必填     
     */
    public function setStay12($stay12) 
    {
        $this->stay12 = $stay12;
    }
    
        	
    private $stay13;
    
    /**
     * @return 第14日留存数据
     */
    public function getStay13() 
    {
        return $this->stay13;
    }
    
    /**
     * 设置第14日留存数据     
     * @param Long $stay13        
     * 此参数必填     
     */
    public function setStay13($stay13) 
    {
        $this->stay13 = $stay13;
    }
    
        	
    private $stay14;
    
    /**
     * @return 第15日留存数据
     */
    public function getStay14() 
    {
        return $this->stay14;
    }
    
    /**
     * 设置第15日留存数据     
     * @param Long $stay14       
     * 此参数必填     
     */
    public function setStay14($stay14) 
    {
        $this->stay14 = $stay14;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) 
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "stay1", $this->stdResult )) {
    		$this->stay1 = $this->stdResult->{"stay1"};
    	}
    	if (array_key_exists ( "stay2", $this->stdResult )) {
    		$this->stay2 = $this->stdResult->{"stay2"};
    	}
    	if (array_key_exists ( "stay3", $this->stdResult )) {
    		$this->stay3 = $this->stdResult->{"stay3"};
    	}
    	if (array_key_exists ( "stay4", $this->stdResult )) {
    		$this->stay4 = $this->stdResult->{"stay4"};
    	}
    	if (array_key_exists ( "stay5", $this->stdResult )) {
    		$this->stay5 = $this->stdResult->{"stay5"};
    	}
    	if (array_key_exists ( "stay6", $this->stdResult )) {
    		$this->stay6 = $this->stdResult->{"stay6"};
    	}
    	if (array_key_exists ( "stay7", $this->stdResult )) {
    		$this->stay7 = $this->stdResult->{"stay7"};
    	}
    	if (array_key_exists ( "stay8", $this->stdResult )) {
    		$this->stay8 = $this->stdResult->{"stay8"};
    	}
    	if (array_key_exists ( "stay9", $this->stdResult )) {
    		$this->stay9 = $this->stdResult->{"stay9"};
    	}
    	if (array_key_exists ( "stay10", $this->stdResult )) {
    		$this->stay10 = $this->stdResult->{"stay10"};
    	}
    	if (array_key_exists ( "stay11", $this->stdResult )) {
    		$this->stay11 = $this->stdResult->{"stay11"};
    	}
    	if (array_key_exists ( "stay12", $this->stdResult )) {
    		$this->stay12 = $this->stdResult->{"stay12"};
    	}
    	if (array_key_exists ( "stay13", $this->stdResult )) {
    		$this->stay13 = $this->stdResult->{"stay13"};
    	}
    	if (array_key_exists ( "stay14", $this->stdResult )) {
    		$this->stay14 = $this->stdResult->{"stay14"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "stay1", $this->arrayResult )) {
    		$this->stay1 = $arrayResult['stay1'];
    	}
    	if (array_key_exists ( "stay2", $this->arrayResult )) {
    		$this->stay2 = $arrayResult['stay2'];
    	}
    	if (array_key_exists ( "stay3", $this->arrayResult )) {
    		$this->stay3 = $arrayResult['stay3'];
    	}
    	if (array_key_exists ( "stay4", $this->arrayResult )) {
    		$this->stay4 = $arrayResult['stay4'];
    	}
    	if (array_key_exists ( "stay5", $this->arrayResult )) {
    		$this->stay5 = $arrayResult['stay5'];
    	}
    	if (array_key_exists ( "stay6", $this->arrayResult )) {
    		$this->stay6 = $arrayResult['stay6'];
    	}
    	if (array_key_exists ( "stay7", $this->arrayResult )) {
    		$this->stay7 = $arrayResult['stay7'];
    	}
    	if (array_key_exists ( "stay8", $this->arrayResult )) {
    		$this->stay8 = $arrayResult['stay8'];
    	}
    	if (array_key_exists ( "stay9", $this->arrayResult )) {
    		$this->stay9 = $arrayResult['stay9'];
    	}
    	if (array_key_exists ( "stay10", $this->arrayResult )) {
    		$this->stay10 = $arrayResult['stay10'];
    	}
    	if (array_key_exists ( "stay11", $this->arrayResult )) {
    		$this->stay11 = $arrayResult['stay11'];
    	}
    	if (array_key_exists ( "stay12", $this->arrayResult )) {
    		$this->stay12 = $arrayResult['stay12'];
    	}
    	if (array_key_exists ( "stay13", $this->arrayResult )) {
    	    $this->stay13 = $arrayResult['stay13'];
    	}
    	if (array_key_exists ( "stay14", $this->arrayResult )) {
    		$this->stay14 = $arrayResult['stay14'];
    	}
    }

}
