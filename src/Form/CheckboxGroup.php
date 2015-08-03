<?php
/**
 * ExtForms - CheckboxGroup.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form;


use Ext\Component;
use Ext\Form\Field\Checkbox;
use Ext\Form\Field\Field;

class CheckboxGroup extends FieldContainer
{
	use Field;

	/**
	 * Specifies the number of columns to use when displaying grouped checkbox/radio controls using automatic layout.
	 * @param $columns
	 * @return $this
	 */
	public function setColumns($columns){
		return $this->setProperty('columns',$columns);
	}
	
	public function getColumns(){
		return $this->getProperty('columns');
	}

	public function setVertical($vertical){
		return $this->setProperty('vertical',$vertical);
	}

	public function getVertical(){
		return $this->getProperty('vertical');
	}

	public function addItem(Checkbox $item)
	{
		return parent::addItem($item);
	}



}