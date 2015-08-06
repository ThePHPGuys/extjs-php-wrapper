<?php
/**
 * ExtForms - Number.php
 *
 * Initial version by: MisterX
 * Initial version created on: 06.08.2015
 */

namespace Ext\Form\Field;


class Number extends Text
{

	public function setMaxValue($maxValue){
		return $this->setProperty('maxValue',$maxValue);
	}

	public function getMaxValue(){
		return $this->getProperty('maxValue');
	}

	public function setMinValue($minValue){
		return $this->setProperty('minValue',$minValue);
	}

	public function getMinValue(){
		return $this->getProperty('minValue');
	}

	public function setAllowDecimals($allowDecimals){
		return $this->setProperty('allowDecimals',(bool)$allowDecimals);
	}

	public function getAllowDecimals(){
		return $this->getProperty('allowDecimals');
	}

	public function setDecimalPrecision($decimalPrecision){
		return $this->setProperty('decimalPrecision',$decimalPrecision);
	}

	public function getDecimalPrecision(){
		return $this->getProperty('decimalPrecision');
	}

	public function setDecimalSeparator($decimalSeparator){
		return $this->setProperty('decimalSeparator',$decimalSeparator);
	}

	public function getDecimalSeparator(){
		return $this->getProperty('decimalSeparator');
	}








}