<?php
namespace Ext\Toolbar;


use Ext\Container\Container;

class Toolbar extends Container
{
	public function setVertical($vertical){
		return $this->setProperty('vertical',$vertical);
	}
}