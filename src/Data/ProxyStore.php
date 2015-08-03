<?php
namespace Ext\Data;


use Ext\Data\Field\Field;
use Ext\Data\Proxy\Proxy;

class ProxyStore extends AbstractStore
{

	public function addField(Field $field){
		return $this->add('fields',$field);
	}

	public function setFields(array $fields){
		foreach($fields as $field){
			$this->addField($field);
		}
		return $this;
	}

	public function setAutoLoad($autoLoad){
		return $this->setProperty('autoLoad',$autoLoad);
	}

	public function setProxy(Proxy $proxy){
		return $this->setProperty('proxy',$proxy);
	}
}