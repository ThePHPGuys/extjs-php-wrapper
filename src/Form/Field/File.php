<?php
/**
 * ExtForms - File.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form\Field;


class File extends Text
{

	public function setButtonText($buttonText){
		return $this->setProperty('buttonText',$buttonText);
	}

	public function getButtonText(){
		return $this->getProperty('buttonText');
	}

	public function setButtonOnly($buttonOnly){
		return $this->setProperty('buttonOnly',$buttonOnly);
	}

	public function getButtonOnly(){
		return $this->getProperty('buttonOnly');
	}


}