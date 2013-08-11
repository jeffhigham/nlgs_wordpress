<?php

/*
 * Template Name: Full Page Template
 */

get_header(); ?>
<!-- Begin Page -->
<div class="row">
    <!-- Main Content -->
    <div class="large-9 large-centered columns radius panel" style="background-color: #fff">

    	<!-- Embeded Posts -->
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<!-- End Posts -->

		<?php show_edit_link(); ?>
    </div>
</div>
<!-- End Page -->

<?php get_footer(); ?>