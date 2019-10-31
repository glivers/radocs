<?php namespace Gliver\Database;

/**
 *This trait is implemented in the base class. 
 *It give the basic initialization code for a database service
 *
 *@author Geoffrey Okongo <geoffrey@gliver.org>
 *@copyright 2015 - 2030 Geoffrey Okongo
 *@category Gliver
 *@package Gliver\Database
 *@link https://github.com/gliverphp/framework
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 2.0.1
 */

use Gliver\Database\MySQL\MySQL;

trait DbImplement { 

	/**
	 *@var string The database type
	 *@readwrite
	 */
	protected $type; 

	/**
	 *@var array Database type connection parameters
	 *@readwrite
	 */
	protected $options;

	/**
	 *This method initializes a database connection
	 *
	 *@param null
	 *@return object Instance of this database connection
	 *@throws DbException  If the database type provided is not defined for this system
	 */
	public function initialize()
	{
		//throw exception if no database type has been set
		if( ! $this->type )
		{
			//Throw exception
			throw new DbException("Invalid database type provided");
			
		}

		//check the type of  database provided returning instance
		//set the parameter to check in switch clause
		switch ($this->type ) 
		{
			case 'mysql':

				return new MySQL($this->options);

				break;
			
			default:

				throw new DbException("Valid database type provided");
				

				break;
		}

	}
}
