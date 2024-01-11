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
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?> data-theme="light">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css?v=<?= rand(0, 9999) ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<!-- Header -->
		<header>
			<div class="MainHeadSec h-[80px] md:h-[65px] shadow-[none]" id="MainHeadSec">
				<div class="navbar-sticky navbar-glass navbar px-0 transition-all ease-in shadow-[none] MainHeadSecInner" id="MainHeadSecInner">
					<div class="container">
						<div class="head-inner">
							<div class="flex">
								<div class="navbar-start lg:w-[30%]">
									<a href="/" class="navbar-item pl-0 sm:px-0">
										<span class="md:hidden text">
											<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 126 123" fill="none">
												<path d="M68.5867 37.6931H21.9466L0 -0.000115898H46.6401L47.7333 1.86655L68.5867 37.6931Z" fill="url(#paint0_linear_4_243)" />
												<path d="M67.5468 47.7466L24.0801 122.227L1.78688 82.5201L1.72021 82.4133L21.5202 47.7466H67.5468Z" fill="url(#paint1_linear_4_243)" />
												<path d="M117.734 122.093L82.7605 122.373L82.3871 121.72L59.5605 82.5202L59.1738 81.84L76.7605 51.7202L94.6939 82.5202L99.2939 90.4267L117.734 122.093Z" fill="url(#paint2_linear_4_243)" />
												<mask id="mask0_4_243" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="58" y="0" width="68" height="81">
													<path d="M125.747 41.4399V41.4534L125.467 41.9599L104.84 80.1599L58.1602 1.20954e-05H101.787C102.533 1.28001 103.373 2.7734 104.347 4.4534C109.32 13.0667 117.147 26.5999 125.747 41.4399Z" fill="white" />
												</mask>
												<g mask="url(#mask0_4_243)">
													<path d="M125.747 41.4399V41.4534L125.467 41.9599L104.84 80.1599L58.1602 1.20954e-05H101.787C102.533 1.28001 103.373 2.7734 104.347 4.4534C109.32 13.0667 117.147 26.5999 125.747 41.4399Z" fill="url(#paint3_linear_4_243)" />
												</g>
												<defs>
													<linearGradient id="paint0_linear_4_243" x1="0" y1="18.8532" x2="68.5857" y2="18.8532" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
													<linearGradient id="paint1_linear_4_243" x1="1.72021" y1="84.9866" x2="67.5448" y2="84.9866" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
													<linearGradient id="paint2_linear_4_243" x1="59.1738" y1="87.0401" x2="117.734" y2="87.0401" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
													<linearGradient id="paint3_linear_4_243" x1="58.1602" y1="40.08" x2="125.74" y2="40.08" gradientUnits="userSpaceOnUse">
														<stop stop-color="#86CF41" />
														<stop offset="0.994413" stop-color="#50C064" />
														<stop offset="1" stop-color="#50C064" />
													</linearGradient>
												</defs>
											</svg>
										</span>
										<span class="hidden md:block">
											<img src="<?php bloginfo('template_directory'); ?>/images/logo-second.svg" alt="" class="w-full">
										</span>
									</a>
								</div>
								<div class="navbar-end lg:w-[70%]">
									<div class="nav-menu hidden lg:block lg:mr-3">
										<div class="mr-1">
											<ul class="nav-menu">
												<li class="group/menu inline-block relative">
													<a href="/" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-black ">
														Home
													</a>
												</li>
												<li class="group/menu inline-block relative menu-item-has-children">
													<a href="<?= get_permalink(28); ?>" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-black ">
														Services
													</a>

													<!-- menu - start -->
													<div class="absolute top-[calc(100%+15px)] -right-[270%] mx-auto w-[734px] overflow-hidden rounded-lg border border-gray-4 bg-white shadow-sm translate-y-2 opacity-0 invisible group-hover/menu:translate-y-0  group-hover/menu:opacity-100 group-hover/menu:visible transition-all ease-in">
														<div class="m-6 mb-10 grid grid-cols-2 gap-8">
															<!-- link - start -->
															<a href="#" class="group flex gap-4">
																<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary text-white shadow-lg transition duration-100 group-hover:bg-indigo-600 group-active:bg-indigo-700 md:h-12 md:w-12">
																	<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
																	</svg>
																</div>

																<div>
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
													<a href="<?= get_permalink(24); ?>" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-black ">
														About Us
													</a>
												</li>
												<li class="group/menu inline-block relative ">
													<a href="<?= get_permalink(26); ?>" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-black ">
														Contact Us
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="flex">
										<a class="btn btn-primary">Client Login</a>
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
				<div class="drawer-content pt-10 flex flex-col h-full px-1 bg-side-bar-bg">
					<label for="drawer-left" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 z-[2]">✕</label>
					<div>
						<aside class="sidebar h-full justify-start max-w-full">
							<section class="sidebar-title items-center p-4">
								<a href="/">
									<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 129 128" fill="none">
										<path d="M95.0066 0.093306H33.8306C15.4 0.093306 0.459961 15.0267 0.459961 33.4533V94.64C0.459961 113.067 15.4 128 33.8306 128H95.0066C113.437 128 128.376 113.067 128.376 94.64V33.4533C128.376 15.0267 113.437 0.093306 95.0066 0.093306Z" fill="#211D1D" />
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
													<a href="<?= get_permalink(28); ?>">
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