<?php /* Template Name: Everett Home */ ?>

<?php get_header(); ?>

	<main class="spine-sideright-template">

		<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

			<?php get_template_part('parts/headers'); ?>
			<section class="row single gutter marginalize-ends">

				<div class="column one">
					<div class="fill-width"><div class="main_header_graphic">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'header-image' );
							}
							?>
					</div></div>
				</div><!--/column-->

			</section>
			<section class="row side-right gutter marginalize-ends">

				<div class="column one">

					<?php get_template_part('articles/article'); ?>

				</div><!--/column-->

				<div class="column two">

					<?php
					$column = get_post_meta( get_the_ID(), 'column-two', true );
					if( ! empty( $column ) ) { echo $column; }
					?>

				</div>

			</section>
		<?php endwhile; endif; ?>
	</main>

<?php get_footer(); ?>
