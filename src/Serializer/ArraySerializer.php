<?php
/**
 * ExtForms - ArraySerializer.php
 *
 * Initial version by: MisterX
 * Initial version created on: 17.11.2015
 */

namespace Ext\Serializer;

use Ext\Serializable;
use Ext\SerializableObject;
use Ext\Serializer;

class ArraySerializer implements Serializer
{

    protected $resolver;

    public function serialize(SerializableObject $object)
    {
        return $this->serializeValue($object);
    }

    /**
     * @return ExtResolver
     */
    protected function getResolver(){
        if(!$this->resolver){
            $this->setResolver(new ExtResolver());
        }
        return $this->resolver;
    }

    public function setResolver(ExtResolver $resolver){
        $this->resolver = $resolver;
    }

    protected function serializeAssociativeArray($array) {
        if($array instanceof Serializable){
            $type = $this->getResolver()->resolve($array);
            $array = $array->properties();
            if($type){
                $array = $type + $array;
            }
        }

        if(!$array) return new \stdClass();

        $serialized = array();
        foreach ($array as $key => $value) {
            $serialized[$key] = $this->serializeValue($value);
        }

        return $serialized;
    }

    protected function serializeArray(array $array) {
        $out = array();

        foreach($array as $e){
            $out[] = $this->serializeValue($e);
        }
        return $out;
    }

    protected function isAssociativeArray(array $array) {
        return (bool)count(array_filter(array_keys($array), 'is_string'));
    }

    protected function serializeValue($value) {
        if($value instanceof Serializable){
            return $this->serializeAssociativeArray($value);
        } elseif(is_array($value)) {
            if ($this->isAssociativeArray($value) || empty($value)) {
                return $this->serializeAssociativeArray($value);
            } else {
                return $this->serializeArray($value);
            }
        }else{
            return $value;
        }
    }
}