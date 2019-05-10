<?php

namespace moyi\client\entity;

class AuthorizationToken
{
	
	private $access_token;
	private $refresh_token;
	private $expires_in;
	private $expires_time;
	private $refresh_token_timeout;
	private $resource_owner;
	private $uid;
	private $aliId;
	private $memberId;
	
	public function setAccessToken($accessToken)
	{
		$this->access_token = $accessToken;
	}

	public function getAccessToken()
	{
		return $this->access_token;
	}

	
	private $stdResult;

	public function setStdResult($stdResult)
	{
		$this->stdResult = $stdResult;
		if (array_key_exists("access_token", $this->stdResult)) {
			$this->access_token = $this->stdResult->{"access_token"};
		}
		if (array_key_exists("refresh_token", $this->stdResult)) {
			$this->refresh_token = $this->stdResult->{"refresh_token"};
		}
		if (array_key_exists("expires_in", $this->stdResult)) {
			$this->expires_in = $this->stdResult->{"expires_in"};
		}
		if (array_key_exists("expires_time", $this->stdResult)) {
			$this->expires_time = $this->stdResult->{"expires_time"};
		}
		if (array_key_exists("refresh_token_timeout", $this->stdResult)) {
			$this->refresh_token_timeout = $this->stdResult->{"refresh_token_timeout"};
		}
		if (array_key_exists("resource_owner", $this->stdResult)) {
			$this->resource_owner = $this->stdResult->{"resource_owner"};
		}
		if (array_key_exists("uid", $this->stdResult)) {
			$this->uid = $this->stdResult->{"uid"};
		}
		if (array_key_exists("aliId", $this->stdResult)) {
			$this->aliId = $this->stdResult->{"aliId"};
		}
		if (array_key_exists("memberId", $this->stdResult)) {
			$this->memberId = $this->stdResult->{"memberId"};
		}
	}

}
