<?php
namespace Ext\Panel;

use Ext\Util\StoreHolder;

class Table extends Panel
{
	use StoreHolder;

	public function setEnableColumnHide($enableColumnHide){
		return $this->setProperty('enableColumnHide',$enableColumnHide);
	}

	public function getEnableColumnHide(){
		return $this->getProperty('enableColumnHide');
	}

	public function setEnableColumnMove($enableColumnMove){
		return $this->setProperty('enableColumnMove',$enableColumnMove);
	}

	public function getEnableColumnMove(){
		return $this->getProperty('enableColumnMove');
	}

	public function setEnableColumnResize($enableColumnResize){
		return $this->setProperty('enableColumnResize',$enableColumnResize);
	}

	public function getEnableColumnResize(){
		return $this->getProperty('enableColumnResize');
	}




}