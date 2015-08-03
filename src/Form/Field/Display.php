<?php
/**
 * ExtForms - Display.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form\Field;


class Display extends Base
{

	public function setHtmlEncode($htmlEncode){
		return $this->setProperty('htmlEncode',$htmlEncode);
	}

	public function getHtmlEncode(){
		return $this->getProperty('htmlEncode');
	}

}