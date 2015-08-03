<?php
/**
 * ExtForms - RadioGroup.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form;


use Ext\Form\Field\Radio;

class RadioGroup extends CheckboxGroup
{

	public function addItem(Radio $item)
	{
		return parent::addItem($item);
	}
}