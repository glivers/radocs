<?php namespace Gliver\File;

/**
 *This class handles operations on files
 *
 *@author Geoffrey Okongo <geoffrey@gliver.org>
 *@copyright 2015 - 2030 Geoffrey Okongo
 *@category Gliver
 *@package Gliver\File\FileHandler
 *@link https://github.com/gliverphp/framework
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 2.0.1
 */

class FileHandler extends \SplFileObject {

	/**
	 *This method creates and returns an object of the File handler object.
	 *@param string $file_path The full path to the file
	 *@return object $this
	 */
	public static function Create($file_path)
	{

		//return this instance
		return new self($file_path);

	}

}