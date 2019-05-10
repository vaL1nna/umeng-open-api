<?php

namespace moyi\umeng\apptrack\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengApptrackGetRegisterLoginDataResult 
{

        	
    private $register;
    
    /**
     * @return 注册数量
     */
    public function getRegister() 
    {
        return $this->register;
    }
    
    /**
     * 设置注册数量     
     * @param Long $register     
     * 此参数必填     
     */
    public function setRegister($register) 
    {
        $this->register = $register;
    }
    
        	
    private $login;
    
    /**
     * @return 登录数量
     */
    public function getLogin() 
    {
        return $this->login;
    }
    
    /**
     * 设置登录数量     
     * @param Long $login     
     * 此参数必填     
     */
    public function setLogin($login) 
    {
        $this->login = $login;
    }
    
        	
    private $roleDevice;
    
    /**
     * @return 创建角色数量
     */
    public function getRoleDevice() 
    {
        return $this->roleDevice;
    }
    
    /**
     * 设置创建角色数量     
     * @param Long $roleDevice       
     * 此参数必填     
     */
    public function setRoleDevice($roleDevice) 
    {
        $this->roleDevice = $roleDevice;
    }
    
        	
    private $orderDevice;
    
    /**
     * @return 拍下订单设备数量
     */
    public function getOrderDevice()
    {
        return $this->orderDevice;
    }
    
    /**
     * 设置拍下订单设备数量     
     * @param Long $orderDevice     
     * 此参数必填     
     */
    public function setOrderDevice($orderDevice) 
    {
        $this->orderDevice = $orderDevice;
    }
    
        	
    private $orderAmount;
    
    /**
     * @return 拍下订单金额
     */
    public function getOrderAmount() 
    {
        return $this->orderAmount;
    }
    
    /**
     * 设置拍下订单金额     
     * @param BigDecimal $orderAmount     
     * 此参数必填     
     */
    public function setOrderAmount($orderAmount) 
    {
        $this->orderAmount = $orderAmount;
    }
    
        	
    private $payDevice;
    
    /**
     * @return 付费设备数
     */
    public function getPayDevice() 
    {
        return $this->payDevice;
    }
    
    /**
     * 设置付费设备数     
     * @param Long $payDevice      
     * 此参数必填     
     */
    public function setPayDevice($payDevice) 
    {
        $this->payDevice = $payDevice;
    }
    
        	
    private $amount;
    
    /**
     * @return 付费金额
     */
    public function getAmount() 
    {
        return $this->amount;
    }
    
    /**
     * 设置付费金额     
     * @param BigDecimal $amount       
     * 此参数必填     
     */
    public function setAmount($amount) 
    {
        $this->amount = $amount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "register", $this->stdResult )) {
    		$this->register = $this->stdResult->{"register"};
    	}
    	if (array_key_exists ( "login", $this->stdResult )) {
    		$this->login = $this->stdResult->{"login"};
    	}
    	if (array_key_exists ( "roleDevice", $this->stdResult )) {
    		$this->roleDevice = $this->stdResult->{"roleDevice"};
    	}
    	if (array_key_exists ( "orderDevice", $this->stdResult )) {
    		$this->orderDevice = $this->stdResult->{"orderDevice"};
    	}
    	if (array_key_exists ( "orderAmount", $this->stdResult )) {
    		$this->orderAmount = $this->stdResult->{"orderAmount"};
    	}
    	if (array_key_exists ( "payDevice", $this->stdResult )) {
    		$this->payDevice = $this->stdResult->{"payDevice"};
    	}
    	if (array_key_exists ( "amount", $this->stdResult )) {
    		$this->amount = $this->stdResult->{"amount"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "register", $this->arrayResult )) {
    		$this->register = $arrayResult['register'];
    	}
    	if (array_key_exists ( "login", $this->arrayResult )) {
    		$this->login = $arrayResult['login'];
    	}
    	if (array_key_exists ( "roleDevice", $this->arrayResult )) {
    		$this->roleDevice = $arrayResult['roleDevice'];
    	}
    	if (array_key_exists ( "orderDevice", $this->arrayResult )) {
    		$this->orderDevice = $arrayResult['orderDevice'];
    	}
    	if (array_key_exists ( "orderAmount", $this->arrayResult )) {
    		$this->orderAmount = $arrayResult['orderAmount'];
    	}
    	if (array_key_exists ( "payDevice", $this->arrayResult )) {
    		$this->payDevice = $arrayResult['payDevice'];
    	}
    	if (array_key_exists ( "amount", $this->arrayResult )) {
    		$this->amount = $arrayResult['amount'];
    	}
    }

}
