<div class="textos form">
<?php echo $this->Form->create('Texto');?>
	<fieldset>
 		<legend><?php __('Edit Texto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('value');
		echo $this->Form->input('seccion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Texto.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Texto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Textos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Seccions', true), array('controller' => 'seccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion', true), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
	</ul>
</div>