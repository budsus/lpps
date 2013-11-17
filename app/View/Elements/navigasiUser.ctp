


<div class="row">
    <div class="large-3 columns">
        <h1><img src="http://placehold.it/400x100&text=Logo" /></h1>
    </div>
    <div class="large-9 columns">
        <ul class="right button-group">
            <li><a href="<?php echo $this->Html->url(array('controller'=>'Profiles', 'action'=>'index'));?>" class="button">Profil</a></li>
            <li><a href="<?php echo $this->Html->url(array('controller'=>'Activities', 'action'=>'index'));?>" class="button">Aktifitas</a></li>
            <li><a href="<?php echo $this->Html->url(array('controller'=>'Facilities', 'action'=>'index'));?>" class="button">Fasilitas</a></li>
            <li> <a href="#" data-dropdown="drop1" class="button">Terbitan</a>
            <ul id="drop1" class="f-dropdown" data-dropdown-content>
                <li><a href="<?php echo $this->Html->url(array('controller'=>'Books', 'action'=>'index'));?>">Buku</a></li>
                <li><a href="<?php echo $this->Html->url(
                        array('controller'=>'bulletins',
                            'action' => 'index')); ?>">Bulletin</a></li>
                <li><a href="<?php echo $this->Html->url(
                        array('controller'=>'materials',
                            'action' => 'index')); ?>">Material</a></li>
            </ul>
            </li>


            <li><a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'login'));?>" class="button">Login</a></li>
        </ul>
    </div>
    <br>

</div>
