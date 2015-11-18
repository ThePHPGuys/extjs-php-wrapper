<?php
namespace Ext;


abstract class Base extends SerializableObject
{

	public static function create($config = array()){
		return new static($config);
	}

	function __construct(array $config=array())
	{
		if($config){
			$this->loadConfig($config);
		}

	}

	private function loadConfig($config){
		foreach($config as $key=>$value){
			$method = 'set'.ucfirst($key);
			if(method_exists($this,$method)){
				$this->{$method}($value);
			}
		}
	}


}