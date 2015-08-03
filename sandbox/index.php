<?php
require_once __DIR__ . '/../vendor/autoload.php';
//Alias
use Ext\Core as Ext;



$navigation = Ext::create('Ext.Panel.Panel',[
    'region'=>'west',
    'width' => 150,
    'collapsible'=>true,
    'title' => 'Navigation',
    'frame' => true
]);
$content = Ext::create('Ext.Form.Panel',[
    'region' => 'center',
    'title' => 'Content',
    'frame' => true,
]);
$controls = [
    Ext::create('Ext.Form.Field.Text',[
        'fieldLabel'=>'Test label',
        'value' => 'Value',
        'name' => 'fname',
    ]),
    Ext::create('Ext.Form.Field.Checkbox',[
        'fieldLabel'=>'Test checkbox',
        'value' => false,
        'name' => 'fname',
    ]),
    Ext::create('Ext.Form.Field.Combobox',[
        'fieldLabel'=>'Test combo',
        'name' => 'fname',
    ]),
    Ext::create('Ext.Form.Field.Date',[
        'fieldLabel'=>'Test date',
        'name' => 'fname',
    ]),
    Ext::create('Ext.Form.Field.Display',[
        'fieldLabel'=>'Test display',
        'name' => 'fname',
        'value' => 'display'
    ]),
    Ext::create('Ext.Form.Field.File',[
        'fieldLabel'=>'Test file',
        'name' => 'fname',
        'value' => 'display'
    ]),
    Ext::create('Ext.Form.Field.Hidden',[
        'fieldLabel'=>'Test file',
        'name' => 'fname',
        'value' => 'hidden'
    ]),
    Ext::create('Ext.Form.Field.Radio',[
        'fieldLabel'=>'Test radio',
        'name' => 'fname',
        'value' => 1,
    ]),
    Ext::create('Ext.Form.Field.TextArea',[
        'fieldLabel'=>'Test area',
        'name' => 'fname',
        'value' => 'area content',
    ]),
    Ext::create('Ext.Form.CheckboxGroup',[
        'fieldLabel'=>'Checkbox group',
        'name' => 'fname',
        'vertical' => true,
        'columns' => 1,
        'items' => [
            Ext::create('Ext.Form.Field.Checkbox',[
                'fieldLabel'=>'Test checkbox',
                'value' => false,
                'name' => 'fname',
            ]),
            Ext::create('Ext.Form.Field.Checkbox',[
                'fieldLabel'=>'Test checkbox',
                'value' => false,
                'name' => 'fname',
            ]),
        ]
    ]),
    Ext::create('Ext.Form.RadioGroup',[
        'fieldLabel'=>'Radio group',
        'name' => 'fname',
        'vertical' => true,
        'columns' => 1,
        'items' => [
            Ext::create('Ext.Form.Field.Radio',[
                'fieldLabel'=>'Test label',
                'value' => false,
                'name' => 'fname',
            ]),
            Ext::create('Ext.Form.Field.Radio',[
                'boxLabel'=>'Test boxLabel',
                'value' => false,
                'name' => 'fname',
            ]),
        ]
    ]),
];

$content->setItems($controls);
$content->setButtons(
  [
      Ext::create('Ext.Button.Button',[
          'text' => 'Button',
      ]),
      Ext::create('Ext.Button.Button',[
          'text' => 'Disabled Button',
          'disabled' => true,
      ]),
      Ext::create('Ext.Button.Button',[
          'text' => 'Pressed Button',
          'pressed' => true,
      ]),
  ]
);
/** @var Ext\Grid\Panel $grid */

$grid = Ext::create('Ext.Grid.Panel', [
        'title' => 'Grid',
        'region'=> 'south',
        'height' => 300,
        'frame' => true,
        'controller' => 'foo',
        'store' => Ext::create('Ext.data.Store',[
            'data'=>[
                [
                    'key' => 'First key',
                    'value' => 'First value',
                ],
                [
                    'key' => 'Secons key',
                    'value' => 'Double click me',
                ],
            ],
            'fields' => [
                Ext::create('Ext.data.Field.Field',['name'=>'key']),
            ],
            'storeId' => 'testStore',
        ]),
        'columns' => [
            Ext::create('Ext.Grid.Column.Column',[
                'text' => 'First field',
                'dataIndex' => 'key',
            ]),
            Ext::create('Ext.Grid.Column.Column',[
                'text' => 'Second field',
                'dataIndex' => 'value',
            ]),
        ],
        'dockedItems' => [
            Ext::create('Ext.Toolbar.Paging',[
                'dock'=>'bottom',
                'store'=>'testStore',
                'displayInfo'=>true
            ]),
        ]
    ]
);

$grid->addListener(Ext::create('Ext.Event.Listener',[
    'event' => 'rowdblclick',
    'function' => 'alert',
    'scope' => 'self.controller'
]));

$component = Ext::create('Ext.Container.Viewport',[
    'layout' => 'border',
    'items'  => [$navigation, $content, $grid]
]);


$componentJSON = $component->serialize(new \Ext\Serializer\Ext());

if(array_key_exists('json',$_REQUEST)){
    echo $componentJSON;
    die();
}


/*
 * Ext.create('Ext.Container', {
    fullscreen: true,
    layout: 'vbox',
    items: [
        {
            docked: 'left',
            xtype: 'panel',
            width: 100,
            html: 'This is docked to the left'
        },
        {
            xtype: 'panel',
            html: 'message list',
            flex: 1
        },
        {
            xtype: 'panel',
            html: 'message preview',
            flex: 2
        }
    ]
});
 */
include "template.php";