<?php
/**
 * ExtForms - FieldSet.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form;


use Ext\Container\Container;

class FieldSet extends Container
{

	public function setTitle($title){
		return $this->setProperty('title',$title);
	}

	public function getTitle(){
		return $this->getProperty('title');
	}


}