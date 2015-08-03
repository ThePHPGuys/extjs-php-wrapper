<?php
namespace Ext\Data\Field;


use Ext\Base;

class Field extends Base
{

	public function setName($name){
		$this->setProperty('name',$name);
	}

	public static function factory($name){
		$field = new self();
		$field->setName($name);
		return $field;
	}
}