<h4><dl class="sub-nav">

        <dd class="active"><a href="<?php echo $this->Html->url(
                array('controller'=>'Profiles',
                    'action' => 'index_user')); ?>">Profil  </a></dd>
        <dd><a href="<?php echo $this->Html->url(
                array('controller'=>'Staffs',
                    'action' => 'index_user')); ?>">Staff  </a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Penguruses',
                    'action' => 'index_user')); ?>">Pengurus  </a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'gkjs',
                    'action' => 'index_user')); ?>">Daftar Alamat GKJ  </a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'gkis',
                    'action' => 'index_user')); ?>">Daftar Alamat GKI  </a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Albums',
                    'action' => 'index_user')); ?>">Galery  </a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Sahabats',
                    'action' => 'index_user')); ?>">Sahabat LPPS  </a></dd>
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
                    <?php
                    // jika tidak ada data user
                    if (sizeof($data) == 0) {
                        ?>
                        <tr><td colspan="4">Belum ada data </td></tr>
                    <?php
                    } else {
                        foreach($data as $u):
                            ?>
                            <td style="width:1200px;"><p><?php echo  $u['Profile']['latar'] ; ?><p></td>
                        <?php
                        endforeach;
                    }
                    ?>
                </div>
            </section>
        </div>
    </div>




