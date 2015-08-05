<?php
namespace Ext\Grid\Filters\Filter;


class Boolean extends SingleFilter
{
	public function setNoText($noText){
		return $this->setProperty('noText',$noText);
	}

	public function getNoText(){
		return $this->getProperty('noText');
	}

	public function setYesText($yesText){
		return $this->setProperty('yesText',$yesText);
	}

	public function getYesText(){
		return $this->getProperty('yesText');
	}

}