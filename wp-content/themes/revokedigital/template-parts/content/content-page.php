<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Revoke Digital 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Page Header -->
	<div class="relative bg-heroBg overflow-hidden">
		<div class="relative z-[2]">
			<div class="container">
			<div class="py-[50px] relative text-left mx-auto w-full lg:w-[80%] lg:text-center lg:py-[60px] xl:w-[70%] xl:py-[80px] 2xl:w-[60%]">
				<div>
					<h2 class="text-[2rem] font-nexaBold text-white capitalize leading-10 mb-1 xl:text-[42px] lg:text-[32px] md:text-[36px]"><?= get_the_title(); ?></h2>
					<p class="text-white">No matter what stage you're at in your career, Revoke's got your back.Prepare Your MusicGet ReadyPromote Your Music</p>
				</div>
			</div>
		</div>
		</div>
		<div class="bannerbg absolute top-0 left-0 right-0 w-full h-full after:opacity-60 after:content-[''] after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:bg-primary after:w-full after:h-full">
            <div class="banner-img h-full overflow-hidden">
                <img src="<?php bloginfo('template_directory'); ?>/images/page-banner.jpg?asds" alt="" class="w-full h-full object-cover" />
            </div>
        </div>
	</div>

	<div>
		<div class="container">
			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before'   => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
						'after'    => '</nav>',
						/* translators: %: Page number. */
						'pagelink' => esc_html__('Page %', 'twentytwentyone'),
					)
				);
				?>
			</div><!-- .entry-content -->

			<?php if (get_edit_post_link()) : ?>
				<footer class="entry-footer default-max-width">
					<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Post title. Only visible to screen readers. */
							esc_html__('Edit %s', 'twentytwentyone'),
							'<span class="screen-reader-text">' . get_the_title() . '</span>'
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->