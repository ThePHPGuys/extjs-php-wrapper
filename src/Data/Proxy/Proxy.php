<?php
namespace Ext\Data\Proxy;


use Ext\Base;
use Ext\Data\Reader\Reader;

class Proxy extends Base
{
    public function setReader(Reader $reader){
    	return $this->setProperty('reader',$reader);
    }

    public function getReader(){
    	return $this->getProperty('reader');
    }

}