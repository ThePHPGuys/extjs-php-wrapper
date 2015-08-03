<?php
namespace Ext\Grid;


use Ext\Grid\Header\Container;
use Ext\Panel\Table;

class Panel extends Table
{

	public function addColumn(Container $column){
		return $this->add('columns',$column);
	}

	public function setColumns(array $columns){
		foreach($columns as $column) {
			$this->addColumn($column);
		}
		return $this;
	}


}