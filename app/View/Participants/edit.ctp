<h2>Ubah Data Peserta</h2>
<?php
echo $this->Form->create('Participant', array('action' => 'save'));
echo $this->Form->input('Participant.id',
    array('type' =>'hidden', 'value' => $data['Participant']['id']));
echo $this->Form->input('Participant.nama_lengkap',
    array('type' =>'text',
        'value' => $data['Participant']['nama_lengkap']));
echo $this->Form->input('Participant.alamat',
    array('type' =>'text',
        'value' => $data['Participant']['alamat']));
echo $this->Form->input('Participant.telp',
    array('type' =>'text',
        'value' => $data['Participant']['telp']));
echo $this->Form->input('Participant.activity_id',
    array('type' =>'hidden', 'value' => $data['Participant']['activity_id']));
echo $this->Form->end('Save');
?>