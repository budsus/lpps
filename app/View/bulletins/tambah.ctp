<h2>Upload File Buletin</h2>
<?php
echo $this->Form->create('Bulletin', array('action' => 'tambah'));
echo $this->Form->input('Bulletin.judul', array('type' =>'text','value' => ''));
echo $this->Form->input('Bulletin.keterangan', array('type' =>'textarea','value' => ''));
echo $this->Form->input('Bulletin.harga', array('type' =>'text','value' => ''));

echo $this->Form->end('Save');
?>
