<?php
namespace Ext;

class SerializableObject implements Serializable
{
	/** @var array  */
	private $properties = array();

	/** @var array  */
	protected $ignore = array();

	public function serialize(Serializer $serializer) {
		return $serializer->serialize($this);
	}

	public function properties() {
		$properties = array();

		foreach($this->properties as $key => $value) {
			if (!in_array($key, $this->ignore)){
				$properties[$key] = $value;
			}
		}

		return $properties;
	}

	protected function add($key, $item) {
		$values = array();

		if (array_key_exists($key, $this->properties)) {
			$values = $this->properties[$key];
		}

		$values[] = $item;

		$this->properties[$key] = $values;

		return $this;
	}

	protected function getProperty($key) {
		if ($this->hasProperty($key)) {
			return $this->properties[$key];
		}

		return null;
	}

	protected function setProperty($key, $value) {
		$this->properties[$key] = $value;
		return $this;
	}

	protected function hasProperty($key) {
		return array_key_exists($key, $this->properties);
	}

	public static function search($component,$class='\Ext\Base',$property=null,$propertyValue=null,$findFirst = false){
		$return = [];
		if(is_a($component, $class) and ($property==null or ($property!=null and $component->getProperty($property)==$propertyValue))){
			if($findFirst){
				return $component;
			}else{
				$return[] = $component;
			}
		}

		if($foundComponents = static::searchArray($component->properties(),$class,$property,$propertyValue,$findFirst)){
			if($findFirst){
				return $foundComponents;
			}else{
				$return = array_merge($return,$foundComponents);
			}

		}
		return $return;
	}

	protected static function searchArray($array,$class='\Ext\Base',$property=null,$propertyValue='',$findFirst = false){
		$return = [];
		foreach($array as $element){
			$foundComponent = null;
			if($element instanceof SerializableObject){
				$foundComponent = static::search($element,$class,$property,$propertyValue,$findFirst);
			}elseif(is_array($element)){
				$foundComponent = static::searchArray($element,$class,$property,$propertyValue,$findFirst);
			}

			if($foundComponent) {
				if ($findFirst) {
					$return = $foundComponent;
					break;
				} else {
					$return = array_merge($return, $foundComponent);
				}
			}
		}
		return $return;
	}

}