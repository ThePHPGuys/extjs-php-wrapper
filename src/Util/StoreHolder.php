<?php
/**
 * ExtForms - StoreHolder.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Util;


use Ext\Data\AbstractStore;

trait StoreHolder
{
	/**
	 * @param AbstractStore|string $store
	 * @return $this
	 */
	public function setStore($store){
		return $this->setProperty('store',$store);
	}

	/**
	 * @return AbstractStore|null
	 */
	public function getStore(){
		return $this->setProperty('store',$store);
	}
}