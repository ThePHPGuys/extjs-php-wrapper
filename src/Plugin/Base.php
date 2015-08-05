<?php
namespace Ext\Plugin;

class Base extends \Ext\Base
{

	public function setPluginId($pluginId){
		return $this->setProperty('pluginId',$pluginId);
	}

	public function getPluginId(){
		return $this->getProperty('pluginId');
	}


}