<?php
get_header();
?>
<!-- Hero Section -->
<section>
    <div class="heroSec relative flex flex-col justify-center items-center pt-5 pb-10 h-[calc(100vh)] overflow-hidden bg-heroBgImg after:content-[''] after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:bg-mobileViewBannerBg after:w-full after:z-[5] after:h-full before:content-[''] before:absolute before:top-0 before:bottom-0 before:right-0 before:left-0 before:bg-headerBgDirt before:w-full before:z-[3] before:h-full before:mix-blend-plus-lighter" id="heroSec">
        <div class="relative z-[6]">
            <div class="container">
                <div class="relative z-[2]">

                    <div class="flex flex-col items-center py-10 text-center w-full">
                        <div class="text-3xl pt-2 font-bold text-white font-agoka leading-[1.5em] tracking-widest overflow-hidden md:text-4xl lg:text-6xl lg:pt-5">
                            <p class="slide-up-box">Sell Your Music</p>
                        </div>

                        <div class="text-3xl pt-2 font-bold text-white font-agoka leading-[1.5em] tracking-widest overflow-hidden md:text-4xl lg:text-6xl lg:pt-5">
                            <p class="slide-up-box">Worldwide</p>
                        </div>

                        <p class="mb-8 leading-relaxed text-white md:mb-12 xl:text-lg">
                            Get your music on Spotify, Apple Music, Wynk, Hungama, YouTube, JioSaavn, Instagram and
                            more. <br>
                            Keep 100% ownership of your music and stay in control of your career.
                        </p>

                        <div class="flex w-full flex-col gap-2.5 sm:flex-row sm:justify-center">

                            <a href="<?= get_permalink(26); ?>" class="btn btn-outline-primary text-white sm:px-[50px]">Start
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bannerbg absolute top-0 left-0 right-0 z-[2] h-full w-full">
            <video loop="" muted="" autoplay="" playsinline poster="<?php bloginfo('template_directory'); ?>/images/banner_video_poster.webp" class="absolute top-0 left-0 right-0 z-[2] object-cover h-full w-full">
                <source src="https://revokedigital.com/wp-content/uploads/2024/02/landing-page-video.mp4" type="video/mp4">
            </video>
        </div>
        <div id="webgl-canvas" class="hidden absolute top-0 left-0 right-0 z-[1]"></div>
    </div>

</section>



<!-- Stores/DSP's -->
<section class="animate-text-wrapper">
    <div class="py-10 lg:py-14">
        <div class="container">
            <div>
                <div class="mx-auto max-w-screen-2xl">
                    <div class="mb-10 md:mb-10">
                        <div class="overflow-hidden pt-[10px]">
                            <h2 class="animate-text text-[1.5rem] font-agoka font-black text-center capitalize leading-[1.4em] xl:text-[36px] lg:text-[28px] md:text-[30px]">
                                Ready to go Global with <span class="text-secondary">DSP's</span></h2>
                        </div>
                    </div>

                    <div class="-mx-[15px]">
                        <div class="swiper storesSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="">
                                            <div class="relative pt-[50%]">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/youtube.svg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="">
                                            <div class="relative pt-[50%]">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/apple.svg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="">
                                            <div class="relative pt-[50%]">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/spotify.svg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="">
                                            <div class="relative pt-[50%]">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/jiosaavn.svg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="">
                                            <div class="relative pt-[50%]">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/hungama.svg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="">
                                            <div class="relative pt-[50%]">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/Amazon-Music.svg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="">
                                            <div class="relative pt-[50%]">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/tidal.svg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="animate-text-section pt-[25px] lg:pt-[50px]" id="music-distribution">
    <div class="mx-[20px] mb-[50px] rounded-[20px] overflow-hidden lg:mx-[50px]">
        <div>
            <div>
                <div>
                    <div class="flex flex-col lg:flex-row">
                        <div class="w-full bg-[#333333] text-center py-[20px] px-[20px] flex flex-col justify-center overflow-hidden lg:text-left lg:w-1/2 lg:py-[50px] lg:px-[50px]">
                            <div class="overflow-hidden">
                                <span class="service-title add-text-effect animate-section-text font-bebasNeue text-[60px] leading-[1em] inline-block lg:text-[90px] xl:text-[150px]">Music</span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="service-title add-text-effect animate-section-text font-bebasNeue text-[60px] leading-[1em] inline-block lg:text-[90px] xl:text-[150px]">Distribution</span>
                            </div>
                        </div>
                        <div class="w-full flex items-center bg-[#000] pt-[50px] pb-[20px] px-[20px] lg:py-[100px] lg:px-[50px] lg:w-1/2">
                            <div class="">
                                <!-- feature - start -->
                                <div class="flex divide-x divide-white rounded-lg border border-white mb-[15px]">
                                    <div class="flex items-center p-2 text-white md:p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>

                                    <div class="p-4 md:p-6">
                                        <h3 class="mb-2 text-lg font-semibold md:text-xl text-white"> Drop unlimited singles, EPs and albums on more global music services than anywhere else</h3>
                                    </div>
                                </div>
                                <!-- feature - end -->
                                <!-- feature - start -->
                                <div class="flex divide-x divide-white rounded-lg border border-white mb-[15px]">
                                    <div class="flex items-center p-2 text-white md:p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>

                                    <div class="p-4 md:p-6">
                                        <h3 class="mb-2 text-lg font-semibold md:text-xl text-white">Ensure equitable royalties for your music through our distribution channels, maximizing your earnings with transparent revenue sharing.</h3>
                                    </div>
                                </div>
                                <!-- feature - end -->
                                <!-- feature - start -->
                                <div class="flex divide-x divide-white rounded-lg border border-white mb-[15px]">
                                    <div class="flex items-center p-2 text-white md:p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>

                                    <div class="p-4 md:p-6">
                                        <h3 class="mb-2 text-lg font-semibold md:text-xl text-white">Simplify your distribution workflow with our user-friendly platform, allowing you to upload your tracks effortlessly and manage distribution efficiently.</h3>
                                    </div>
                                </div>
                                <!-- feature - end -->
                                <!-- feature - start -->
                                <div class="flex divide-x divide-white rounded-lg border border-white mb-[15px]">
                                    <div class="flex items-center p-2 text-white md:p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>

                                    <div class="p-4 md:p-6">
                                        <h3 class="mb-2 text-lg font-semibold md:text-xl text-white">Access detailed analytics on audience engagement, geographical reach, and streaming patterns, empowering data-driven decisions to optimize your music's performance.</h3>
                                    </div>
                                </div>
                                <!-- feature - end -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="overflow-hidden mb-[30px] lg:pt-[50px]">
    <div>
        <div class="c-rail-static is-show">
            <?php for ($i = 0; $i < 30; $i++) :
            ?>
                <div class="c-rail-static_item">
                    <span class="c-rail-static_label">Become a singer</span>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<section class="animate-text-section pt-[25px] lg:pt-[50px]" id="marketing-promotions">
    <div class="mx-[20px] mb-[50px] rounded-[20px] overflow-hidden lg:mx-[50px]">
        <div>
            <div>
                <div>
                    <div class="flex flex-col lg:flex-row-reverse">
                        <div class="w-full bg-[#333333] text-center py-[20px] px-[20px] flex flex-col justify-center overflow-hidden lg:text-right lg:w-1/2 lg:py-[50px] lg:px-[50px]">
                            <div class="overflow-hidden">
                                <span class="service-title add-text-effect animate-section-text font-bebasNeue text-[60px] leading-[1em] inline-block lg:text-[90px] xl:text-[150px]">Marketing</span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="service-title add-text-effect animate-section-text font-bebasNeue text-[60px] leading-[1em] inline-block lg:text-[90px] xl:text-[150px]">&</span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="service-title add-text-effect animate-section-text font-bebasNeue text-[60px] leading-[1em] inline-block lg:text-[90px] xl:text-[150px]">Promotions</span>
                            </div>
                        </div>
                        <div class="w-full flex items-center bg-[#000] pt-[50px] pb-[20px] px-[20px] lg:py-[100px] lg:px-[50px] lg:w-1/2">
                            <div class="">
                                <!-- feature - start -->
                                <div class="flex divide-x divide-white rounded-lg border border-white mb-[15px]">
                                    <div class="flex items-center p-2 text-white md:p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>

                                    <div class="p-4 md:p-6">
                                        <h3 class="text-lg font-semibold md:text-xl text-white">Social Media Campaigns</h3>
                                        <p class="text-[#d0d0d0] leading-5">We craft engaging social media campaigns across platforms like Instagram, Facebook, Twitter, and TikTok to boost your online presence and connect with fans.</p>
                                    </div>
                                </div>
                                <!-- feature - end -->
                                <!-- feature - start -->
                                <div class="flex divide-x divide-white rounded-lg border border-white mb-[15px]">
                                    <div class="flex items-center p-2 text-white md:p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>

                                    <div class="p-4 md:p-6">
                                        <h3 class="text-lg font-semibold md:text-xl text-white">Playlist Pitching</h3>
                                        <p class="text-[#d0d0d0] leading-5">We help you to secure prime spots on curated playlists to expand your reach, captivate new listeners, and increase your streams.</p>
                                    </div>
                                </div>
                                <!-- feature - end -->
                                <!-- feature - start -->
                                <div class="flex divide-x divide-white rounded-lg border border-white mb-[15px]">
                                    <div class="flex items-center p-2 text-white md:p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>

                                    <div class="p-4 md:p-6">
                                        <h3 class="text-lg font-semibold md:text-xl text-white">Email Impact</h3>
                                        <p class="text-[#d0d0d0] leading-5">We Deliver exclusive updates and behind-the-scenes insights directly to your fans' inboxes with personalized email campaigns.</p>
                                    </div>
                                </div>
                                <!-- feature - end -->
                                <!-- feature - start -->
                                <div class="flex divide-x divide-white rounded-lg border border-white mb-[15px]">
                                    <div class="flex items-center p-2 text-white md:p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>

                                    <div class="p-4 md:p-6">
                                        <h3 class="text-lg font-semibold md:text-xl text-white">Digital Dominance</h3>
                                        <p class="text-[#d0d0d0] leading-5">Boost your visibility with targeted digital advertising campaigns across Google Ads, YouTube Ads, and targeted display ads, to expand your reach.</p>
                                    </div>
                                </div>
                                <!-- feature - end -->
                                <!-- feature - start -->
                                <div class="flex divide-x divide-white rounded-lg border border-white mb-[15px]">
                                    <div class="flex items-center p-2 text-white md:p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>

                                    <div class="p-4 md:p-6">
                                        <h3 class="text-lg font-semibold md:text-xl text-white">Artist Spotlight</h3>
                                        <p class="text-[#d0d0d0] leading-5">Get featured on our platform to share your story, style, and upcoming projects, connecting with fans and sparking excitement.</p>
                                    </div>
                                </div>
                                <!-- feature - end -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="overflow-hidden mb-[30px] lg:pt-[50px]">
    <div>
        <div class="c-rail-static is-show">
            <?php for ($i = 0; $i < 30; $i++) :
            ?>
                <div class="c-rail-static_item">
                    <span class="c-rail-static_label">Become a artist</span>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<section class="animate-text-section pt-[25px] lg:pt-[50px]" id="yotube-channel">
    <div class="mx-[20px] mb-[50px] rounded-[20px] overflow-hidden lg:mx-[50px]">
        <div>
            <div>
                <div>
                    <div class="flex flex-col lg:flex-row">
                        <div class="w-full bg-[#333333] text-center py-[20px] px-[20px] flex flex-col justify-center overflow-hidden lg:text-left lg:w-1/2 lg:py-[50px] lg:px-[50px]">
                            <div class="overflow-hidden">
                                <span class="service-title add-text-effect animate-section-text font-bebasNeue text-[60px] leading-[1em] inline-block lg:text-[90px] xl:text-[150px]">Monetization</span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="service-title add-text-effect animate-section-text font-bebasNeue text-[60px] leading-[1em] inline-block lg:text-[90px] xl:text-[150px]">&</span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="service-title add-text-effect animate-section-text font-bebasNeue text-[60px] leading-[1em] inline-block lg:text-[90px] xl:text-[150px]">Management</span>
                            </div>
                        </div>
                        <div class="w-full flex items-center bg-[#000] pt-[50px] pb-[20px] px-[20px] lg:py-[100px] lg:px-[50px] lg:w-1/2">
                            <div>
                                <h2 class="text-[24px] leading-[1.2em] mb-[9px]">YouTube Monetization & Channel Management</h2>
                                <p class="text-[16px]"><b>Empower: </b> Your YouTube Presence with Our YouTube Monetization & Channel Management Services!</p>
                                <p class="text-[16px]"><b>Protect Your Content: </b>Safeguard your music from unauthorized use and monetize it effectively through YouTube's Content ID system, ensuring fair compensation for your creative work.</p>
                                <p class="text-[16px]"><b>Optimize Your Channel: </b> Let our experts enhance your YouTube presence, curating engaging content and implementing growth strategies.</p>
                                <span class="opacity-0 block my-[25px]"></span>
                                <h2 class="text-[24px] leading-[1.2em] mb-[9px]">Why Choose Us?</h2>
                                <ul class="list-disc pl-[20px]">
                                    <li class="text-[16px]">Maximum Protection</li>
                                    <li class="text-[16px]">Personalized Strategy</li>
                                    <li class="text-[16px]">Audience Expansion</li>
                                    <li class="text-[16px]">Transparent Reporting</li>
                                    <li class="text-[16px]">Peace of Mind</li>
                                    <li class="text-[16px]">Ready to amplify your YouTube success? Join us today!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-32 overflow-hidden">
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -m-8">
            <div class="w-full md:w-1/2 p-8">
                <div class="md:max-w-lg">
                    <h2 class="mb-5 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight">All-in-one, next-gen SaaS experience</h2>
                    <p class="text-gray-600 font-medium leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat tempor condimentum commodo tincidunt sit dictumst. Eu placerat arcu at sem vitae eros.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-8">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <div class="flex flex-wrap -m-7">
                            <div class="w-auto p-7">
                                <div class="relative w-11 h-11 border border-primary rounded-full">
                                    <div class="absolute text-primary left-1/2 text-[24px] top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        1
                                    </div>
                                </div>
                                <div class="w-px h-28 bg-primary mx-auto"></div>
                            </div>
                            <div class="flex-1 p-7">
                                <div class="md:max-w-xl pb-8">
                                    <h3 class="mb-4 text-xl font-semibold leading-normal">Sign up</h3>
                                    <p class="text-gray-600 font-medium leading-relaxed">Join Us today and distribute music to multiple stores right from our dashboard. It's as easy as one, two, or three</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="w-full">
                        <div class="flex flex-wrap -m-7">
                            <div class="w-auto p-7">
                                <div class="relative w-11 h-11 border border-white rounded-full">
                                    <div class="absolute left-1/2 text-[24px] top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        2
                                    </div>
                                </div>
                                <div class="w-px h-36 bg-white mx-auto"></div>
                            </div>
                            <div class="flex-1 p-7">
                                <div class="md:max-w-xl pb-8">
                                    <h3 class="mb-4 text-xl font-semibold leading-normal">Apply for Channel Management</h3>
                                    <p class="text-gray-600 font-medium leading-relaxed">Efficiently manage your YouTube channels and get the best out of them with the help of an expert team for YouTube.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="flex flex-wrap -m-7">
                            <div class="w-auto p-7">
                                <div class="relative w-11 h-11 border border-white rounded-full">
                                    <div class="absolute left-1/2 text-[24px] top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        3
                                    </div>
                                </div>
                                <div class="w-px h-36 bg-white mx-auto"></div>
                            </div>
                            <div class="flex-1 p-7">
                                <div class="md:max-w-xl pb-8">
                                    <h3 class="mb-4 text-xl font-semibold leading-normal">Apply for YouTube Channel Monetization</h3>
                                    <p class="text-gray-600 font-medium leading-relaxed">We help you deliver your music to YouTube Content ID and monetize every track you own, claiming 100% music rights & royalties.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="flex flex-wrap -m-7">
                            <div class="w-auto p-7">
                                <div class="relative w-11 h-11 border border-white rounded-full">
                                    <div class="absolute left-1/2 text-[24px] top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        4
                                    </div>
                                </div>
                                <div class="w-px h-36 bg-white mx-auto"></div>
                            </div>
                            <div class="flex-1 p-7">
                                <div class="md:max-w-xl pb-8">
                                    <h3 class="mb-4 text-xl font-semibold leading-normal">Upload Your Music</h3>
                                    <p class="text-gray-600 font-medium leading-relaxed">Upload your music to Revoke Digital and provide detailed info like track name, artist name, artwork, and more.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="flex flex-wrap -m-7">
                            <div class="w-auto p-7">
                                <div class="relative w-11 h-11 border border-white rounded-full">
                                    <div class="absolute left-1/2 text-[24px] top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        5
                                    </div>
                                </div>
                                <div class="w-px h-36 bg-white mx-auto"></div>
                            </div>
                            <div class="flex-1 p-7">
                                <div class="md:max-w-xl pb-8">
                                    <h3 class="mb-4 text-xl font-semibold leading-normal">Your music on YouTube</h3>
                                    <p class="text-gray-600 font-medium leading-relaxed">We will send your songs to YouTube to get a unique Content ID to track your soundtracks easily.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex flex-wrap -m-7">
                            <div class="w-auto p-7">
                                <div class="relative w-11 h-11 border border-white rounded-full">
                                    <div class="absolute left-1/2 text-[24px] top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        6
                                    </div>
                                </div>
                                <div class="w-px h-36 bg-white mx-auto"></div>
                            </div>
                            <div class="flex-1 p-7">
                                <div class="md:max-w-xl pb-8">
                                    <h3 class="mb-4 text-xl font-semibold leading-normal">Let YouTube do the work for you</h3>
                                    <p class="text-gray-600 font-medium leading-relaxed">Once your music is successfully uploaded on YouTube and people start listening to it or using it in their videos, YouTube will automatically make a claim on your behalf.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="w-full">
                        <div class="flex flex-wrap -m-7">
                            <div class="w-auto p-7">
                                <div class="relative w-11 h-11 border border-white rounded-full">
                                    <div class="absolute left-1/2 text-[24px] top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        7
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 p-7">
                                <div class="md:max-w-xl pb-8">
                                    <h3 class="mb-4 text-xl font-semibold leading-normal">Make Money</h3>
                                    <p class="text-gray-600 font-medium leading-relaxed">We help you collect music royalties every time someone uses, streams, or downloads your music. You get paid directly into your bank account.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="w-full text-center mt-[50px]">
                <a href="<?= get_permalink(26); ?>" class="btn btn-primary min-w-[200px]">Get Started</a>
            </div>
        </div>
    </div>
</section>


<section class="animate-text-section pt-[25px] lg:pt-[50px]" id="royalties-licenses">
    <div class="mx-[20px] mb-[50px] rounded-[20px] overflow-hidden lg:mx-[50px]">
        <div>
            <div>
                <div>
                    <div class="flex flex-col lg:flex-row">
                        <div class="w-full bg-[#333333] text-center py-[20px] px-[20px] flex flex-col justify-center overflow-hidden lg:text-left lg:w-1/2 lg:py-[50px] lg:px-[50px]">
                            <div class="overflow-hidden">
                                <span class="service-title add-text-effect animate-section-text font-bebasNeue text-[60px] leading-[1em] inline-block lg:text-[90px] xl:text-[150px]">Royalty Distribution</span>
                            </div>
                        </div>
                        <div class="w-full flex items-center bg-[#000] pt-[50px] pb-[20px] px-[20px] lg:py-[100px] lg:px-[50px] lg:w-1/2">
                            <div>
                                <h2 class="text-[24px] leading-[1.2em] mb-[9px]">At Revoke Digital</h2>
                                <p class="text-[16px]">we're dedicated to helping artists like you maximize your earnings and reach your full potential. Our Royalty Distribution Service ensures that you receive fair compensation for your hard work, with transparent payments and optimized revenue streams. Join us today and discover the true value of your music!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Services -->

<section>
    <div class="animate-text-wrapper bg-darkPrimaryBg py-14" id="music-distribution">
        <div class="container">
            <div>
                <div class="mb-[58px] sm:mb-[80px]">
                    <h2 class="animate-text text-[1.5rem] font-agoka font-black text-center capitalize leading-[1.4em] mb-2 md:mb-6 xl:text-[36px] lg:text-[28px] md:text-[30px]">
                        Why choose <span class="text-secondary">Revoke Digital?</span></h2>
                    <p class="mx-auto max-w-screen-md text-center sm:px-10 md:text-lg">With our platform, you're not just another upload; you're a valued creator with a story waiting to be heard. Here's why artists like you choose Revoke Digital:</p>
                </div>
                <div>
                    <div class="flex -m-[5px] flex-wrap justify-center -mx-[3px]">
                        <div class="animate-text w-full mb-[60px] lg:w-1/2 xl:w-1/3">
                            <a href="javascript:;" target="_self">
                                <div class="flex justify-center rounded-lg h-full px-[15px] py-[20px] mx-[40px] mb-[10px] border-t-[1px] border-r-[1px] border-[#FF984350] flex-col">
                                    <div class="flex flex-col">
                                        <div class="w-[44px] h-8 mb-3 inline-flex items-center justify-center text-secondary flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17.3469 31.0134C17.3622 31.02 17.3789 31.0229 17.3956 31.0218C17.4222 31.0295 17.4495 31.035 17.4771 31.038C19.4003 31.4098 21.0586 32.6279 22.0002 34.3603C22.9604 32.6147 24.643 31.3934 26.5884 31.0299C26.6117 31.0196 26.6364 31.0141 26.6619 31.0134H26.6699L40.7442 28.6452V4L22.1303 7.13327C22.0437 7.14135 21.9564 7.14135 21.8698 7.13327L3.25586 4V28.6452L17.306 31.0053C17.3183 31.0119 17.3325 31.0148 17.3467 31.0133L17.3469 31.0134ZM13.4531 21.8979C12.6343 21.1009 12.2235 20.7011 12.2227 20.3005C12.222 19.8972 12.6368 19.4931 13.4691 18.6822L13.4691 18.6822L13.4691 18.6822C13.8433 18.3177 14.3018 17.871 14.8449 17.3052C14.8591 16.499 14.8474 15.8444 14.8378 15.3133C14.8173 14.1715 14.807 13.6004 15.0875 13.3198C15.3682 13.039 15.9402 13.0494 17.0848 13.0701C17.6067 13.0796 18.2475 13.0912 19.034 13.0783C19.6038 12.5229 20.0513 12.0548 20.4153 11.674C21.2052 10.8478 21.6014 10.4333 21.9985 10.4325C22.3981 10.4318 22.7986 10.8503 23.6022 11.6901C23.9635 12.0677 24.4062 12.5303 24.9669 13.0783C25.766 13.0927 26.4147 13.0808 26.9411 13.0712C28.0659 13.0506 28.632 13.0402 28.9118 13.3181C29.1952 13.5996 29.1849 14.1767 29.1642 15.3385C29.1548 15.865 29.1433 16.5116 29.1561 17.3052C29.7065 17.8801 30.1705 18.3317 30.5478 18.699C31.3666 19.4959 31.7774 19.8958 31.7782 20.2964C31.779 20.6997 31.3642 21.1037 30.5319 21.9146L30.5318 21.9146C30.1577 22.2791 29.6991 22.7258 29.1561 23.2916C29.1418 24.0979 29.1536 24.7525 29.1631 25.2836C29.1836 26.4253 29.1939 26.9965 28.9135 27.277C28.6327 27.5579 28.0607 27.5475 26.9161 27.5268H26.916H26.916C26.3942 27.5173 25.7534 27.5057 24.9669 27.5185C24.3972 28.0739 23.9496 28.5421 23.5856 28.9228C22.7958 29.7491 22.3995 30.1636 22.0025 30.1643C21.6028 30.1651 21.2023 29.7466 20.3987 28.9067C20.0375 28.5292 19.5948 28.0665 19.034 27.5185C18.2349 27.5042 17.586 27.516 17.0596 27.5257C15.9348 27.5463 15.3688 27.5566 15.089 27.2788C14.8057 26.9974 14.816 26.4204 14.8367 25.2591V25.259V25.259C14.8461 24.7324 14.8576 24.0857 14.8449 23.292V23.2916C14.2944 22.7168 13.8305 22.2652 13.4531 21.8979ZM19.3309 25.8436C19.5473 25.8429 19.7554 25.9289 19.9096 26.0825L21.9546 28.1573L23.9996 26.0825C24.1538 25.9289 24.3618 25.8429 24.5783 25.8436H27.4787V22.9129C27.478 22.6942 27.5631 22.4839 27.7152 22.3281L29.7685 20.2618L27.7152 18.1954C27.5631 18.0396 27.478 17.8294 27.4787 17.6107V14.6799H24.5783C24.3618 14.6807 24.1538 14.5947 23.9996 14.441L21.9546 12.3662L19.9096 14.441C19.7554 14.5946 19.5473 14.6807 19.3309 14.6799H16.4304V17.6107C16.4312 17.8294 16.346 18.0396 16.194 18.1954L14.1406 20.2618L16.194 22.3281C16.346 22.4839 16.4311 22.6942 16.4304 22.9129V25.8436H19.3309ZM3.25586 30.3193L17.1393 32.6581H17.139C18.1153 32.8445 19.0148 33.3204 19.7228 34.0251C20.4313 34.7301 20.9162 35.6322 21.1163 36.617L3.25586 33.6004V30.3193ZM42.3707 8.79395V34.2584C42.3721 34.6621 42.0818 35.0072 41.6861 35.0717C41.6328 35.075 38.3534 35.6275 34.4861 36.279L34.4843 36.2793C28.9042 37.2194 22.1013 38.3655 22.0001 38.3655C21.899 38.3655 15.1018 37.2204 9.52311 36.2805L9.52081 36.2801C5.65073 35.6281 2.36762 35.075 2.31422 35.0717C1.91846 35.0072 1.62818 34.6621 1.62963 34.2584V8.79395H0V36.8297L22 40.0002L44 36.8297V8.79395H42.3707ZM40.7433 33.6004L22.8834 36.617H22.8828C23.08 35.6218 23.57 34.7102 24.2886 34.0022C25.0071 33.2942 25.9207 32.8231 26.9088 32.65L40.7433 30.3193V33.6004Z" fill="#1DA1F3" />
                                            </svg>
                                        </div>
                                        <h2 class="wayBoxTitle leading-[1.2em] text-[20px] title-font font-bold text-white">
                                            Global Distribution</h2>
                                        <p class="text-gray-11 mt-2 leading-5">Get your music published in over 250+ digital stores and streaming services across the globe.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="animate-text w-full mb-[60px] lg:w-1/2 xl:w-1/3">
                            <a href="javascript:;" target="_self">
                                <div class="flex justify-center rounded-lg h-full px-[15px] py-[20px] mx-[40px] mb-[10px] border-t-[1px] border-r-[1px] border-[#FF984350] flex-col">
                                    <div class="flex flex-col">
                                        <div class="w-[44px] h-8 mb-3 inline-flex items-center justify-center text-secondary flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17.3469 31.0134C17.3622 31.02 17.3789 31.0229 17.3956 31.0218C17.4222 31.0295 17.4495 31.035 17.4771 31.038C19.4003 31.4098 21.0586 32.6279 22.0002 34.3603C22.9604 32.6147 24.643 31.3934 26.5884 31.0299C26.6117 31.0196 26.6364 31.0141 26.6619 31.0134H26.6699L40.7442 28.6452V4L22.1303 7.13327C22.0437 7.14135 21.9564 7.14135 21.8698 7.13327L3.25586 4V28.6452L17.306 31.0053C17.3183 31.0119 17.3325 31.0148 17.3467 31.0133L17.3469 31.0134ZM13.4531 21.8979C12.6343 21.1009 12.2235 20.7011 12.2227 20.3005C12.222 19.8972 12.6368 19.4931 13.4691 18.6822L13.4691 18.6822L13.4691 18.6822C13.8433 18.3177 14.3018 17.871 14.8449 17.3052C14.8591 16.499 14.8474 15.8444 14.8378 15.3133C14.8173 14.1715 14.807 13.6004 15.0875 13.3198C15.3682 13.039 15.9402 13.0494 17.0848 13.0701C17.6067 13.0796 18.2475 13.0912 19.034 13.0783C19.6038 12.5229 20.0513 12.0548 20.4153 11.674C21.2052 10.8478 21.6014 10.4333 21.9985 10.4325C22.3981 10.4318 22.7986 10.8503 23.6022 11.6901C23.9635 12.0677 24.4062 12.5303 24.9669 13.0783C25.766 13.0927 26.4147 13.0808 26.9411 13.0712C28.0659 13.0506 28.632 13.0402 28.9118 13.3181C29.1952 13.5996 29.1849 14.1767 29.1642 15.3385C29.1548 15.865 29.1433 16.5116 29.1561 17.3052C29.7065 17.8801 30.1705 18.3317 30.5478 18.699C31.3666 19.4959 31.7774 19.8958 31.7782 20.2964C31.779 20.6997 31.3642 21.1037 30.5319 21.9146L30.5318 21.9146C30.1577 22.2791 29.6991 22.7258 29.1561 23.2916C29.1418 24.0979 29.1536 24.7525 29.1631 25.2836C29.1836 26.4253 29.1939 26.9965 28.9135 27.277C28.6327 27.5579 28.0607 27.5475 26.9161 27.5268H26.916H26.916C26.3942 27.5173 25.7534 27.5057 24.9669 27.5185C24.3972 28.0739 23.9496 28.5421 23.5856 28.9228C22.7958 29.7491 22.3995 30.1636 22.0025 30.1643C21.6028 30.1651 21.2023 29.7466 20.3987 28.9067C20.0375 28.5292 19.5948 28.0665 19.034 27.5185C18.2349 27.5042 17.586 27.516 17.0596 27.5257C15.9348 27.5463 15.3688 27.5566 15.089 27.2788C14.8057 26.9974 14.816 26.4204 14.8367 25.2591V25.259V25.259C14.8461 24.7324 14.8576 24.0857 14.8449 23.292V23.2916C14.2944 22.7168 13.8305 22.2652 13.4531 21.8979ZM19.3309 25.8436C19.5473 25.8429 19.7554 25.9289 19.9096 26.0825L21.9546 28.1573L23.9996 26.0825C24.1538 25.9289 24.3618 25.8429 24.5783 25.8436H27.4787V22.9129C27.478 22.6942 27.5631 22.4839 27.7152 22.3281L29.7685 20.2618L27.7152 18.1954C27.5631 18.0396 27.478 17.8294 27.4787 17.6107V14.6799H24.5783C24.3618 14.6807 24.1538 14.5947 23.9996 14.441L21.9546 12.3662L19.9096 14.441C19.7554 14.5946 19.5473 14.6807 19.3309 14.6799H16.4304V17.6107C16.4312 17.8294 16.346 18.0396 16.194 18.1954L14.1406 20.2618L16.194 22.3281C16.346 22.4839 16.4311 22.6942 16.4304 22.9129V25.8436H19.3309ZM3.25586 30.3193L17.1393 32.6581H17.139C18.1153 32.8445 19.0148 33.3204 19.7228 34.0251C20.4313 34.7301 20.9162 35.6322 21.1163 36.617L3.25586 33.6004V30.3193ZM42.3707 8.79395V34.2584C42.3721 34.6621 42.0818 35.0072 41.6861 35.0717C41.6328 35.075 38.3534 35.6275 34.4861 36.279L34.4843 36.2793C28.9042 37.2194 22.1013 38.3655 22.0001 38.3655C21.899 38.3655 15.1018 37.2204 9.52311 36.2805L9.52081 36.2801C5.65073 35.6281 2.36762 35.075 2.31422 35.0717C1.91846 35.0072 1.62818 34.6621 1.62963 34.2584V8.79395H0V36.8297L22 40.0002L44 36.8297V8.79395H42.3707ZM40.7433 33.6004L22.8834 36.617H22.8828C23.08 35.6218 23.57 34.7102 24.2886 34.0022C25.0071 33.2942 25.9207 32.8231 26.9088 32.65L40.7433 30.3193V33.6004Z" fill="#1DA1F3" />
                                            </svg>
                                        </div>
                                        <h2 class="wayBoxTitle leading-[1.2em] text-[20px] title-font font-bold text-white">
                                            Fast Distribution</h2>
                                        <p class="text-gray-11 mt-2 leading-5">Our platform utilizes AI and automation technology to deliver your music
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="animate-text w-full mb-[60px] lg:w-1/2 xl:w-1/3">
                            <a href="javascript:;" target="_self">
                                <div class="flex justify-center rounded-lg h-full px-[15px] py-[20px] mx-[40px] mb-[10px] border-t-[1px] border-r-[1px] border-[#FF984350] flex-col">
                                    <div class="flex flex-col">
                                        <div class="w-[44px] h-8 mb-3 inline-flex items-center justify-center text-secondary flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17.3469 31.0134C17.3622 31.02 17.3789 31.0229 17.3956 31.0218C17.4222 31.0295 17.4495 31.035 17.4771 31.038C19.4003 31.4098 21.0586 32.6279 22.0002 34.3603C22.9604 32.6147 24.643 31.3934 26.5884 31.0299C26.6117 31.0196 26.6364 31.0141 26.6619 31.0134H26.6699L40.7442 28.6452V4L22.1303 7.13327C22.0437 7.14135 21.9564 7.14135 21.8698 7.13327L3.25586 4V28.6452L17.306 31.0053C17.3183 31.0119 17.3325 31.0148 17.3467 31.0133L17.3469 31.0134ZM13.4531 21.8979C12.6343 21.1009 12.2235 20.7011 12.2227 20.3005C12.222 19.8972 12.6368 19.4931 13.4691 18.6822L13.4691 18.6822L13.4691 18.6822C13.8433 18.3177 14.3018 17.871 14.8449 17.3052C14.8591 16.499 14.8474 15.8444 14.8378 15.3133C14.8173 14.1715 14.807 13.6004 15.0875 13.3198C15.3682 13.039 15.9402 13.0494 17.0848 13.0701C17.6067 13.0796 18.2475 13.0912 19.034 13.0783C19.6038 12.5229 20.0513 12.0548 20.4153 11.674C21.2052 10.8478 21.6014 10.4333 21.9985 10.4325C22.3981 10.4318 22.7986 10.8503 23.6022 11.6901C23.9635 12.0677 24.4062 12.5303 24.9669 13.0783C25.766 13.0927 26.4147 13.0808 26.9411 13.0712C28.0659 13.0506 28.632 13.0402 28.9118 13.3181C29.1952 13.5996 29.1849 14.1767 29.1642 15.3385C29.1548 15.865 29.1433 16.5116 29.1561 17.3052C29.7065 17.8801 30.1705 18.3317 30.5478 18.699C31.3666 19.4959 31.7774 19.8958 31.7782 20.2964C31.779 20.6997 31.3642 21.1037 30.5319 21.9146L30.5318 21.9146C30.1577 22.2791 29.6991 22.7258 29.1561 23.2916C29.1418 24.0979 29.1536 24.7525 29.1631 25.2836C29.1836 26.4253 29.1939 26.9965 28.9135 27.277C28.6327 27.5579 28.0607 27.5475 26.9161 27.5268H26.916H26.916C26.3942 27.5173 25.7534 27.5057 24.9669 27.5185C24.3972 28.0739 23.9496 28.5421 23.5856 28.9228C22.7958 29.7491 22.3995 30.1636 22.0025 30.1643C21.6028 30.1651 21.2023 29.7466 20.3987 28.9067C20.0375 28.5292 19.5948 28.0665 19.034 27.5185C18.2349 27.5042 17.586 27.516 17.0596 27.5257C15.9348 27.5463 15.3688 27.5566 15.089 27.2788C14.8057 26.9974 14.816 26.4204 14.8367 25.2591V25.259V25.259C14.8461 24.7324 14.8576 24.0857 14.8449 23.292V23.2916C14.2944 22.7168 13.8305 22.2652 13.4531 21.8979ZM19.3309 25.8436C19.5473 25.8429 19.7554 25.9289 19.9096 26.0825L21.9546 28.1573L23.9996 26.0825C24.1538 25.9289 24.3618 25.8429 24.5783 25.8436H27.4787V22.9129C27.478 22.6942 27.5631 22.4839 27.7152 22.3281L29.7685 20.2618L27.7152 18.1954C27.5631 18.0396 27.478 17.8294 27.4787 17.6107V14.6799H24.5783C24.3618 14.6807 24.1538 14.5947 23.9996 14.441L21.9546 12.3662L19.9096 14.441C19.7554 14.5946 19.5473 14.6807 19.3309 14.6799H16.4304V17.6107C16.4312 17.8294 16.346 18.0396 16.194 18.1954L14.1406 20.2618L16.194 22.3281C16.346 22.4839 16.4311 22.6942 16.4304 22.9129V25.8436H19.3309ZM3.25586 30.3193L17.1393 32.6581H17.139C18.1153 32.8445 19.0148 33.3204 19.7228 34.0251C20.4313 34.7301 20.9162 35.6322 21.1163 36.617L3.25586 33.6004V30.3193ZM42.3707 8.79395V34.2584C42.3721 34.6621 42.0818 35.0072 41.6861 35.0717C41.6328 35.075 38.3534 35.6275 34.4861 36.279L34.4843 36.2793C28.9042 37.2194 22.1013 38.3655 22.0001 38.3655C21.899 38.3655 15.1018 37.2204 9.52311 36.2805L9.52081 36.2801C5.65073 35.6281 2.36762 35.075 2.31422 35.0717C1.91846 35.0072 1.62818 34.6621 1.62963 34.2584V8.79395H0V36.8297L22 40.0002L44 36.8297V8.79395H42.3707ZM40.7433 33.6004L22.8834 36.617H22.8828C23.08 35.6218 23.57 34.7102 24.2886 34.0022C25.0071 33.2942 25.9207 32.8231 26.9088 32.65L40.7433 30.3193V33.6004Z" fill="#1DA1F3" />
                                            </svg>
                                        </div>
                                        <h2 class="wayBoxTitle leading-[1.2em] text-[20px] title-font font-bold text-white">
                                            Keep 100% of Your Revenue</h2>
                                        <p class="text-gray-11 mt-2 leading-5">With our premium plan, you keep 100% of the money paid to Revoke Digital.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="animate-text w-full mb-[60px] lg:w-1/2 xl:w-1/3">
                            <a href="javascript:;" target="_self">
                                <div class="flex justify-center rounded-lg h-full px-[15px] py-[20px] mx-[40px] mb-[10px] border-t-[1px] border-r-[1px] border-[#FF984350] flex-col">
                                    <div class="flex flex-col">
                                        <div class="w-[44px] h-8 mb-3 inline-flex items-center justify-center text-secondary flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17.3469 31.0134C17.3622 31.02 17.3789 31.0229 17.3956 31.0218C17.4222 31.0295 17.4495 31.035 17.4771 31.038C19.4003 31.4098 21.0586 32.6279 22.0002 34.3603C22.9604 32.6147 24.643 31.3934 26.5884 31.0299C26.6117 31.0196 26.6364 31.0141 26.6619 31.0134H26.6699L40.7442 28.6452V4L22.1303 7.13327C22.0437 7.14135 21.9564 7.14135 21.8698 7.13327L3.25586 4V28.6452L17.306 31.0053C17.3183 31.0119 17.3325 31.0148 17.3467 31.0133L17.3469 31.0134ZM13.4531 21.8979C12.6343 21.1009 12.2235 20.7011 12.2227 20.3005C12.222 19.8972 12.6368 19.4931 13.4691 18.6822L13.4691 18.6822L13.4691 18.6822C13.8433 18.3177 14.3018 17.871 14.8449 17.3052C14.8591 16.499 14.8474 15.8444 14.8378 15.3133C14.8173 14.1715 14.807 13.6004 15.0875 13.3198C15.3682 13.039 15.9402 13.0494 17.0848 13.0701C17.6067 13.0796 18.2475 13.0912 19.034 13.0783C19.6038 12.5229 20.0513 12.0548 20.4153 11.674C21.2052 10.8478 21.6014 10.4333 21.9985 10.4325C22.3981 10.4318 22.7986 10.8503 23.6022 11.6901C23.9635 12.0677 24.4062 12.5303 24.9669 13.0783C25.766 13.0927 26.4147 13.0808 26.9411 13.0712C28.0659 13.0506 28.632 13.0402 28.9118 13.3181C29.1952 13.5996 29.1849 14.1767 29.1642 15.3385C29.1548 15.865 29.1433 16.5116 29.1561 17.3052C29.7065 17.8801 30.1705 18.3317 30.5478 18.699C31.3666 19.4959 31.7774 19.8958 31.7782 20.2964C31.779 20.6997 31.3642 21.1037 30.5319 21.9146L30.5318 21.9146C30.1577 22.2791 29.6991 22.7258 29.1561 23.2916C29.1418 24.0979 29.1536 24.7525 29.1631 25.2836C29.1836 26.4253 29.1939 26.9965 28.9135 27.277C28.6327 27.5579 28.0607 27.5475 26.9161 27.5268H26.916H26.916C26.3942 27.5173 25.7534 27.5057 24.9669 27.5185C24.3972 28.0739 23.9496 28.5421 23.5856 28.9228C22.7958 29.7491 22.3995 30.1636 22.0025 30.1643C21.6028 30.1651 21.2023 29.7466 20.3987 28.9067C20.0375 28.5292 19.5948 28.0665 19.034 27.5185C18.2349 27.5042 17.586 27.516 17.0596 27.5257C15.9348 27.5463 15.3688 27.5566 15.089 27.2788C14.8057 26.9974 14.816 26.4204 14.8367 25.2591V25.259V25.259C14.8461 24.7324 14.8576 24.0857 14.8449 23.292V23.2916C14.2944 22.7168 13.8305 22.2652 13.4531 21.8979ZM19.3309 25.8436C19.5473 25.8429 19.7554 25.9289 19.9096 26.0825L21.9546 28.1573L23.9996 26.0825C24.1538 25.9289 24.3618 25.8429 24.5783 25.8436H27.4787V22.9129C27.478 22.6942 27.5631 22.4839 27.7152 22.3281L29.7685 20.2618L27.7152 18.1954C27.5631 18.0396 27.478 17.8294 27.4787 17.6107V14.6799H24.5783C24.3618 14.6807 24.1538 14.5947 23.9996 14.441L21.9546 12.3662L19.9096 14.441C19.7554 14.5946 19.5473 14.6807 19.3309 14.6799H16.4304V17.6107C16.4312 17.8294 16.346 18.0396 16.194 18.1954L14.1406 20.2618L16.194 22.3281C16.346 22.4839 16.4311 22.6942 16.4304 22.9129V25.8436H19.3309ZM3.25586 30.3193L17.1393 32.6581H17.139C18.1153 32.8445 19.0148 33.3204 19.7228 34.0251C20.4313 34.7301 20.9162 35.6322 21.1163 36.617L3.25586 33.6004V30.3193ZM42.3707 8.79395V34.2584C42.3721 34.6621 42.0818 35.0072 41.6861 35.0717C41.6328 35.075 38.3534 35.6275 34.4861 36.279L34.4843 36.2793C28.9042 37.2194 22.1013 38.3655 22.0001 38.3655C21.899 38.3655 15.1018 37.2204 9.52311 36.2805L9.52081 36.2801C5.65073 35.6281 2.36762 35.075 2.31422 35.0717C1.91846 35.0072 1.62818 34.6621 1.62963 34.2584V8.79395H0V36.8297L22 40.0002L44 36.8297V8.79395H42.3707ZM40.7433 33.6004L22.8834 36.617H22.8828C23.08 35.6218 23.57 34.7102 24.2886 34.0022C25.0071 33.2942 25.9207 32.8231 26.9088 32.65L40.7433 30.3193V33.6004Z" fill="#1DA1F3" />
                                            </svg>
                                        </div>
                                        <h2 class="wayBoxTitle leading-[1.2em] text-[20px] title-font font-bold text-white">
                                            Rights Management</h2>
                                        <p class="text-gray-11 mt-2 leading-5">Revoke Digital monetizes and manages your rights across user-generated content</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="animate-text w-full mb-[60px] lg:w-1/2 xl:w-1/3">
                            <a href="javascript:;" target="_self">
                                <div class="flex justify-center rounded-lg h-full px-[15px] py-[20px] mx-[40px] mb-[10px] border-t-[1px] border-r-[1px] border-[#FF984350] flex-col">
                                    <div class="flex flex-col">
                                        <div class="w-[44px] h-8 mb-3 inline-flex items-center justify-center text-secondary flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17.3469 31.0134C17.3622 31.02 17.3789 31.0229 17.3956 31.0218C17.4222 31.0295 17.4495 31.035 17.4771 31.038C19.4003 31.4098 21.0586 32.6279 22.0002 34.3603C22.9604 32.6147 24.643 31.3934 26.5884 31.0299C26.6117 31.0196 26.6364 31.0141 26.6619 31.0134H26.6699L40.7442 28.6452V4L22.1303 7.13327C22.0437 7.14135 21.9564 7.14135 21.8698 7.13327L3.25586 4V28.6452L17.306 31.0053C17.3183 31.0119 17.3325 31.0148 17.3467 31.0133L17.3469 31.0134ZM13.4531 21.8979C12.6343 21.1009 12.2235 20.7011 12.2227 20.3005C12.222 19.8972 12.6368 19.4931 13.4691 18.6822L13.4691 18.6822L13.4691 18.6822C13.8433 18.3177 14.3018 17.871 14.8449 17.3052C14.8591 16.499 14.8474 15.8444 14.8378 15.3133C14.8173 14.1715 14.807 13.6004 15.0875 13.3198C15.3682 13.039 15.9402 13.0494 17.0848 13.0701C17.6067 13.0796 18.2475 13.0912 19.034 13.0783C19.6038 12.5229 20.0513 12.0548 20.4153 11.674C21.2052 10.8478 21.6014 10.4333 21.9985 10.4325C22.3981 10.4318 22.7986 10.8503 23.6022 11.6901C23.9635 12.0677 24.4062 12.5303 24.9669 13.0783C25.766 13.0927 26.4147 13.0808 26.9411 13.0712C28.0659 13.0506 28.632 13.0402 28.9118 13.3181C29.1952 13.5996 29.1849 14.1767 29.1642 15.3385C29.1548 15.865 29.1433 16.5116 29.1561 17.3052C29.7065 17.8801 30.1705 18.3317 30.5478 18.699C31.3666 19.4959 31.7774 19.8958 31.7782 20.2964C31.779 20.6997 31.3642 21.1037 30.5319 21.9146L30.5318 21.9146C30.1577 22.2791 29.6991 22.7258 29.1561 23.2916C29.1418 24.0979 29.1536 24.7525 29.1631 25.2836C29.1836 26.4253 29.1939 26.9965 28.9135 27.277C28.6327 27.5579 28.0607 27.5475 26.9161 27.5268H26.916H26.916C26.3942 27.5173 25.7534 27.5057 24.9669 27.5185C24.3972 28.0739 23.9496 28.5421 23.5856 28.9228C22.7958 29.7491 22.3995 30.1636 22.0025 30.1643C21.6028 30.1651 21.2023 29.7466 20.3987 28.9067C20.0375 28.5292 19.5948 28.0665 19.034 27.5185C18.2349 27.5042 17.586 27.516 17.0596 27.5257C15.9348 27.5463 15.3688 27.5566 15.089 27.2788C14.8057 26.9974 14.816 26.4204 14.8367 25.2591V25.259V25.259C14.8461 24.7324 14.8576 24.0857 14.8449 23.292V23.2916C14.2944 22.7168 13.8305 22.2652 13.4531 21.8979ZM19.3309 25.8436C19.5473 25.8429 19.7554 25.9289 19.9096 26.0825L21.9546 28.1573L23.9996 26.0825C24.1538 25.9289 24.3618 25.8429 24.5783 25.8436H27.4787V22.9129C27.478 22.6942 27.5631 22.4839 27.7152 22.3281L29.7685 20.2618L27.7152 18.1954C27.5631 18.0396 27.478 17.8294 27.4787 17.6107V14.6799H24.5783C24.3618 14.6807 24.1538 14.5947 23.9996 14.441L21.9546 12.3662L19.9096 14.441C19.7554 14.5946 19.5473 14.6807 19.3309 14.6799H16.4304V17.6107C16.4312 17.8294 16.346 18.0396 16.194 18.1954L14.1406 20.2618L16.194 22.3281C16.346 22.4839 16.4311 22.6942 16.4304 22.9129V25.8436H19.3309ZM3.25586 30.3193L17.1393 32.6581H17.139C18.1153 32.8445 19.0148 33.3204 19.7228 34.0251C20.4313 34.7301 20.9162 35.6322 21.1163 36.617L3.25586 33.6004V30.3193ZM42.3707 8.79395V34.2584C42.3721 34.6621 42.0818 35.0072 41.6861 35.0717C41.6328 35.075 38.3534 35.6275 34.4861 36.279L34.4843 36.2793C28.9042 37.2194 22.1013 38.3655 22.0001 38.3655C21.899 38.3655 15.1018 37.2204 9.52311 36.2805L9.52081 36.2801C5.65073 35.6281 2.36762 35.075 2.31422 35.0717C1.91846 35.0072 1.62818 34.6621 1.62963 34.2584V8.79395H0V36.8297L22 40.0002L44 36.8297V8.79395H42.3707ZM40.7433 33.6004L22.8834 36.617H22.8828C23.08 35.6218 23.57 34.7102 24.2886 34.0022C25.0071 33.2942 25.9207 32.8231 26.9088 32.65L40.7433 30.3193V33.6004Z" fill="#1DA1F3" />
                                            </svg>
                                        </div>
                                        <h2 class="wayBoxTitle leading-[1.2em] text-[20px] title-font font-bold text-white">
                                            Quarterly Payments</h2>
                                        <p class="text-gray-11 mt-2 leading-5">We pay our musicians every quarter so you can plan your income from streaming services.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="animate-text w-full mb-[60px] lg:w-1/2 xl:w-1/3">
                            <a href="javascript:;" target="_self">
                                <div class="flex justify-center rounded-lg h-full px-[15px] py-[20px] mx-[40px] mb-[10px] border-t-[1px] border-r-[1px] border-[#FF984350] flex-col">
                                    <div class="flex flex-col">
                                        <div class="w-[44px] h-8 mb-3 inline-flex items-center justify-center text-secondary flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17.3469 31.0134C17.3622 31.02 17.3789 31.0229 17.3956 31.0218C17.4222 31.0295 17.4495 31.035 17.4771 31.038C19.4003 31.4098 21.0586 32.6279 22.0002 34.3603C22.9604 32.6147 24.643 31.3934 26.5884 31.0299C26.6117 31.0196 26.6364 31.0141 26.6619 31.0134H26.6699L40.7442 28.6452V4L22.1303 7.13327C22.0437 7.14135 21.9564 7.14135 21.8698 7.13327L3.25586 4V28.6452L17.306 31.0053C17.3183 31.0119 17.3325 31.0148 17.3467 31.0133L17.3469 31.0134ZM13.4531 21.8979C12.6343 21.1009 12.2235 20.7011 12.2227 20.3005C12.222 19.8972 12.6368 19.4931 13.4691 18.6822L13.4691 18.6822L13.4691 18.6822C13.8433 18.3177 14.3018 17.871 14.8449 17.3052C14.8591 16.499 14.8474 15.8444 14.8378 15.3133C14.8173 14.1715 14.807 13.6004 15.0875 13.3198C15.3682 13.039 15.9402 13.0494 17.0848 13.0701C17.6067 13.0796 18.2475 13.0912 19.034 13.0783C19.6038 12.5229 20.0513 12.0548 20.4153 11.674C21.2052 10.8478 21.6014 10.4333 21.9985 10.4325C22.3981 10.4318 22.7986 10.8503 23.6022 11.6901C23.9635 12.0677 24.4062 12.5303 24.9669 13.0783C25.766 13.0927 26.4147 13.0808 26.9411 13.0712C28.0659 13.0506 28.632 13.0402 28.9118 13.3181C29.1952 13.5996 29.1849 14.1767 29.1642 15.3385C29.1548 15.865 29.1433 16.5116 29.1561 17.3052C29.7065 17.8801 30.1705 18.3317 30.5478 18.699C31.3666 19.4959 31.7774 19.8958 31.7782 20.2964C31.779 20.6997 31.3642 21.1037 30.5319 21.9146L30.5318 21.9146C30.1577 22.2791 29.6991 22.7258 29.1561 23.2916C29.1418 24.0979 29.1536 24.7525 29.1631 25.2836C29.1836 26.4253 29.1939 26.9965 28.9135 27.277C28.6327 27.5579 28.0607 27.5475 26.9161 27.5268H26.916H26.916C26.3942 27.5173 25.7534 27.5057 24.9669 27.5185C24.3972 28.0739 23.9496 28.5421 23.5856 28.9228C22.7958 29.7491 22.3995 30.1636 22.0025 30.1643C21.6028 30.1651 21.2023 29.7466 20.3987 28.9067C20.0375 28.5292 19.5948 28.0665 19.034 27.5185C18.2349 27.5042 17.586 27.516 17.0596 27.5257C15.9348 27.5463 15.3688 27.5566 15.089 27.2788C14.8057 26.9974 14.816 26.4204 14.8367 25.2591V25.259V25.259C14.8461 24.7324 14.8576 24.0857 14.8449 23.292V23.2916C14.2944 22.7168 13.8305 22.2652 13.4531 21.8979ZM19.3309 25.8436C19.5473 25.8429 19.7554 25.9289 19.9096 26.0825L21.9546 28.1573L23.9996 26.0825C24.1538 25.9289 24.3618 25.8429 24.5783 25.8436H27.4787V22.9129C27.478 22.6942 27.5631 22.4839 27.7152 22.3281L29.7685 20.2618L27.7152 18.1954C27.5631 18.0396 27.478 17.8294 27.4787 17.6107V14.6799H24.5783C24.3618 14.6807 24.1538 14.5947 23.9996 14.441L21.9546 12.3662L19.9096 14.441C19.7554 14.5946 19.5473 14.6807 19.3309 14.6799H16.4304V17.6107C16.4312 17.8294 16.346 18.0396 16.194 18.1954L14.1406 20.2618L16.194 22.3281C16.346 22.4839 16.4311 22.6942 16.4304 22.9129V25.8436H19.3309ZM3.25586 30.3193L17.1393 32.6581H17.139C18.1153 32.8445 19.0148 33.3204 19.7228 34.0251C20.4313 34.7301 20.9162 35.6322 21.1163 36.617L3.25586 33.6004V30.3193ZM42.3707 8.79395V34.2584C42.3721 34.6621 42.0818 35.0072 41.6861 35.0717C41.6328 35.075 38.3534 35.6275 34.4861 36.279L34.4843 36.2793C28.9042 37.2194 22.1013 38.3655 22.0001 38.3655C21.899 38.3655 15.1018 37.2204 9.52311 36.2805L9.52081 36.2801C5.65073 35.6281 2.36762 35.075 2.31422 35.0717C1.91846 35.0072 1.62818 34.6621 1.62963 34.2584V8.79395H0V36.8297L22 40.0002L44 36.8297V8.79395H42.3707ZM40.7433 33.6004L22.8834 36.617H22.8828C23.08 35.6218 23.57 34.7102 24.2886 34.0022C25.0071 33.2942 25.9207 32.8231 26.9088 32.65L40.7433 30.3193V33.6004Z" fill="#1DA1F3" />
                                            </svg>
                                        </div>
                                        <h2 class="wayBoxTitle leading-[1.2em] text-[20px] title-font font-bold text-white">
                                            Monetization</h2>
                                        <p class="text-gray-11 mt-2 leading-5">(UGC) on services like Facebook, Instagram, TikTok, Soundcloud, and more.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Testimonials -->
<?php /* ?>
<section>
    <div class="animate-text-wrapper bg-secBgBG py-10 pb-14 lg:py-14 xl:py-24">
        <div class="container">
            <div>
                <div>
                    <h2 class="animate-text text-[2rem] font-agoka font-black text-center capitalize leading-[1.4em] mb-2 md:mb-6 xl:text-[36px] lg:text-[28px] md:text-[30px]">
                        What our client <span class="text-secondary">say</span>
                        <br>about us
                    </h2>
                </div>
                <div class="relative">
                    <div class="swiper testimonialSwiper1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper testimonialSwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full border-t-[1px] border-r-[1px] border-[#FF984350] p-8 rounded-xl">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Revoke has Distributed over 1175+ Songs of our Label and has given the best Support.</p>
                                        <p class="">⭐️⭐️⭐️⭐️⭐️</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col">
                                                <span class="title-font text-[22px] text-gray-900">Kalam Ink</span>
                                                <span class="text-gray-500 text-sm">Musical Artist</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="!hidden swiper-pagination testimonialSwiperPagination  !-bottom-8 lg:!-bottom-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php */ ?>
<?php /*
<!-- Extra Features -->
<section>
    <div class="py-10  lg:py-12">
        <div class="container">
            <div>
                <div class="mx-auto max-w-screen-2xl">
                    <!-- text - start -->
                    <div class="mb-10 md:mb-16">
                        <h2 class="mb-4 text-center text-2xl font-bold md:mb-6 lg:text-3xl"></h2>
                        <h2 class="text-[2rem] font-agoka font-black text-center capitalize leading-[1.4em] mb-2 md:mb-6 xl:text-[36px] lg:text-[28px] md:text-[30px]">
                            No <span class="text-secondary">hidden</span> fees, all
                            these are
                            included</h2>

                        <p class="mx-auto max-w-screen-md text-center sm:px-10 md:text-lg">Lorem ipsum dolor sit
                            amet consectetur
                            adipisicing elit. Quo culpa magni neque ex expedita hic quae est, illo vel doloremque
                            suscipit
                            totam cum incidunt. Sit dignissimos a ex dolorem beatae?</p>
                    </div>
                    <!-- text - end -->

                    <div class="grid gap-4 sm:grid-cols-2 md:gap-8 xl:grid-cols-3">
                        <!-- feature - start -->
                        <div class="flex divide-x divide-black rounded-lg border border-black">
                            <div class="flex items-center p-2 text-primary md:p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <div class="p-4 md:p-6">
                                <h3 class="mb-2 text-lg font-semibold md:text-xl text-black">Unlimited Music</h3>
                                <p class="text-[#727272] leading-5">Free yourself with unlimited music releases!</p>
                            </div>
                        </div>
                        <!-- feature - end -->

                        <!-- feature - start -->
                        <div class="flex divide-x divide-black rounded-lg border border-black">
                            <div class="flex items-center p-2 text-primary md:p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <div class="p-4 md:p-6">
                                <h3 class="mb-2 text-lg font-semibold md:text-xl text-black">Royalties</h3>
                                <p class="text-[#727272] leading-5">Keep 100% of your royalties, get free ISRCs &
                                    Barcodes.</p>
                            </div>
                        </div>
                        <!-- feature - end -->
                        <!-- feature - start -->
                        <div class="flex divide-x divide-black rounded-lg border border-black">
                            <div class="flex items-center p-2 text-primary md:p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <div class="p-4 md:p-6">
                                <h3 class="mb-2 text-lg font-semibold md:text-xl text-black">YouTube Content ID</h3>
                                <p class="text-[#727272] leading-5">YouTube Content ID & pre-orders at no extra cost.
                                </p>
                            </div>
                        </div>
                        <!-- feature - end -->
                        <!-- feature - start -->
                        <div class="flex divide-x divide-black rounded-lg border border-black">
                            <div class="flex items-center p-2 text-primary md:p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <div class="p-4 md:p-6">
                                <h3 class="mb-2 text-lg font-semibold md:text-xl text-black">Report's</h3>
                                <p class="text-[#727272] leading-5">Fully transparent reporting</p>
                            </div>
                        </div>
                        <!-- feature - end -->
                        <!-- feature - start -->
                        <div class="flex divide-x divide-black rounded-lg border border-black">
                            <div class="flex items-center p-2 text-primary md:p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <div class="p-4 md:p-6">
                                <h3 class="mb-2 text-lg font-semibold md:text-xl text-black">Unlimited Music</h3>
                                <p class="text-[#727272] leading-5">Free yourself with unlimited music releases!</p>
                            </div>
                        </div>
                        <!-- feature - end -->

                        <!-- feature - start -->
                        <div class="flex divide-x divide-black rounded-lg border border-black">
                            <div class="flex items-center p-2 text-primary md:p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <div class="p-4 md:p-6">
                                <h3 class="mb-2 text-lg font-semibold md:text-xl text-black">Royalties</h3>
                                <p class="text-[#727272] leading-5">Keep 100% of your royalties, get free ISRCs &
                                    Barcodes.</p>
                            </div>
                        </div>
                        <!-- feature - end -->

                    </div>

                    <div class="text-center py-5 pb-10 lg:pb-18 lg:pt-10">
                        <a href="<?= get_permalink(28); ?>" class="btn btn-primary px-14">Learn More</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

*/ ?>


<!-- FAQ's -->
<section>
    <div class="animate-text-wrapper py-10 pt-10 bg-darkPrimaryBg xl:pt-28">
        <div class="container">
            <div>
                <!-- text - start -->
                <div class="mb-7 md:mb-16 xl:mb-12">
                    <h2 class="animate-text text-[1.5rem] font-agoka font-black text-center capitalize leading-[1.4em] mb-2 md:mb-6 xl:text-[36px] lg:text-[28px] md:text-[30px]">
                        FAQ's</h2>

                </div>
                <!-- text - end -->
                <div class="flex -mx-[20px] flex-col lg:flex-row">
                    <div class="accordion-group accordion-group-hover w-full px-[20px]">
                        <div class="accordion mb-[20px]">
                            <input type="checkbox" id="toggle-1" class="accordion-toggle" />
                            <label for="toggle-1" class="accordion-title relative !pr-12 !pl-5  lg:!pr-10 border-t-[2px] border-r-[2px] border-b-[0] border-l-[0] border-[#FF984350] rounded-lg">
                                <span class="text-lg lg:text-xl">How can I trust that my music will actually make it onto popular streaming platforms through Revoke Digital?</span>
                                <span class="text-sm text-content3 font-normal hidden lg:block">Revoke Digital has partnerships with all major streaming platforms.</span>
                                <span class="accordion-arrow w-[25px] h-[25px] text-white absolute top-[50%] right-3 -translate-y-[50%]">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                        <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                    </svg>
                                </span>
                            </label>
                            <div class="accordion-content text-content2">
                                <div class="min-h-0">Revoke Digital has partnerships with all major streaming platforms, ensuring that your music is efficiently distributed to platforms like Spotify, Apple Music, Amazon Music, and more.

                                </div>
                            </div>
                        </div>
                        <div class="accordion mb-[20px]">
                            <input type="checkbox" id="toggle-11" class="accordion-toggle" />
                            <label for="toggle-11" class="accordion-title relative !pr-12 !pl-5  lg:!pr-10 border-t-[2px] border-r-[2px] border-b-[0] border-l-[0] border-[#FF984350] rounded-lg">
                                <span class="text-lg lg:text-xl">Do I need to pay to be part of Revoke Digital?</span>
                                <span class="text-sm text-content3 font-normal hidden lg:block">Revoke Digital does not charge you to register and distribute your content...</span>
                                <span class="accordion-arrow w-[25px] h-[25px] text-white absolute top-[50%] right-3 -translate-y-[50%]">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                        <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                    </svg>
                                </span>
                            </label>
                            <div class="accordion-content text-content2">
                                <div class="min-h-0">Revoke Digital does not charge you to register and distribute your content. We only earn a percentage of the revenue generated by plays, views and downloads of your content. That’s why we’re always innovating, evaluating, and optimizing our workflow for best practices. We share everything we learn with our clients, creating backend tools and frontend strategies to help artists make the most of their space in the volatile music market.</div>
                            </div>
                        </div>
                        <div class="accordion mb-[20px]">
                            <input type="checkbox" id="toggle-12" class="accordion-toggle" />
                            <label for="toggle-12" class="accordion-title relative !pr-12 !pl-5  lg:!pr-10 border-t-[2px] border-r-[2px] border-b-[0] border-l-[0] border-[#FF984350] rounded-lg">
                                <span class="text-lg lg:text-xl">What specific data and insights will I receive about my audience through Revoke Digital's analytics tools?</span>
                                <span class="text-sm text-content3 font-normal hidden lg:block">Our analytics tools provide you with comprehensive data on your audience demographics...
                                </span>
                                <span class="accordion-arrow w-[25px] h-[25px] text-white absolute top-[50%] right-3 -translate-y-[50%]">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                        <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                    </svg>
                                </span>
                            </label>
                            <div class="accordion-content text-content2">
                                <div class="min-h-0">Our analytics tools provide you with comprehensive data on your audience demographics, listening behaviors, geographic locations, and more, helping you make informed decisions about your music promotion and career strategy.</div>
                            </div>
                        </div>
                        <div class="accordion mb-[20px]">
                            <input type="checkbox" id="toggle-13" class="accordion-toggle" />
                            <label for="toggle-13" class="accordion-title relative !pr-12 !pl-5  lg:!pr-10 border-t-[2px] border-r-[2px] border-b-[0] border-l-[0] border-[#FF984350] rounded-lg">
                                <span class="text-lg lg:text-xl">Are there any limitations or additional costs associated with distributing my music internationally using Revoke Digital?</span>
                                <span class="text-sm text-content3 font-normal hidden lg:block">There are no limitations on distributing your music internationally through Revoke Digital...</span>
                                <span class="accordion-arrow w-[25px] h-[25px] text-white absolute top-[50%] right-3 -translate-y-[50%]">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                        <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                    </svg>
                                </span>
                            </label>
                            <div class="accordion-content text-content2">
                                <div class="min-h-0">There are no limitations on distributing your music internationally through Revoke Digital, and there are no additional fees for global distribution. Your music will be available to listeners worldwide without any extra charges.
                                </div>
                            </div>
                        </div>
                        <div class="accordion mb-[20px]">
                            <input type="checkbox" id="toggle-14" class="accordion-toggle" />
                            <label for="toggle-14" class="accordion-title relative !pr-12 !pl-5  lg:!pr-10 border-t-[2px] border-r-[2px] border-b-[0] border-l-[0] border-[#FF984350] rounded-lg">
                                <span class="text-lg lg:text-xl">When and how can I expect to receive my royalty payments through Revoke Digital's platform?</span>
                                <span class="text-sm text-content3 font-normal hidden lg:block">Royalty payments are processed according to our payment schedule...</span>
                                <span class="accordion-arrow w-[25px] h-[25px] text-white absolute top-[50%] right-3 -translate-y-[50%]">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                        <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                    </svg>
                                </span>
                            </label>
                            <div class="accordion-content text-content2">
                                <div class="min-h-0">Royalty payments are processed according to our payment schedule, which typically involves quarterly payouts depending on the revenue earned from your music streams and downloads. Payments are made directly to your designated account.</div>
                            </div>
                        </div>
                        <div class="accordion mb-[20px]">
                            <input type="checkbox" id="toggle-15" class="accordion-toggle" />
                            <label for="toggle-15" class="accordion-title relative !pr-12 !pl-5  lg:!pr-10 border-t-[2px] border-r-[2px] border-b-[0] border-l-[0] border-[#FF984350] rounded-lg">
                                <span class="text-lg lg:text-xl">Does Revoke Digital offer any services to help me promote my music after it's distributed, and how effective are these services?</span>
                                <span class="text-sm text-content3 font-normal hidden lg:block">Revoke Digital offers various promotional services to help you market your music effectively.</span>
                                <span class="accordion-arrow w-[25px] h-[25px] text-white absolute top-[50%] right-3 -translate-y-[50%]">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                        <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                    </svg>
                                </span>
                            </label>
                            <div class="accordion-content text-content2">
                                <div class="min-h-0">
                                    <p>Revoke Digital offers various promotional services to help you market your music effectively. These include playlist pitching, social media campaigns, email marketing, digital advertising, and artist spotlight features on our platform.</p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion mb-[20px]">
                            <input type="checkbox" id="toggle-16" class="accordion-toggle" />
                            <label for="toggle-16" class="accordion-title relative !pr-12 !pl-5  lg:!pr-10 border-t-[2px] border-r-[2px] border-b-[0] border-l-[0] border-[#FF984350] rounded-lg">
                                <span class="text-lg lg:text-xl">If I encounter any technical issues or have questions about the distribution process, what support options are available to me through Revoke Digital?</span>
                                <span class="text-sm text-content3 font-normal hidden lg:block">If you encounter any technical issues or have questions about the distribution process...</span>
                                <span class="accordion-arrow w-[25px] h-[25px] text-white absolute top-[50%] right-3 -translate-y-[50%]">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                        <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                    </svg>
                                </span>
                            </label>
                            <div class="accordion-content text-content2">
                                <div class="min-h-0">
                                    <p>If you encounter any technical issues or have questions about the distribution process, our customer support team is available to assist you. You can reach out to us via email, phone, or our online support portal, and we'll promptly address your concerns to ensure a smooth experience.</p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>

<script>
    var swiper = new Swiper(".testimonialSwiper1", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        speed: 10000,
        autoplay: {
            enabled: true,
            delay: 1000,
        },
        centeredSlides: true,
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3.5,
            },
        },
    });
    var swiper = new Swiper(".testimonialSwiper2", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        speed: 10000,
        autoplay: {
            enabled: true,
            delay: 2000,
            reverseDirection: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3.5,
            },
        },
    });
</script>
<script>
    var swiper = new Swiper(".storesSwiper", {
        slidesPerView: 2,
        spaceBetween: 0,
        pagination: {
            el: ".storesSwiperPagination",
            clickable: true,
        },
        loop: true,
        speed: 5000,
        autoplay: {
            enabled: true,
            delay: 1000,
        },
        breakpoints: {
            480: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3,
            },
            1260: {
                slidesPerView: 5,
            },
        },
    });
    // var swiper = new Swiper(".becomeAArtist", {
    //     slidesPerView: 2,
    //     spaceBetween: 0,
    //     loop: true,
    //     autoplay: true,
    //     speed: 5000,
    //     autoplay: {
    //         // enabled: true,
    //         delay: 0,
    //     },
    //     breakpoints: {
    //         480: {
    //             slidesPerView: 2,
    //         },
    //         768: {
    //             slidesPerView: 2,
    //         },
    //         1024: {
    //             slidesPerView: 2,
    //         },
    //         1260: {
    //             slidesPerView: 2,
    //         },
    //     },
    // });
</script>

<script>
    //text animation
    function hide(elem, direction) {
        direction = direction | 1;
        gsap.to(elem, {
            autoAlpha: 0
        });
    }


    function animateTextUp(elem, direction) {
        direction = direction | 1;

        var from = {
            y: -100,
            autoAlpha: 0,
        };
        var to = {
            y: 0,
            autoAlpha: 1,
        };

        if (elem.classList.contains("animate-from-left")) {
            from = {
                x: -100,
                autoAlpha: 0,
            };
            to = {
                x: 0,
                autoAlpha: 1,
            };
        }

        var duration = 1;
        var ease = "power1.out";
        if (direction == 1) {
            to.duration = duration;
            to.ease = ease;
            gsap.fromTo(elem, from, to);
        } else {
            from.duration = duration;
            from.ease = ease;
            gsap.fromTo(elem, to, from);
        }
    }

    function animateTextDown(elem, direction) {
        direction = direction | 1;
        var from = {
            y: 100,
            autoAlpha: 0,
        };
        var to = {
            y: 0,
            autoAlpha: 1,
        };

        if (elem.classList.contains("animate-from-left")) {
            from = {
                x: -100,
                autoAlpha: 0,
            };
            to = {
                x: 0,
                autoAlpha: 1,
            };
        }

        var duration = 1;
        var ease = "power1.out";
        if (direction == 1) {
            to.duration = duration;
            to.ease = ease;
            gsap.fromTo(elem, from, to);
        } else {
            from.duration = duration;
            from.ease = ease;
            gsap.fromTo(elem, to, from);
        }
    }


    gsap.utils.toArray(".animate-text-wrapper").forEach((section1, i) => {
        section1.texts = section1.querySelectorAll(".animate-text");
        section1.texts.forEach((textel, i) => {
            hide(textel); // assure that the element is hidden when scrolled into view

            ScrollTrigger.create({
                trigger: section1,
                onEnter: function() {
                    animateTextDown(textel)
                },

                start: "top 85%",
                end: "bottom 8%",
            });
        })
    })


    gsap.utils.toArray(".animate-text-section").forEach((section1, i) => {
        section1.texts = section1.querySelectorAll(".animate-section-text");
        section1.texts.forEach((textel, i) => {
            // hide(textel); // assure that the element is hidden when scrolled into view

            ScrollTrigger.create({
                trigger: section1,
                onEnter: function() {
                    textel.classList.add("slide-up-box");
                    textel.classList.remove("add-text-effect");
                },

                start: "top 50%",
                end: "bottom 8%",
            });
        })


    })
</script>