<h2>Edit Data Pengurus</h2>
<p>&nbsp;</p>
<div>
    <a href="<?php echo $this->Html->url(
        array('controller'=>'Penguruses', 'action'=>'index')); ?>"
       class="btn">
        Kembali ke daftar
    </a>
</div>
<?php
echo $this->Form->create('Pengurus', array('action' => 'simpan', 'type' => 'file'));
echo $this->Form->input('Pengurus.id',
    array('type' =>'hidden', 'value' => $data['Pengurus']['id']));
echo $this->Form->input('Pengurus.nama',
    array('type' =>'text', 'value' => $data['Pengurus']['nama']));
echo $this->Form->input('Pengurus.jabatan',
    array('type' =>'text', 'value' => $data['Pengurus']['jabatan']));
echo $this->Form->input('Pengurus.undur',
    array('type' =>'text', 'value' => $data['Pengurus']['unsur']));
echo $this->Form->input('Pengurus.gereja',
    array('type' =>'text', 'value' => $data['Pengurus']['gereja']));
echo $this->Form->input('Pengurus.email',
    array('type' =>'text', 'value' => $data['Pengurus']['email']));

echo $this->Form->end('Simpan');
?>