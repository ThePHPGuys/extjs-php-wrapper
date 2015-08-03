<?php
/**
 * ExtForms - Listener.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Event;


use Ext\Base;

class Listener extends Base
{
	protected $ignore = array('event');

	public function setEvent($event){
		return $this->setProperty('event',$event);
	}

	public function getEvent(){
		return $this->getProperty('event');
	}

	public function setFunction($function){
		return $this->setProperty('fn',$function);
	}

	public function setScope($scope){
		return $this->setProperty('scope',$scope);
	}

	public function setElement($element){
		return $this->setProperty('element',$element);
	}

	public function setParam($config){
		return $this->setProperty('param',$config);
	}
}