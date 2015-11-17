<?php
/**
 * Created by PhpStorm.
 * User: MisterX
 * Date: 30.07.2015
 * Time: 13:40
 */

namespace Ext;


use Ext\Mixin\Bindable;
use Ext\Util\Observable;

class Component extends Base
{
	use Observable, Bindable;

	public function setHtml($html){
		return $this->setProperty('html',$html);
	}

	public function setRenderTo($renderTo){
		return $this->setProperty('renderTo',$renderTo);
	}

	public function setCls($cls){
		return $this->setProperty('renderTo',$cls);
	}

	public function setId($id){
		return $this->setProperty('id',$id);
	}

	public function getId(){
		$this->getProperty('id');
	}

	public function setFlex($flex){
		return $this->setProperty('flex',$flex);
	}

	public function setDisabled($disabled){
		return $this->setProperty('disabled',(bool)$disabled);
	}

	/**
	 * @param string $dock  top|bottom|left|right'
	 * @return $this
	 */
	public function setDock($dock){
		return $this->setProperty('dock',$dock);
	}

	public function setRegion($region){
		return $this->setProperty('region',$region);
	}

	public function setWidth($width){
		return $this->setProperty('width',$width);
	}

	public function setHeight($height){
		return $this->setProperty('height',$height);
	}

	/**
	 * Specify as true to have the Component inject framing elements within the Component at render time
	 * to provide a graphical rounded frame around the Component content.
	 * @param $frame
	 * @return $this
	 */
	public function setFrame($frame){
		return $this->setProperty('frame',(bool)$frame);
	}

	public function findById($id){
		return $this->search($this,'\Ext\Base','id',$id,true);
	}

	public function findByClass($class,$findFirst=true){
		return $this->search($this,$class,null,null,true);
	}
	
	public function setHidden($hidden){
		return $this->setProperty('hidden',(bool)$hidden);
	}
	
	public function getHidden(){
		return $this->getProperty('hidden');
	}
	
	

}