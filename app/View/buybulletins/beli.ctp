<h2>Pesan Bulletin</h2>
<?php

echo $this->Form->create('Buybulletin', array('action' => 'beli'));
echo $this->Form->input('Bulletin.id', 
			array('type' =>'hidden', 'value' => $data['Bulletin']['id']));
echo $this->Form->input('bulletin_id',
    array('type' =>'hidden', 'value' => $data['Bulletin']['id'], 'readonly'=> 'readonly','label'=>'Judul'));
echo $this->Form->input('Buybulletin.nama', array('type' =>'text','value' => ''));
echo $this->Form->input('Bulletin.judul', 
			array('type' =>'text', 'value' => $data['Bulletin']['judul'], 'readonly'=> 'readonly'));
echo $this->Form->input('Buybulletin.notelp', array('type' =>'text','value' => ''));
echo $this->Form->input('Buybulletin.keterangantambahan', array('type' =>'textarea','value' => ''));

echo $this->Form->end('Save');
?>