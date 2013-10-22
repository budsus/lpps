<?php
// simpan di app/views/elements/navigasi.ctp
//
// cek nama controller apakah main
$nmcontroller = $this->params['controller'];
$bookactive = "";
$facilityactive = "";
$activityactive = "";
if ($nmcontroller == 'books' || $nmcontroller == 'Books' ||$nmcontroller == 'Buys' ||$nmcontroller == 'buys'|| $nmcontroller == 'Bulletins' || $nmcontroller == 'Materials'|| $nmcontroller == 'bulletins' ) {
    $bookactive = 1;
    $facilityactive = 0;
    $activityactive=0;
} else if ($nmcontroller == 'Facilities') {
    $facilityactive = 1;
    $bookactive = 0;
    $activityactive=0;
} else if ($nmcontroller == 'Activities') {
    $activityactive = 1;
    $facilityactive = 0;
    $bookactive = 0;
}
?>

<?php
// lokasi: app/views/layouts/utama.ctp
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $judul;?></title>

    <?php echo $this->Html->css(
        array('foundation.min.css','general_foundicons.css',
            'foundation.css'));
    echo $this->Html->css('/css/fullcalendar');
    ?>

    <?php echo $this->Html->script(array(
        'foundation.min.js',
        'jquery-1.5.min.js', '/full_calendar/js/jquery-ui-1.8.9.custom.min', '/full_calendar/js/fullcalendar.min', '/full_calendar/js/jquery.qtip-1.0.0-rc3.min', 'ready',

    ), array('inline' => 'false'));


    ?>




    <style>



        #EventStartMonth, #EventStartDay, #EventStartYear,#EventStartHour,#EventStartMin,#EventStartMeridian{
            width: 15%;
        }

        #EventEndMonth, #EventEndDay, #EventEndYear,#EventEndHour,#EventEndMin,#EventEndMeridian{
            width: 15%;
        }


    </style>
</head>


<body>

<?php echo $this->element('navigasi'); ?>

<?php
if($bookactive==1)
    echo $this->element('sidebarBooks');
else if($activityactive==1)
    echo $this->element('sidebarActivities');
else
    echo $this->element('sidebarFacilities');

?>

<?php echo $this->element('footer'); ?>
<script>
    document.write('<script src=/js/vendor/'
        + ('__proto__' in {} ? 'zepto' : 'jquery')
        + '.js><\/script>');
</script>
<script>
    $(document).foundation();
</script>
</body>
</html>