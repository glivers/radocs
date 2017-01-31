<?php namespace Controllers;

/**
 *This class loads the application homepage
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Controllers
 *@package Controllers\Home
 *@link https://github.com/gliver-mvc/gliver
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 1.0.1
 */

use Drivers\Templates\View;

class HomeController extends BaseController {

	/**
	 *This method loads the preface page 
	 *
	 *@param null
	 *@return void
	 */
	public function getIndex()
	{
		//get the ending date today
		View::render('index');

	}	

	/**
	 *This method loads the preface page 
	 *
	 *@param null
	 *@return void
	 */
	public function getPreface()
	{
		//get the ending date today
		View::render('preface');

	}
	
	/**
	 *This method loads the installation page 
	 *
	 *@param null
	 *@return void
	 */
	public function getInstallation()
	{
		//get the ending date today
		View::render('installation');

	}
	

	/**
	 *This method loads the  prief tour page 
	 *
	 *@param null
	 *@return void
	 */
	public function getBrief()
	{
		//get the ending date today
		View::render('brieftour');

	}
	

	/**
	 *This method loads the getting started page 
	 *
	 *@param null
	 *@return void
	 */
	public function getGetstarted()
	{
		//get the ending date today
		View::render('getstarted');

	}
	

	/**
	 *This method loads the helpers page 
	 *
	 *@param null
	 *@return void
	 */
	public function getHelpers()
	{
        $data['func_usage_lbl'] = "Fucntion Use";
		View::render('helpers',$data);

	}
	

	/**
	 *This method loads the database page 
	 *
	 *@param null
	 *@return void
	 */
	public function getDatabase()
	{
		//get the ending date today
		View::render('database');

	}
	

	/**
	 *This method loads the caching page 
	 *
	 *@param null
	 *@return void
	 */
	public function getCaching()
	{
		//get the ending date today
		View::render('caching');

	}
		
}
