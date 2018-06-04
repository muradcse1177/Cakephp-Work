<div class="tutorials view">
<h2><?php echo __('Tutorial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tutorial['Tutorial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tutorial['Tutorial']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($tutorial['Tutorial']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($tutorial['Tutorial']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($tutorial['Tutorial']['address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tutorial'), array('action' => 'edit', $tutorial['Tutorial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tutorial'), array('action' => 'delete', $tutorial['Tutorial']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tutorial['Tutorial']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Tutorials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutorial'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<script>


</script>