<?php
/**
 * ExtForms - Picker.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form\Field;


abstract class Picker extends Text
{

	public function setEditable($editable)
	{
		return $this->setProperty('editable', $editable);
	}

	public function getEditable()
	{
		return $this->getProperty('editable');
	}

	
}