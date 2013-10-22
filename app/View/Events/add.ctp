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
<?php /* echo $this->Form->create('Event');?>
	<fieldset>
        <h3>Tambah Pemesanan</h3>
 		<legend><?php __('Add Event'); ?></legend>
	<?php
    echo $this->Form->input('fasilitas_id');
    echo $this->Form->input('nama_acara',array('label'=>'nama acara'));
    echo $this->Form->input('Client.nama_depan',array('label'=>'Nama depan pemesan'));
    echo $this->Form->input('Client.nama_belakang',array('label'=>'Nama belakang pemesan'));
    echo $this->Form->input('Client.email');
    echo $this->Form->input('Client.telepon');
    echo $this->Form->input('allday',array('type'=>'hidden','label'=>'sepanjang hari','value'=>'0'));
    echo $this->Form->input('details',array('label'=>'detail acara'));

    echo $this->Form->input('start',array('label'=>'Waktu Mulai'));
    echo $this->Form->input('end',array('label'=>'Waktu Berakhir'));
    echo $this->Form->input('status', array('options' => array(
            'Masih pesan' => 'Masih pesan','Lunas' => 'Lunas','Uang muka' => 'Uang muka',
        )
        )
    );

    echo $this->Form->end(__('Submit', true));
*/
	?>
	</fieldset>
    <?php
    /*
     * View/Events/index.ctp
     * CakePHP Full Calendar Plugin
     *
     * Copyright (c) 2010 Silas Montgomery
     * http://silasmontgomery.com
     *
     * Licensed under MIT
     * http://www.opensource.org/licenses/mit-license.php
     */
    ?>

            <?php
            $i = 0;
            if($events==NULL){
                echo "Tidak ada yang pesan";
            }
            else{

?>
                <h3>Daftar Calon acara pemesan yang belum dipastikan</h3>
    <div class="events index">
        <h2><?php __('Events');?></h2>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo $this->Paginator->sort('fasilitas_id');?></th>
                <th><?php echo $this->Paginator->sort('nama pemesan');?></th>

                <th><?php echo $this->Paginator->sort('title');?></th>
                <th><?php echo $this->Paginator->sort('status');?></th>
                <th><?php echo $this->Paginator->sort('start');?></th>
                <th><?php echo $this->Paginator->sort('end');?></th>

                <th class="actions"></th>
            </tr>
                <?php

            foreach ($events as $event):
                pr($event);
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
                <tr<?php echo $class;?>>
                    <td>

                        <?php  echo $event['Facility']['nama']; ?>
                    </td>
                    <td><?php echo $event['Booker']['nama_depan'].' '.$event['Booker']['nama_belakang']; ?></td>
                    <td><?php echo $event['Tempevent']['nama_acara']; ?></td>
                    <td><?php echo $event['Tempevent']['status']; ?></td>
                    <td><?php echo $event['Tempevent']['start']; ?></td>
                    <?php if($event['Tempevent']['all_day'] == 0) { ?>
                        <td><?php echo $event['Tempevent']['end']; ?></td>
                    <?php }  ?>

                    <td class="actions">

                        <?php echo $this->Html->link(__('Edit', true), array('action' => 'editTemp', $event['Tempevent']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="paging">
            <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
            | 	<?php echo $this->Paginator->numbers();?>
            |
            <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
        </div>
    </div>
    <?php } ?>

</div>
<div class="actions">
	<ul>

		<li><?php echo $this->Html->link(__('Lihat Calendar', true), array( 'controller' => 'FullCalendar')); ?></li>
	</ul>
</div>


