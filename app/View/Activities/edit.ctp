 <h2>Ubah Detail Kegiatan</h2>
    <div>
        <a href="<?php echo $this->Html->url('/activities'); ?>">
            <button class="btn" type="button">Kembali ke daftar</button>
        </a>
        <br />
    </div>
<?php
echo $this->Form->create('Activity', array('action' => 'save', 'type' => 'file'));
echo $this->Form->input('Activity.id',
    array('type' =>'hidden', 'value' => $data['Activity']['id']));
echo $this->Form->input('Activity.nama_kegiatan',
    array('type' =>'text',
        'value' => $data['Activity']['nama_kegiatan']));
echo $this->Form->input('Activity.tgl_pelaksanaan',
    array('type' =>'text',
        'value' => $data['Activity']['tgl_pelaksanaan']));
echo $this->Form->input('Activity.deskripsi_singkat',
    array('type' =>'text',
        'value' => $data['Activity']['deskripsi_singkat']));
echo $this->Form->input('Activity.latar_belakang',
    array('type' =>'text',
        'value' => $data['Activity']['latar_belakang']));
echo $this->Form->input('Activity.tujuan',
    array('type' =>'text',
        'value' => $data['Activity']['tujuan']));
echo $this->Form->input('Activity.sasaran',
    array('type' =>'text',
        'value' => $data['Activity']['sasaran']));
echo $this->Form->input('Activity.jadwal_kegiatan',
    array('type' =>'text',
        'value' => $data['Activity']['jadwal_kegiatan']));
echo $this->Form->input('Activity.tempat',
    array('type' =>'text',
        'value' => $data['Activity']['tempat']));
echo $this->Form->input('Activity.penanggung_jawab',
    array('type' =>'text',
        'value' => $data['Activity']['penanggung_jawab']));
echo $this->Form->input('Activity.biaya_pendaftaran',
    array('type' =>'text',
        'value' => $data['Activity']['biaya_pendaftaran']));
echo $this->Form->input('Activity.deadline',
    array('type' =>'datetime',
        'value' => $data['Activity']['deadline'],
        'label' => 'Tanggal Pendaftaran Terakhir'));
echo $this->Form->input('Activity.max_peserta',
    array('type' =>'text',
        'value' => $data['Activity']['max_peserta'],
        'label' => 'Jumlah Maksimal Peserta'));
echo $this->Form->end('Save');
?>