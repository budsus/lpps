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
<div class="events index">
	<h2><?php __('Events');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('fasilitas_id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('start');?></th>
            <th><?php echo $this->Paginator->sort('end');?></th>

			<th class="actions"></th>
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

			<?php  echo $this->Html->link($event['Facility']['nama'], array('controller' => 'Facilities', 'action' => 'view', $event['Facility']['id'])); ?>
		</td>
		<td><?php echo $event['Event']['nama_acara']; ?></td>
		<td><?php echo $event['Event']['status']; ?></td>
		<td><?php echo $event['Event']['start']; ?></td>
        <?php if($event['Event']['all_day'] == 0) { ?>
   		<td><?php echo $event['Event']['end']; ?></td>
        <?php }  ?>

		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $event['Event']['id'])); ?>
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
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Tambah Pemesanan', true), array( 'action' => 'add')); ?></li>

		<li><?php echo $this->Html->link(__('Lihat Calendar', true), array('controller' => 'FullCalendar')); ?></li>
	</ul>
</div>
