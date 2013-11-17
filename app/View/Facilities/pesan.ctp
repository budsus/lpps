
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
        echo $this->Form->input('Facility.nama',
            array('type' =>'text','readonly'=>'readonly',
                'value' => $data['Facility']['nama'],'label'=>'Nama Fasilitas'));
        echo $this->Form->input('Facility.id',
            array('type' =>'hidden','readonly'=>'readonly',
                'value' => $data['Facility']['id'],'label'=>'Nama Fasilitas'));
        echo $this->Form->input('fasilitas_id',
            array('type' =>'hidden', 'value' => $data['Facility']['id'], 'readonly'=> 'readonly','label'=>'Judul'));
        echo $this->Form->input('nama_acara',array('label'=>'Nama acara'));
        echo $this->Form->input('Client.nama_depan',array('label'=>'Nama depan pemesan'));
        echo $this->Form->input('Client.nama_belakang',array('label'=>'Nama belakang pemesan'));
        echo $this->Form->input('Client.email');
        echo $this->Form->input('Client.telepon');
        echo $this->Form->input('allday',array('type'=>'hidden','label'=>'sepanjang hari','value'=>'0'));
        echo $this->Form->input('details',array('label'=>'detail acara'));

        echo $this->Form->input('start',array( 'label' => 'Waktu Mulai'
        , 'dateFormat' => 'DMY h:i:s'));
        echo $this->Form->input('end',array( 'label' => 'Waktu Berakhir'
        , 'dateFormat' => 'DMY h:i:s'));
        echo $this->Form->input('status', array('type' => 'hidden','value'=>'Belum Verifikasi'
        )
        );
    //pr($this->Captcha);
        //echo $this->Captcha->render();
        //echo $this->Form->input('captcha');

        echo $this->Html->image($this->Html->url(array('controller'=>'Facilities', 'action'=>'captcha'), true),array('style'=>'','vspace'=>2));
        echo '<br>Ketik kode diatas';
        echo $this->Form->input('Event.captcha',array('autocomplete'=>'off','label'=>false,'class'=>''));
        echo $this->Form->end(__('Submit', true));

        ?>
    </fieldset>

</div>
    </div>
</div>