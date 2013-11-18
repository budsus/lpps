<?php if($this->Session->check('user')) {?>

<h2> Profil LPPS </h2>


<br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>LPPS</th>
    </tr>
    </thead>
    <?php
    // jika tidak ada data user
    if (sizeof($data) == 0) {
        ?>
        <tr><td colspan="4">Belum ada data </td></tr>
    <?php
    } else {
        // jika sudah ada data akun user

        foreach($data as $u):
            ?>
            <tr>

                <td style="width:600px;"><?php echo $u['Profile']['isi']; ?></td>
                <td>
                    <a href="<?php echo $this->Html->url(
                        array('controller' => 'Profiles',
                            'action'=>'edit',
                            $u['Profile']['id'])); ?>" >
                        <button class="small button">Edit</button>
                    </a>
                </td>
            </tr>
        <?php
        endforeach;

    }

    ?>

</a>

</table>
<?php } else {?>
<h4><dl class="sub-nav">

        <dd class="active"><a href="<?php echo $this->Html->url(
                array('controller'=>'Profiles',
                    'action' => 'index_user')); ?>">Profil</a></dd>
        <dd><a href="<?php echo $this->Html->url(
                array('controller'=>'Staffs',
                    'action' => 'index_user')); ?>">Staff</a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Penguruses',
                    'action' => 'index_user')); ?>">Pengurus</a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'gkjs',
                    'action' => 'index_user')); ?>">Daftar Alamat GKJ</a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'gkis',
                    'action' => 'index_user')); ?>">Daftar Alamat GKI</a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Galeries',
                    'action' => 'index_user')); ?>">Galery</a></dd>
    </dl></h4>

<div class="row">

    <!-- Contact Details -->
    <div class="large-12 columns">

        <h3>Profil LPPS</h3>

        <div class="section-container tabs" data-section>
            <section class="section">
                <h5 class="title"><a href="#">Profil</a></h5>
                <div class="content" data-slug="panel1">
                    <?php
                    // jika tidak ada data user
                    if (sizeof($data) == 0) {
                        ?>
                        <tr><td colspan="4">Belum ada data </td></tr>
                    <?php
                    } else {
                        foreach($data as $u):
                            ?>
                            <td style="width:1200px;"><p><?php echo  $u['Profile']['isi'] ; ?><p></td>
                        <?php
                        endforeach;
                    }
                    ?>
                </div>
            </section>
            <section class="section">
                <h5 class="title"><a href="#panel2">Latar Belakang</a></h5>
                <div class="content" data-slug="panel2">
                    <p> Gagasan pembentukan LPK pertama kali diungkapkan oleh Pdt. Basoeki Probowinoto pada tahun 1955 dalam suatu makalahnya yang berjudul : ”EFISIENSI DALAM MEMPERGUNAKAN TENAGA DAN HARTA BENDA UNTUK PEKERDJAAN PEKABARAN INDJIL DI  DJAWA TENGAH”. Gagasan tersebut dilatar-belakangi oleh adanya hubungan yang kurang baik antara Pemerintah Indonesia dan Pemerintah Kerajaan Belanda akibat sengketa Irian Barat, yang menyebabkan hubungan antara gereja-gereja di Indonesia dengan pihak Zending Belanda juga mengalami hambatan yang mengakibatkan banyak tenaga misioner Belanda yang pulang ke negaranya. Hubungan yang kurang baik itu memuncak dengan adanya pemutusan hubungan antara Pemerintah Indonesia dengan Pemerintah Kerajaan Belanda pada tahun 1957. Akibatnya Gereja-gereja Belanda di Indonesia diserahkan kepada Gereja-gereja Pribumi dan Tenaga-tenaga Zending meninggalkan Indonesia. Keadaan ini mulai menyadarkan Gereja-gereja di Indonesia, khususnya Gereja-gereja yang mempunyai hubungan dengan Gereja Belanda, untuk mandiri dalam segala hal.
                    </p>
                </div>
            </section>
        </div>
    </div>





    <?php } ?>







