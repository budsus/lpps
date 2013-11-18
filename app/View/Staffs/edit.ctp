<h2>Edit Data Staff</h2>
<p>&nbsp;</p>
<div>
    <a href="<?php echo $this->Html->url(
        array('controller'=>'Staffs', 'action'=>'index')); ?>"
       class="btn">
        Kembali ke daftar
    </a>
</div>
<?php
echo $this->Form->create('Staff', array('action' => 'simpan', 'type' => 'file'));
echo $this->Form->input('Staff.id',
    array('type' =>'hidden', 'value' => $data['Staff']['id']));
echo $this->Form->input('Staff.nama',
    array('type' =>'text', 'value' => $data['Staff']['nama']));
echo $this->Form->input('Staff.jabatan',
    array('type' =>'text', 'value' => $data['Staff']['jabatan']));
echo $this->Form->input('Staff.email',
    array('type' =>'text', 'value' => $data['Staff']['email']));

echo $this->Form->end('Simpan');
?>