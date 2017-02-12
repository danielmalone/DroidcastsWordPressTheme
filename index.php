<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/main.css"/>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #header {
            text-align: center;
            color: #ffffff;
            margin: 0;
            background-color: #00a0d2;
        }

        #header h1 {
            margin: 0;
            padding: 12px;
        }

        #header ul {
            list-style-type: none;
        }

        #header a {
            text-decoration: none;
            color: #ffffff;
        }
    </style>
</head>
<body>

<header id="header">
    <h1><?php bloginfo( 'name' ); ?></h1>
	<?php
	wp_nav_menu( [ 'theme_location' => 'header-menu' ] );
	?>
</header><!-- #header -->

<main>
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) :
			the_post();
			the_content();
			echo 'post 1<br>';
		endwhile;
	}
	?>
</main>

</body>
</html>