<?php
// lokasi: app/views/layouts/utama.ctp
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $judul;?></title>
    <?php echo $this->Html->css(
        array('foundation.min.css','general_foundicons.css',
            'foundation.css')); ?>
    <?php echo $this->Html->script(array(
        'jquery-1.10.2.min.js',
        'foundation.min.js',

        'custom.modernizr.js'
    )); ?>
    <style>
        body {
            padding-top: 0px;
        }
        footer {

            bottom: 0;
        }
    </style>
</head>


<body>

<?php echo $this->element('navigasiuser'); ?>
<?php echo $this->element('sidebaruser'); ?>
<?php echo $this->element('footeruser'); ?>
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