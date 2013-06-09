<div class="precios index">
	<h2><?php __('Precios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('subtitulo');?></th>
			<th><?php echo $this->Paginator->sort('valor');?></th>
			<th><?php echo $this->Paginator->sort('tipoprecio_id');?></th>
			<th><?php echo $this->Paginator->sort('con_desayuno');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($precios as $precio):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $precio['Precio']['id']; ?>&nbsp;</td>
		<td><?php echo $precio['Precio']['name']; ?>&nbsp;</td>
		<td><?php echo $precio['Precio']['subtitulo']; ?>&nbsp;</td>
		<td><?php echo $precio['Precio']['valor']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($precio['Tipoprecio']['name'], array('controller' => 'tipoprecios', 'action' => 'view', $precio['Tipoprecio']['id'])); ?>
		</td>
		<td><?php echo $precio['Precio']['con_desayuno']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $precio['Precio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $precio['Precio']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $precio['Precio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $precio['Precio']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Precio', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipoprecios', true), array('controller' => 'tipoprecios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoprecio', true), array('controller' => 'tipoprecios', 'action' => 'add')); ?> </li>
	</ul>
</div>