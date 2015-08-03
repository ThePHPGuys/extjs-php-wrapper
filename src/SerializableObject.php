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

				if ($value instanceof Serializable) {
					$value = $value->properties();
				}

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

}