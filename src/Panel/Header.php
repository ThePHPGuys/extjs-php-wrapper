<?php
namespace Ext\Panel;


use Ext\Container\Container;

class Header extends Container
{

	public function setTitle($title){
		$this->setProperty('title',$title);
	}
}