<h2>Tambah Kegiatan Baru</h2>
<?php
    echo $this->Form->create('Activity', array('type' => 'file'));
    echo $this->Form->input('nama_kegiatan');
    echo $this->Form->input('deskripsi_singkat');
    echo $this->Form->input('penyelenggaraan');
    echo $this->Form->input('latar_belakang');
    echo $this->Form->input('tujuan');
    echo $this->Form->input('sasaran');
    echo $this->Form->input('jadwal_kegiatan');
    echo $this->Form->input('tempat');
    echo $this->Form->input('penanggung_jawab');
    echo $this->Form->input('biaya_pendaftaran');
    echo $this->Form->input('brosur', array('type' => 'file'));
    echo $this->Form->input('brosur_dir', array('type' => 'hidden'));
    echo $this->Form->input('poster', array('type' => 'file'));
    echo $this->Form->input('poster_dir', array('type' => 'hidden'));
    echo $this->Form->end('Save');

?>