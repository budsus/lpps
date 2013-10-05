<?php
echo $this->Form->create('Book', array('action' => 'kirim'));
echo $this->Form->input('Book.id', 
			array('type' =>'hidden', 'value' => $data['Book']['id']));
echo $this->Form->input('Book.judul', 
			array('type' =>'text', 
			      'value' => $data['Book']['judul']));
echo $this->Form->input('keterangan', array('type' =>'text'));
echo $this->Form->input('email', array('type' =>'text'));
echo $this->Form->end('Kirim');
?>