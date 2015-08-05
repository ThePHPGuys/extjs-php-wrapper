<?php
namespace Ext\Grid\Filters\Filter;


class Base extends \Ext\Plugin\Base
{
	public function setDataIndex($dataIndex){
		return $this->setProperty('dataIndex',$dataIndex);
	}

	public function getDataIndex(){
		return $this->getProperty('dataIndex');
	}

	public function setValue($value){
		return $this->setProperty('value',$value);
	}

	public function getValue(){
		return $this->getProperty('value');
	}

	/**
	 * Defaults to true, including a filter submenu in the default header menu.
	 * @param $showMenu
	 * @return $this
	 */
	public function setShowMenu($showMenu){
		return $this->setProperty('showMenu',(bool)$showMenu);
	}

	public function getShowMenu(){
		return $this->getProperty('showMenu');
	}





}