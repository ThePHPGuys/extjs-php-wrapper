<?php
namespace Ext\Serializer;

use Ext\Serializable;
use Ext\SerializableObject;
use Ext\Serializer;

class Ext implements Serializer
{
	public function serialize(SerializableObject $object)
	{
		$response = $this->serializeValue($object);
		return json_encode($response,JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
	}

	protected function getXtype(Serializable $class){
		switch(true){
			case $class instanceof \Ext\Button\Button: return 'button';
			case $class instanceof \Ext\Panel\Tool: return 'tool';
			case $class instanceof \Ext\Panel\Header: return 'header';
			/*Fields*/
			case $class instanceof \Ext\Form\RadioGroup: return 'radiogroup';
			case $class instanceof \Ext\Form\CheckboxGroup: return 'checkboxgroup';
			case $class instanceof \Ext\Form\Label: return 'label';
			case $class instanceof \Ext\Form\Field\TextArea: return 'textarea';
			case $class instanceof \Ext\Form\Field\Radio: return 'radio';
			case $class instanceof \Ext\Form\Field\Hidden: return 'hidden';
			case $class instanceof \Ext\Form\Field\File: return 'filefield';
			case $class instanceof \Ext\Form\Field\Display: return 'displayfield';
			case $class instanceof \Ext\Form\Field\Date: return 'datefield';
			case $class instanceof \Ext\Form\Field\ComboBox: return 'combobox';
			case $class instanceof \Ext\Form\Field\Checkbox: return 'checkbox';
			case $class instanceof \Ext\Form\Field\Text: return 'textfield';

			/**Panels**/
			case $class instanceof \Ext\Form\Panel: return 'form';
			case $class instanceof \Ext\Grid\Panel: return 'grid';
			case $class instanceof \Ext\Panel\Table: return 'tablepanel';
			case $class instanceof \Ext\Panel\Panel: return 'panel';
			/*Containers*/
			case $class instanceof \Ext\Form\FieldContainer: return 'fieldcontainer';
			case $class instanceof \Ext\Form\FieldSet: return 'fieldset';
			case $class instanceof \Ext\Toolbar\Paging: return 'pagingtoolbar';
			case $class instanceof \Ext\Toolbar\Toolbar: return 'toolbar';
			case $class instanceof \Ext\Grid\Column\Column: return 'gridcolumn';
			case $class instanceof \Ext\Grid\Header\Container: return 'headercontainer';
			case $class instanceof \Ext\Container\Viewport: return 'viewport';
			/**Core**/
			case $class instanceof \Ext\Container\Container: return 'container';
			case $class instanceof \Ext\Component: return 'component';
		}
	}
	private function serializeAssociativeArray($array) {
		if(!$array) return new \stdClass();

		if($array instanceof Serializable){
			$xtype = $this->getXtype($array);
			$array = $array->properties();
			if($xtype){
				$array['xtype'] = $xtype;
			}

		}

		$serialized = array();
		foreach ($array as $key => $value) {
			$serialized[$key] = $this->serializeValue($value);
		}
		return $serialized;
	}

	private function serializeArray(array $array) {
		$out = array();

		foreach($array as $e){
			$out[] = $this->serializeValue($e);
		}
		return $out;
	}

	private function isAssociativeArray(array $array) {
		return (bool)count(array_filter(array_keys($array), 'is_string'));
	}

	private function serializeValue($value) {
		if($value instanceof Serializable){
			return $this->serializeAssociativeArray($value);
		} elseif(is_array($value)) {
			if ($this->isAssociativeArray($value) || empty($value)) {
				return $this->serializeAssociativeArray($value);
			} else {
				return $this->serializeArray($value);
			}
		}else{
			return $value;
		}
	}


}