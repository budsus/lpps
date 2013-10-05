<h2>Upload File Materi Pembinaan</h2>
<?php
echo $this->Form->create('Material', array('type' => 'file'));
echo $this->Form->input('Material.judul', array('type' => 'file','label' => 'Document'));
echo $this->Form->input('Material.keterangan', array('type' =>'textarea','value' => ''));	
echo $this->Form->input('materipembinaan_dir', array('type' => 'hidden'));
echo $this->Form->end('Upload file');
?>
