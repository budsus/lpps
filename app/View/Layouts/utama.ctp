<?php
// lokasi: app/views/layouts/utama.ctp
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul;?></title>
    <script type="text/javascript">
        plgFcRoot = '<?php echo $this->Html->url('/'); ?>' + "full_calendar";
    </script>

    <?php echo $this->Html->css(
        array('foundation.min.css','general_foundicons.css',
        'foundation.css'));

    ?>
	<?php echo $this->Html->script(array(
        'jquery-1.10.2.min.js',
					  'foundation.min.js',

                    'custom.modernizr.js'
					));


    ?>


    <style>
      body {
        padding-top: 0px;
      }
	  footer {

		bottom: 0;
	  }

       #flashMessage{
           color: red;
           font-size: 14pt;
           font-weight:bold;
       }
    </style>
</head>


<body>

<?php echo $this->element('navigasi'); ?>

<?php echo $this->element('sidebar'); ?>

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