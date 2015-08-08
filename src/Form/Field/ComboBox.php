<?php
/**
 * ExtForms - ComboBox.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form\Field;


use Ext\Util\StoreHolder;

class ComboBox extends Picker
{
	use StoreHolder;

	public function setValueField($valueField){
		return $this->setProperty('valueField',$valueField);
	}

	public function getValueField(){
		return $this->getProperty('valueField');
	}


	public function setDisplayField($displayField){
		return $this->setProperty('displayField',$displayField);
	}

	public function getDisplayField(){
		return $this->getProperty('displayField');
	}

	public function setTypeAhead($typeAhead){
		return $this->setProperty('typeAhead',(bool)$typeAhead);
	}

	public function getTypeAhead(){
		return $this->getProperty('typeAhead');
	}

	public function setAutoSelect($autoSelect){
		return $this->setProperty('autoSelect',(bool)$autoSelect);
	}

	public function getAutoSelect(){
		return $this->getProperty('autoSelect');
	}

	public function setForceSelection($forceSelection){
		return $this->setProperty('forceSelection',(bool)$forceSelection);
	}

	public function getForceSelection(){
		return $this->getProperty('forceSelection');
	}

	public function setQueryMode($queryMode){
		return $this->setProperty('queryMode',$queryMode);
	}

	public function getQueryMode(){
		return $this->getProperty('queryMode');
	}

	public function setAutoLoadOnValue($autoLoadOnValue){
		return $this->setProperty('autoLoadOnValue',$autoLoadOnValue);
	}

	public function getAutoLoadOnValue(){
		return $this->getProperty('autoLoadOnValue');
	}

}