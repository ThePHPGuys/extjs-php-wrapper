<?php
/**
 * ExtForms - Panel.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form;


class Panel extends \Ext\Panel\Panel
{

	/**
	 * The request method to use (GET or POST) for form actions if one isn't supplied in the action options.
	 * @param string $method
	 * @return $this
	 */
	public function setMethod($method){
		return $this->setProperty('method',$method);
	}

	public function setUrl($url){
		return $this->setProperty('url',$url);
	}
}