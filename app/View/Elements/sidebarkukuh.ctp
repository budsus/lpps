
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
                    array('controller'=>'Facilities',
                        'action' => 'tambah')); ?>">Tambah Fasilitas</a></li>
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'Facilities',
                        'action' => 'upload')); ?>">Tambah gambar fasilitas</a></li>
            <li><a href="<?php echo $this->Html->url(
                          array('controller'=>'Profiles',
                          'action' => 'tampil')); ?>">Profil LPPS</a></li>
            <li><a href="<?php echo $this->Html->url(
                          array('controller'=>'Staffs',
                          'action' => 'index')); ?>">Staff / Karyawan</a></li>
            <li><a href="#">Section 6</a></li>
        </ul>

        <p><img src="http://placehold.it/320x240&text=Ad" /></p>

    </div>

</div>
