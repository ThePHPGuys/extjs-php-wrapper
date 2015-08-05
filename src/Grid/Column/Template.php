<?php
namespace Ext\Grid\Column;


class Template extends Column
{

	public function setTpl($tpl){
		return $this->setProperty('tpl',$tpl);
	}

	public function getTpl(){
		return $this->getProperty('tpl');
	}


}