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
            <form method="POST" action="<?php echo base_url() ?>index.php/auth/login" >
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" id="username" name="user"  />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required=""  id="password" name="pass"/>
              </div>
              <div>
                
                <input type="submit" name="login" value="Login" class="btn btn-default submit" />
                <a class="reset_pass" href="<?php echo base_url() ?>index.php/ForgetPass">Forget your password?</a>
              </div>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                 <a href="<?php echo base_url(); ?>index.php/auth/input" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class=""></i> </h1>
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
