<?php
namespace Ext\Grid\Filters\Filter;


class Date extends TriFilter
{
	public function setDateFormat($dateFormat){
		return $this->setProperty('dateFormat',$dateFormat);
	}

	public function getDateFormat(){
		return $this->getProperty('dateFormat');
	}


}