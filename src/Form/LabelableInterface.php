<?php
/**
 * ExtForms - LabelableInterface.php
 *
 * Initial version by: MisterX
 * Initial version created on: 06.08.2015
 */

namespace Ext\Form;


interface LabelableInterface
{
	public function setHideLabel($hideLabel);
	public function getHideLabel();
	public function setFieldLabel($fieldLabel);
	public function getFieldLabel();
}