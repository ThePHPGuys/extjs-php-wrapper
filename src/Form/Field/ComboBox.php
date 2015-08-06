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
		return $this->setProperty('autoSelect',$autoSelect);
	}

	public function getAutoSelect(){
		return $this->getProperty('autoSelect');
	}

	public function setForceSelection($forceSelection){
		return $this->setProperty('forceSelection',$forceSelection);
	}

	public function getForceSelection(){
		return $this->getProperty('forceSelection');
	}




}