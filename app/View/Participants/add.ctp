<h3>Daftar Peserta Baru</h3>

<?php
echo $this->Form->create('Participant',array('onsubmit'=>'return confirm("Anda yakin data yang anda tulis benar?");'));
echo $this->Form->input('nama_lengkap');
echo $this->Form->input('alamat');
echo $this->Form->input('telp',array('label' => 'Nomor yang dapat dihubungi'));
?>
<br />
Berikut ini adalah kolom pembayaran, silahkan kosongkan apabila pendaftaran kegiatan bersifat gratis.<br />
Transfer dapat dilakukan dengan nomor rekening tujuan:<br />
Bank BCA, nomor rekening : 02131923102931 atas nama Saya. <br />
Bank BRI, nomor rekening : 93423429348239 atas nama Dia. <br />
<label>Metode Pembayaran</label>
    <select name="participants[Participant][metode_pembayaran]">
    	<option value=" ">(Pilih Metode Pembayaran)</option>
        <option value="Transfer">Transfer</option>
        <option value="Tunai">Tunai</option>
    </select>
<label>Tujuan Transfer (rekening LPPS)</label>
<select name="participants[Participant][metode_pembayaran]">
    <option value=" ">(Pilih tujuan transfer anda)</option>
    <option value="BRI">BRI</option>
    <option value="BCA">BCA</option>
</select>
<?php
echo $this->Form->input('nominal_transfer');
if ($data['Activity']['participant_count'] >= $data['Activity']['max_peserta'])
{
    echo $this->Form->input('status_pendaftaran',
        array('type' =>'hidden',
            'value' => 'data ditampung'));
}
else
{
    echo $this->Form->input('status_pendaftaran',
        array('type' =>'hidden',
            'value' => 'belum dikonfirmasi'));
}
echo $this->Form->input('activity_id',
    array('type' =>'hidden',
        'value' => $data['Activity']['id']));
echo $this->Form->end('Save');

?>