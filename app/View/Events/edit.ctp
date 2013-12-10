<?php
/*
 * View/Events/edit.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
//pr($event);
?>
<div class="events form">
    <div class="actions">
        <ul class="large icon-grid">

            <li><a href="/lppsBackup/events" class="foundicon-left-arrow"></a></li>
            <li><a href="/lppsBackup/FullCalendar" class="foundicon-calendar"></a></li>
        </ul>
    </div>
<?php echo $this->Form->create('Event',array('action' => 'simpan'));?>
	<fieldset>

	<?php

		echo $this->Form->input('fasilitas_id');
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('Client.nama_depan');
    echo $this->Form->input('Client.id',array('type'=>'hidden'));
    echo $this->Form->input('Client.nama_belakang');
    echo $this->Form->input('Client.email');
    echo $this->Form->input('Client.telepon');
		echo $this->Form->input('nama_acara');
		echo $this->Form->input('details');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
    echo $this->Form->input('all_day',array('type'=>'hidden','label'=>'sepanjang hari','value'=>'0'));
    echo $this->Form->input('status', array('options' => array(
            'Belum verifikasi' => 'Belum verifikasi','Sudah Verifikasi' => 'Sudah Verifikasi',
            'Uang muka'=>'Uang muka','Lunas'=>'Lunas'
        )
        )
			);
    echo $this->Form->input('terbayar');
    echo $this->Form->end(__('Submit', true));
	?>
	</fieldset>

</div>

