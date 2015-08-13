<html style="margin-top:0 !important;">
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>

<div class="container">
	<div class="row" style="height:75px;">
		<div class="col-md-10">Logo</div>
		<div class="col-md-1">login cart</div>
		<div class="col-md-1">Search</div>
	</div>

	<div class="row">
		<div class="col-md-12"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>

	</div>
</div>
