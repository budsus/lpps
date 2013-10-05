<h2>Tambah Buku</h2>
<?php

echo $this->Form->create('Book', array('action' => 'tambah'));
echo $this->Form->input('Book.judul', array('type' =>'text','value' => ''));
echo $this->Form->input('Book.keterangan', array('type' =>'textarea','value' => ''));
echo $this->Form->input('Book.harga', array('type' =>'text','value' => ''));

echo $this->Form->end('Save');
?>