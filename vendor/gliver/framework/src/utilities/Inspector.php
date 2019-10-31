<?php namespace Gliver\Utilities;

/**
 *This class checks for presence of filter classes in the method definitinos.
 *@author Geoffrey Okongo <geoffrey@gliver.org>
 *@copyright 2015 - 2030 Geoffrey Okongo
 *@category Gliver
 *@package Gliver\Utilities\Inspector
 *@link https://github.com/gliverphp/framework
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 2.0.1
 */

class Inspector {

	/**
	*This method checks if a filter has been defined in the doc block.
	*@param string $comment_string The doc block comment string
	*@return mixed method name as string if found or bool false if not found
	*/
	public static function checkFilter($comment_string)
	{
		//define the regular expression pattern to use for string matching
		$pattern = "#(@[a-zA-Z]+\s*[a-zA-Z0-9, ()_].*)#";

		//perform the regular expression on the string provided
		preg_match_all($pattern, $comment_string, $matches, PREG_PATTERN_ORDER);

		//get the meta elements in array
		$meta_data_array = $matches[0];

		//check meta data was found
		if(count($meta_data_array) > 0){

			//set array for before and after filters
			$beforeFilters = array();
			$afterFilters = array();

			//loop through array getting before and after filters
			foreach($meta_data_array as $key => $value){

				//get before filter
				if(strpos($value, "@before") !== false){
					
					$strb = explode(' ', trim($value)); $strb = self::clean($strb);
					(isset($strb[1])) ? $beforeFilters[] = $strb[1] : ''; 
					(isset($strb[2])) ? $beforeFilters[] = $strb[2] : ''; 
					
				}

				//get after filters
				if(strpos($value,"@after") !== false){

					$stra = explode(' ', trim($value)); $stra = self::clean($stra);
					(isset($stra[1])) ? $afterFilters[] = $stra[1] : ''; 
					(isset($stra[2])) ? $afterFilters[] = $stra[2] : '';

				}

			}

			//define the array to return
			$return = array();

			//check if before and after filters were empty
			if( ! empty($beforeFilters)) $return['before'] = $beforeFilters;

			if( ! empty($afterFilters)) $return['after'] = $afterFilters;
				
			return $return;
		
		}

		//no meta data found, return false
		else return false;

	}

	/**
	*This method removes empty array from the array and returns elements with valid values.
	*@param array $array The array to parse
	*@return array The array after removing empty values
	*/
	private static function clean($array)
	{

		//loop throught the input array removing empty elements and return resultant array
		$output = array_values(array_filter($array, function($item){

				return ! empty($item);

		}));

		return $output;

	}

}