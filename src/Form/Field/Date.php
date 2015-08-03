<?php
/**
 * ExtForms - Date.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form\Field;


class Date extends Base
{

	public function setFormat($format){
		return $this->setProperty('format',$format);
	}
	
	public function getFormat(){
		return $this->getProperty('format');
	}

	public function setShowToday($showToday){
		return $this->setProperty('showToday',$showToday);
	}

	public function getShowToday(){
		return $this->getProperty('showToday');
	}

	public function setStartDay($startDay){
		return $this->setProperty('startDay',$startDay);
	}

	public function getStartDay(){
		return $this->getProperty('startDay');
	}

	public function setSubmitFormat($submitFormat){
		return $this->setProperty('submitFormat',$submitFormat);
	}

	public function getSubmitFormat(){
		return $this->getProperty('submitFormat');
	}

	public function setMinValue($minValue){
		return $this->setProperty('minValue',$minValue);
	}

	public function getMinValue(){
		return $this->getProperty('minValue');
	}

	public function setMaxValue($maxValue){
		return $this->setProperty('maxValue',$maxValue);
	}

	public function getMaxValue(){
		return $this->getProperty('maxValue');
	}

}