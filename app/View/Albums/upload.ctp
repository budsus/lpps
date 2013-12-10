<?php echo $this->Session->flash();?>
    <h3>Penambahan Foto Album <?php echo $fotoAlbum[0]['Album']['nama'];?></h3>
<?php echo $this->Form->create('Galerifoto', array('type' => 'file'));
//pr($facilities);
echo $this->Form->input('Album',array('value'=>$albums['Album']['nama'],'readonly'=>'readonly','type' =>'hidden'));
echo $this->Form->input('Galerifoto.photo', array('type' => 'file'));
echo $this->Form->input('album_id',array('type'=>'hidden','value'=>$albums['Album']['id']));
echo $this->Form->input('Album.photo_dir', array('type' => 'hidden'));
echo $this->Form->end('submit'); ?>