<h2>Edit</h2>
<p>&nbsp;</p>
<div>
    <a href="<?php echo $this->Html->url(
        array('controller'=>'Profiles', 'action'=>'index')); ?>"
       class="btn">
        Kembali ke daftar
    </a>
</div>
<?php
echo $this->Form->create('Profile', array('action' => 'simpan', 'type' => 'file'));
echo $this->Form->input('Profile.id',
    array('type' =>'hidden', 'value' => $data['Profile']['id']));
echo $this->Form->input('Profile.isi',
    array('type' =>'text', 'value' => $data['Profile']['isi']));
echo $this->Form->input('Profile.latar',
    array('type' =>'text', 'value' => $data['Profile']['latar']));


echo $this->Form->end('Simpan');
?>