<?php
namespace Ext\Grid\Filters\Filter;

//Renamed from LIST
class Enum extends SingleFilter
{

	public function setOptions(array $options){
		return $this->setProperty('options',$options);
	}

	public function getOptions(){
		return $this->getProperty('options');
	}

}