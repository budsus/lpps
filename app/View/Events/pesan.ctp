
<div class='row'>
    <div class='large-10 colomn'>
        <?php echo $this->Session->flash(); ?>
<div class="events form">
    <?php echo $this->Form->create('Event');?>
    <fieldset>
        <h3>Tambah Pemesanan</h3>
        <legend><?php __('Add Event'); ?></legend>
        <?php
       // pr($data);
        echo $this->Form->create('Event', array('action' => 'pesan'));
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


    //pr($this->Captcha);
        //echo $this->Captcha->render();
        //echo $this->Form->input('captcha');


        echo $this->Form->end(__('Submit', true));

        ?>
    </fieldset>

</div>
    </div>
</div>