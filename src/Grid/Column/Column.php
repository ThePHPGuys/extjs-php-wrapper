<?php
namespace Ext\Grid\Column;


use Ext\Grid\Filters\Filter\Base as Filter;
use Ext\Grid\Header\Container;

class Column extends Container
{

	public function setText($text){
		return $this->setProperty('text',$text);
	}

	public function setDataIndex($dataIndex){
		return $this->setProperty('dataIndex',$dataIndex);
	}

	public function getDataIndex(){
		return $this->getProperty('dataIndex');
	}


	/**
	 * False to prevent the user from hiding this column.
	 * @param $hideable
	 * @return $this
	 */
	public function setHideable($hideable){
		return $this->setProperty('hideable',(bool)$hideable);
	}
	
	public function getHideable(){
		return $this->getProperty('hideable');
	}

	public function setRenderer($renderer){
		return $this->setProperty('renderer',$renderer);
	}

	public function getRenderer(){
		return $this->getProperty('renderer');
	}

	public function setFilter(Filter $filter){
		return $this->setProperty('filter',$filter);
	}

	public function getFilter(){
		return $this->getProperty('filter');
	}




}