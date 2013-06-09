<div class="tipoprecios view">
<h2><?php  __('Tipoprecio');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoprecio['Tipoprecio']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoprecio['Tipoprecio']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoprecio['Tipoprecio']['descripcion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipoprecio', true), array('action' => 'edit', $tipoprecio['Tipoprecio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tipoprecio', true), array('action' => 'delete', $tipoprecio['Tipoprecio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipoprecio['Tipoprecio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoprecios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoprecio', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Precios', true), array('controller' => 'precios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Precio', true), array('controller' => 'precios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Precios');?></h3>
	<?php if (!empty($tipoprecio['Precio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Subtitulo'); ?></th>
		<th><?php __('Valor'); ?></th>
		<th><?php __('Tipoprecio Id'); ?></th>
		<th><?php __('Con Desayuno?'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipoprecio['Precio'] as $precio):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $precio['id'];?></td>
			<td><?php echo $precio['name'];?></td>
			<td><?php echo $precio['subtitulo'];?></td>
			<td><?php echo $precio['valor'];?></td>
			<td><?php echo $precio['tipoprecio_id'];?></td>
			<td><?php echo $precio['con_desayuno?'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'precios', 'action' => 'view', $precio['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'precios', 'action' => 'edit', $precio['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'precios', 'action' => 'delete', $precio['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $precio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Precio', true), array('controller' => 'precios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
