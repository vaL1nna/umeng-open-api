<?php

namespace moyi\umeng\apptrack\param; 

use moyi\client\entity\SDKDomain;
use moyi\client\entity\ByteArray;

class UmengApptrackGetPlanListParam
{

        
    /**
     * @return 当前页数
     */
    public function getPageNum() {
        $tempResult = $this->sdkStdResult["pageNum"];
        return $tempResult;
    }
    
    /**
     * 设置当前页数     
     * @param Integer $pageNum     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre>1</pre>
     */
    public function setPageNum($pageNum)
    {
        $this->sdkStdResult["pageNum"] = $pageNum;
    }
    
        
    /**
     * @return 每页显示的记录数
     */
    public function getPageSize()
    {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页显示的记录数     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数为可选参数
     * 默认值：<pre>10</pre>
     */
    public function setPageSize($pageSize)
    {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult = array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }

}
