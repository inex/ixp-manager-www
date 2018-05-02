<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IXP Manager">
    <meta name="author" content="INEX - Ireland's IXP">
    <link rel="shortcut icon" href="favicon.ico">

    <title>IXP Manager</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php if( isset( $additionalHeader ) ) { echo $additionalHeader; } ?>

  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li <?php if( !isset( $active ) ) { ?>class="active"<?php } ?>><a href="/">Home</a></li>

          <li class="dropdown <?php if( isset( $active ) && $active == 'sponsors' ) { ?>active<?php } ?>">
              <a href="sponsors.php">Sponsors</a>
          </li>

          <li class="dropdown <?php if( isset( $active ) && $active == 'users' ) { ?>active<?php } ?>">
              <a href="users.php">Users</a>
          </li>

          <li class="dropdown <?php if( isset( $active ) && $active == 'support' ) { ?>active<?php } ?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Support <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                  <li> <a href="/support.php">Getting Help</a> </li>
                  <li> <a href="/presentations.php">Presentations &amp; Talks</a> </li>
                  <li> <a href="/commercial.php">Commercial Support</a> </li>
                  <li role="separator" class="divider"></li>
                  <li> <a href="https://github.com/inex/IXP-Manager/wiki" target="_blank">V3 Documentation &raquo;</a> </li>
                  <li> <a href="https://docs.ixpmanager.org/" target="_blank">V4 Documentation &raquo;</a> </li>
              </ul>
          </li>

          <li class="dropdown <?php if( isset( $active ) && $active == 'development' ) { ?>active<?php } ?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Development <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                  <li> <a href="https://github.com/inex/IXP-Manager" target="_blank">GitHub Repository &raquo;</a> </li>
                  <li> <a href="https://github.com/inex/IXP-Manager/issues" target="_blank">Bug / Feature Tracking &raquo;</a> </li>
                  <li> <a href="https://github.com/inex/IXP-Manager/releases" target="_blank">Releases &raquo;</a> </li>
              </ul>
          </li>
        </ul>
        <h3 class="text-muted">IXP Manager</h3>
      </div>
