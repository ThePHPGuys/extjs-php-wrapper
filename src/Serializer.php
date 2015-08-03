<?php
namespace Ext;


interface Serializer
{
	public function serialize(SerializableObject $object);
}