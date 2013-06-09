<div class="fotos form">
<?php echo $this->Form->create('Foto',array('type' => 'file'));?>
	<fieldset>
 		<legend><?php __('Add Foto'); ?></legend>
	<?php
		
		echo $this->Form->input('foto' , array('type' => 'file'));
		
		/*echo $this->Form->input('foto_file_path');
		echo $this->Form->input('foto_file_name');
		echo $this->Form->input('foto_file_size');
		echo $this->Form->input('foto_content_type');*/
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fotos', true), array('action' => 'index'));?></li>
	</ul>
</div>