<?php
/*
 * View/FullCalendar/index.ctp
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
//echo $this->Html->script(array('/full_calendar/js/jquery-1.5.min', '/full_calendar/js/jquery-ui-1.8.9.custom.min', '/full_calendar/js/fullcalendar.min', '/full_calendar/js/jquery.qtip-1.0.0-rc3.min', '/full_calendar/js/ready'), array('inline' => 'false'));

?>

<script type="text/javascript">
    plgFcRoot = '<?php echo $this->Html->url('/'); ?>' + "Events";

</script>

<div class="actions">
    <ul>
        <li><?php echo $this->Html->link(__('Daftar pemesanan yang sudah pasti', true), array('controller' => 'events', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Lihat Pemesanan', true), array('controller' => 'events', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Manage pemesanan', true), array('controller' => 'events', 'action' => 'index'));?></li>

    </ul>
</div>
<div class="Calendar index">
    <div id="calendar"></div>
</div>
