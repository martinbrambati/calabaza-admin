<div class="precios view">
<h2><?php  __('Precio');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precio['Precio']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precio['Precio']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subtitulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precio['Precio']['subtitulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precio['Precio']['valor']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipoprecio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($precio['Tipoprecio']['name'], array('controller' => 'tipoprecios', 'action' => 'view', $precio['Tipoprecio']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Con Desayuno'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precio['Precio']['con_desayuno']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Precio', true), array('action' => 'edit', $precio['Precio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Precio', true), array('action' => 'delete', $precio['Precio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $precio['Precio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Precios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Precio', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoprecios', true), array('controller' => 'tipoprecios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoprecio', true), array('controller' => 'tipoprecios', 'action' => 'add')); ?> </li>
	</ul>
</div>
