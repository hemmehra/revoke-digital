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
	if(!is_page(26)):
	?>
	<div class="bg-black py-6 pl-0 md:py-8 lg:py-12">
		<div class="container">
			<div class="flex overflow-hidden rounded-lg">
				<div class="flex flex-col items-center text-center justify-between gap-4 rounded-lg bg-gray-1 p-4 w-full md:flex-row md:text-left md:px-7">
					<div class="w-full md:w-2/3">
						<h2 class="text-3xl font-bold md:text-3xl">Grow Your <span class="text-primary">Career</span><br class="lg:hidden"> With Help of Us</h2>
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
			<div class="pb-16 pt-4 sm:pt-10 lg:pt-12">
				<div class="mx-auto max-w-screen-2xl">
					<div class="grid grid-cols-2 gap-12 pt-10 md:grid-cols-4 lg:grid-cols-6 lg:gap-8 lg:pt-12">
						<div class="col-span-full lg:col-span-2">
							<!-- logo - start -->
							<div class="mb-4 lg:-mt-2">
								<a href="/" class="inline-flex items-center gap-2 text-xl font-bold md:text-2xl" aria-label="logo">
									<svg class="w-full" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1095 124" fill="none">
										<path d="M69.1595 38.5063H22.5194L0.572754 0.813117H47.2129L48.3061 2.67978L69.1595 38.5063Z" fill="url(#paint0_linear_26_619f)"></path>
										<path d="M68.1195 48.5598L24.6529 123.04L2.35964 83.3333L2.29297 83.2265L22.093 48.5598H68.1195Z" fill="url(#paint1_linear_26_619f)"></path>
										<path d="M118.306 122.907L83.3333 123.187L82.9599 122.533L60.1333 83.3334L59.7466 82.6532L77.3333 52.5334L95.2666 83.3334L99.8666 91.2399L118.306 122.907Z" fill="url(#paint2_linear_26_619f)"></path>
										<path d="M126.319 42.2531V42.2666L126.039 42.7731L105.413 80.9731L58.7329 0.813245H102.359C103.106 2.09324 103.946 3.58663 104.919 5.26663C109.893 13.88 117.719 27.4131 126.319 42.2531Z" fill="url(#paint3_linear_26_619f)"></path>
										<path d="M197.107 33.773H172.48V62.4665H197.107C206.787 62.4665 212.613 57.093 212.613 48.1196C212.613 39.253 206.787 33.773 197.107 33.773ZM189.173 74.9465H172.6V102.826H158.947V21.173H197.213C214.72 21.173 226.147 31.9063 226.147 48.1196C226.147 61.653 218.107 71.3332 205.04 74.1332L229.88 102.826H212.853L189.173 74.9465Z" fill="currentColor"></path>
										<path d="M300.827 21.173H240.747V33.5332H300.827V21.173Z" fill="url(#paint4_linear_26_619f)"></path>
										<path d="M254.267 90.3465V67.4798H298.84V55.3465H240.747V102.826H301.52V90.3465H254.267Z" fill="currentColor"></path>
										<path d="M388.906 21.173L355.186 102.826H340.493L306.653 21.173H321.36L335.12 55.1196L347.72 86.9598L374.213 21.173H388.906Z" fill="currentColor"></path>
										<path d="M461.013 62C461.013 44.1466 449.573 32.0133 432.773 32.0133C415.866 32.0133 404.426 44.1466 404.426 62C404.426 79.8533 415.866 91.9864 432.773 91.9864C449.573 91.9864 461.013 79.8533 461.013 62ZM390.667 62C390.667 36.5733 407.573 19.4133 432.773 19.4133C457.866 19.4133 474.773 36.5733 474.773 62C474.773 87.4266 457.866 104.586 432.773 104.586C407.573 104.586 390.667 87.4266 390.667 62Z" fill="currentColor"></path>
										<path d="M536.613 102.826L501.386 66.1999V102.826H487.613V21.173H501.386V56.053L533.933 21.173H551.667L514.333 60.7196L555.16 102.826H536.613Z" fill="currentColor"></path>
										<path d="M621.56 21.173H561.466V33.5332H621.56V21.173Z" fill="url(#paint5_linear_26_619f)"></path>
										<path d="M575 90.3465V67.4798H619.573V55.3465H561.466V102.826H622.253V90.3465H575Z" fill="currentColor"></path>
										<path d="M723.173 61.9999C723.173 44.1465 711.04 31.7863 693.653 31.7863H674.64V92.2131H693.653C711.16 92.2131 723.173 79.8532 723.173 61.9999ZM734.72 61.9999C734.72 86.3865 718.04 102.826 693.653 102.826H663.32V21.173H693.653C718.04 21.173 734.72 37.6132 734.72 61.9999Z" fill="currentColor"></path>
										<path d="M748.267 21.173H759.573V102.826H748.267V21.173Z" fill="currentColor"></path>
										<path d="M847.773 57.453V91.053C838.68 100.146 828.173 104.467 815.227 104.467C790.027 104.467 773.227 87.4266 773.227 61.9999C773.227 37.0399 790.72 19.5332 815.92 19.5332C827.48 19.5332 838.093 23.9732 846.027 32.0132L838.68 39.5999C832.84 33.6532 824.32 30.2665 815.92 30.2665C797.493 30.2665 784.653 43.2132 784.653 61.9999C784.653 81.2532 796.787 93.7332 815.227 93.7332C823.853 93.7332 830.853 91.3999 837.16 86.2666V67.7197H813.013V57.453H847.773Z" fill="currentColor"></path>
										<path d="M862.6 21.173H873.92V102.826H862.6V21.173Z" fill="currentColor"></path>
										<path d="M950.093 31.7863H922.68V102.826H911.48V31.7863H884.066V21.173H950.093V31.7863Z" fill="currentColor"></path>
										<path d="M968.533 74.4798H1004.93L986.733 32.9465L968.533 74.4798ZM1009.6 84.9863H963.866L956.053 102.826H943.68L980.32 21.173H993.146L1029.79 102.826H1017.41L1009.6 84.9863Z" fill="currentColor"></path>
										<path d="M1039.36 21.173H1050.67V92.2131H1094.77V102.826H1039.36V21.173Z" fill="currentColor"></path>
										<defs>
											<linearGradient id="paint0_linear_26_619f" x1="0.572754" y1="19.6664" x2="69.1584" y2="19.6664" gradientUnits="userSpaceOnUse">
												<stop stop-color="#86CF41"></stop>
												<stop offset="0.994413" stop-color="#50C064"></stop>
												<stop offset="1" stop-color="#50C064"></stop>
											</linearGradient>
											<linearGradient id="paint1_linear_26_619f" x1="2.29297" y1="85.7998" x2="68.1175" y2="85.7998" gradientUnits="userSpaceOnUse">
												<stop stop-color="#86CF41"></stop>
												<stop offset="0.994413" stop-color="#50C064"></stop>
												<stop offset="1" stop-color="#50C064"></stop>
											</linearGradient>
											<linearGradient id="paint2_linear_26_619f" x1="59.7466" y1="87.8533" x2="118.307" y2="87.8533" gradientUnits="userSpaceOnUse">
												<stop stop-color="#86CF41"></stop>
												<stop offset="0.994413" stop-color="#50C064"></stop>
												<stop offset="1" stop-color="#50C064"></stop>
											</linearGradient>
											<linearGradient id="paint3_linear_26_619f" x1="58.7329" y1="40.8932" x2="126.313" y2="40.8932" gradientUnits="userSpaceOnUse">
												<stop stop-color="#86CF41"></stop>
												<stop offset="0.994413" stop-color="#50C064"></stop>
												<stop offset="1" stop-color="#50C064"></stop>
											</linearGradient>
											<linearGradient id="paint4_linear_26_619f" x1="240.733" y1="27.3465" x2="300.816" y2="27.3465" gradientUnits="userSpaceOnUse">
												<stop stop-color="#86CF41"></stop>
												<stop offset="0.994413" stop-color="#50C064"></stop>
												<stop offset="1" stop-color="#50C064"></stop>
											</linearGradient>
											<linearGradient id="paint5_linear_26_619f" x1="561.466" y1="27.3465" x2="621.549" y2="27.3465" gradientUnits="userSpaceOnUse">
												<stop stop-color="#86CF41"></stop>
												<stop offset="0.994413" stop-color="#50C064"></stop>
												<stop offset="1" stop-color="#50C064"></stop>
											</linearGradient>
										</defs>
									</svg>
								</a>
							</div>
							<!-- logo - end -->

							<p class="text-gray-500 sm:pr-8">Revoke Digital Limited is a company registered in India
								and
								Wales with company number 3232325 and its registered office at keer mohalla, deoli,
								tonk
								(Rajasthan) 304804.</p>
						</div>

						<!-- nav - start -->
						<div>
							<div class="mb-4 font-bold uppercase tracking-widest text-gray-800">Services</div>

							<nav class="flex flex-col gap-4">
								<div>
									<a href="<?= get_permalink(28); ?>" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Music Distribution</a>
								</div>

								<div>
									<a href="<?= get_permalink(463); ?>" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Marketing & Promotions</a>
								</div>

								<div>
									<a href="<?= get_permalink(28); ?>" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Royalties & Licenses</a>
								</div>

								<div>
									<a href="<?= get_permalink(28); ?>" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Youtube Content Id</a>
								</div>
							</nav>
						</div>
						<!-- nav - end -->

						<!-- nav - start -->
						<div>
							<div class="mb-4 font-bold uppercase tracking-widest text-gray-800">Company</div>

							<nav class="flex flex-col gap-4">
								<div>
									<a href="<?= get_permalink(24); ?>" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">About Us</a>
								</div>

								<div>
									<a href="<?= get_permalink(28); ?>" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Services</a>
								</div>
								
								<div>
									<a href="#1" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Carrers</a>
								</div>
							</nav>
						</div>
						<!-- nav - end -->

						<!-- nav - start -->
						<div>
							<div class="mb-4 font-bold uppercase tracking-widest text-gray-800">Support</div>

							<nav class="flex flex-col gap-4">
								<div>
									<a href="<?= get_permalink(26); ?>" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Contact Us</a>
								</div>

								<div>
									<a href="<?= get_permalink(465); ?>" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">FAQ</a>
								</div>
							</nav>
						</div>
						<!-- nav - end -->

						<!-- nav - start -->
						<div>
							<div class="mb-4 font-bold uppercase tracking-widest text-gray-800">Legal</div>

							<nav class="flex flex-col gap-4">
								<div>
									<a href="<?= get_permalink(488); ?>" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Terms
										of Service</a>
								</div>

								<div>
									<a href="<?= get_permalink(3); ?>" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Privacy
										Policy</a>
								</div>

							</nav>
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
<script>
	var MainHeadSecInnerDiv = $('#MainHeadSecInner');
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

			if ($(window).scrollTop() > 300) {
				MainHeadSecInnerDiv.removeClass('shadow-[none]');
			} else {
				MainHeadSecInnerDiv.addClass('shadow-[none]');
			}

		});
</script>

</body>

</html>