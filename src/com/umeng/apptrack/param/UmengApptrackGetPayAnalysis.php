<?php

namespace moyi\umeng\apptrack\param;

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengApptrackGetPayAnalysis extends SDKDomain
{

    private $payId;
    
    /**
     * @return 付费(拍下)ID
     */
    public function getPayId() 
    {
        return $this->payId;
    }
    
    /**
     * 设置付费(拍下)ID     
     * @param String $payId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setPayId($payId)
    {
        $this->payId = $payId;
    }
    
        	
    private $payItem;
    
    /**
     * @return 付费(拍下)商品
     */
    public function getPayItem() 
    {
        return $this->payItem;
    }
    
    /**
     * 设置付费(拍下)商品     
     * @param String $payItem     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setPayItem($payItem) 
    {
        $this->payItem = $payItem;
    }
    
        	
    private $orderId;
    
    /**
     * @return 订单号
     */
    public function getOrderId() 
    {
        return $this->orderId;
    }
    
    /**
     * 设置订单号     
     * @param String $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setOrderId($orderId) 
    {
        $this->orderId = $orderId;
    }
    
        	
    private $amount;
    
    /**
     * @return 付费(拍下)金额
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * 设置付费(拍下)金额     
     * @param BigDecimal $amount     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setAmount($amount) 
    {
        $this->amount = $amount;
    }
    
        	
    private $activateDs;
    
    /**
     * @return 激活日期
     */
    public function getActivateDs()
    {
        return $this->activateDs;
    }
    
    /**
     * 设置激活日期     
     * @param String $activateDs     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setActivateDs($activateDs)
    {
        $this->activateDs = $activateDs;
    }
    
        	
    private $eventDs;
    
    /**
     * @return 事件日期
     */
    public function getEventDs() 
    {
        return $this->eventDs;
    }
    
    /**
     * 设置事件日期     
     * @param String $eventDs     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setEventDs($eventDs) 
    {
        $this->eventDs = $eventDs;
    }
    
        	
    private $clickDs;
    
    /**
     * @return 点击日期
     */
    public function getClickDs()
    {
        return $this->clickDs;
    }
    
    /**
     * 设置点击日期     
     * @param String $clickDs     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setClickDs($clickDs) 
    {
        $this->clickDs = $clickDs;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "payId", $this->stdResult )) {
    		$this->payId = $this->stdResult->{"payId"};
    	}
    	if (array_key_exists ( "payItem", $this->stdResult )) {
    		$this->payItem = $this->stdResult->{"payItem"};
    	}
    	if (array_key_exists ( "orderId", $this->stdResult )) {
    		$this->orderId = $this->stdResult->{"orderId"};
    	}
    	if (array_key_exists ( "amount", $this->stdResult )) {
    		$this->amount = $this->stdResult->{"amount"};
    	}
    	if (array_key_exists ( "activateDs", $this->stdResult )) {
    		$this->activateDs = $this->stdResult->{"activateDs"};
    	}
    	if (array_key_exists ( "eventDs", $this->stdResult )) {
    		$this->eventDs = $this->stdResult->{"eventDs"};
    	}
    	if (array_key_exists ( "clickDs", $this->stdResult )) {
    		$this->clickDs = $this->stdResult->{"clickDs"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "payId", $this->arrayResult )) {
    		$this->payId = $arrayResult['payId'];
    	}
    	if (array_key_exists ( "payItem", $this->arrayResult )) {
    		$this->payItem = $arrayResult['payItem'];
    	}
    	if (array_key_exists ( "orderId", $this->arrayResult )) {
    		$this->orderId = $arrayResult['orderId'];
    	}
    	if (array_key_exists ( "amount", $this->arrayResult )) {
    		$this->amount = $arrayResult['amount'];
    	}
    	if (array_key_exists ( "activateDs", $this->arrayResult )) {
    		$this->activateDs = $arrayResult['activateDs'];
    	}
    	if (array_key_exists ( "eventDs", $this->arrayResult )) {
    		$this->eventDs = $arrayResult['eventDs'];
    	}
    	if (array_key_exists ( "clickDs", $this->arrayResult )) {
    		$this->clickDs = $arrayResult['clickDs'];
    	}
    }
   
}
