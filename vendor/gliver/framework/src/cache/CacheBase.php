<?php namespace Gliver\Cache;

/**
 *This the base class which all cache drivers extend
 *
 *@author Geoffrey Okongo <geoffrey@gliver.org>
 *@copyright 2015 - 2030 Geoffrey Okongo
 *@category Gliver
 *@package Gliver\Drivers\Cache
 *@link https://github.com/gliverphp/gliver
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 2.0.1
 */

class CacheBase {

	use CacheImplementation;

	/**
	 *This constructor method sets the default Caching Service Type to use
	 *
	 *@param string $type Name of Cache Service
	 */
	public function __construct($type)
	{
		//set the default to cache service to use
		$this->type  = $type;

	}
	
}
