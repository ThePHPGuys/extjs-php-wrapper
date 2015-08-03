<?php
/**
 * ExtForms - Checkbox.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form\Field;


class Checkbox extends Base
{

	public function setBoxLabel($boxLabel){
		return $this->setProperty('boxLabel',$boxLabel);
	}

	public function setChecked($checked){
		return $this->setProperty('checked',(bool)$checked);
	}

	public function getChecked(){
		return $this->getProperty('checked');
	}

	public function getBoxLabel(){
		return $this->getProperty('boxLabel');
	}




}