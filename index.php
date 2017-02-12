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
            margin: 0 0 32px 0;
            background-color: #6AB344;
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

        #content {
            margin: 0 auto;
            text-align: center;
            max-width: 1200px;
        }

        .box {
            float: left;
            width: 300px;
            text-align: left;
            -webkit-box-shadow: 0 0 3px 0 rgba(0, 0, 0, 1);
            box-shadow: 0 0 3px 0 rgba(0, 0, 0, 1);
        }

        .box h3 {
            background-color: #6AB344;
            padding: 12px;
            color: #ffffff;
            margin: 0;
        }

        .box-content {
            padding: 12px;
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

<main id="content">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) :
			echo '<div class="box">';
			echo '<h3>';
			the_title();
			echo '</h3>';
			the_post();
			echo '<div class="box-content">';
			the_content();
			echo '</div><!-- .box-content -->';
			echo '</div><!-- .box -->';
		endwhile;
	}
	?>
</main><!-- #content -->

</body>
</html>