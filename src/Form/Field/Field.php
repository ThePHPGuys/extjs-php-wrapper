<?php
/**
 * ExtForms - Field.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form\Field;


trait Field
{
	/**
	 * The name of the field.To prevent the field from being included in the form submit, set submitValue to false.
	 * @param $name
	 * @return mixed
	 */
	public function setName($name){
		return $this->setProperty('name',$name);
	}

	/**
	 * Setting this to false will prevent the field from being submitted even when it is not disabled.
	 * @param bool $submitValue
	 * @return mixed
	 */
	public function setSubmitValue($submitValue){
		return $this->setProperty('submitValue',(bool)$submitValue);
	}

	/**
	 * True to disable the field. Disabled Fields will not be submitted.
	 * @param $disabled
	 * @return mixed
	 */
	public function setDisabled($disabled){
		return $this->setProperty('disabled',(bool)$disabled);
	}

	/**
	 * A value to initialize this field with.
	 * @param $value
	 * @return mixed
	 */
	public function setValue($value){
		return $this->setProperty('value',$value);
	}
}