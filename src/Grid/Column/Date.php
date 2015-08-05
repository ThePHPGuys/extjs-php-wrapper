<?php
namespace Ext\Grid\Column;


class Date extends Column
{

	public function setFormat($format){
		return $this->setProperty('format',$format);
	}

	public function getFormat(){
		return $this->getProperty('format');
	}


}