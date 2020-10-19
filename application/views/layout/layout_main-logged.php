<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/custom/css/custom.css'); ?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <!-- flexdatalist -->
        <link href="<?php echo base_url('assets/flexdatalist/css/jquery.flexdatalist.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url('assets/flexdatalist/js/jquery.flexdatalist.min.js'); ?>" type="text/javascript"></script>
    </head>
    <body class="sek-barva">
        <div id="main-div">
            <div id="menu">
                <?php $this->load->view('menu/menu-logged'); ?>
            </div>
            <div class="container" id="content">
                <?php echo $content; ?>
            </div>
        </div>
    </body>
</html>