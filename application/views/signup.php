<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create New Account</title>
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
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>/assets/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">ICTTE 2018</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>index.php/auth/login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <section class="bg-dark text-white">

    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto ">
    <h1>Register New</h1>
    <form role="search"  class="form-horizontal form-label-left" method="POST" action="<?php echo base_url() ?>index.php/auth/input">
    <input type="hidden" name="form_id" value="">
    <div>
    <span class="form_separator_label">Personal Information</span>
    </div>
    <table>
    <tr>
        <td><span class="form_label">First Name *</span>&nbsp;
    </td>
        <td><input type="text" name="form_firstname" value="" size="50" maxlength="255" required=""></td>
    </tr>
        <tr>
        <td><span class="form_label">Middle Name</span>&nbsp;
    </td>
        <td><input type="text" name="form_midname" value="" size="50" maxlength="255"></td>
    </tr>
    <tr>
        <td><span class="form_label">Last Name / Family Name *</span>&nbsp;</td>
        <td><input type="text" name="form_name" value="" size="50" maxlength="255"></td>
    </tr>
    <tr>
        <td><span class="form_label">Email *</span>&nbsp;</td>
        <td><input type="text" name="email" value="" size="50" maxlength="255"></td>
    </tr>
    <tr>
    <td><span class="form_label">Organization / Company *</span></td>
    <td><input type="text" name="form_organisation" value="" size="50" maxlength="255" required=""></td>
    </tr>
    <tr>
    <td><span class="form_label">Department *</span></td>
    <td><input type="text" name="form_department" value="" size="50" maxlength="255" required=""></td>
    </tr>

    <tr>
    <td>
    <span class="form_label">Title *</span>&nbsp;
    </td><td>
    <input type="radio" class="checkboxradio" id="1" name="form_gender" value="Mr">&nbsp;<label for="form_gender_1"><span class="form_radio">Mr.</span></label><br>
    <input type="radio" class="checkboxradio" id="2" name="form_gender" value="Ms">&nbsp;<label for="form_gender_2"><span class="form_radio">Ms.</span></label><br>
    <input type="radio" class="checkboxradio" id="3" name="form_gender" value="Dr.">&nbsp;<label for="form_gender_3"><span class="form_radio">Dr.</span></label><br>
    <input type="radio" class="checkboxradio" id="4" name="form_gender" value="Prof">&nbsp;<label for="form_gender_4"><span class="form_radio">Prof.</span></label><br>
    </td></tr>

    <tr>
        <td><span class="form_label">Full Academic Title / Professional Position</span>&nbsp;</td>
        <td><input type="text" name="form_title" value="" size="20" maxlength="255" required=""></td>
    </tr> 

    <tr>
        <td><span class="form_label">Address Line 1 *</span>&nbsp;</td>
        <td><input type="text" name="form_addr1" value="" size="50" maxlength="255" required=""></td>
    </tr>
    <tr>
        <td><span class="form_label">Address Line 2</span>&nbsp;</td>
        <td><input type="text" name="form_addr2" value="" size="50" maxlength="255"></td>
    </tr>
    <tr>
        <td><span class="form_label">Postcode / ZIP Code *</span>&nbsp;</td> 
        <td><input type="text" name="postcode" value="" size="10" maxlength="10" required=""></td>
    </tr>
    <tr>
        <td><span class="form_label">City *</span>&nbsp;</td>
        <td><input type="text" name="form_city" value="" size="50" maxlength="255" required=""></td>
    </tr>
    <tr>
        <td><span class="form_label">Province *</span>&nbsp;</td>
        <td><input type="text" name="form_province" value="" size="50" maxlength="255 required="""></td>
    </tr>
    <tr>
        <td><span class="form_label">Country *</span>&nbsp;</td>
        <td><select name="form_country" size="1">
        <option value="-">Country </option>
        <option value="-">----------------------------------------- </option>
        <?php foreach ($country as $row) { ?>
                        <option value="<?php echo $row->nicename;?>"><?php echo $row->nicename; ?></option>
                        <?php }?>
            </select>
    </select></td>
    </tr>
    <tr>
        <td><span class="form_label">Mobile Phone*</span>&nbsp;</td>
        <td><select name="phone_code" size="1"  required="">
            <option value="-">Phone code </option>
            <option value="-">-----------</option>
    	    <?php foreach ($country as $row) { ?>
                        <option value="<?php echo $row->phonecode;?>">(<?php echo $row->iso; ?>)+<?php echo $row->phonecode; ?></option>
                        <?php }?>
    	    </select>
        	<input type="text" name="form_phone">*omit 0(zero) from your first digit mobile phone
        </td>
    </tr>
    <tr>    
        <td><span class="form_label">Fax</span>&nbsp;</td>
        <td><input type="text" name="form_fax"  size="50" maxlength="255" ></td>
    </tr>
    <tr>
        <td><span class="form_label">Homepage URL</span>&nbsp;</td>
        <td><input type="text" name="form_url" value="" size="50" maxlength="255"></td>
    </tr>
    <tr>
        <td><span class="form_label">User Comments</span>&nbsp;</td>
        <td><textarea name="Comments" cols="70" rows="6"></textarea></td>
    </tr>

    <tr>
        <td><span class="form_label">User name *</span>&nbsp;</td>
        <td><input type="text" name="form_username" value="" size="40" maxlength="255" required=""></td>
    </tr>
    <tr>
        <td><span class="form_label">Password *</span>&nbsp;</td>
        <td><input type="password" name="pass" required=""></td>
    </tr>
    <tr>
        <td><span class="form_label">Re-Password *</span>&nbsp;</td>
        <td><input type="password" name="repass" required="" ></td>
    </tr>
    <tr>
        <td></td>
        <input type="hidden" name="rule"  value="1">
        <input type="hidden" name="status_pay"  value="1">
        <input type="hidden" name="status"  value="1">
        <td><input class="button" type="submit" name="add" value="Create User Account" style="width: 350px"></td>
    </tr>
    </table>
    </form>
    </section>
    </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
         
          </div>
          <div class="col-lg-4 mr-auto text-center">
           
            </p>
          </div>
        </div>
      </div>
    </section>


</body>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>/assets/js/creative.min.js"></script>

  </body>

</html>
