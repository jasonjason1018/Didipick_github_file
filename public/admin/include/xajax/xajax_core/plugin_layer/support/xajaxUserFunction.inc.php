<?php
/*
	File: xajaxUserFunction.inc.php

	Contains the xajaxUserFunction class

	Title: xajaxUserFunction class

	Please see <copyright.inc.php> for a detailed description, copyright
	and license information.
*/

/*
	@package xajax
	@version $Id: xajaxUserFunction.inc.php 362 2007-05-29 15:32:24Z calltoconstruct $
	@copyright Copyright (c) 2005-2006 by Jared White & J. Max Wilson
	@license http://www.xajaxproject.org/bsd_license.txt BSD License
*/

/*
	Class: xajaxUserFunction
	
	Construct instances of this class to define functions that will be registered
	with the <xajax> request processor.  This class defines the parameters that
	are needed for the definition of a xajax enabled function.  While you can
	still specify functions by name during registration, it is advised that you
	convert to using this class when you wish to register external functions or 
	to specify call options as well.
*/
class xajaxUserFunction
{
	/*
		String: sAlias
		
		An alias to use for this function.  This is useful when you want
		to call the same xajax enabled function with a different set of
		call options from what was already registered.
	*/
	var $sAlias;
	
	/*
		Object: uf
		
		A string or array which defines the function to be registered.
	*/
	var $uf;
	
	/*
		String: sInclude
		
		The path and file name of the include file that contains the function.
	*/
	var $sInclude;
	
	/*
		Array: aConfiguration
		
		An associative array containing call options that will be sent to the
		browser curing client script generation.
	*/
	var $aConfiguration;
	
	/*
		Function: xajaxUserFunction
		
		Constructs and initializes the <xajaxUserFunction> object.
		
		$uf - (mixed): A function specification in one of the following formats:
		
			- a three element array:
				(string) Alternate function name: when a method of a class has the same
					name as another function in the system, you can provide an alias to 
					help avoid collisions.
				(object or class name) Class: the name of the class or an instance of
					the object which contains the function to be called.
				(string) Method:  the name of the method that will be called.
			- a two element array:
				(object or class name) Class: the name of the class or an instance of
					the object which contains the function to be called.
				(string) Method:  the name of the method that will be called.
			- a string:
				the name of the function that is available at global scope (not in a 
				class.
		$sInclude - (string, optional):  The path and file name of the include file
			that contains the class or function to be called.
			
		$aConfiguration - (array, optional):  An associative array of call options
			that will be used when sending the request from the client.
			
		Examples:
		
			$myFunction = array('alias', 'myClass', 'myMethod');
			$myFunction = array('alias', &$myObject, 'myMethod');
			$myFunction = array('myClass', 'myMethod');
			$myFunction = array(&$myObject, 'myMethod');
			$myFunction = 'myFunction';
			
			$myUserFunction = new xajaxUserFunction($myFunction, 'myFile.inc.php', array(
				'method' => 'get',
				'mode' => 'synchronous'
				));
				
			$xajax->register(XAJAX_FUNCTION, $myUserFunction);				
	*/
	function xajaxUserFunction($uf, $sInclude=NULL, $aConfiguration=array())
	{
		$this->sAlias = '';
		$this->uf =& $uf;
		$this->sInclude = $sInclude;
		$this->aConfiguration = array();
		foreach ($aConfiguration as $sKey => $sValue)
			$this->configure($sKey, $sValue);
		
		if (is_array($this->uf) && 2 < count($this->uf))
		{
			$this->sAlias = $this->uf[0];
			$this->uf = array_slice($this->uf, 1);
		}

//SkipDebug
		if (is_array($this->uf) && 2 != count($this->uf))
			trigger_error(
				'Invalid function declaration for xajaxUserFunction.',
				E_USER_ERROR
				);
//EndSkipDebug
	}
	
	/*
		Function: getName
		
		Get the name of the function being referenced.
		
		Returns:
		
		string - the name of the function contained within this object.
	*/
	function getName()
	{
		// Do not use sAlias here!
		if (is_array($this->uf