<div class="tutorials form">
<?php echo $this->Form->create('Tutorial'); ?>
	<fieldset>
		<legend><?php echo __('Add Tutorial'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('mobile');
		echo $this->Form->input('email');
		echo $this->Form->input('address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tutorials'), array('action' => 'index')); ?></li>
	</ul>
</div>
