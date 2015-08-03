<?php
/**
 * ExtForms - Text.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form\Field;


class Text extends Base
{
	public function setAllowBlank($allowBlank){
		return $this->setProperty('allowBlank',$allowBlank);
	}

	public function getAllowBlank(){
		return $this->getProperty('allowBlank');
	}

	public function setGrow($grow){
		return $this->setProperty('grow', $grow);
	}

	public function getGrow(){
		return $this->getProperty('grow');
	}


}