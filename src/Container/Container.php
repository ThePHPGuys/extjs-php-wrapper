<?php
namespace Ext\Container;


use Ext\Component;

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

}