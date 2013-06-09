<div class="seccions view">
<h2><?php  __('Seccion');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $seccion['Seccion']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $seccion['Seccion']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seccion', true), array('action' => 'edit', $seccion['Seccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Seccion', true), array('action' => 'delete', $seccion['Seccion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $seccion['Seccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Textos', true), array('controller' => 'textos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Texto', true), array('controller' => 'textos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Textos');?></h3>
	<?php if (!empty($seccion['Texto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Seccion Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($seccion['Texto'] as $texto):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $texto['id'];?></td>
			<td><?php echo $texto['name'];?></td>
			<td><?php echo $texto['value'];?></td>
			<td><?php echo $texto['seccion_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'textos', 'action' => 'view', $texto['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'textos', 'action' => 'edit', $texto['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'textos', 'action' => 'delete', $texto['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $texto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Texto', true), array('controller' => 'textos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
