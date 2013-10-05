<?php

?>
<h2>Ubah Data Bulletin</h2>
<p>&nbsp;</p>
<div>
	<a href="<?php echo $this->Html->url(
				array('controller'=>'bulletins', 'action'=>'index')); ?>" 
        class="btn">
		Kembali ke daftar
	</a>
</div>
<?php
echo $this->Form->create('Bulletin', array('action' => 'simpan'));
echo $this->Form->input('Bulletin.id', 
			array('type' =>'hidden', 'value' => $data['Bulletin']['id']));
echo $this->Form->input('Bulletin.judul', 
			array('type' =>'text', 
			      'value' => $data['Bulletin']['judul'],
				  'readonly'=> 'readonly'));
echo $this->Form->input('Bulletin.keterangan', 
			array('type' =>'text', 
			      'value' => $data['Bulletin']['keterangan']));
echo $this->Form->input('Bulletin.harga', 
			array('type' =>'text', 
			      'value' => $data['Bulletin']['harga']));
echo $this->Form->end('Simpan');
?>