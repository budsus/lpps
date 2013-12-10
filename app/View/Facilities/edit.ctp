<h3>Ubah fasilitas</h3>
<?php

/*echo $this->Form->create('Facility', array('action' => 'tambah'));
echo $this->Form->input('Facility.nama',
    array('type' =>'text','value' => ''));
echo $this->Form->input('Facility.keterangan',
    array('type' =>'textarea','value' => ''));
echo $this->Form->input('Facility.biaya',
    array('type' =>'text','value' => ''));

echo $this->Form->end('Save');*/
echo $this->Session->flash();
echo '<br>';
echo $this->Form->create('Facility', array('type' => 'file','action'=>'Ubah'));
echo $this->Form->input('Facility.id',
    array('type' =>'hidden', 'value' => $data['Facility']['id']));
echo $this->Form->input('Facility.nama',
    array('type' =>'text',
        'value' => $data['Facility']['nama']));
echo $this->Form->input('Facility.keterangan',
    array('type' =>'textarea',
        'value' => $data['Facility']['keterangan']));
echo $this->Form->input('Facility.biaya',
    array('type' =>'text',
        'value' => $data['Facility']['biaya']));
echo $this->Form->input('Facility.jumlah',
    array(
        'value' => $data['Facility']['jumlah']));
echo $this->Form->input('Facility.color',
    array('options' => array(
        'Blue' => 'Biru',
        'Red' => 'Merah',
        'Pink' => 'Pink',
        'Purple' => 'Ungu',
        'Orange' => 'Orange',
        'Green' => 'Hijau',
        'Gray' => 'Abu-abu',
        'Black' => 'Hitam',
        'Brown' => 'Coklat'
    ),'type'=>'hidden','label'=>'Warna (digunakan untuk manajemen pemesanan nanti)','value' => $data['Facility']['color']));

echo $this->Form->end('Simpan');