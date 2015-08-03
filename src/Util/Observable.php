<?php
/**
 * ExtForms - Observable.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Util;


use Ext\Event\Listener;

trait Observable
{
	public function addListener(Listener $listener){
		$listeners = (array)$this->getProperty('listeners');
		$listeners[$listener->getEvent()] = $listener;
		$this->setProperty('listeners',$listeners);
	}

	public function setListeners(array $listeners){
		foreach($listeners as $listener){
			$this->addListener($listener);
		}
	}
}