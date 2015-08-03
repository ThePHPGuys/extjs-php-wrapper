<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Ext JS!</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.sencha.com/ext/gpl/5.1.0/build/packages/ext-theme-neptune/build/resources/ext-theme-neptune-all.css">
	<?if(array_key_exists('debug',$_REQUEST)){?>
	<script type="text/javascript" src="http://cdn.sencha.com/ext/gpl/5.1.0/build/ext-all-debug.js"></script>
	<?}else{?>
	<script type="text/javascript" src="http://cdn.sencha.com/ext/gpl/5.1.0/build/ext-all.js"></script>
	<?}?>
	<script type="text/javascript" src="http://cdn.sencha.com/ext/gpl/5.1.0/build/packages/ext-theme-neptune/build/ext-theme-neptune.js"></script>
</head>
<body>

</body>
<script>
	var dbg = null;
	Ext.define('FooController', {
		extend: 'Ext.app.ViewController',
		alias: 'controller.foo',

		alert: function () {
			alert('Hello');
		},
		debug: function () {
			console.log(arguments);
		}
	});
	Ext.application({
		name   : 'Hello',
		launch : function() {

			dbg = Ext.create(<?=$componentJSON;?>);
			<? if($component instanceof \Ext\Component and !($component instanceof \Ext\Container\Viewport)){?>
			dbg.render(Ext.getBody());
			<?}?>
		}
	});
</script>
</html>