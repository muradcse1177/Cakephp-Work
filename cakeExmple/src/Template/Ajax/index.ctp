<?php
echo $this->Form->create('Ajax',array('action'=>'ajax','id'=>'saveForm'));
echo $this->Form->input('name');
echo $this->Form->input('phone');
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->input('terms');
echo $this->Form->submit('Save');
echo $this->Form->end();
?>