<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taste & Naked</title>

  <!-- Stylesheets -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- jQuery UI -->
  <link rel="stylesheet" href="<?=base_url()?>assets/backend/style/jquery-ui.css"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="<?=base_url()?>assets/backend/style/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="<?=base_url()?>assets/backend/style/prettyPhoto.css">   
  <!-- Star rating -->
  <link rel="stylesheet" href="<?=base_url()?>assets/backend/style/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/backend/style/bootstrap-datetimepicker.min.css">

  <!-- CLEditor -->
  <link rel="stylesheet" href="<?=base_url()?>assets/backend/style/jquery.cleditor.css"> 
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="<?=base_url()?>assets/backend/style/bootstrap-switch.css">
  <!-- Horizontal scroll -->
  <link href="<?=base_url()?>assets/backend/style/jquery.horizontal.scroll.css" rel="stylesheet">
  <!-- Main stylesheet -->
  <link href="<?=base_url()?>assets/backend/style/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="<?=base_url()?>assets/backend/style/widgets.css" rel="stylesheet">
  <!-- Slim slidebar stylesheet -->
  <link href="<?=base_url()?>assets/backend/style/slim_style.css" rel="stylesheet">

<!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.ico">

  <!-- JS -->

  <script src="<?=base_url()?>assets/backend/js/accounting.js"></script> <!-- jQuery -->
  <script src="<?=base_url()?>assets/backend/js/jquery.js"></script> <!-- jQuery -->
  <script src="<?=base_url()?>assets/backend/js/bootstrap.js"></script> <!-- Bootstrap -->
  <script src="<?=base_url()?>assets/backend/js/tastenaked.js"></script> <!-- Custom codes -->

  <!-- TinyMCE -->
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      height: 500,
      menubar: false,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code'
      ],
      toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      content_css: '//www.tinymce.com/css/codepen.min.css'
    });
  </script>
  <!-- /TinyMCE -->

</head>

<body>

  <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">

    <div class="containerk">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?=base_url()?>DASH" class="logo-mn"><h3 style="color:white">Taste & Naked</h3></a>
      </div>
      <!-- Site name for smallar screens -->


      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse nav-mn" role="navigation">



        <!-- Notifications -->
        <ul class="nav navbar-nav navbar-right">

          <!-- Profile Links -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-user-secret"></i>
              <span class="username">Admin</span>
              <b class="caret"></b>
            </a>

            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="<?=base_url()?>CONTROL/logout"><i class="fa fa-lock"></i> Logout</a></li>
            </ul>

          </li>

        </ul>

    </nav>

  </div>

</div>
