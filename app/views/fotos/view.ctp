<div class="fotos view">
<h2><?php  __('Foto');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Foto File Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $foto['Foto']['foto_file_name']; ?>
			&nbsp;
		</dd>
		
		
			<td><?php echo $this->Html->image('/attachments/photos/med/' . $foto['Foto']['foto_file_path']); ?>&nbsp;</td>
			<td></td>
			&nbsp;
		</dd>
		
		
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		
		<li><?php echo $this->Html->link(__('Delete Foto', true), array('action' => 'delete', $foto['Foto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $foto['Foto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fotos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foto', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
