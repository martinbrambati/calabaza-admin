<div class="precios form">
<?php echo $this->Form->create('Precio');?>
	<fieldset>
 		<legend><?php __('Add Precio'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('subtitulo');
		echo $this->Form->input('valor');
		echo $this->Form->input('tipoprecio_id');
		echo $this->Form->input('con_desayuno');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Precios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tipoprecios', true), array('controller' => 'tipoprecios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoprecio', true), array('controller' => 'tipoprecios', 'action' => 'add')); ?> </li>
	</ul>
</div>