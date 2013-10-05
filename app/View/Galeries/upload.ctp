<h3>Upload galeri fasilitas</h3>
<?php echo $this->Form->create('Imagepath', array('type' => 'file')); ?>
<?php echo $this->Form->input('Imagepath.username'); ?>
<?php echo $this->Form->input('Imagepath.photo', array('type' => 'file')); ?>
<?php echo $this->Form->input('Imagepath.photo_dir', array('type' => 'hidden')); ?>
<?php echo $this->Form->end(); ?>