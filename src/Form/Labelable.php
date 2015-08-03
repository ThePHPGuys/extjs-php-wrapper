<?php
/**
 * ExtForms - Labelable.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form;


trait Labelable
{

	public function setHideLabel($hideLabel){
		return $this->setProperty('hideLabel',$hideLabel);
	}

	public function getHideLabel(){
		return $this->getProperty('hideLabel');
	}

	public function setFieldLabel($fieldLabel){
		return $this->setProperty('fieldLabel',$fieldLabel);
	}
	
	public function getFieldLabel(){
		return $this->getProperty('fieldLabel');
	}
	
	
}