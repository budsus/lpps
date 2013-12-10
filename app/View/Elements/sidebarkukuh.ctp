
<div class="row">

    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-9 push-3 columns">

        <?php echo $content_for_layout; ?>
    </div>


    <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-3 pull-9 columns">

        <ul class="side-nav">

            <li><a href="<?php echo $this->Html->url(
                          array('controller'=>'Profiles',
                          'action' => 'index')); ?>">Profil LPPS</a></li>
            <li><a href="<?php echo $this->Html->url(
                          array('controller'=>'Staffs',
                          'action' => 'index')); ?>">Staff / Karyawan</a></li>
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'Penguruses',
                        'action' => 'index')); ?>">Pengurus</a></li>
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'gkjs',
                        'action' => 'index')); ?>">Daftar Alamat GKJ</a></li>
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'gkis',
                        'action' => 'index')); ?>">Daftar Alamat GKI</a></li>
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'albums',
                        'action' => 'index')); ?>">Galery</a></li>
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'sahabats',
                        'action' => 'index')); ?>">Sahabat LPPS</a></li>



        </ul>

        <p><img src="http://placehold.it/320x240&text=Ad" /></p>

    </div>

</div>
