
<?php

//pr($fotoFasilitas);

if(count($fotoFasilitas)==0){
   ?>

    <h3>Belum ada foto untuk fasilitas <?php echo $fasilitas['Facility']['nama']; ?></h3>
<?php

}
else{ ?>
<h3><?php echo $fotoFasilitas[0]['Facility']['nama'];?></h3>
<ul class="clearing-thumbs small-block-grid-2 large-block-grid-4" data-clearing>
<?php
    foreach ($fotoFasilitas as $foto):

    $directory=$foto['Galery']['photo_dir'];

    $file=$foto['Galery']['photo'];
        $path=  $this->webroot.'app/webroot/files/galery/photo/'.$directory.'/'.$file ;
       // $this->set($path);
        //pr(count($foto));
       // pr($path);

    ?>
    <li><a href="<?php echo $path;?>"><img src="<?php echo $path;?>"></a></li>
    <?php

    endforeach;}
    ?>
</ul>