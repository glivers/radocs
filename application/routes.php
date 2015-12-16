<?php 

/**
 *This file contains all the defined routes for this application.
 *Routes as not mandatory, but in order to make custom url names different from your controller names, you can 
 *define a custom route. To define a route, follow the example below. Define the route name as index and the 
 *controller name as value as this 
 *	'homepage' => 'Home'
 *To define a route name with controller and method combination, separate the controller and method with @symbol
 * 	'homepage' => 'Home@index'
 *To specify url parameter name for which to map values, specify their names separated by forward slash
 *	'homepage' => 'Home@index/id/token'
 *To specify only controller name and url parameters and only specify method everytime in the url, omit the @methodName
 *	'homepage' => 'Home/id/token'
 */
return array(

/**
 *The home route.
 *This route loads the home controller
 *@param int $id The user id to update
 *@param string $sessid The session id of this logged in user
 */
'homepage' => 'Home@index/id/sessid',
/**
 *This routes loads the search users page.
 *@param string $name The post category name to load
 *@param int $id The id of particular post to load
 */
'blog' => 'Home/name/id'

);