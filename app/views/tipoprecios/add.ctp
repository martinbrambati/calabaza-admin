<div class="tipoprecios form">
<?php echo $this->Form->create('Tipoprecio');?>
	<fieldset>
 		<legend><?php __('Add Tipoprecio'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipoprecios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Precios', true), array('controller' => 'precios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Precio', true), array('controller' => 'precios', 'action' => 'add')); ?> </li>
	</ul>
</div>