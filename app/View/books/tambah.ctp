<h2>Tambah Buku</h2>
<?php

echo $this->Form->create('Book', array('type' => 'file'));
echo $this->Form->input('Book.cover', array('type' => 'file','label' => 'Upload Cover Buku'));
echo $this->Form->input('cover_dir', array('type' => 'hidden'));
echo $this->Form->input('Book.judul', array('type' =>'text','value' => ''));
echo $this->Form->input('Book.keterangan', array('type' =>'textarea','value' => ''));
echo $this->Form->input('Book.harga', array('type' =>'text','value' => ''));

echo $this->Form->end('Save');
?>