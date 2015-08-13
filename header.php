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
	<header>
		<div class="row">
			<div id="logo" class="col-md-7"><a href="<?php get_home_url(); ?>"><img src="http://meridiancoin.com/wp-content/themes/Meridian2/images/logo.png" /></a></div>
			
			<div class="col-md-3 login-cart">
				<span class="glyph-icons"><img src="http://meridiancoin.com/wp-content/themes/Meridian2/images/keyhole-glyph.png"><a href="<?php echo wp_login_url(); ?>" title="Login">LOGIN</a></span>
				<span class="glyph-icons"><img src="http://meridiancoin.com/wp-content/themes/Meridian2/images/cart-glyph.png"><a>CART</a></span>
			</div>	
			
			<div class="col-md-2">
				<form id="searchform" method="get" action="search.php">
				<input class="search" value="Search Meridian Coin" name="s" id="s" onfocus="if (this.value == 'Search Meridian Coin') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search Meridian Coin';}" type="text">
				</form>
			</div>
			
			<div class="col-md-2">
				
			</div>
			
		</div>

		<div class="row">
			<div class="col-md-11">
			
				<?php wp_nav_menu( array('menu' => 'Menu2' )); ?>
			
			</div>
			
			<div class="col-md-1">

				<button type="button" class="btn btn-default sellyourcoins-btn">Sell your coins</button>
			
			</div>
			
		</div>
	</header>
</div>