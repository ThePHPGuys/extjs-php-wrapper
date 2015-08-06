<?php
/**
 * ExtForms - FieldInterface.php
 *
 * Initial version by: MisterX
 * Initial version created on: 06.08.2015
 */

namespace Ext\Form\Field;


interface FieldInterface
{

	public function setName($name);
	public function getName();
	public function setSubmitValue($submitValue);
	public function getSubmitValue();
	public function setDisabled($disabled);
	public function getDisabled();
	public function setValue($value);
	public function getValue();

}