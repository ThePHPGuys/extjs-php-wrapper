<?php
/**
 * ExtForms - ExtSerializer.php
 *
 * Initial version by: MisterX
 * Initial version created on: 17.11.2015
 */

namespace Ext\Serializer;


use Ext\SerializableObject;

class ExtSerializer extends ArraySerializer
{
    public function serialize(SerializableObject $object)
    {
        return json_encode(parent::serialize($object),JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
    }

}