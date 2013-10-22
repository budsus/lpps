<div class="row">
    <div class="large-3 columns">
        <h1><img src="http://placehold.it/400x100&text=Logo" /></h1>
    </div>
    <div class="large-9 columns">
        <ul class="inline-list right">
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'books',
                        'action' => 'index')); ?>">Buku</a></li>
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'Activities',
                        'action' => 'index')); ?>">Aktifitas</a></li>
            <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'Facilities',
                        'action' => 'index')); ?>">Fasilitas</a></li>
            <li><a href="#">Section 4</a></li>
        </ul>
    </div>
</div>