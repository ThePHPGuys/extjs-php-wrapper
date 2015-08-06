<?php
/**
 * ExtForms - Base.php
 *
 * Initial version by: MisterX
 * Initial version created on: 31.07.2015
 */

namespace Ext\Form\Field;


use Ext\Component;
use Ext\Form\Labelable;
use Ext\Form\LabelableInterface;

abstract class Base extends Component implements FieldInterface,LabelableInterface
{
	use Field, Labelable;

	/**
	 * The id that will be given to the generated input DOM element. Defaults to an automatically generated id.
	 * If you configure this manually, you must make sure it is unique in the document.
	 * @param $inputId
	 * @return $this
	 */
	public function setInputId($inputId){
		return $this->setProperty('inputId',$inputId);
	}

	/**
	 * true to mark the field as readOnly in HTML.
	 * @param $readOnly
	 * @return $this
	 */
	public function setReadOnly($readOnly){
		return $this->setProperty('readOnly',(bool)$readOnly);
	}
}