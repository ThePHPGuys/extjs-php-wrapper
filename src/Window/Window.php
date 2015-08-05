<?php
namespace Ext\Window;


use Ext\Panel\Panel;

class Window extends Panel
{

	public function setModal($modal){
		return $this->setProperty('modal',$modal);
	}

	public function getModal(){
		return $this->getProperty('modal');
	}

	public function setConstrain($constrain){
		return $this->setProperty('constrain',$constrain);
	}

	public function getConstrain(){
		return $this->getProperty('constrain');
	}



}