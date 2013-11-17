
<div class="row">
    <?php $this->Session->flash();?>
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-9 push-3 columns">

        <?php echo $content_for_layout; ?>

    </div>
    <?php $this->Session->flash();?>

    <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-3 pull-9 columns">

        <ul class="side-nav">
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'books',
                        'action' => 'index')); ?>">List Daftar Buku</a></li>

            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'Materials',
                        'action' => 'index')); ?>">Materi pembinaan</a></li>
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'Bulletins',
                        'action' => 'index')); ?>">Bulletin</a></li>
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'Buys',
                        'action' => 'index')); ?>">Daftar pembeli Buku</a></li>
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'Buybulletins',
                        'action' => 'index')); ?>">Daftar pembeli Buletin</a></li>




        </ul>

        <p><img src="http://placehold.it/320x240&text=Ad" /></p>

    </div>

</div>
