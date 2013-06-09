<div class="textos index">
	<h2><?php __('Textos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th><?php echo $this->Paginator->sort('seccion_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($textos as $texto):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $texto['Texto']['id']; ?>&nbsp;</td>
		<td><?php echo $texto['Texto']['name']; ?>&nbsp;</td>
		<td><?php echo $texto['Texto']['value']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($texto['Seccion']['name'], array('controller' => 'seccions', 'action' => 'view', $texto['Seccion']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $texto['Texto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $texto['Texto']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $texto['Texto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $texto['Texto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Texto', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Seccions', true), array('controller' => 'seccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion', true), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
	</ul>
</div>