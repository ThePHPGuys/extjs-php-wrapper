<?php
namespace Ext\Grid\Header;


class Container extends \Ext\Container\Container
{

	public function setSortable($sortable){
		$this->setProperty('sortable',(bool)$sortable);
	}
}