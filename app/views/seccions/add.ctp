<div class="seccions form">
<?php echo $this->Form->create('Seccion');?>
	<fieldset>
 		<legend><?php __('Add Seccion'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Seccions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Textos', true), array('controller' => 'textos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Texto', true), array('controller' => 'textos', 'action' => 'add')); ?> </li>
	</ul>
</div>