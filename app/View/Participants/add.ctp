<?php
echo $this->Form->create('Participant');
echo $this->Form->input('nama_lengkap');
echo $this->Form->input('alamat');
echo $this->Form->input('telp');
echo $this->Form->input('activity_id',
    array('type' =>'hidden',
        'value' => $data['Activity']['id']));
echo $this->Form->end('Save');

?>