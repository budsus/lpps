<?php
// simpan di app/views/elements/navigasi.ctp
//
// cek nama controller apakah main
$nmcontroller = $this->params['controller'];
$bookactive = "";
$facilityactive = "";
$profileactive = "";
$activityactive = "";
if ($nmcontroller == 'books' || $nmcontroller == 'Books' ||$nmcontroller == 'Buys' ||$nmcontroller == 'buys'|| $nmcontroller == 'Bulletins' || $nmcontroller == 'Materials'|| $nmcontroller == 'bulletins' ) {
    $bookactive = 1;
    $facilityactive = 0;
    $activityactive=0;
    $profileactive=0;
} else if ($nmcontroller == 'Facilities' ||$nmcontroller == 'facilities' ) {
    $facilityactive = 1;
    $bookactive = 0;
    $activityactive=0;
    $profileactive=0;
} else if ($nmcontroller == 'Activities' || $nmcontroller == 'activities'|| $nmcontroller == 'Participants' || $nmcontroller == 'participants') {
    $activityactive = 1;
    $facilityactive = 0;
    $bookactive = 0;
    $profileactive=0;
}else{
    $profileactive=1;
    $facilityactive = 0;
    $bookactive = 0;
    $activityactive=0;
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
        'jquery-1.10.2.min.js','foundation.min.js',
        '/full_calendar/js/fullcalendar.min', '/full_calendar/js/jquery.qtip-1.0.0-rc3.min', 'ready',

					), array('inline' => 'false'));


    ?>




    <style>
        .large.icon-grid li {
            display: inline-block;
            text-align: center;

            font-size: 2em;
        }

        #ActivityDeadlineMonth, #ActivityDeadlineDay, #ActivityDeadlineYear,#ActivityDeadlineHour,#ActivityDeadlineMin,#ActivityDeadlineMeridian{
            width: 15%;
        }

        #EventStartMonth, #EventStartDay, #EventStartYear,#EventStartHour,#EventStartMin,#EventStartMeridian{
            width: 15%;
        }

      #EventEndMonth, #EventEndDay, #EventEndYear,#EventEndHour,#EventEndMin,#EventEndMeridian{
          width: 15%;
      }
        #TempeventStartMonth, #TempeventStartDay, #TempeventStartYear,#TempeventStartHour,#TempeventStartMin,#TempeventStartMeridian{
            width: 15%;
        }

        #TempeventEndMonth, #TempeventEndDay, #TempeventEndYear,#TempeventEndHour,#TempeventEndMin,#TempeventEndMeridian{
            width: 15%;
        }

        table img{
            width:100px;
            height:100px;
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
else if($facilityactive==1)
    echo $this->element('sidebarFacilities');
else
    echo $this->element('sidebarProfil');

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