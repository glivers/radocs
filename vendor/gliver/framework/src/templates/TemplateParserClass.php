<?php namespace Gliver\Templates;

/**
 *This class processes templates
 *@author Geoffrey Okongo <geoffrey@gliver.org>
 *@copyright 2015 - 2030 Geoffrey Okongo
 *@category Gliver
 *@package Gliver\Templates
 *@link https://github.com/gliverphp/framework
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 2.0.1
 */

use Gliver\Templates\TemplateException;

class TemplateParserClass {

	/**
	 *This method is callesd to parse the provided vie file
	 *
	 *@param $path The path to the file to compile
	 *@return string The file path to the compiles string
	 */
	public function compiled($path, $embeded, $fileName)
	{

		//put the file search code in a try...catch block
		try{

			//check if this file exists
			if ( ! file_exists( $path) ) throw new TemplateException( get_class(new TemplateException). ": The view file named '$fileName'  cannot be found!", 1);
			
			//set the file path
			$this->path  = $path;

			//compile this template
			$compiled = $this->compile();

			//return the compiled contents
			return $compiled;


		}
		catch(TemplateException $TemplateExceptionObjectInstace){

			//compose the message and then display
			$TemplateExceptionObjectInstace->errorShow();

		}

	}

}

