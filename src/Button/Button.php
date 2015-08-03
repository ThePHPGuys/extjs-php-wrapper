<?php
/**
 * ExtForms - Button.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Button;


use Ext\Component;

class Button extends Component
{
	
	public function setText($text){
		return $this->setProperty('text',$text);
	}
	
	public function getText(){
		return $this->getProperty('text');
	}
	
	public function setToggleGroup($toggleGroup){
		return $this->setProperty('toggleGroup',$toggleGroup);
	}

	public function getToggleGroup(){
		return $this->getProperty('toggleGroup');
	}
	
	public function setEnableToggle($enableToggle){
		return $this->setProperty('enableToggle',$enableToggle);
	}
	
	public function getEnableToggle(){
		return $this->getProperty('enableToggle');
	}

	public function setPressed($pressed){
		return $this->setProperty('pressed',$pressed);
	}

	public function getPressed(){
		return $this->getProperty('pressed');
	}
	
	public function setIcon($icon){
		return $this->setProperty('icon',$icon);
	}
	
	public function getIcon(){
		return $this->getProperty('icon');
	}
	
	public function setDisabled($disabled){
		return $this->setProperty('disabled',$disabled);
	}
	
	public function getDisabled(){
		return $this->getProperty('disabled');
	}

	/**
	 * The size of the Button.
	 * @param string $scale - small,medium,large
	 * @return $this
	 */
	public function setScale($scale){
		return $this->setProperty('scale',$scale);
	}

	public function getScale(){
		return $this->getProperty('scale');
	}

	public function setTooltip($tooltip){
		return $this->setProperty('tooltip',$tooltip);
	}

	public function getTooltip(){
		return $this->getProperty('tooltip');
	}



	
}