<?php
namespace Ext\Grid\Column;


use Ext\Component;

class Widget extends Column
{

	public function setWidget(Component $widget){
		return $this->setProperty('widget',$widget);
	}

	public function getWidget(){
		return $this->getProperty('widget');
	}


}