<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body>

<?php
do_action( 'actionTest' );
?>

<header id="header">

    <nav id="nav" role="navigation">
        <a href="<?php bloginfo( 'url' ); ?>"><i class="material-icons">menu</i></a>
		<?php
		wp_nav_menu( [ 'theme_location' => 'header-menu' ] );
		?>
    </nav>

    <h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
</header><!-- #header -->
