<h3>Penambahan galeri fasilitas</h3>
<?php echo $this->Form->create('Galery', array('type' => 'file'));
echo $this->Form->input('Galery.facility_id');
echo $this->Form->input('Galery.photo', array('type' => 'file'));

echo $this->Form->input('Galery.photo_dir', array('type' => 'hidden'));
echo $this->Form->end('submit'); ?>