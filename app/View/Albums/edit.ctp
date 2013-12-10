<h3>Ubah nama album</h3>
<?php

echo $this->Session->flash();
echo '<br>';
echo $this->Form->create('Album', array('type' => 'file','action'=>'Ubah'));
echo $this->Form->input('Album.id',
    array('type' =>'hidden', 'value' => $data['Album']['id']));
echo $this->Form->input('Album.nama',
    array('type' =>'text',
        'value' => $data['Album']['nama']));

echo $this->Form->end('Simpan');



   ?>

<a href="<?php echo $this->Html->url(array('controller'=>'Albums','action'=>'index')); ?>">
    <button class="btn btn-primary" type="button">Kembali</button>
</a>