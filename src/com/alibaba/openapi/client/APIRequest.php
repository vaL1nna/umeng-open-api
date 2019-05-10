<?php

namespace moyi\client;

class APIRequest
{
	
	/**
	 * 
	 * @var APIId
	 */
	public $apiId;
	
	/**
	 * 
	 * @var map
	 */
	public $addtionalParams = array();
	
	/**
	 * 
	 * @var base on request parameter object.
	 */
	public $requestEntity;
	
	/**
	 * 
	 * @var map
	 */
	public $attachments=array();
	
	/**
	 * 
	 * @var String
	 */
	public $authCodeKey;
	
	/**
	 * 
	 * @var String
	 */
	public $accessToken;
	
	/**
	 * 
	 * @var AuthorizationToken
	 */
	public $authToken;
}
