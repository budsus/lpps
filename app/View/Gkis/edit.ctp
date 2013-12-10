<h2>Edit Alamat</h2>
<p>&nbsp;</p>
<div>
    <a href="<?php echo $this->Html->url(
        array('controller'=>'Gkis', 'action'=>'index')); ?>"
       class="btn">
        Kembali ke daftar
    </a>
</div>
<?php
echo $this->Form->create('Gki', array('action' => 'simpan', 'type' => 'file'));
echo $this->Form->input('Gki.id',
    array('type' =>'hidden', 'value' => $data['Gki']['id']));
echo $this->Form->input('Gki.nama',
    array('type' =>'text', 'value' => $data['Gki']['nama']));
echo $this->Form->input('Gki.alamat',
    array('type' =>'text', 'value' => $data['Gki']['alamat']));
echo $this->Form->input('Gki.email',
    array('type' =>'text', 'value' => $data['Gki']['email']));
echo $this->Form->input('Gki.telp',
    array('type' =>'text', 'value' => $data['Gki']['telp']));
echo $this->Form->input('Gki.fax',
    array('type' =>'text', 'value' => $data['Gki']['fax']));
echo $this->Form->input('Gki.pdt1',
    array('type' =>'text', 'value' => $data['Gki']['pdt1']));
echo $this->Form->input('Gki.pdt2',
    array('type' =>'text', 'value' => $data['Gki']['pdt2']));
echo $this->Form->input('Gki.pdt3',
    array('type' =>'text', 'value' => $data['Gki']['pdt3']));

echo $this->Form->end('Simpan');
?>