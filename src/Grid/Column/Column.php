<?php
namespace Ext\Grid\Column;


use Ext\Grid\Header\Container;

class Column extends Container
{

	public function setText($text){
		return $this->setProperty('text',$text);
	}

	public function setDataIndex($dataIndex){
		return $this->setProperty('dataIndex',$dataIndex);
	}

	public static function factory($text,$index){
		return (new self())->setText($text)->setDataIndex($index);
	}
}