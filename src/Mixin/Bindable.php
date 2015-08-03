<?php
/**
 * ExtForms - Bindable.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Mixin;


trait Bindable
{

	public function setController($controller){
		return $this->setProperty('controller',$controller);
	}

	public function getController(){
		return $this->getProperty('controller');
	}

	public function setBind($bind){
		return $this->setProperty('bind',$bind);
	}

	public function getBind(){
		return $this->getProperty('bind');
	}

}