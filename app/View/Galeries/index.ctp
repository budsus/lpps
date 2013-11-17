<h2>Galery</h2>



<?php echo $this->Form->create('Galery', array('type' => 'file','controller'=>'Galeries','action'=>'upload')); ?>
<?php echo $this->Form->input('Galery.id'); ?>
<?php echo $this->Form->input('Galery.photo_name', array('type' => 'file')); ?>
<?php echo $this->Form->input('Galery.photo_dir'); ?>
<?php echo $this->Form->end('submit'); ?>
<?php $directory=($data[0]['Galery']['photo_dir']);
$file=($data[0]['Galery']['photo_name']);
$path=$this->webroot.'app/webroot/files/galery/photo_name/'.$directory.'/'.$file;
?>
<a href="<?php echo $path ?>"><img src="<?php echo $path;?>"</a>