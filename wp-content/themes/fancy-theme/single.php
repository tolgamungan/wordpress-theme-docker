
<?php get_header(); ?>
		<div class="col-lg-5  order-2 order-lg-1 pt-4">
			<?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'inc/content-single', get_post_format() );
                endwhile; endif;
			?>

        <div id="comments">
          <hr>
          <h2>Comments</h2>
        </div>

		</div>
<?php get_footer(); ?>