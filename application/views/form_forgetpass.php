<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | ICCTE </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/assets/user/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>/assets/user/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>/assets/user/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>/assets/user/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>/assets/user/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="forget"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
           <form method="POST" action="<?php echo base_url() ?>index.php/ForgetPass">
              <h1>Forget Password</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="user" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Email" required="" name="email" />
              </div>
              <div>
                <input type="submit" name="submit" value="Submit" class="btn btn-default submit" />
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already remember your password ?
                  <a href="<?php echo base_url() ?>index.php/auth/login" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2018 All Rights Reserved. THE4 ICCTE FKIP UNS.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
