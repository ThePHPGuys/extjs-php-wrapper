<?php
/**
 * ExtForms - Reader.php
 *
 * Initial version by: MisterX
 * Initial version created on: 18.11.2015
 */

namespace Ext\Data\Reader;


use Ext\Base;

class Reader extends Base
{

    public function setRootProperty($rootProperty){
    	return $this->setProperty('rootProperty',$rootProperty);
    }

    public function getRootProperty(){
    	return $this->getProperty('rootProperty');
    }

    public function setTotalProperty($totalProperty){
    	return $this->setProperty('totalProperty',$totalProperty);
    }

    public function getTotalProperty(){
    	return $this->getProperty('totalProperty');
    }
}