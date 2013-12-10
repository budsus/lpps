<!DOCTYPE html>
<html prefix="dc: http://purl.org/dc/terms/
  doap: http://usefulinc.com/ns/doap#
  "
      lang="en">
<head >
    <meta charset="utf-8">
    <title><?php echo $judul;?></title>
    <meta name="description" property="doap:shortdesc"
          content="The Resource Description Framework in Attributes">
    <meta name="author"
          content="The RDF Web Apps Working Group at W3C">
    <link rel="doap:homepage" href="http://rdfa.info/">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
    .row{

    }



</style>
<body >
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