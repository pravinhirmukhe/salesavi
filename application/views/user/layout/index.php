<!DOCTYPE HTML>
<html>
    <?php $this->load->view('user/layout/head'); ?>
    <body>
        <?php $this->load->view('user/layout/header'); ?>
        <?php $this->load->view('user/layout/main_view', $data); ?>
        <?php $this->load->view('user/layout/footer'); ?>
        <?php // $this->load->view('user/layout/js'); ?>
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </body>
</html>
