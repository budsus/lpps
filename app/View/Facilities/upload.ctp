<?php echo $this->Session->flash();?>
<h3>Penambahan galeri fasilitas</h3>
<?php echo $this->Form->create('Galery', array('type' => 'file'));
//pr($facilities);
echo $this->Form->input('Fasilitas',array('value'=>$facilities['Facility']['nama'],'readonly'=>'readonly'));
echo $this->Form->input('Galery.photo', array('type' => 'file'));
echo $this->Form->input('facility_id',array('type'=>'hidden','value'=>$facilities['Facility']['id']));
echo $this->Form->input('Galery.photo_dir', array('type' => 'hidden'));
echo $this->Form->end('submit'); ?>