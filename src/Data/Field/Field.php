<?php
namespace Ext\Data\Field;


use Ext\Base;

class Field extends Base
{

	public function setName($name){
		$this->setProperty('name',$name);
	}

}