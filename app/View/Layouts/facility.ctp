<!DOCTYPE html>
<html>
<head>
    <title><?php echo $judul;?></title>
<?php echo $this->Html->css(
    array('foundation.min.css','general_foundicons.css',
        'foundation.css'));?>
    <?php echo $this->Html->script(array(
        'jquery-1.10.2.min.js',
        'foundation.min.js',
       '/js/fullcalendar.min', '/js/jquery.qtip-1.0.0-rc3.min', '/js/ready',
        'custom.modernizr.js'
    ));


    ?>
</head>
<style>

    .profpic{
        width: 400px;
        height: 300px;
    }

   .gambardepan{
       width: 300px;
       height: 200px;
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




</style>
<body>
<?php echo $this->element('navigasiUser'); ?>
<?php echo $this->Session->flash();  ?>
<div class="row"><?php echo $content_for_layout; ?></div>

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