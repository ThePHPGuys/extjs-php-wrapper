<?php
/**
 * ExtForms - Json.php
 *
 * Initial version by: MisterX
 * Initial version created on: 18.11.2015
 */

namespace Ext\Data\Reader;


class Json extends Reader
{
    public function setMetadataProperty($metadataProperty){
    	return $this->setProperty('metadataProperty',$metadataProperty);
    }

    public function getMetadataProperty(){
    	return $this->getProperty('metadataProperty');
    }

}