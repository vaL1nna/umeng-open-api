<?php

namespace moyi\client;

class APIId
{
	
	/**
	 * namespace of API, it is required
	 *
	 * @var string
	 */
	public $namespace;
	/**
	 * name of API, it is required
	 * @var string
	 */
	public $name;
	/**
	 * version of API, optional.
	 * If not setup, the default version defined in requestPolicy is used.
	 * @var integer
	 */
	public $version;

	public function __construct($namespace, $name, $version)
	{
		$this->namespace = $namespace;
		$this->name = $name;
		$this->version = $version;
	}
	
}
