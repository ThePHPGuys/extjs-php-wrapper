<?php
/**
 * ExtForms - Label.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form;


use Ext\Component;

class Label extends Component
{

	public function setText($text){
		return $this->setProperty('text',$text);
	}

	public function getText(){
		return $this->getProperty('text');
	}

	public function setForId($forId){
		return $this->setProperty('forId',$forId);
	}

	public function getForId(){
		return $this->getProperty('forId');
	}




}