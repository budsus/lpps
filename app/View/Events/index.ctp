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
echo $this->Session->flash();
?>
<div class="events index">

	<h3>Daftar Acara</h3>
    <a href="<?php echo $this->Html->url(array('controller'=>'Events','action'=>'pesan')); ?>">
        <button class="btn btn-primary" type="button">Pesan Fasilitas</button>
    </a>
    <div class="actions">
        <ul class="large icon-grid">

            <li><a href="/lppsBackup/FullCalendar" class="foundicon-calendar"></a></li>
        </ul>
    </div>
	<table cellpadding="0" cellspacing="0">

	<tr>
			<th><?php echo $this->Paginator->sort('fasilitas_id');?></th>
			<th><?php echo $this->Paginator->sort('nama acara');?></th>
        <th><?php echo $this->Paginator->sort('nama pemesan');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('start');?></th>
            <th><?php echo $this->Paginator->sort('end');?></th>
        <th><?php echo $this->Paginator->sort('terbayar');?></th>
			<th class="actions">Action</th>
	</tr>
	<?php
	$i = 0;
	foreach ($events as $event):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>

			<?php  echo $event['Facility']['nama']; ?>
		</td>
		<td><?php echo $event['Event']['nama_acara']; ?></td>
        <td><?php echo $event['Client']['nama_depan']; ?> <?php echo $event['Client']['nama_belakang']; ?></td>
		<td><?php echo $event['Event']['status']; ?></td>

		<td><?php
            echo $this->Time->format('j F, Y h:i A', $event['Event']['start'], null);
           // echo $event['Event']['start'];

            ?></td>
        <?php if($event['Event']['all_day'] == 0) { ?>
   		<td><?php echo $this->Time->format('j F, Y h:i A', $event['Event']['end'], null); ?></td>
            <td><?php echo $event['Event']['terbayar']; ?></td>
        <?php }  ?>

		<td class="actions">

			<?php echo $this->Html->link(__('Hapus', true), array('action' => 'delete', $event['Event']['id'],$event['Event']['id']), null, sprintf(__('Yakin mau hapus acara '.$event['Event']['nama_acara'].'?', true))); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $event['Event']['id'])); ?>
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




