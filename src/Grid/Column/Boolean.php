<?php
namespace Ext\Grid\Column;


class Boolean extends Column
{
	public function setFalseText($falseText){
		return $this->setProperty('falseText',$falseText);
	}

	public function getFalseText(){
		return $this->getProperty('falseText');
	}


	public function setTrueText($trueText){
		return $this->setProperty('trueText',$trueText);
	}

	public function getTrueText(){
		return $this->getProperty('trueText');
	}


}