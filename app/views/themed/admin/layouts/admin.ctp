<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
	echo $this->Html->charset();
	echo $this->Html->tag('title', String::insert(Configure::read('App.title'), Set::flatten(array_merge(Configure::read('App'), array('title' => $title_for_layout)))));
	echo $this->Html->meta('icon');

	echo $this->Html->css(array(
		'admin.css',
		'/flour/css/templates',
	));
	echo $this->Html->script(array(
		'/flour/js/jquery',
		'/flour/js/jquery.ui',
		'/flour/js/jquery.form',
		'/flour/js/jquery.tipsy',
		'/flour/js/jquery.blockui',
		'/flour/js/jquery.elastic',
		'/flour/js/jquery.slug',
	));

	echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="btnbar"><?php echo $this->element('admin/nav.user'); ?></div>
			<h1><?php echo $this->Html->link(Configure::read('App.Settings.name'), array('controller' => 'dashboard', 'action' => 'index', 'plugin' => null)); ?></h1>
		</div>
		<div id="navigation">
			<?php echo $this->element('admin/nav.main'); ?>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<div class="btnbar">
				<small>running cake <?php echo Configure::version() ?></small>
				<!-- <?php echo $this->Html->image('cake.power.gif', array('border' => '0', 'url' => 'http://bruensicke.com/')); ?> -->
			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>