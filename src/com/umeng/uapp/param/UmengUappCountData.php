<?php

namespace moyi\umeng\uapp\param; 

use moyi\client\entity\SDKDomain;

class UmengUappCountData extends SDKDomain
{

    private $date;
    
    /**
     * @return 统计日期
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * 设置统计日期     
     * @param String $date     
     * 参数示例：<pre>2018-01-01</pre>     
     * 此参数必填     
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    
        	
    private $dailyValue;
    
    /**
     * @return 按版本或渠道的统计信息
     */
    public function getDailyValue()
    {
        return $this->dailyValue;
    }
    
    /**
     * 设置按版本或渠道的统计信息     
     * @param array include @see UmengUappCountDataNameValue[] $dailyValue     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setDailyValue(UmengUappCountDataNameValue $dailyValue)
    {
        $this->dailyValue = $dailyValue;
    }
    
        	
    private $hourValue;
    
    /**
     * @return 按小时查询返回数组
     */
    public function getHourValue()
    {
        return $this->hourValue;
    }
    
    /**
     * 设置按小时查询返回数组     
     * @param array include @see Integer[] $hourValue     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setHourValue($hourValue)
    {
        $this->hourValue = $hourValue;
    }
    
        	
    private $value;
    
    /**
     * @return 其它情况返回整型，按天无版本无渠道，按周，按月查询。
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * 设置其它情况返回整型，按天无版本无渠道，按周，按月查询。     
     * @param Integer $value     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "date", $this->stdResult )) {
    		$this->date = $this->stdResult->{"date"};
    	}
    	if (array_key_exists ( "dailyValue", $this->stdResult )) {
		    $dailyValueResult=$this->stdResult->{"dailyValue"};
			$object = json_decode ( json_encode ( $dailyValueResult ), true );
			$this->dailyValue = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject ( $object [$i] );
				$UmengUappCountDataNameValueResult=new UmengUappCountDataNameValue();
				$UmengUappCountDataNameValueResult->setArrayResult($arrayobject );
				$this->dailyValue [$i] = $UmengUappCountDataNameValueResult;
			}
		}
    	if (array_key_exists ( "hourValue", $this->stdResult )) {
    		$this->hourValue = $this->stdResult->{"hourValue"};
    	}
    	if (array_key_exists ( "value", $this->stdResult )) {
    		$this->value = $this->stdResult->{"value"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (property_exists ( $this->arrayResult, "date" )) {
            $this->date = $arrayResult['date'];
        }
        if (property_exists ( $this->arrayResult, "dailyValue" )) {
            $dailyValueResult=$arrayResult['dailyValue'];
            $this->dailyValue = new UmengUappCountDataNameValue();
            $this->dailyValue->setStdResult ( $dailyValueResult);
        }
        if (property_exists ( $this->arrayResult, "hourValue" )) {
            $this->hourValue = $arrayResult['hourValue'];
        }
        if (property_exists ( $this->arrayResult, "value" )) {
            $this->value = $arrayResult['value'];
        }
    }  
}
