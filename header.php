<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	<title><?php bloginfo();?></title>

	<?php wp_head();?>

</head>

<body>



<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="logo-mob">
				<a href=""><h1>IKBN</h1></a>
			</div>

		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<?php
			wp_nav_menu( array(
				'theme_location'  => '',
				'menu'            => 'navbar navbar-default',
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'main-menu',
				'menu_class'      => 'nav navbar-nav',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			) );
			?>
			<div class="right-nav">
				<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="navbar-form">
					<div class="form-group">
						<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Find...">
					</div>
				</form>
				<ul class="socian-header">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>

		</div>
	</div>
</nav>