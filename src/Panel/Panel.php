<?php
namespace Ext\Panel;


use Ext\Container\Container;

class Panel extends Container
{
	public function setTitle($title){
		return $this->setProperty('title',$title);
	}

	public function setHeader(Header $header){
		return  $this->setProperty('header',$header);
	}

	public function addTool(Tool $tool){
		return $this->add('tools',$tool);
	}

	public function addDockedItem($dockedItem){
		return $this->add('dockedItems',$dockedItem);
	}

	public function setDockedItems(array $dockedItems){
		foreach($dockedItems as $dockedItem){
			$this->addDockedItem($dockedItem);
		}
		return $this;
	}


	/**
	 * True to make the panel collapsible and have an expand/collapse toggle Tool added into the header tool button area.
	 * @param bool $collapsible
	 * @return $this
	 */
	public function setCollapsible($collapsible){
		return $this->setProperty('collapsible',(bool)$collapsible);
	}
	
	public function setButtons(array $buttons){
		foreach($buttons as $button){
			$this->addButton($button);
		}
		return $this;
	}

	public function getButtons(){
		return $this->getProperty('buttons');
	}

	public function addButton($button){
		return $this->add('buttons',$button);
	}
	
	



}
