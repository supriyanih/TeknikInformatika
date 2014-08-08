<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>CI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/datepicker.css'); ?>">
        <script src="<?php echo base_url('assets/js/jquery.js'); ?>" ></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.27/jquery.form-validator.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    </head>

    <body>
        <!-- Content -->
        <!-- Header -->

        <!-- End Header -->

        <!-- Sidebar -->
        <!-- End Sidebar -->

        <!-- Content -->
        <div class="container">
            <?php echo validation_errors('<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>', '</div>'); ?>
            <?php
            if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-dismissable alert-success"><button type="button" class="close" data-dismiss="alert">×</button>' . $this->session->flashdata('message') . '</div>';
            }
            if ($this->session->flashdata('error')) {
                echo '<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>' . $this->session->flashdata('message') . '</div>';
            }
            ?>
            <?php $this->load->view('users/login'); ?>
        </div>
        <!-- End Content -->

        <!-- Footer -->
        <?php // $this->load->view('components/footer'); ?>
        <!-- End Footer -->
    </body>

</html>