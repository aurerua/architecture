<!DOCTYPE html>
<html lang="de">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Supposedly required here for bootstrap <meta name="viewport" content="width=device-width, initial-scale=1"> -->

  <title>
    <?php echo $site->title()->html() ?> |
    <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">


  <meta name="HandheldFriendly" content="True" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato" />

  <!-- Bootstrap -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php echo css( 'assets/css/bootstrap.min.css') ?>
  <?php echo css( 'assets/css/main.css') ?>
</head>

<body class="nav-closed">

  <div class="main-header" style="background-image: url(<?php echo url('content/cover.png') ?>)"></div>
  