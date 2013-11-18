


<!-- Main Page Content and Sidebar -->

<div class="row">

    <!-- Main Blog Content -->
    <div class="large-12 columns" role="content">

        <article>

            <h3><?php echo $fasilitas['Facility']['nama']; ?></h3>
            <?php
            if(!empty($fotoFasilitas))
            {
            $directory=$fotoFasilitas[0]['Galery']['photo_dir'];

            $file=$fotoFasilitas[0]['Galery']['photo'];
            $path=  $this->webroot.'app/webroot/files/galery/photo/'.$directory.'/'.$file ;

            ?>

            <div class="row">
                <div class="large-7 columns">
                    <p><?php echo $fasilitas['Facility']['keterangan']; ?></p>
                    <h5>Biaya Sewa :</h5>
                    <p><?php echo $fasilitas['Facility']['biaya']; ?></p>
                    <a href="<?php echo $this->Html->url(array('controller'=>'Facilities','action'=>'pesan', $fasilitas['Facility']['id'])); ?>">
                        <button class="btn btn-primary" type="button">Pesan Fasilitas</button>
                       </a>
                </div>
                <div class="large-5 columns">
                    <img class='profpic' src="<?php echo $path;?>">
                </div>

            </div>




        </article>

        <hr />
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
                <li><a href="<?php echo $path;?>"><img class="gambardepan" src="<?php echo $path;?>"></a></li>
            <?php

            endforeach; } else{
            ?>
                <div class="row">
                    <div class="large-7 columns">
                        <p><?php echo $fasilitas['Facility']['keterangan']; ?></p>
                        <h5>Biaya Sewa :</h5>
                        <p><?php echo $fasilitas['Facility']['biaya']; ?></p>
                        <a href="<?php echo $this->Html->url(array('controller'=>'Facilities','action'=>'pesan', $fasilitas['Facility']['id'])); ?>">
                            <button class="btn btn-primary" type="button">Pesan Fasilitas</button>
                        </a>
                    </div>


                </div>




                </article>
            <?php
            ?>

            <?php
            }?>
        </ul>


    </div>


</div>


