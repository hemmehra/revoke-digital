<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Revoke Digital 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?> data-theme="dark">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css?v=<?= rand(0, 9999) ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom-style.css?v=<?= rand(0, 9999) ?>">
	<?php wp_head(); ?>
	<script type="text/javascript">
		var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	</script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<!-- Header -->
		<header>
			<div class="MainHeadSec h-[80px] md:h-[65px] shadow-[none]" id="MainHeadSec">
				<div class="navbar-sticky navbar-glass navbar px-0 transition-all ease-in shadow-[none] border-b-[1px] border-[#333] MainHeadSecInner" id="MainHeadSecInner">
					<div class="container">
						<div class="head-inner">
							<div class="flex">
								<div class="navbar-start lg:w-[30%]">
									<a href="/" class="navbar-item pl-0 sm:px-0">
										<span class="md:hidden text">
											<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 126 123" fill="none">
												<path d="M68.5867 37.6931H21.9466L0 -0.000115898H46.6401L47.7333 1.86655L68.5867 37.6931Z" fill="url(#paint0_linear_4_243h)" />
												<path d="M67.5468 47.7466L24.0801 122.227L1.78688 82.5201L1.72021 82.4133L21.5202 47.7466H67.5468Z" fill="url(#paint1_linear_4_243h)" />
												<path d="M117.734 122.093L82.7605 122.373L82.3871 121.72L59.5605 82.5202L59.1738 81.84L76.7605 51.7202L94.6939 82.5202L99.2939 90.4267L117.734 122.093Z" fill="url(#paint2_linear_4_243h)" />
												<mask id="mask0_4_243h" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="58" y="0" width="68" height="81">
													<path d="M125.747 41.4399V41.4534L125.467 41.9599L104.84 80.1599L58.1602 1.20954e-05H101.787C102.533 1.28001 103.373 2.7734 104.347 4.4534C109.32 13.0667 117.147 26.5999 125.747 41.4399Z" fill="white" />
												</mask>
												<g mask="url(#mask0_4_243h)">
													<path d="M125.747 41.4399V41.4534L125.467 41.9599L104.84 80.1599L58.1602 1.20954e-05H101.787C102.533 1.28001 103.373 2.7734 104.347 4.4534C109.32 13.0667 117.147 26.5999 125.747 41.4399Z" fill="url(#paint3_linear_4_243h)" />
												</g>
												<defs>
													<linearGradient id="paint0_linear_4_243h" x1="0" y1="18.8532" x2="68.5857" y2="18.8532" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
													<linearGradient id="paint1_linear_4_243h" x1="1.72021" y1="84.9866" x2="67.5448" y2="84.9866" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
													<linearGradient id="paint2_linear_4_243h" x1="59.1738" y1="87.0401" x2="117.734" y2="87.0401" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
													<linearGradient id="paint3_linear_4_243h" x1="58.1602" y1="40.08" x2="125.74" y2="40.08" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
												</defs>
											</svg>
										</span>
										<span class="hidden text-white md:block">
											<svg class="w-full" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1095 124" fill="none">
												<path d="M69.1595 38.5063H22.5194L0.572754 0.813117H47.2129L48.3061 2.67978L69.1595 38.5063Z" fill="url(#paint0_linear_26_619)" />
												<path d="M68.1195 48.5598L24.6529 123.04L2.35964 83.3333L2.29297 83.2265L22.093 48.5598H68.1195Z" fill="url(#paint1_linear_26_619)" />
												<path d="M118.306 122.907L83.3333 123.187L82.9599 122.533L60.1333 83.3334L59.7466 82.6532L77.3333 52.5334L95.2666 83.3334L99.8666 91.2399L118.306 122.907Z" fill="url(#paint2_linear_26_619)" />
												<path d="M126.319 42.2531V42.2666L126.039 42.7731L105.413 80.9731L58.7329 0.813245H102.359C103.106 2.09324 103.946 3.58663 104.919 5.26663C109.893 13.88 117.719 27.4131 126.319 42.2531Z" fill="url(#paint3_linear_26_619)" />
												<path d="M197.107 33.773H172.48V62.4665H197.107C206.787 62.4665 212.613 57.093 212.613 48.1196C212.613 39.253 206.787 33.773 197.107 33.773ZM189.173 74.9465H172.6V102.826H158.947V21.173H197.213C214.72 21.173 226.147 31.9063 226.147 48.1196C226.147 61.653 218.107 71.3332 205.04 74.1332L229.88 102.826H212.853L189.173 74.9465Z" fill="currentColor" />
												<path d="M300.827 21.173H240.747V33.5332H300.827V21.173Z" fill="url(#paint4_linear_26_619)" />
												<path d="M254.267 90.3465V67.4798H298.84V55.3465H240.747V102.826H301.52V90.3465H254.267Z" fill="currentColor" />
												<path d="M388.906 21.173L355.186 102.826H340.493L306.653 21.173H321.36L335.12 55.1196L347.72 86.9598L374.213 21.173H388.906Z" fill="currentColor" />
												<path d="M461.013 62C461.013 44.1466 449.573 32.0133 432.773 32.0133C415.866 32.0133 404.426 44.1466 404.426 62C404.426 79.8533 415.866 91.9864 432.773 91.9864C449.573 91.9864 461.013 79.8533 461.013 62ZM390.667 62C390.667 36.5733 407.573 19.4133 432.773 19.4133C457.866 19.4133 474.773 36.5733 474.773 62C474.773 87.4266 457.866 104.586 432.773 104.586C407.573 104.586 390.667 87.4266 390.667 62Z" fill="currentColor" />
												<path d="M536.613 102.826L501.386 66.1999V102.826H487.613V21.173H501.386V56.053L533.933 21.173H551.667L514.333 60.7196L555.16 102.826H536.613Z" fill="currentColor" />
												<path d="M621.56 21.173H561.466V33.5332H621.56V21.173Z" fill="url(#paint5_linear_26_619)" />
												<path d="M575 90.3465V67.4798H619.573V55.3465H561.466V102.826H622.253V90.3465H575Z" fill="currentColor" />
												<path d="M723.173 61.9999C723.173 44.1465 711.04 31.7863 693.653 31.7863H674.64V92.2131H693.653C711.16 92.2131 723.173 79.8532 723.173 61.9999ZM734.72 61.9999C734.72 86.3865 718.04 102.826 693.653 102.826H663.32V21.173H693.653C718.04 21.173 734.72 37.6132 734.72 61.9999Z" fill="currentColor" />
												<path d="M748.267 21.173H759.573V102.826H748.267V21.173Z" fill="currentColor" />
												<path d="M847.773 57.453V91.053C838.68 100.146 828.173 104.467 815.227 104.467C790.027 104.467 773.227 87.4266 773.227 61.9999C773.227 37.0399 790.72 19.5332 815.92 19.5332C827.48 19.5332 838.093 23.9732 846.027 32.0132L838.68 39.5999C832.84 33.6532 824.32 30.2665 815.92 30.2665C797.493 30.2665 784.653 43.2132 784.653 61.9999C784.653 81.2532 796.787 93.7332 815.227 93.7332C823.853 93.7332 830.853 91.3999 837.16 86.2666V67.7197H813.013V57.453H847.773Z" fill="currentColor" />
												<path d="M862.6 21.173H873.92V102.826H862.6V21.173Z" fill="currentColor" />
												<path d="M950.093 31.7863H922.68V102.826H911.48V31.7863H884.066V21.173H950.093V31.7863Z" fill="currentColor" />
												<path d="M968.533 74.4798H1004.93L986.733 32.9465L968.533 74.4798ZM1009.6 84.9863H963.866L956.053 102.826H943.68L980.32 21.173H993.146L1029.79 102.826H1017.41L1009.6 84.9863Z" fill="currentColor" />
												<path d="M1039.36 21.173H1050.67V92.2131H1094.77V102.826H1039.36V21.173Z" fill="currentColor" />
												<defs>
													<linearGradient id="paint0_linear_26_619" x1="0.572754" y1="19.6664" x2="69.1584" y2="19.6664" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
													<linearGradient id="paint1_linear_26_619" x1="2.29297" y1="85.7998" x2="68.1175" y2="85.7998" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
													<linearGradient id="paint2_linear_26_619" x1="59.7466" y1="87.8533" x2="118.307" y2="87.8533" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
													<linearGradient id="paint3_linear_26_619" x1="58.7329" y1="40.8932" x2="126.313" y2="40.8932" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
													<linearGradient id="paint4_linear_26_619" x1="240.733" y1="27.3465" x2="300.816" y2="27.3465" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
													<linearGradient id="paint5_linear_26_619" x1="561.466" y1="27.3465" x2="621.549" y2="27.3465" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
												</defs>
											</svg>
										</span>
									</a>
								</div>
								<div class="navbar-end lg:w-[70%]">
									<div class="nav-menu hidden lg:block lg:mr-3">
										<div class="mr-1">
											<ul class="nav-menu">
												<li class="group/menu inline-block relative">
													<a href="/" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-white ">
														Home
													</a>
												</li>
												<li class="group/menu inline-block relative menu-item-has-children">
													<a href="<?= get_permalink(28); ?>" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-white ">
														Services
													</a>

													<!-- menu - start -->
													<div class="absolute top-[calc(100%+15px)] -right-[270%] mx-auto w-[734px] bg-backgroundPrimaryDark overflow-hidden rounded-lg border border-gray-4 shadow-sm translate-y-2 opacity-0 invisible group-hover/menu:translate-y-0  group-hover/menu:opacity-100 group-hover/menu:visible transition-all ease-in">
														<div class="m-6 mb-10 grid grid-cols-2 gap-8">
															<!-- link - start -->
															<a href="#" class="group flex gap-4">
																<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary text-white shadow-lg transition duration-100 group-hover:bg-indigo-600 group-active:bg-indigo-700 md:h-12 md:w-12">
																	<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
																	</svg>
																</div>

																<div class="text-">
																	<div class="mb-1 font-semibold">Music Distribution</div>
																	<p class="text-sm text-gray-500">This is a section
																		of some simple filler text, also known as
																		placeholder text.</p>
																</div>
															</a>
															<!-- link - end -->

															<!-- link - start -->
															<a href="#" class="group flex gap-4">
																<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary text-white shadow-lg transition duration-100 group-hover:bg-indigo-600 group-active:bg-indigo-700 md:h-12 md:w-12">
																	<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
																	</svg>
																</div>

																<div>
																	<div class="mb-1 font-semibold">Marketing & Promotions
																	</div>
																	<p class="text-sm text-gray-500">This is a section
																		of some simple filler text, also known as
																		placeholder text.</p>
																</div>
															</a>
															<!-- link - end -->

															<!-- link - start -->
															<a href="#" class="group flex gap-4">
																<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary text-white shadow-lg transition duration-100 group-hover:bg-indigo-600 group-active:bg-indigo-700 md:h-12 md:w-12">
																	<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
																	</svg>
																</div>

																<div>
																	<div class="mb-1 font-semibold">Royalties & Licenses
																	</div>
																	<p class="text-sm text-gray-500">This is a section
																		of some simple filler text, also known as
																		placeholder text.</p>
																</div>
															</a>
															<!-- link - end -->

															<!-- link - start -->
															<a href="#" class="group flex gap-4">
																<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary text-white shadow-lg transition duration-100 group-hover:bg-indigo-600 group-active:bg-indigo-700 md:h-12 md:w-12">
																	<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
																		<path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
																	</svg>
																</div>

																<div>
																	<div class="mb-1 font-semibold">Youtube Content Id</div>
																	<p class="text-sm text-gray-500">This is a section
																		of some simple filler text, also known as
																		placeholder text.</p>
																</div>
															</a>
															<!-- link - end -->
														</div>

														<!-- link - start -->
														<a href="#" class="block bg-gray-5 p-4 px-8 transition duration-100 hover:bg-gray-100 active:bg-gray-2">
															<div class="mb-1 flex items-center gap-1.5">
																<span class="font-semibold leading-none">Enterprise
																	solutions</span>
																<span class="mt-0.5 rounded-full bg-gray-2 px-2 py-1 text-xs font-semibold leading-none text-primary">New</span>
															</div>

															<p class="text-sm">This is a section of some
																simple filler text.</p>
														</a>
														<!-- link - end -->
													</div>
													<!-- menu - end -->

												</li>
												<li class="group/menu inline-block relative">
													<a href="<?= get_permalink(24); ?>" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-white ">
														About Us
													</a>
												</li>
												<li class="group/menu inline-block relative ">
													<a href="<?= get_permalink(26); ?>" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-white ">
														Contact Us
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="flex">
										<a href="<?= get_permalink(499); ?>" class="btn btn-primary">Client Login</a>
										<label for="drawer-left" class="py-2.5 pl-2.5 cursor-pointer lg:hidden">
											<i class="h-[3px] w-8 bg-primary block"></i>
											<i class="h-[3px] w-5 bg-primary block my-1"></i>
											<i class="h-[3px] w-2.5 bg-primary block"></i>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<input type="checkbox" id="drawer-left" class="drawer-toggle" />
			<label class="overlay" for="drawer-left"></label>
			<div class="drawer">
				<div class="drawer-content pt-10 flex flex-col h-full px-1 bg-backgroundPrimaryDark ">
					<label for="drawer-left" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 z-[2]">✕</label>
					<div>
						<aside class="sidebar h-full justify-start max-w-full">
							<section class="sidebar-title items-center p-4">
								<a href="/">
									<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 129 128" fill="none">
										<path d="M95.0066 0.093306H33.8306C15.4 0.093306 0.459961 15.0267 0.459961 33.4533V94.64C0.459961 113.067 15.4 128 33.8306 128H95.0066C113.437 128 128.376 113.067 128.376 94.64V33.4533C128.376 15.0267 113.437 0.093306 95.0066 0.093306Z" fill="#404040" />
										<path d="M68.2505 48.2933H36.9812L22.2759 23.04H53.5385L54.2665 24.28L68.2505 48.2933Z" fill="white" />
										<path d="M67.5545 55.04L38.4145 104.973L23.4745 78.3466H23.4705L23.4292 78.28L36.7039 55.04H67.5545Z" fill="white" />
										<path d="M101.194 104.88L77.7505 105.053L77.4985 104.627L62.1998 78.3466L61.9385 77.8933L73.7251 57.7067L85.7505 78.3466L88.8318 83.6533L101.194 104.88Z" fill="white" />
										<path d="M106.561 50.8134V50.8267L106.373 51.16L92.5466 76.7734L61.2612 23.04H90.5079C91.0012 23.8934 91.5719 24.8934 92.2186 26.0134C95.5519 31.8 100.799 40.8667 106.561 50.8134Z" fill="white" />
									</svg>
								</a>
								<div class="flex flex-col ml-2">
									<span>Revoke Digital</span>
									<span class="text-xs font-normal text-content2">Music is feeling</span>
								</div>
							</section>
							<div class="divider my-0"></div>
							<section class="sidebar-content h-fit min-h-[20rem] overflow-visible">
								<nav class="menu rounded-md">
									<section class="menu-section px-4">
										<div class="menu-items">
											<div>
												<a href="/">
													<div class="menu-item text-lg">
														<span>Home</span>
													</div>
												</a>
											</div>
											<div>
												<a href="<?= get_permalink(24); ?>">
													<div class="menu-item text-lg">
														<span>About Us</span>
													</div>
												</a>

											</div>
											<div>
												<input type="checkbox" id="menu-1" class="menu-toggle" />
												<label class="menu-item justify-between" for="menu-1">
													<a href="<?= get_permalink(28); ?>" class="block">
														<div class="flex gap-2 items-center text-lg">
															<span>Services</span>
														</div>
													</a>
													<span class="menu-icon">
														<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
															<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
														</svg>
													</span>
												</label>
												<div class="menu-item-collapse">
													<div class="min-h-0">
														<a href="<?= get_permalink(28); ?>#music-distribution" class="menu-item ml-2">Music Distribution</a>
														<a href="<?= get_permalink(28); ?>#marketing" class="menu-item ml-2">Marketing</a>
														<a href="<?= get_permalink(28); ?>#youtube-content-id" class="menu-item ml-2">Youtube Content Id</a>
														<a href="<?= get_permalink(28); ?>#royalties-licenses" class="menu-item ml-2">Royalties & Licenses</a>
														<a href="<?= get_permalink(28); ?>#promotions" class="menu-item ml-2">Promotions</a>
													</div>
												</div>
											</div>

											<div>
												<a href="<?= get_permalink(26); ?>">
													<div class="menu-item text-lg">
														<span>Contact Us</span>
													</div>
												</a>
											</div>
										</div>
									</section>
								</nav>
							</section>
						</aside>
					</div>
					<div class="h-full flex flex-row justify-end items-end gap-2">
					</div>
				</div>
			</div>


		</header>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">