<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('admin/layout/head'); ?>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php $this->load->view('admin/layout/side_menu'); ?>
                <?php $this->load->view('admin/layout/header'); ?>
                <!-- page content -->
                <div class="right_col" role="main">
                    <?php $this->load->view('admin/layout/main_view', $data); ?>

                    <?php $this->load->view('admin/layout/footer'); ?>
                </div>
            </div>
        </div>
        <?php $this->load->view('admin/layout/js'); ?>
    </body>
</html>
