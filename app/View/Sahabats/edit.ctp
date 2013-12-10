<h2>Edit Data Pengurus</h2>
<p>&nbsp;</p>
<div>
    <a href="<?php echo $this->Html->url(
        array('controller'=>'Sahabats', 'action'=>'index')); ?>"
       class="btn">
        Kembali ke daftar
    </a>
</div>
<?php
echo $this->Form->create('Sahabat', array('action' => 'simpan', 'type' => 'file'));
echo $this->Form->input('Sahabat.id',
    array('type' =>'hidden', 'value' => $data['Sahabat']['id']));
echo $this->Form->input('Sahabat.nama',
    array('type' =>'text', 'value' => $data['Sahabat']['nama']));
echo $this->Form->input('Sahabat.gereja',
    array('type' =>'text', 'value' => $data['Sahabat']['gereja']));
echo $this->Form->input('Sahabat.pekerjaan',
    array('type' =>'text', 'value' => $data['Sahabat']['pekerjaan']));
echo $this->Form->input('Sahabat.kontak',
    array('type' =>'text', 'value' => $data['Sahabat']['kontak']));

echo $this->Form->end('Simpan');
?>