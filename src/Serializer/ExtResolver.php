<?php
namespace Ext\Serializer;


use Ext\Base;
use Ext\Component;
use Ext\Data\Proxy\Proxy;

class ExtResolver
{
	protected function getResolveArray(){
		$xtypes = [
			'\Ext\Grid\Column\Widget' => ['xtype'=>'widgetcolumn'],
			'\Ext\Grid\Column\Template' => ['xtype'=>'templatecolumn'],
			'\Ext\Grid\Column\RowNumbener' => ['xtype'=>'rownumberer'],
			'\Ext\Grid\Column\Number' => ['xtype'=>'numbercolumn'],
			'\Ext\Grid\Column\Date' => ['xtype'=>'datecolumn'],
			'\Ext\Grid\Column\Action' => ['xtype'=>'actioncolumn'],
			'\Ext\Grid\Column\Boolean' => ['xtype'=>'booleancolumn'],
			'\Ext\Grid\Column\Column' => ['xtype'=>'gridcolumn'],

			'\Ext\Button\Button' => ['xtype'=>'button'],
			'\Ext\Panel\Tool' => ['xtype'=>'tool'],
			'\Ext\Panel\Header' => ['xtype'=>'header'],

			'\Ext\Form\RadioGroup' => ['xtype'=>'radiogroup'],
			'\Ext\Form\CheckboxGroup' => ['xtype'=>'checkboxgroup'],
			'\Ext\Form\Label' => ['xtype'=>'checkboxgroup'],
			'\Ext\Form\Field\TextArea' => ['xtype'=>'textarea'],
			'\Ext\Form\Field\Radio' => ['xtype'=>'radio'],
			'\Ext\Form\Field\Hidden' => ['xtype'=>'hidden'],
			'\Ext\Form\Field\File' => ['xtype'=>'filefield'],
			'\Ext\Form\Field\Number' => ['xtype'=>'numberfield'],
			'\Ext\Form\Field\Display' => ['xtype'=>'displayfield'],
			'\Ext\Form\Field\Date' => ['xtype'=>'datefield'],
			'\Ext\Form\Field\ComboBox' => ['xtype'=>'combobox'],
			'\Ext\Form\Field\Checkbox' => ['xtype'=>'checkbox'],
			'\Ext\Form\Field\Text' => ['xtype'=>'textfield'],

			'\Ext\Window\Toast' => ['xtype'=>'toast'],
			'\Ext\Window\Window' => ['xtype'=>'window'],

			'\Ext\Form\Panel' => ['xtype'=>'form'],
			'\Ext\Grid\Panel' => ['xtype'=>'grid'],
			'\Ext\Panel\Table' => ['xtype'=>'tablepanel'],
			'\Ext\Panel\Panel' => ['xtype'=>'panel'],

			'\Ext\Form\FieldContainer' => ['xtype'=>'fieldcontainer'],
			'\Ext\Form\FieldSet' => ['xtype'=>'fieldset'],
			'\Ext\Toolbar\Paging' => ['xtype'=>'pagingtoolbar'],
			'\Ext\Toolbar\Toolbar' => ['xtype'=>'toolbar'],
			'\Ext\Grid\Header\Container' => ['xtype'=>'headercontainer'],
			'\Ext\Container\Viewport' => ['xtype'=>'viewport'],

			'\Ext\Container\Container'=>['xtype'=>'container'],
			'\Ext\Component' =>['xtype'=>'component'],
		];
		$proxies =[
			'\Ext\Data\Proxy\Ajax' => ['type'=>'ajax'],
			'\Ext\Data\Proxy\Server' => ['type'=>'server']
		];
        $readers = [
            '\Ext\Data\Reader\Json' => ['type'=>'json'],
            '\Ext\Data\Reader\Reader' => ['type'=>'base'],
        ];
		$plugins = [
			'\Ext\Grid\Filters\Filters' => ['ptype'=>'gridfilters'],
			'\Ext\Grid\Filters\Filter\Boolean' => ['type'=>'boolean'],
			'\Ext\Grid\Filters\Filter\Date' => ['type'=>'date'],
			'\Ext\Grid\Filters\Filter\Enum' => ['type'=>'list'],
			'\Ext\Grid\Filters\Filter\Number' => ['type'=>'number'],
			'\Ext\Grid\Filters\Filter\String' => ['type'=>'string'],
		];
		$stores = [
			'\Ext\Data\ArrayStore' => ['store'=>'array'],
			'\Ext\Data\Store' => ['store'=>'store'],
		];
		return $xtypes+$readers+ $proxies+$plugins+$stores;
	}

	public function resolve(Base $component){
		foreach($this->getResolveArray() as $class=>$types){

			if(is_a($component,$class)){
				return $types;
			}
		}
	}
}