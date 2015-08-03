<?php
namespace Ext\Data;


use Ext\Base;

class AbstractStore extends Base
{

	/**
	 * true to defer any filtering operation to the server. If false, filtering is done locally on the client.
	 * @param $bool
	 * @return $this
	 */
	public function setRemoteFilter($bool){
		return $this->setProperty('remoteFilter',(bool)$bool);
	}

	/**
	 * true if the sorting should be performed on the server side, false if it is local only
	 * @param $bool
	 * @return $this
	 */
	public function setRemoteSort($bool){
		return $this->setProperty('remoteSort',(bool)$bool);
	}

	/**
	 * Unique identifier for this store. If present, this Store will be registered with the Ext.data.StoreManager,
	 * making it easy to reuse elsewhere.
	 * @param $storeId
	 * @return $this
	 */
	public function setStoreId($storeId){
		return $this->setProperty('storeId',$storeId);
	}

	/**
	 * The number of records considered to form a 'page'. This is used to power the built-in paging using the nextPage
	 * and previousPage functions when the grid is paged using a PagingToolbar
	 * @param $pageSize
	 * @return $this
	 */
	public function setPageSize($pageSize){
		return $this->setProperty('pageSize',$pageSize);
	}
}