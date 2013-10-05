<h2>Pesan Buku</h2>
<?php

echo $this->Form->create('Buy', array('action' => 'beli'));
echo $this->Form->input('Buy.nama', array('type' =>'text','value' => ''));
echo $this->Form->input('Book.judul', 
			array('type' =>'text', 
			      'value' => $data['Book']['judul'],
				  'readonly'=> 'readonly'));
echo $this->Form->input('Buy.notelp', array('type' =>'text','value' => ''));
echo $this->Form->input('Buy.keterangantambahan', array('type' =>'textarea','value' => ''));

echo $this->Form->end('Save');
?>