<?php
// simpan di app/views/users/edit.ctp
?>
<h2>Ubah Status Pembelian</h2>
<p>&nbsp;</p>
<div>
	<a href="<?php echo $this->Html->url(
				array('controller'=>'buybulletins', 'action'=>'index')); ?>" 
        class="btn">
		Kembali ke daftar
	</a>
</div>
<?php
echo $this->Form->create('Buybulletin', array('action' => 'simpan'));
echo $this->Form->input('Buybulletin.id', 
			array('type' =>'hidden', 'value' => $data['Buybulletin']['id']));
/*echo $this->Form->input('Buybulletin.statuspembelian', 
			array('type' =>'text', 
			      'value' => $data['Buybulletin']['statuspembelian']));*/
?>
 <label>Status Pembelian</label>
    <select name="data[Buybulletin][statuspembelian]">
    	<option value=" ">(Pilih Status)</option>
        <option value="Pending">Pending</option>
        <option value="Sudah Konfirmasi">Sudah Konfirmasi</option>
        <option value="Batal">Batal</option>
    </select>
<?php
echo $this->Form->end('Simpan');
?>