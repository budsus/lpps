<h2>Upload File Buletin</h2>
<?php
echo $this->Form->create('Bulletin', array('type' => 'file'));
echo $this->Form->input('Bulletin.cover', array('type' => 'file','label' => 'Upload Cover Buletin'));
echo $this->Form->input('cover_dir', array('type' => 'hidden'));
echo $this->Form->input('Bulletin.judul', array('type' =>'text','value' => ''));
echo $this->Form->input('Bulletin.keterangan', array('type' =>'textarea','value' => ''));
echo $this->Form->input('Bulletin.harga', array('type' =>'text','value' => ''));
echo $this->Form->input('Bulletin.periode', array('type' =>'text','value' => ''));

echo $this->Form->end('Save');
?>
