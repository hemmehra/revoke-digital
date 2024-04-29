<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Revoke Digital 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<!-- Footer -->
<footer>
	<?php
	if (!is_page(26)) :
	?>
		<div class="bg-secBgBG py-6 pl-0 md:py-8 lg:py-12">
			<div class="container">
				<div class="flex overflow-hidden rounded-lg">
					<div class="flex flex-col items-center text-center justify-between gap-4 rounded-lg bg-gray-1 p-4 w-full md:flex-row md:text-left md:px-7">
						<div class="w-full md:w-2/3">
							<h2 class="text-3xl font-bold md:text-3xl">Grow Your <span class="text-secondary">Career</span><br class="lg:hidden"> With Help of Us</h2>
							<p>This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>
						</div>

						<div class="w-full md:w-1/3 md:text-right">
							<a href="<?= get_permalink(26); ?>" class="btn btn-primary">Contact Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	</div>
	<div>
		<div class="container">
			<div class="pb-4 pt-4 sm:pt-10 lg:pt-12">
				<div class="mx-auto max-w-screen-2xl">
					<div class="flex flex-wrap gap-12 pt-10 lg:pt-12 lg:flex-nowrap">
						<div class="w-full lg:w-1/4">
							<!-- logo - start -->
							<div class="mb-4">
								<a href="/" class="inline-flex items-center gap-2 text-xl font-bold md:text-2xl" aria-label="logo">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1095 123" fill="none">
										<path d="M68.5867 37.6931H21.9466L0 -0.000115898H46.6401L47.7333 1.86655L68.5867 37.6931Z" fill="url(#paint0_linear_62_3)" />
										<path d="M67.5468 47.7466L24.0801 122.227L1.78688 82.5201L1.72021 82.4133L21.5202 47.7466H67.5468Z" fill="url(#paint1_linear_62_3)" />
										<path d="M117.734 122.093L82.7605 122.373L82.3871 121.72L59.5605 82.5202L59.1738 81.84L76.7605 51.7202L94.6939 82.5202L99.2939 90.4267L117.734 122.093Z" fill="url(#paint2_linear_62_3)" />
										<path d="M125.747 41.4399V41.4534L125.467 41.9599L104.84 80.1599L58.1602 1.20954e-05H101.787C102.533 1.28001 103.373 2.7734 104.347 4.4534C109.32 13.0667 117.147 26.5999 125.747 41.4399Z" fill="url(#paint3_linear_62_3)" />
										<path d="M196.534 32.9598H171.907V61.6533H196.534C206.214 61.6533 212.041 56.2798 212.041 47.3064C212.041 38.4398 206.214 32.9598 196.534 32.9598ZM188.601 74.1332H172.027V102.013H158.374V20.3598H196.641C214.147 20.3598 225.574 31.0931 225.574 47.3064C225.574 60.8397 217.534 70.52 204.467 73.32L229.307 102.013H212.281L188.601 74.1332Z" fill="#ffffff" />
										<path d="M300.254 20.3598H240.174V32.72H300.254V20.3598Z" fill="url(#paint4_linear_62_3)" />
										<path d="M253.694 89.5332V66.6666H298.267V54.5332H240.174V102.013H300.947V89.5332H253.694Z" fill="#ffffff" />
										<path d="M388.333 20.3598L354.613 102.013H339.92L306.08 20.3598H320.787L334.547 54.3064L347.147 86.1465L373.64 20.3598H388.333Z" fill="#ffffff" />
										<path d="M460.44 61.1867C460.44 43.3334 449 31.2 432.2 31.2C415.294 31.2 403.854 43.3334 403.854 61.1867C403.854 79.0401 415.294 91.1732 432.2 91.1732C449 91.1732 460.44 79.0401 460.44 61.1867ZM390.094 61.1867C390.094 35.7601 407 18.6 432.2 18.6C457.294 18.6 474.2 35.7601 474.2 61.1867C474.2 86.6134 457.294 103.773 432.2 103.773C407 103.773 390.094 86.6134 390.094 61.1867Z" fill="#ffffff" />
										<path d="M536.041 102.013L500.814 65.3866V102.013H487.041V20.3598H500.814V55.2397L533.361 20.3598H551.094L513.761 59.9064L554.587 102.013H536.041Z" fill="#ffffff" />
										<path d="M620.987 20.3598H560.894V32.72H620.987V20.3598Z" fill="url(#paint5_linear_62_3)" />
										<path d="M574.427 89.5332V66.6666H619V54.5332H560.894V102.013H621.68V89.5332H574.427Z" fill="#ffffff" />
										<path d="M722.6 61.1866C722.6 43.3333 710.467 30.9731 693.08 30.9731H674.067V91.3999H693.08C710.587 91.3999 722.6 79.04 722.6 61.1866ZM734.147 61.1866C734.147 85.5733 717.467 102.013 693.08 102.013H662.747V20.3598H693.08C717.467 20.3598 734.147 36.8 734.147 61.1866Z" fill="#ffffff" />
										<path d="M747.694 20.3598H759V102.013H747.694V20.3598Z" fill="#ffffff" />
										<path d="M847.2 56.6398V90.2398C838.107 99.3331 827.6 103.653 814.654 103.653C789.454 103.653 772.654 86.6133 772.654 61.1867C772.654 36.2267 790.147 18.72 815.347 18.72C826.907 18.72 837.52 23.1599 845.454 31.1999L838.107 38.7867C832.267 32.84 823.747 29.4533 815.347 29.4533C796.92 29.4533 784.08 42.4 784.08 61.1867C784.08 80.44 796.214 92.92 814.654 92.92C823.28 92.92 830.28 90.5867 836.587 85.4533V66.9064H812.441V56.6398H847.2Z" fill="#ffffff" />
										<path d="M862.027 20.3598H873.347V102.013H862.027V20.3598Z" fill="#ffffff" />
										<path d="M949.52 30.9731H922.107V102.013H910.907V30.9731H883.494V20.3598H949.52V30.9731Z" fill="#ffffff" />
										<path d="M967.96 73.6666H1004.36L986.16 32.1332L967.96 73.6666ZM1009.03 84.1731H963.294L955.48 102.013H943.107L979.747 20.3598H992.574L1029.21 102.013H1016.84L1009.03 84.1731Z" fill="#ffffff" />
										<path d="M1038.79 20.3598H1050.09V91.3999H1094.2V102.013H1038.79V20.3598Z" fill="#ffffff" />
										<defs>
											<linearGradient id="paint0_linear_62_3" x1="0" y1="18.8532" x2="68.5857" y2="18.8532" gradientUnits="userSpaceOnUse">
												<stop stop-color="#C51605" />
												<stop offset="0.994413" stop-color="#FF9843" />
											</linearGradient>
											<linearGradient id="paint1_linear_62_3" x1="1.72021" y1="84.9866" x2="67.5448" y2="84.9866" gradientUnits="userSpaceOnUse">
												<stop stop-color="#C51605" />
												<stop offset="1" stop-color="#FF9843" />
											</linearGradient>
											<linearGradient id="paint2_linear_62_3" x1="59.1738" y1="87.0401" x2="117.734" y2="87.0401" gradientUnits="userSpaceOnUse">
												<stop stop-color="#FF9843" />
												<stop offset="0.994413" stop-color="#C51605" />
											</linearGradient>
											<linearGradient id="paint3_linear_62_3" x1="58.1602" y1="40.08" x2="125.74" y2="40.08" gradientUnits="userSpaceOnUse">
												<stop stop-color="#FF9843" />
												<stop offset="0.994413" stop-color="#C51605" />
											</linearGradient>
											<linearGradient id="paint4_linear_62_3" x1="240.16" y1="26.5332" x2="300.243" y2="26.5332" gradientUnits="userSpaceOnUse">
												<stop stop-color="#FF9843" />
												<stop offset="0.994413" stop-color="#C51605" />
											</linearGradient>
											<linearGradient id="paint5_linear_62_3" x1="560.894" y1="26.5332" x2="620.976" y2="26.5332" gradientUnits="userSpaceOnUse">
												<stop stop-color="#FF9843" />
												<stop offset="1" stop-color="#C51605" />
											</linearGradient>
										</defs>
									</svg>
								</a>
							</div>
							<!-- logo - end -->

							<p class="text-gray-500 sm:pr-8">Revoke Digital Limited is a company registered in India
								and
								its registered office at Jaipur, Rajasthan.</p>
						</div>

						<!-- nav - start -->
						<div class="w-full text-center lg:text-left  lg:w-3/4">
							<div class="flex flex-wrap">

								<div class="w-full mb-9 md:w-1/2">
									<div class="mb-4 animate-text text-[2rem] font-agoka font-black capitalize leading-[1.4em] mb-2 md:mb-6 xl:text-[36px] lg:text-[28px] md:text-[30px]">Quick Links</div>
									<nav class="justify-between text-[24px] lg:justify-start">
										<div class="w-full">
											<a href="/#music-distribution" class="text-gray-500 transition transition-all duration-300 ease-in hover:text-primary duration-100 hover:text-indigo-500 active:text-indigo-600">Music Distribution</a>
										</div>

										<div class="w-full">
											<a href="/#marketing-promotions" class="text-gray-500 transition-all duration-300 ease-in hover:text-primary transition duration-100 hover:text-indigo-500 active:text-indigo-600">Marketing & Promotions</a>
										</div>

										<div class="w-full">
											<a href="/#yotube-channel" class="text-gray-500 transition transition-all duration-300 ease-in hover:text-primary duration-100 hover:text-indigo-500 active:text-indigo-600">Monetization & Management</a>
										</div>
										<div class="w-full">
											<a href="/#royalties-licenses" class="text-gray-500 transition transition-all duration-300 ease-in hover:text-primary duration-100 hover:text-indigo-500 active:text-indigo-600">Royalty Distribution</a>
										</div>
									</nav>
								</div>

								<div class="w-full mb-9 md:w-1/2">
									<div class="mb-4 animate-text text-[2rem] font-agoka font-black capitalize leading-[1.4em] mb-2 md:mb-6 xl:text-[36px] lg:text-[28px] md:text-[30px]">Company</div>
									<nav class="justify-between text-[24px] lg:justify-start">
										<div class="w-full">
											<a href="<?= get_permalink(3); ?>" class="text-gray-500 transition-all duration-300 ease-in hover:text-primary transition duration-100 hover:text-indigo-500 active:text-indigo-600">Contact
												Us</a>
										</div>
										<div class="w-full">
											<a href="<?= get_permalink(488); ?>" class="text-gray transition-all duration-300 ease-in hover:text-primary transition duration-100 hover:text-indigo-500 active:text-indigo-600">Terms
												of Service</a>
										</div>

										<div class="w-full">
											<a href="<?= get_permalink(3); ?>" class="text-gray-500 transition-all duration-300 ease-in hover:text-primary transition duration-100 hover:text-indigo-500 active:text-indigo-600">Privacy
												Policy</a>
										</div>
									</nav>
								</div>
							</div>

						</div>
						<!-- nav - end -->

					</div>
				</div>
			</div>

			<div class="bg-gray-100">
				<div class="mx-auto max-w-screen-2xl">
					<div class="flex items-center justify-between gap-4 py-8 xl:pr-4">
						<span class="text-sm text-gray-400"> © 2024 - Present Revoke Digital. All rights reserved.
						</span>

						<!-- social - start -->
						<div class="flex gap-4">
							<a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
								<svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
								</svg>
							</a>

							<a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
								<svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
								</svg>
							</a>

							<a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
								<svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
								</svg>
							</a>

							<a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
								<svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
								</svg>
							</a>
						</div>
						<!-- social - end -->
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/js/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/gsap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/ScrollTrigger.js"></script>
<script>
	new WOW().init();
</script>
<script>
	var MainHeadSecInnerDiv = $('#MainHeadSecInner');
	var addScrollActiveClass = $('.addScrollActiveClass');
	$(document).ready(function() {
		setHeaderHeight();
	});
	$(window).resize(function() {
		setHeaderHeight();
	});

	function setHeaderHeight() {
		var MainHeadSecInnerHeight = MainHeadSecInnerDiv.outerHeight();
		$('#MainHeadSec').css({
			'height': (MainHeadSecInnerHeight)
		});
	}

	var MainHeadSecInner =
		$(window).scroll(function() {

			if ($(window).scrollTop() > 200) {
				// MainHeadSecInnerDiv.removeClass('shadow-[none]');
				// MainHeadSecInnerDiv.addClass('active');
				// addScrollActiveClass.addClass('active');
			} else {
				// MainHeadSecInnerDiv.removeClass('active');
				// MainHeadSecInnerDiv.addClass('shadow-[none]');
				// addScrollActiveClass.removeClass('active');
			}

		});

	$('.open-drawer').on('click', function() {
		$('#drawer-left').attr("checked", "true")
		$('.mobile-menu-link').addClass("slide-up-box")
		$('.mobile-menu-link').removeClass("mobile-menu-link-effect")
	});
	$('.mobile-menu-link').on('click', function() {
		$('#drawer-left').removeAttr("checked")
		$('.mobile-menu-link').removeClass("slide-up-box")
		$('.mobile-menu-link').removeClass("mobile-menu-link-effect")
	});
	$('.mobile-menu-remove').on('click', function() {
		$('#drawer-left').removeAttr("checked")
		$('.mobile-menu-link').removeClass("slide-up-box")
		$('.mobile-menu-link').removeClass("mobile-menu-link-effect")
	});
</script>

</body>

</html>