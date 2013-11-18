
<?php

//pr($fotoFasilitas);

if(count($fotoAlbum)==0){
    ?>

    <h3>Belum ada foto untuk album <?php echo $album['Album']['nama']; ?></h3>
<?php

}
else{ ?>
<h3>Album <?php echo $fotoAlbum[0]['Album']['nama'];?></h3>
<ul class="clearing-thumbs small-block-grid-2 large-block-grid-4" data-clearing>
    <?php
    foreach ($fotoAlbum as $foto):

        $directory=$foto['Galerifoto']['photo_dir'];

        $file=$foto['Galerifoto']['photo'];
        $path=  $this->webroot.'app/webroot/files/galerifoto/photo/'.$directory.'/'.$file ;
        // $this->set($path);
        //pr(count($foto));
       //  pr($path);
        //echo $foto['Galerifoto']['photo'];
        ?>
        <li><a href="<?php echo $path;?>"><img src="<?php echo $path;?>"></a></li>
    <?php

    endforeach;}
    ?>
</ul>

<a href="<?php echo $this->Html->url(array('controller'=>'Albums','action'=>'index')); ?>">
    <button class="btn btn-primary" type="button">Kembali</button>
</a>