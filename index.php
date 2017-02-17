<?php
get_header();
?>

    <main id="content" role="main">
<?php
if ( have_posts() ) {
	while ( have_posts() ) :
		?>
        <div class="box">
            <h3><a href="<?php the_permalink(); ?>">
                    <div class="box-icon"><i
                                class="material-icons">play_circle_filled</i></div><?php the_title(); ?></a></h3>

			<?php the_post(); ?>

            <div class="box-content">
                <p class="box-date">
					<?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ago'; ?>
                </p>
				<?php the_content(); ?>
            </div>
        </div><! -- .box -->
		<?php
	endwhile;
}
?>


<?php
get_footer();