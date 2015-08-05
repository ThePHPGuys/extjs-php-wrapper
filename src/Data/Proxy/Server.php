<?php
namespace Ext\Data\Proxy;


abstract class Server extends Proxy
{
	public function setIdParam($idParam){
		return $this->setProperty('idParam',$idParam);
	}

	public function getIdParam(){
		return $this->getProperty('idParam');
	}


	public function setUrl($url){
		return $this->setProperty('url',$url);
	}
	
	public function getUrl(){
		return $this->getProperty('url');
	}
	
	
}