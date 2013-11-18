<?php ?>
<div class="row">

<?php echo $this->Session->flash();

foreach($data as $u):
$nomorid=$u['Facility']['id'];
    //pr($u['Galery']);

    if(!empty($u['Galery']))
    {
        $directory=$u['Galery'][0]['photo_dir'];

        $file=$u['Galery'][0]['photo'];
        $path=  $this->webroot.'app/webroot/files/galery/photo/'.$directory.'/'.$file ;
    ?>


    <div class="large-4 columns">
        <img class='gambardepan' src="<?php echo $path;?>">
        <h4> <a href="<?php echo $this->Html->url(
                array('controller' => 'Facilities',
                    'action'=>'detailFasilitas',
                    $nomorid)); ?>">
                <?php echo $u['Facility']['nama']; ?>
            </a></h4>
        <p> <?php echo $u['Facility']['keterangan']; ?></p>
    </div>
<?php }
        else {

?>

        <div class="large-4 columns">

            <h4> <a href="<?php echo $this->Html->url(
                    array('controller' => 'Facilities',
                        'action'=>'detailFasilitas',
                        $nomorid)); ?>">
                    <?php echo $u['Facility']['nama']; ?>
                </a></h4>
            <p> <?php echo $u['Facility']['keterangan']; ?></p>
        </div>
<?php }
endforeach;

?></div>






