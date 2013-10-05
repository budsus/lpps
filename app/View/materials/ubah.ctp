<?php
// simpan di app/views/users/edit.ctp
?>
<h2>Ubah Data Materi Pembinaan</h2>
<p>&nbsp;</p>
<div>
	<a href="<?php echo $this->Html->url(
				array('controller'=>'materials', 'action'=>'index')); ?>" 
        class="btn">
		Kembali ke daftar
	</a>
</div>
<?php
echo $this->Form->create('Material', array('action' => 'simpan'));
echo $this->Form->input('Material.id', 
			array('type' =>'hidden', 'value' => $data['Material']['id']));
echo $this->Form->input('Material.judul', 
			array('type' =>'text', 
			      'value' => $data['Material']['judul'],
				  'readonly'=> 'readonly'));
echo $this->Form->input('Material.keterangan', 
			array('type' =>'text', 
			      'value' => $data['Material']['keterangan']));
echo $this->Form->end('Simpan');
?>