<?php
namespace Ext\Data;


class Store extends ProxyStore
{

	public function setData(array $data){
		return $this->setProperty('data',$data);
	}

}