<?php namespace Gliver\Templates;

/**
 *This class is the base class that handles template processing 
 *@author Geoffrey Okongo <geoffrey@gliver.org>
 *@copyright 2015 - 2030 Geoffrey Okongo
 *@category Gliver
 *@package Gliver\Templates
 *@link https://github.com/gliverphp/framework
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 2.0.1
 */

use Gliver\Templates\GrammarMapTrait;
use Gliver\Templates\TemplateParserClass;

class BaseTemplateClass extends TemplateParserClass {

	//use the class tha define s the grammar map
	use GrammarMapTrait;

}

