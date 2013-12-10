<h2>Edit Alamat</h2>
<p>&nbsp;</p>
<div>
    <a href="<?php echo $this->Html->url(
        array('controller'=>'Gkjs', 'action'=>'index')); ?>"
       class="btn">
        Kembali ke daftar
    </a>
</div>
<?php
echo $this->Form->create('Gkj', array('action' => 'simpan', 'type' => 'file'));
echo $this->Form->input('Gkj.id',
    array('type' =>'hidden', 'value' => $data['Gkj']['id']));
echo $this->Form->input('Gkj.nama',
    array('type' =>'text', 'value' => $data['Gkj']['nama']));
echo $this->Form->input('Gkj.alamat',
    array('type' =>'text', 'value' => $data['Gkj']['alamat']));
echo $this->Form->input('Gkj.telp',
    array('type' =>'text', 'value' => $data['Gkj']['telp']));
echo $this->Form->input('Gkj.fax',
    array('type' =>'text', 'value' => $data['Gkj']['fax']));
echo $this->Form->input('Gkj.pdt1',
    array('type' =>'text', 'value' => $data['Gkj']['pdt1']));
echo $this->Form->input('Gkj.pdt2',
    array('type' =>'text', 'value' => $data['Gkj']['pdt2']));
echo $this->Form->input('Gkj.pdt3',
    array('type' =>'text', 'value' => $data['Gkj']['pdt3']));

echo $this->Form->end('Simpan');
?>