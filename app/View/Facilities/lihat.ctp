

<h3><?php echo $fasilitas['Facility']['nama'];

    ?></h3>

<?php   echo $this->Session->flash(); ?>


<p>&nbsp;</p>
<table class="table table-hover">
    <thead>

    <tr>

        <th>
            <a href="<?php echo $this->Html->url(array('controller'=>'Facilities','action'=>'upload', $fasilitas['Facility']['id'])); ?>">
                <button class="btn btn-primary" type="button">Tambah Foto</button>
            </a>
        </th>
        <th>Nama fasilitas</th>






        <th>Foto</th>

    </tr>
    </thead>




<ul class="clearing-thumbs small-block-grid-2 large-block-grid-4" data-clearing>
    <?php
    foreach ($fotoFasilitas as $foto):
        ?>
        <tr>
            <td>
                <a href="<?php echo $this->Html->url(
                    array('controller' => 'Facilities',
                        'action'=>'hapusfoto',
                        $foto['Galery']['id'])); ?>" onclick="return confirm('Yakin untuk dihapus?');">
                    Hapus Foto
                </a>
            </td>
            <td>
                <?php echo $foto['Galery']['photo']; ?>
            </td>
    <td>
        <?php
        $directory=$foto['Galery']['photo_dir'];

        $file=$foto['Galery']['photo'];
        $path=  $this->webroot.'app/webroot/files/galery/photo/'.$directory.'/'.$file ;
        // $this->set($path);
        //pr(count($foto));
        // pr($path);

        ?>
        <a href="<?php echo $path;?>"><img src="<?php echo $path;?>"></a>
    </td>

        </tr>

    <?php

    endforeach;
    ?>
</ul>
</table>