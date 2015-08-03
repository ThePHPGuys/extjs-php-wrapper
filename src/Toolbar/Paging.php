<?php
namespace Ext\Toolbar;

use Ext\Util\StoreHolder;

class Paging extends Toolbar
{
	use StoreHolder;

	public function setDisplayInfo($displayInfo){
		return $this->setProperty('displayInfo',$displayInfo);
	}
}