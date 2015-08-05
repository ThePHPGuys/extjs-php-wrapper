<?php
namespace Ext\Grid\Column;


class Number extends Column
{

	public function setFormat($format){
		return $this->setProperty('format',$format);
	}

	public function getFormat(){
		return $this->getProperty('format');
	}


}