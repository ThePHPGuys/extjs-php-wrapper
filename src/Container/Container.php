<?php
namespace Ext\Container;


use Ext\Component;
use Ext\Plugin\Base;

class Container extends Component
{
	public function addItem(Component $item){
		return $this->add('items',$item);
	}

	public function setItems(array $items){
		foreach($items as $item)
			$this->addItem($item);
		return $this;
	}

	public function setLayout($layout){
		return $this->setProperty('layout',$layout);
	}

	public function setPlugins(array $plugins){
		foreach($plugins as $plugin){
			$this->addPlugin($plugin);
		}
		return $this;
	}

	public function addPlugin(Base $plugin){
		return $this->add('plugins',$plugin);
	}

	public function getPlugins(){
		return $this->getProperty('plugins');
	}

	public function setAutoDestroy($autoDestroy){
		return $this->setProperty('autoDestroy',$autoDestroy);
	}

	public function getAutoDestroy(){
		return $this->getProperty('autoDestroy');
	}




}