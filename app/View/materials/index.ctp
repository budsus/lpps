<?php echo $this->Session->flash();?>
<h6>Daftar Material</h6>
<p>&nbsp;</p>
<?php if($this->Session->check('user')){?>
<h5><button class='button secondary'><a href="<?php echo $this->Html->url(
            array('controller'=>'materials',
                'action' => 'tambah')); ?>">Tambah Materi Pembinaan</a></h5>
<?php }?>

<p>&nbsp;</p>
<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'lihatadvennatal')); ?>">
						Lihat Daftar Pembinaan Masa Adven-Natal</a></td><br><br>
<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'lihatpentakosta')); ?>">
						Lihat Daftar Pembinaan Masa Pentakosta</a></td><br><br>
<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'lihatpaskah')); ?>">
						Lihat Daftar Pembinaan Masa Paskah</a></td><br><br>
<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'lihatbulankeluarga')); ?>">
						Lihat Daftar Pembinaan Masa Bulan Keluarga</a></td>

