<?php
/**
 * ExtForms - Core.php
 *
 * Initial version by: MisterX
 * Initial version created on: 03.08.2015
 */

namespace Ext;


class Core
{


	public static function create($class,array $config=array()){
		$class = '\\'.str_replace('.','\\',$class);
		return new $class($config);
	}
}