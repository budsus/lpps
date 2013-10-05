<?php
// simpan di app/views/users/edit.ctp
?>
<h2>Ubah Data Buku</h2>
<p>&nbsp;</p>
<div>
	<a href="<?php echo $this->Html->url(
				array('controller'=>'books', 'action'=>'index')); ?>" 
        class="btn">
		Kembali ke daftar
	</a>
</div>
<?php
echo $this->Form->create('Book', array('action' => 'simpan'));
echo $this->Form->input('Book.id', 
			array('type' =>'hidden', 'value' => $data['Book']['id']));
echo $this->Form->input('Book.judul', 
			array('type' =>'text', 
			      'value' => $data['Book']['judul']));
echo $this->Form->input('Book.keterangan', 
			array('type' =>'text', 
			      'value' => $data['Book']['keterangan']));
echo $this->Form->input('Book.harga', 
			array('type' =>'text', 
			      'value' => $data['Book']['harga']));
echo $this->Form->end('Simpan');
?>