<?php namespace Gliver\Database;

/**
 *This class is the base database class which all subclasses extend
 *
 *@author Geoffrey Okongo <geoffrey@gliver.org>
 *@copyright 2015 - 2030 Geoffrey Okongo
 *@category Gliver
 *@package Gliver\Database
 *@link https://github.com/gliverphp/framework
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 2.0.1
 */

use Gliver\Database\DbImplement;

class BaseDb {

	use DbImplement;

	/**
	 *This constructor method intializes the database type and sets the options parameters
	 *
	 *@param string $name This is the default database name
	 *@param array $options This is the array containing the database connection paramters
	 */
	public function __construct($name, $options)
	{
		//assign $name to the database type
		$this->type = $name;

		//assign the $options to the database connection options
		$this->options = $options;

	}


}