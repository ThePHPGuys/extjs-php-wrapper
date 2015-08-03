<?php
namespace Ext\Panel;


use Ext\Component;

class Tool extends Component
{

	public function setType($type){
		return $this->setProperty('type',$type);
	}

	public function setCallback($callback){
		return $this->setProperty('callback',$callback);
	}
}