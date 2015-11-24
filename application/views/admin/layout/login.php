<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentallela Alela! | </title>

        <!-- Bootstrap core CSS -->

        <link href="<?= base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?= base_url() ?>assets/admin/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/admin/css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="<?= base_url() ?>assets/admin/css/custom.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/admin/css/icheck/flat/green.css" rel="stylesheet">


        <script src="<?= base_url() ?>assets/admin/js/jquery.min.js"></script>

        <!--[if lt IE 9]>
            <script src="<?= base_url() ?>assets/admin/../assets/js/ie8-responsive-file-warning.js"></script>
            <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="<?= base_url() ?>assets/admin/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="<?= base_url() ?>assets/admin/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>

    <body style="background:#F7F7F7;">

        <div class="">
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>

            <div id="wrapper">
                <div id="login" class="animate form">
                    <section class="login_content">
                        <?php
                        if ($this->session->flashdata('error') != "") {
                            ?>
                            <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                            <?php
                        }
                        ?>
                        <form action="<?= site_url() ?>/admin/Admin_controller/login" method="post">
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" name="username" value="<?= set_value('username') ?>"/>
                                <?= form_error('username', "<label class='alert alert-danger'>", "</label>") ?>
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" name="pass" value="<?= set_value('pass') ?>"/>
                                <?= form_error('pass', "<label class='alert alert-danger'>", "</label>") ?>
                            </div>
                            <div>
                                <input class="btn btn-default submit" type="submit" value="Log In">
                                <a class="reset_pass" href="<?= base_url() ?>assets/admin/#">Lost your password?</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">

<!--                                <p class="change_link">New to site?
                                    <a href="<?= base_url() ?>assets/admin/#toregister" class="to_register"> Create Account </a>
                                </p>-->
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                                    <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                        <!-- form -->
                    </section>
                    <!-- content -->
                </div>
                <!--                <div id="register" class="animate form">
                                    <section class="login_content">
                                        <form>
                                            <h1>Create Account</h1>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Username" required="" />
                                            </div>
                                            <div>
                                                <input type="email" class="form-control" placeholder="Email" required="" />
                                            </div>
                                            <div>
                                                <input type="password" class="form-control" placeholder="Password" required="" />
                                            </div>
                                            <div>
                                                <a class="btn btn-default submit" href="<?= base_url() ?>assets/admin/index.html">Submit</a>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="separator">
                
                                                <p class="change_link">Already a member ?
                                                    <a href="<?= base_url() ?>assets/admin/#tologin" class="to_register"> Log in </a>
                                                </p>
                                                <div class="clearfix"></div>
                                                <br />
                                                <div>
                                                    <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>
                
                                                    <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                                </div>
                                            </div>
                                        </form>
                                         form 
                                    </section>
                                     content 
                                </div>-->
            </div>
        </div>

    </body>

</html>