<div class="links view">
<h2><?php  __('Link');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $link['Link']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $link['Link']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $link['Link']['value']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Link', true), array('action' => 'edit', $link['Link']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Link', true), array('action' => 'delete', $link['Link']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $link['Link']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Links', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Link', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
