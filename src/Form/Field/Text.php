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
	/**
	 * Specify false to validate that the value's length must be > 0
	 * @param $allowBlank
	 * @return $this
	 */
	public function setAllowBlank($allowBlank){
		return $this->setProperty('allowBlank',$allowBlank);
	}

	public function getAllowBlank(){
		return $this->getProperty('allowBlank');
	}

	/**
	 * true if this field should automatically grow and shrink to its content
	 * @param $grow
	 * @return $this
	 */
	public function setGrow($grow){
		return $this->setProperty('grow', $grow);
	}

	public function getGrow(){
		return $this->getProperty('grow');
	}

	/**
	 * false to prevent the user from typing text directly into the field
	 * @param $editable
	 * @return $this
	 */
	public function setEditable($editable){
		return $this->setProperty('editable',$editable);
	}
	
	public function getEditable(){
		return $this->getProperty('editable');
	}
	

}