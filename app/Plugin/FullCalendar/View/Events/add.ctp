<?php
/*
 * View/Events/add.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<div class="events form">
<?php echo $this->Form->create('Event');?>
	<fieldset>
 		<legend><?php __('Add Event'); ?></legend>
	<?php
    echo $this->Form->input('fasilitas_id');
    echo $this->Form->input('nama_acara',array('label'=>'nama acara'));
    echo $this->Form->input('Client.nama_depan',array('label'=>'Nama depan pemesan'));
    echo $this->Form->input('Client.nama_belakang',array('label'=>'Nama belakang pemesan'));
    echo $this->Form->input('Client.email');
    echo $this->Form->input('Client.telepon');
    echo $this->Form->input('allday',array('type'=>'checkbox','label'=>'sepanjang hari'));
    echo $this->Form->input('details',array('label'=>'detail acara'));

    echo $this->Form->input('start');
    echo $this->Form->input('end');
    echo $this->Form->input('status', array('options' => array(
            'Masih pesan' => 'Masih pesan','Lunas' => 'Lunas','Uang muka' => 'Uang muka',
        )
        )
    );



	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<ul>

		<li><li><?php echo $this->Html->link(__('Lihat Calendar', true), array('plugin' => 'full_calendar', 'controller' => 'full_calendar')); ?></li>
	</ul>
</div>
