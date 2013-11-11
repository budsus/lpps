<?php
// simpan di app/views/users/edit.ctp
?>
<h2>Ubah Status Pembelian</h2>
<p>&nbsp;</p>
<div>
	<a href="<?php echo $this->Html->url(
				array('controller'=>'buys', 'action'=>'index')); ?>" 
        class="btn">
		Kembali ke daftar
	</a>
</div>
<?php
echo $this->Form->create('Buy', array('action' => 'simpan'));
echo $this->Form->input('Buy.id', 
			array('type' =>'hidden', 'value' => $data['Buy']['id']));
/*$arrayKonfirmasi = array(0 => 'Pending', 1 => 'Sudah Konfirmasi', 2 => 'Batal');
echo $this->Form->input('Buy.statuspembelian', array('type' => 'select', 'option' => $arrayKonfirmasi, 'value' => $data['Buy']['statuspembelian']));*/
?>
    <label>Status Pembelian</label>
    <select name="data[Buy][statuspembelian]">
    	<option value=" ">(Pilih Status)</option>
        <option value="Pending">Pending</option>
        <option value="Sudah Konfirmasi">Sudah Konfirmasi</option>
        <option value="Batal">Batal</option>
    </select>

<?php
echo $this->Form->end('Simpan');
?>