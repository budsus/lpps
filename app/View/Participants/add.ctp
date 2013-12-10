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

<!--<label>Metode Pembayaran</label>-->
<?php
    echo $this->Form->input('Participant.metode_pembayaran',
        array(
            'options' => array('' => '(Pilih Metode Pembayaran)', 'Transfer' => 'Transfer', 'Tunai' => 'Tunai'),
            'label' => 'Metode Pembayaran'));
    echo $this->Form->input('Participant.bank_tujuan',
        array(
            'options' => array('' => '(Pilih tujuan transfer anda)', 'BRI' => 'BRI', 'BCA' => 'BCA'),
            'label' => 'Bank Tujuan'));

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