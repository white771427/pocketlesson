<h1>test</h1>

<?php


 echo $this->Form->create('Collection');

 echo $this->Form->input('title');
 echo $this->Form->input('col_code');
 echo $this->Form->input('save_space');

 echo $this->Form->end('送信');
 ?>
