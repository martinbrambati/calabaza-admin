<div class="textos view">
<h2><?php  __('Texto');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $texto['Texto']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $texto['Texto']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $texto['Texto']['value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Seccion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($texto['Seccion']['name'], array('controller' => 'seccions', 'action' => 'view', $texto['Seccion']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Texto', true), array('action' => 'edit', $texto['Texto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Texto', true), array('action' => 'delete', $texto['Texto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $texto['Texto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Textos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Texto', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccions', true), array('controller' => 'seccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion', true), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
	</ul>
</div>
