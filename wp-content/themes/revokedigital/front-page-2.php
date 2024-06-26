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
                        <p class="mb-4 font-semibold text-white md:mb-6 md:text-lg xl:text-xl">Revoke Digital
                        </p>

                        <h1 class="mb-8 text-5xl font-bold text-white font-nexaBold tracking-widest">Sell Your Music
                            <br>Worldwide
                        </h1>

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
<section>
    <div class="py-10 lg:py-14">
        <div class="container">
            <div>
                <div class="mx-auto max-w-screen-2xl">
                    <div class="mb-10 md:mb-10">
                        <h2 class="text-[2rem] font-nexaBold font-black text-center capitalize leading-10 mb-2 md:mb-6 xl:text-[42px] lg:text-[32px] md:text-[36px]">
                        Ready to go Global with <span class="text-secondary">DSP's</span></h2>

                        <p class="mx-auto max-w-screen-md text-center sm:px-10 md:text-lg">Revoke Digital
                            understands what it takes
                            to create music and share it to the world.
                            We not only display your data to discover what to do with it</p>
                    </div>

                    <div class="-mx-[15px]">
                        <div class="swiper storesSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="border-t-[8px] border-primary">
                                            <div class="relative pt-[50%] bg-white">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full border-[1px] border-primary">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/hun-logo.png" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="border-t-[8px] border-primary">
                                            <div class="relative pt-[50%] bg-white">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full border-[1px] border-primary">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/jio-logo.jpg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="border-t-[8px] border-primary">
                                            <div class="relative pt-[50%] bg-white">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full border-[1px] border-primary">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/music-logo.jpg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="border-t-[8px] border-primary">
                                            <div class="relative pt-[50%] bg-white">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full border-[1px] border-primary">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/yt-logo.jpg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="border-t-[8px] border-primary">
                                            <div class="relative pt-[50%] bg-white">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full border-[1px] border-primary">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/spotify-logo.png" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="border-t-[8px] border-primary">
                                            <div class="relative pt-[50%] bg-white">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full border-[1px] border-primary">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/amazon-logo.jpg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full mb-[20px] p-4 pt-0">
                                        <div class="border-t-[8px] border-primary">
                                            <div class="relative pt-[50%] bg-white">
                                                <a href="javascript:;" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-full border-[1px] border-primary">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/tidal-logo.jpg" alt="" class="absolute left-0 right-0 top-0 bottom-0 m-auto max-h-full w-auto p-[5px] !object-contain lg:p-[20px]">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pb-8">
                        <a href="<?= get_permalink(28); ?>" class="btn btn-outline-primary text-black lg:px-14">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Services -->
<section>
    <div class="bg-secBgBG py-14">
        <div class="container">
            <div>
                <div class="mb-[58px] sm:mb-[32px]">
                    <h2 class="text-[2rem] font-nexaBold font-black text-center capitalize leading-10 mb-2 md:mb-6 xl:text-[42px] lg:text-[32px] md:text-[36px]">
                        Our <span class="text-secondary">Services</span></h2>
                    <p class="mx-auto max-w-screen-md text-center sm:px-10 md:text-lg">Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Culpa voluptas fuga temporibus ab deserunt</p>
                </div>
                <div>
                    <div class="flex -m-[5px] flex-wrap justify-center -mx-[3px]">
                        <div class="w-1/2 mb-[10px] sm:mb-[6px] lg:w-1/4">
                            <a href="javascript:;" target="_self">
                                <div class="flex justify-center rounded-lg h-full px-[15px] py-[42px] mx-[5px] mb-[10px] shadow-serviceSec bg-white border-[1px] border-white flex-col xl:px-[20px] sm:mx-[3px] sm:px-[16px]">
                                    <div class="flex flex-col items-center">
                                        <div class="w-[44px] h-8 mb-3 inline-flex items-center justify-center text-secondary flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17.3469 31.0134C17.3622 31.02 17.3789 31.0229 17.3956 31.0218C17.4222 31.0295 17.4495 31.035 17.4771 31.038C19.4003 31.4098 21.0586 32.6279 22.0002 34.3603C22.9604 32.6147 24.643 31.3934 26.5884 31.0299C26.6117 31.0196 26.6364 31.0141 26.6619 31.0134H26.6699L40.7442 28.6452V4L22.1303 7.13327C22.0437 7.14135 21.9564 7.14135 21.8698 7.13327L3.25586 4V28.6452L17.306 31.0053C17.3183 31.0119 17.3325 31.0148 17.3467 31.0133L17.3469 31.0134ZM13.4531 21.8979C12.6343 21.1009 12.2235 20.7011 12.2227 20.3005C12.222 19.8972 12.6368 19.4931 13.4691 18.6822L13.4691 18.6822L13.4691 18.6822C13.8433 18.3177 14.3018 17.871 14.8449 17.3052C14.8591 16.499 14.8474 15.8444 14.8378 15.3133C14.8173 14.1715 14.807 13.6004 15.0875 13.3198C15.3682 13.039 15.9402 13.0494 17.0848 13.0701C17.6067 13.0796 18.2475 13.0912 19.034 13.0783C19.6038 12.5229 20.0513 12.0548 20.4153 11.674C21.2052 10.8478 21.6014 10.4333 21.9985 10.4325C22.3981 10.4318 22.7986 10.8503 23.6022 11.6901C23.9635 12.0677 24.4062 12.5303 24.9669 13.0783C25.766 13.0927 26.4147 13.0808 26.9411 13.0712C28.0659 13.0506 28.632 13.0402 28.9118 13.3181C29.1952 13.5996 29.1849 14.1767 29.1642 15.3385C29.1548 15.865 29.1433 16.5116 29.1561 17.3052C29.7065 17.8801 30.1705 18.3317 30.5478 18.699C31.3666 19.4959 31.7774 19.8958 31.7782 20.2964C31.779 20.6997 31.3642 21.1037 30.5319 21.9146L30.5318 21.9146C30.1577 22.2791 29.6991 22.7258 29.1561 23.2916C29.1418 24.0979 29.1536 24.7525 29.1631 25.2836C29.1836 26.4253 29.1939 26.9965 28.9135 27.277C28.6327 27.5579 28.0607 27.5475 26.9161 27.5268H26.916H26.916C26.3942 27.5173 25.7534 27.5057 24.9669 27.5185C24.3972 28.0739 23.9496 28.5421 23.5856 28.9228C22.7958 29.7491 22.3995 30.1636 22.0025 30.1643C21.6028 30.1651 21.2023 29.7466 20.3987 28.9067C20.0375 28.5292 19.5948 28.0665 19.034 27.5185C18.2349 27.5042 17.586 27.516 17.0596 27.5257C15.9348 27.5463 15.3688 27.5566 15.089 27.2788C14.8057 26.9974 14.816 26.4204 14.8367 25.2591V25.259V25.259C14.8461 24.7324 14.8576 24.0857 14.8449 23.292V23.2916C14.2944 22.7168 13.8305 22.2652 13.4531 21.8979ZM19.3309 25.8436C19.5473 25.8429 19.7554 25.9289 19.9096 26.0825L21.9546 28.1573L23.9996 26.0825C24.1538 25.9289 24.3618 25.8429 24.5783 25.8436H27.4787V22.9129C27.478 22.6942 27.5631 22.4839 27.7152 22.3281L29.7685 20.2618L27.7152 18.1954C27.5631 18.0396 27.478 17.8294 27.4787 17.6107V14.6799H24.5783C24.3618 14.6807 24.1538 14.5947 23.9996 14.441L21.9546 12.3662L19.9096 14.441C19.7554 14.5946 19.5473 14.6807 19.3309 14.6799H16.4304V17.6107C16.4312 17.8294 16.346 18.0396 16.194 18.1954L14.1406 20.2618L16.194 22.3281C16.346 22.4839 16.4311 22.6942 16.4304 22.9129V25.8436H19.3309ZM3.25586 30.3193L17.1393 32.6581H17.139C18.1153 32.8445 19.0148 33.3204 19.7228 34.0251C20.4313 34.7301 20.9162 35.6322 21.1163 36.617L3.25586 33.6004V30.3193ZM42.3707 8.79395V34.2584C42.3721 34.6621 42.0818 35.0072 41.6861 35.0717C41.6328 35.075 38.3534 35.6275 34.4861 36.279L34.4843 36.2793C28.9042 37.2194 22.1013 38.3655 22.0001 38.3655C21.899 38.3655 15.1018 37.2204 9.52311 36.2805L9.52081 36.2801C5.65073 35.6281 2.36762 35.075 2.31422 35.0717C1.91846 35.0072 1.62818 34.6621 1.62963 34.2584V8.79395H0V36.8297L22 40.0002L44 36.8297V8.79395H42.3707ZM40.7433 33.6004L22.8834 36.617H22.8828C23.08 35.6218 23.57 34.7102 24.2886 34.0022C25.0071 33.2942 25.9207 32.8231 26.9088 32.65L40.7433 30.3193V33.6004Z" fill="#1DA1F3" />
                                            </svg>
                                        </div>
                                        <h2 class="wayBoxTitle leading-[1.2em] text-[16px] title-font font-extrabold text-center text-black">
                                            Music <br>Distribution</h2>
                                        <p class="text-gray-11 text-center mt-2 leading-5 hidden lg:block">Keep 100%
                                            of your royalties, get free ISRCs &amp;
                                            Barcodes.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="w-1/2 mb-[10px] sm:mb-[6px] lg:w-1/4">
                            <a href="javascript:;" target="_self">
                                <div class="flex justify-center rounded-lg h-full px-[15px] py-[42px] mx-[5px] mb-[10px] shadow-serviceSec bg-white border-[1px] border-white flex-col xl:px-[20px] sm:mx-[3px] sm:px-[16px]">
                                    <div class="flex flex-col items-center">
                                        <div class="w-[44px] h-8 mb-3 inline-flex items-center justify-center text-secondary flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                                <path d="M38.8552 13.4589L21.1492 10.0541V10.0544C20.2792 9.88639 19.3791 10.1118 18.6912 10.6706L11.3535 16.6141C13.8847 16.1846 16.483 16.3969 18.911 17.2312C21.3389 18.0659 23.5189 19.4961 25.2511 21.3911L29.6832 22.0881H29.6829C30.3652 22.1962 30.9398 22.6565 31.1946 23.2989L33.1319 28.1345H22.169C22.0518 28.1345 21.9342 28.1417 21.8241 28.1493V28.1489C20.5329 28.2004 19.3647 28.9286 18.7495 30.065C18.134 31.2013 18.1632 32.5774 18.8255 33.6869C19.4882 34.7964 20.6862 35.4744 21.9781 35.4718H33.2345C36.9688 35.5776 40.6491 34.1471 43.9692 32.544C44.0364 32.5319 43.9673 13.5248 43.9915 13.4955H43.9912C43.9918 13.4856 43.9882 13.4758 43.981 13.4689C43.9742 13.4617 43.9643 13.4581 43.9545 13.4588L38.8552 13.4589Z" fill="currentColor" />
                                                <path d="M1.57287 41.7094C0.971115 41.7182 0.488238 42.2083 0.488238 42.81C0.488238 43.4118 0.971081 43.9018 1.57287 43.9107H29.544C30.1451 43.9015 30.6276 43.4114 30.6276 42.81C30.6276 42.2086 30.1451 41.7185 29.5436 41.7094H23.7249C25.0896 40.3532 26.1588 38.7291 26.8657 36.9399H21.9787C20.2809 36.9389 18.6931 36.0984 17.7376 34.6947L13.922 38.4517C13.8925 38.4517 8.45542 33.0952 8.45542 33.0952C7.85825 32.5088 7.47561 31.7387 7.36953 30.9083C6.84082 27.3483 11.4108 25.1807 13.9072 27.7459C14.6007 27.0564 15.5294 26.6548 16.5069 26.6221C17.4843 26.5893 18.4379 26.928 19.1756 27.5697C20.0627 26.9798 21.1043 26.6657 22.1696 26.6673H26.8657C23.1933 17.2046 10.5401 14.818 3.69383 22.3236C-1.39867 27.5468 -1.19162 36.7155 4.1046 41.7093L1.57287 41.7094Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <h2 class="wayBoxTitle leading-[1.2em] text-[16px] title-font font-extrabold text-center text-black" style="height: 38.375px;">
                                            Youtube <br>Content Id </h2>
                                        <p class="text-gray-11 text-center mt-2 leading-5 hidden lg:block">Lorem
                                            ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="w-1/2 mb-[10px] sm:mb-[6px] lg:w-1/4">
                            <a href="javascript:;" target="_self">
                                <div class="flex justify-center rounded-lg h-full px-[15px] py-[42px] mx-[5px] mb-[10px] shadow-serviceSec bg-white border-[1px] border-white flex-col xl:px-[20px] sm:mx-[3px] sm:px-[16px]">
                                    <div class="flex flex-col items-center">
                                        <div class="w-[44px] h-8 mb-3 inline-flex items-center justify-center text-secondary flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M42.4888 14.358L42.4895 14.3588L42.4887 14.3585C42.4887 14.3584 42.4888 14.3582 42.4888 14.358ZM39.0635 10.9039L42.4888 14.358C42.7445 12.3649 42.403 10.3398 41.5085 8.54442C40.6141 6.74855 39.2079 5.26437 37.4708 4.28334C33.9262 2.28448 28.202 2.12516 22.5118 7.44613L26.1979 10.7848C26.3661 10.9384 26.4648 11.1551 26.4711 11.3843C26.4773 11.6135 26.3907 11.835 26.231 11.998C23.9277 14.3242 19.869 14.4745 17.6492 12.3408C17.6492 12.3408 4.80198 25.1992 4.75213 25.2578C4.29727 25.8305 4.16117 26.5973 4.39106 27.2938C4.62126 27.9904 5.18564 28.521 5.89007 28.7031C6.59419 28.8853 7.34192 28.6935 7.87517 28.1944H7.87484L13.491 22.5306C13.8137 22.2047 14.3364 22.2047 14.6591 22.5306C14.9815 22.8562 14.9815 23.3845 14.6591 23.7101C14.6591 23.7101 9.06008 29.3659 9.05188 29.3822C8.51306 29.9276 8.3035 30.7216 8.50191 31.4655C8.69996 32.2094 9.2762 32.79 10.0134 32.9884C10.7504 33.1868 11.5361 32.9732 12.0749 32.4276V32.428L17.5999 26.8056C17.753 26.6463 17.9632 26.5552 18.1833 26.5529C18.4033 26.5509 18.6149 26.6373 18.7716 26.7933C18.9281 26.9493 19.0166 27.1623 19.0173 27.3845C19.0179 27.6065 18.9307 27.8198 18.7752 27.9768V27.9771C18.7752 27.9771 13.2753 33.5902 13.2592 33.5985C12.741 34.1685 12.5636 34.974 12.7932 35.712C13.023 36.4499 13.6248 37.008 14.3725 37.1763C15.1202 37.3442 15.8997 37.0968 16.4179 36.5268V36.5178L21.9428 30.9468C22.2682 30.6209 22.7929 30.6209 23.1182 30.9468C23.2733 31.1032 23.3602 31.3155 23.3602 31.5367C23.3602 31.758 23.2733 31.9703 23.1182 32.1266L17.6923 37.6055C17.309 38.1567 17.2027 38.8575 17.405 39.4994C17.6077 40.1413 18.096 40.6504 18.7247 40.8759C19.3531 41.1012 20.05 41.0167 20.6078 40.6474H20.6081L27.7902 33.525C27.6206 33.4031 27.4603 33.2689 27.3097 33.1235L23.2488 29.0244C22.5749 28.3397 22.1967 27.4134 22.1967 26.4479C22.1967 25.4823 22.5749 24.5559 23.2488 23.871C23.8151 23.3046 24.5474 22.9376 25.3365 22.825C24.8928 21.7621 24.9738 20.5499 25.5552 19.5569C26.1363 18.5639 27.1494 17.9081 28.2854 17.7888C27.9486 16.9091 27.9624 15.9318 28.3241 15.062C28.6859 14.1925 29.367 13.4983 30.2249 13.1254C31.0828 12.7524 32.0503 12.7295 32.9242 13.0621C33.0223 12.2477 33.3837 11.4892 33.9527 10.9039C34.6332 10.2242 35.5514 9.84334 36.5081 9.84334C37.465 9.84334 38.3833 10.2243 39.0635 10.9039ZM20.7186 8.1113C17.0982 4.46198 13.3877 3.00035 10.1398 3.00035C7.44797 2.97787 4.85769 4.036 2.94041 5.94104C-0.713123 9.61585 -1.73171 16.5066 4.40968 23.1875L17.0454 10.5758C17.3717 10.2531 17.8942 10.2531 18.2208 10.5758L18.718 11.0765C20.0853 12.4551 22.6116 12.5298 24.3511 11.3853L20.7186 8.1113ZM5.13676 20.2227C4.75633 20.4753 4.24664 20.3834 3.97679 20.014C1.61614 16.5812 1.02776 12.9653 2.31274 9.84037C2.49443 9.42669 2.96997 9.2339 3.38547 9.40586C3.80067 9.57781 4.00467 10.052 3.84528 10.4753C2.7843 13.0678 3.31497 16.1136 5.3447 19.0532L5.34437 19.0536C5.60149 19.4352 5.50933 19.9544 5.13676 20.2222L5.13676 20.2227ZM4.66352 8.3458C4.32834 8.3458 4.02629 8.1421 3.89805 7.82993C3.76982 7.51777 3.84066 7.15833 4.07744 6.91957C4.31456 6.68049 4.67105 6.60906 4.98067 6.73836C5.29028 6.86766 5.49229 7.17221 5.49229 7.51016C5.49328 7.73205 5.40604 7.94533 5.25059 8.10208C5.0948 8.25915 4.8836 8.34678 4.66353 8.34579L4.66352 8.3458ZM42.8131 20.9931C42.2161 21.2502 41.5317 21.1911 40.9867 20.8352L34.8542 14.6586C34.4831 14.1117 34.4085 13.4129 34.6554 12.7986C34.9023 12.1843 35.4378 11.7361 36.0808 11.6051C36.7241 11.4746 37.3894 11.6786 37.852 12.1491L43.4275 17.7802C43.8868 18.2436 44.0879 18.9075 43.9647 19.5514C43.8417 20.1957 43.4101 20.7356 42.8131 20.9931ZM39.8063 22.0727C40.0578 22.4521 40.1716 22.908 40.1275 23.3625C40.0835 23.8171 39.8849 24.2424 39.5656 24.5654C39.2687 24.8601 38.8872 25.0529 38.4759 25.116C38.0642 25.1795 37.6437 25.1097 37.2734 24.9176C37.0988 24.8253 30.2137 17.91 30.2137 17.91C29.7195 17.4105 29.5264 16.6829 29.7073 16.0011C29.8882 15.3189 30.4153 14.7863 31.0903 14.6035C31.7651 14.4208 32.4852 14.6158 32.9794 15.1152L39.8063 22.0727ZM35.538 28.3756C35.9073 28.0126 36.1132 27.5124 36.1076 26.992L36.1075 26.9921C36.1049 26.5875 35.981 26.1935 35.7522 25.8612V25.847C35.6862 25.7582 29.9902 20.0075 29.9902 20.0075C29.4983 19.5257 28.7911 19.3419 28.13 19.5244C27.4689 19.7068 26.9525 20.2282 26.7718 20.8958C26.5911 21.5633 26.7728 22.2778 27.2502 22.7744C27.2502 22.7744 33.1025 28.6509 33.2927 28.7505C33.6585 28.9337 34.0722 28.996 34.4752 28.9287C34.8781 28.8617 35.25 28.668 35.538 28.3756ZM31.2516 31.9411C31.6231 31.5756 31.8302 31.0728 31.8246 30.5493L31.8246 30.5493C31.8242 30.0982 31.6717 29.6604 31.3923 29.3083C31.3453 29.2444 27.4389 25.3223 27.0551 24.9369L27.0249 24.9066C26.6525 24.5949 26.1771 24.4365 25.6939 24.4628C25.2106 24.4893 24.755 24.6988 24.418 25.0496C24.0528 25.4187 23.8477 25.9192 23.8477 26.441C23.8477 26.9629 24.0528 27.4634 24.418 27.8325L28.4866 31.9411C28.8538 32.3105 29.3508 32.518 29.8693 32.518C30.3873 32.518 30.8848 32.3105 31.2516 31.9411Z" fill="#1DA1F3" />
                                            </svg>
                                        </div>
                                        <h2 class="wayBoxTitle leading-[1.2em] text-[16px] title-font font-extrabold text-center text-black" style="height: 38.375px;">
                                            Royalties & <br>Licenses</h2>
                                        <p class="text-gray-11 text-center mt-2 leading-5 hidden lg:block">Lorem
                                            ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="w-1/2 mb-[10px] sm:mb-[6px] lg:w-1/4">
                            <a href="javascript:;" target="_self">
                                <div class="flex justify-center rounded-lg h-full px-[15px] py-[42px] mx-[5px] mb-[10px] shadow-serviceSec bg-white border-[1px] border-white flex-col xl:px-[20px] sm:mx-[3px] sm:px-[16px]">
                                    <div class="flex flex-col items-center">
                                        <div class="w-[44px] h-8 mb-3 inline-flex items-center justify-center text-secondary flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                                <path d="M38.7211 7.30374C37.327 7.157 36.0798 8.11004 35.8597 9.5028L34.5393 20.9371C34.4662 21.3768 34.0992 21.6703 33.7323 21.5967H33.6591C33.2189 21.5967 32.852 21.2301 32.9252 20.7904L33.5854 5.98424C33.6586 4.59145 32.5582 3.41856 31.1642 3.34552C29.77 3.27241 28.596 4.37166 28.5229 5.76435L27.8627 20.5705C27.8627 21.0102 27.4957 21.3768 27.0556 21.3037C26.6886 21.3037 26.3217 20.9371 26.3217 20.5705L25.1476 3.41882C25.0744 2.02604 23.8272 1 22.4331 1C21.0389 1.07311 19.9387 2.3191 20.0119 3.71188L21.039 20.2038C21.039 20.6436 20.6721 21.0833 20.232 21.0101H19.9387C19.5717 21.0101 19.2785 20.7172 19.2048 20.3506L16.8567 6.79053C16.6366 5.39774 15.3157 4.44474 13.9222 4.73819C12.528 4.95805 11.5741 6.2777 11.8678 7.66984C11.8678 7.66984 13.9222 18.6645 14.2159 21.0833C14.5092 23.4291 14.6561 24.8214 14.8029 26.8736C14.8761 28.0464 13.849 28.8527 12.6755 27.6799C12.6755 27.6799 10.4743 25.0411 9.22712 23.722C7.9799 22.476 6.58582 21.9628 5.33853 22.8426C3.94438 23.722 3.57753 25.5545 4.53144 26.8741C4.53144 26.8741 10.0342 35.8896 13.4825 39.628C14.9498 41.2406 16.9309 43 19.0585 43H30.3571C36.08 43 37.4009 37.356 38.2079 31.5657C39.015 25.7755 40.9961 10.0895 40.9961 10.0895C41.0688 8.76935 40.1153 7.45026 38.7213 7.30353L38.7211 7.30374ZM31.3109 32.5914L26.5422 37.3555C26.3221 37.5754 25.9552 37.5754 25.7351 37.3555L21.1127 32.7376C20.1587 31.7846 19.7923 30.3188 20.4525 29.0727C21.4796 27.0204 24.0477 26.8006 25.5151 28.1933L26.249 28.9265L26.9092 28.267C27.8632 27.3139 29.3304 26.9479 30.5777 27.6074C32.4847 28.6335 32.7784 31.1255 31.3111 32.5914L31.3109 32.5914Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <h2 class="wayBoxTitle leading-[1.2em] text-[16px] title-font font-extrabold text-center text-black" style="height: 38.375px;">
                                            Promotions</h2>
                                        <p class="text-gray-11 text-center mt-2 leading-5 hidden lg:block">Lorem
                                            ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="text-center py-5 pb-10 lg:pb-18 lg:pt-10">
                        <a href="<?= get_permalink(28); ?>" class="btn btn-primary lg:px-14">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Extra Features -->
<section>
    <div class="py-10  lg:py-12">
        <div class="container">
            <div>
                <div class="mx-auto max-w-screen-2xl">
                    <!-- text - start -->
                    <div class="mb-10 md:mb-16">
                        <h2 class="mb-4 text-center text-2xl font-bold md:mb-6 lg:text-3xl"></h2>
                        <h2 class="text-[2rem] font-nexaBold font-black text-center capitalize leading-10 mb-2 md:mb-6 xl:text-[42px] lg:text-[32px] md:text-[36px]">
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

<!-- Why Choose Us -->
<section>
    <div class="bg-secBgBG py-5 pt-10 pb-10">
        <div class="container">
            <div>
                <div class="md:flex md:flex-wrap">
                    <div class="md:w-[60%] lg:w-1/2">
                        <div class="text-primary md:-ml-[40px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1000 667" fill="none">
                                <g clip-path="url(#clip0_30_2)">
                                    <path d="M832.748 229.591H757.079V86.9364H832.748V229.591Z" fill="#E7E7E7" />
                                    <path d="M829.036 229.591H740.149V86.9364H829.036V229.591Z" fill="#F0F0F0" />
                                    <path d="M815.483 216.92H753.659V99.6084H815.483V216.92Z" fill="white" />
                                    <path d="M797.36 180.191H773.324V134.595H797.36V180.191Z" fill="#ECECEC" />
                                    <path d="M240.683 229.591H165.013V86.9364H240.683V229.591Z" fill="#E7E7E7" />
                                    <path d="M236.971 229.591H148.084V86.9364H236.971V229.591Z" fill="#F0F0F0" />
                                    <path d="M223.417 216.92H161.593V99.6084H223.417V216.92Z" fill="white" />
                                    <path d="M205.295 180.191H181.259V134.595H205.295V180.191Z" fill="#ECECEC" />
                                    <mask id="mask0_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="-1" width="1000" height="668">
                                        <path d="M0 -0.00231934H1000V666.664H0V333.331V-0.00231934Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_30_2)">
                                        <path d="M1000 511.367H0V511.207H1000V511.367Z" fill="#E1E1E1" />
                                        <path d="M871.501 550.375H945.807V550.936H871.501V550.375Z" fill="#ECECEC" />
                                        <path d="M660.059 556.463H679.561V557.024H660.059V556.463Z" fill="#ECECEC" />
                                        <path d="M54.1934 533.312H151.092V533.874H54.1934V533.312Z" fill="#ECECEC" />
                                        <path d="M171.065 533.312H185.273V533.874H171.065V533.312Z" fill="#ECECEC" />
                                        <path d="M231.448 542.784H441.599V543.345H231.448V542.784Z" fill="#ECECEC" />
                                        <path d="M375.002 157.491C384.405 166.894 384.405 182.14 375.002 191.544C365.598 200.947 350.352 200.947 340.949 191.544C331.545 182.14 331.546 166.895 340.949 157.491C350.353 148.088 365.598 148.088 375.002 157.491ZM317.973 148.312C314.63 153.402 312.382 158.992 311.185 164.759L302.001 165.624L302 183.411L311.185 184.276C312.382 190.042 314.63 195.632 317.973 200.723L312.106 207.808L324.684 220.386L331.77 214.52C336.861 217.862 342.45 220.111 348.217 221.307L349.081 230.492L366.868 230.491L367.733 221.307C373.5 220.11 379.09 217.862 384.181 214.52L391.266 220.386L403.845 207.808L397.978 200.723C401.32 195.632 403.568 190.042 404.765 184.276L413.949 183.411L413.95 165.624L404.766 164.758C403.568 158.992 401.32 153.403 397.977 148.312L403.843 141.226L391.266 128.65L384.181 134.515C379.089 131.174 373.498 128.923 367.734 127.727L366.869 118.542L349.081 118.543L348.217 127.727C342.45 128.924 336.861 131.172 331.77 134.515L324.684 128.648L312.106 141.226L317.973 148.312Z" fill="#ECECEC" />
                                        <path d="M381.183 367.456C385.882 372.156 385.883 379.776 381.183 384.474C376.483 389.174 368.863 389.174 364.164 384.476C359.464 379.776 359.464 372.156 364.164 367.456C368.863 362.757 376.483 362.756 381.183 367.456ZM352.68 362.868C351.01 365.412 349.887 368.206 349.288 371.088L344.698 371.521V380.41L349.288 380.842C349.886 383.724 351.01 386.518 352.68 389.062L349.748 392.604L356.035 398.89L359.576 395.958C362.12 397.629 364.914 398.752 367.796 399.35L368.228 403.941L377.118 403.94L377.55 399.35C380.432 398.752 383.227 397.629 385.771 395.958L389.311 398.89L395.598 392.604L392.666 389.062C394.336 386.518 395.46 383.724 396.058 380.842L400.648 380.41V371.521L396.058 371.088C395.46 368.206 394.336 365.412 392.666 362.868L395.598 359.326L389.311 353.041L385.77 355.973C383.226 354.302 380.431 353.178 377.55 352.58L377.118 347.989L368.228 347.99L367.796 352.58C364.914 353.178 362.12 354.302 359.576 355.972L356.035 353.041L349.748 359.326L352.68 362.868Z" fill="#ECECEC" />
                                        <path d="M144.297 277.326C151.718 284.749 151.72 296.785 144.297 304.207C136.873 311.63 124.838 311.63 117.416 304.207C109.993 296.785 109.993 284.75 117.416 277.326C124.838 269.903 136.873 269.903 144.297 277.326ZM99.2783 270.079C96.6396 274.098 94.8663 278.511 93.9209 283.063L86.6703 283.746L86.6689 297.786L93.9209 298.47C94.8649 303.021 96.6396 307.434 99.2783 311.453L94.6476 317.046L104.577 326.974L110.169 322.345C114.188 324.982 118.601 326.757 123.153 327.701L123.836 334.953L137.876 334.951L138.558 327.702C143.11 326.757 147.525 324.982 151.542 322.345L157.136 326.974L167.065 317.046L162.434 311.453C165.072 307.434 166.846 303.021 167.792 298.47L175.041 297.786L175.042 283.746L167.792 283.062C166.846 278.511 165.072 274.098 162.433 270.081L167.064 264.486L157.136 254.558L151.542 259.189C147.524 256.55 143.11 254.775 138.56 253.83L137.877 246.579L123.836 246.581L123.153 253.831C118.601 254.775 114.188 256.55 110.17 259.189L104.577 254.558L94.6476 264.486L99.2783 270.079Z" fill="#ECECEC" />
                                        <path d="M883.589 244.781C887.062 248.255 887.062 253.887 883.589 257.362C880.114 260.837 874.481 260.837 871.008 257.362C867.533 253.887 867.533 248.255 871.008 244.781C874.482 241.307 880.114 241.307 883.589 244.781ZM862.518 241.389C861.284 243.27 860.453 245.335 860.01 247.466L856.617 247.786V254.357L860.01 254.677C860.453 256.807 861.284 258.873 862.518 260.754L860.352 263.371L864.998 268.018L867.616 265.851C869.497 267.086 871.562 267.917 873.693 268.358L874.012 271.753L880.584 271.751L880.904 268.359C883.034 267.917 885.1 267.086 886.98 265.851L889.598 268.018L894.245 263.371L892.078 260.753C893.313 258.873 894.144 256.807 894.585 254.677L897.978 254.357V247.786L894.585 247.466C894.144 245.335 893.312 243.27 892.077 241.39L894.245 238.771L889.598 234.125L886.98 236.291C885.1 235.057 883.033 234.226 880.904 233.783L880.584 230.39H874.012L873.693 233.785C871.562 234.226 869.497 235.057 867.616 236.291L864.998 234.125L860.352 238.771L862.518 241.389Z" fill="#ECECEC" />
                                        <path d="M632.99 162.589C636.463 166.064 636.464 171.696 632.99 175.17C629.515 178.645 623.882 178.645 620.408 175.17C616.934 171.696 616.934 166.064 620.408 162.589C623.883 159.116 629.515 159.114 632.99 162.589ZM611.919 159.197C610.684 161.078 609.854 163.144 609.411 165.274L606.018 165.594V172.165L609.411 172.485C609.854 174.616 610.684 176.681 611.919 178.562L609.752 181.18L614.399 185.826L617.016 183.66C618.898 184.894 620.963 185.725 623.094 186.166L623.412 189.561L629.984 189.56L630.304 186.168C632.435 185.725 634.5 184.894 636.382 183.66L638.999 185.826L643.646 181.18L641.479 178.561C642.714 176.681 643.544 174.616 643.986 172.485L647.379 172.165V165.594L643.986 165.274C643.544 163.144 642.714 161.078 641.478 159.197L643.646 156.58L638.999 151.933L636.38 154.1C634.5 152.865 632.434 152.034 630.304 151.592L629.984 148.198H623.412L623.094 151.593C620.963 152.034 618.898 152.865 617.016 154.1L614.399 151.933L609.752 156.58L611.919 159.197Z" fill="#F5F5F5" />
                                        <path d="M193.171 351.207C196.645 354.681 196.646 360.313 193.171 363.788C189.697 367.263 184.063 367.263 180.59 363.788C177.115 360.313 177.115 354.681 180.59 351.207C184.065 347.733 189.697 347.733 193.171 351.207ZM172.101 347.815C170.866 349.696 170.035 351.761 169.593 353.892L166.199 354.212V360.783L169.593 361.103C170.035 363.233 170.866 365.299 172.101 367.18L169.934 369.797L174.581 374.444L177.198 372.277C179.079 373.512 181.145 374.343 183.275 374.784L183.594 378.179L190.166 378.177L190.486 374.785C192.617 374.343 194.682 373.512 196.563 372.277L199.181 374.444L203.827 369.797L201.661 367.179C202.895 365.299 203.726 363.233 204.167 361.103L207.561 360.783V354.212L204.167 353.892C203.726 351.761 202.895 349.696 201.659 347.816L203.827 345.197L199.181 340.551L196.562 342.717C194.682 341.483 192.615 340.652 190.486 340.209L190.166 336.816H183.594L183.275 340.209C181.145 340.652 179.079 341.483 177.198 342.717L174.581 340.551L169.934 345.197L172.101 347.815Z" fill="#F5F5F5" />
                                        <path d="M802.872 273.724C808.841 279.694 808.842 289.376 802.872 295.346C796.9 301.317 787.22 301.317 781.249 295.346C775.278 289.376 775.278 279.696 781.249 273.724C787.22 267.753 796.9 267.753 802.872 273.724ZM766.66 267.896C764.537 271.126 763.11 274.677 762.35 278.338L756.518 278.888L756.517 290.182L762.35 290.732C763.11 294.392 764.537 297.942 766.66 301.174L762.934 305.673L770.921 313.66L775.42 309.936C778.653 312.057 782.202 313.485 785.864 314.245L786.413 320.077H797.706L798.256 314.245C801.917 313.485 805.468 312.057 808.7 309.936L813.198 313.66L821.185 305.673L817.461 301.174C819.582 297.942 821.01 294.392 821.77 290.732L827.601 290.182L827.602 278.888L821.77 278.338C821.01 274.677 819.582 271.128 817.46 267.896L821.185 263.396L813.198 255.41L808.7 259.134C805.466 257.013 801.917 255.584 798.257 254.825L797.708 248.992L786.413 248.993L785.864 254.825C782.202 255.585 778.653 257.012 775.421 259.134L770.921 255.409L762.934 263.396L766.66 267.896Z" fill="#ECECEC" />
                                        <path d="M578.683 337.094C584.701 343.111 584.701 352.869 578.683 358.886C572.666 364.903 562.909 364.903 556.891 358.886C550.874 352.869 550.874 343.113 556.891 337.094C562.91 331.077 572.666 331.077 578.683 337.094ZM542.189 331.219C540.05 334.477 538.611 338.055 537.845 341.745L531.967 342.299V353.681L537.845 354.234C538.61 357.925 540.05 361.502 542.189 364.759L538.434 369.294L546.483 377.342L551.018 373.589C554.275 375.727 557.853 377.166 561.542 377.931L562.095 383.81L573.478 383.809L574.031 377.933C577.722 377.166 581.299 375.727 584.557 373.589L589.091 377.342L597.141 369.294L593.386 364.759C595.525 361.502 596.963 357.925 597.73 354.234L603.606 353.681L603.607 342.299L597.73 341.745C596.963 338.055 595.525 334.478 593.386 331.221L597.139 326.686L589.091 318.637L584.557 322.391C581.299 320.253 577.722 318.813 574.033 318.047L573.478 312.17H562.095L561.542 318.047C557.853 318.814 554.275 320.251 551.018 322.39L546.483 318.637L538.434 326.686L542.189 331.219Z" fill="#ECECEC" />
                                        <path d="M636.792 448.365C646.89 458.463 646.89 474.837 636.792 484.934C626.694 495.033 610.32 495.033 600.222 484.935C590.123 474.837 590.124 458.465 600.223 448.365C610.322 438.267 626.694 438.266 636.792 448.365ZM575.548 438.507C571.959 443.973 569.544 449.977 568.259 456.17L558.395 457.099V476.199L568.259 477.129C569.544 483.321 571.959 489.325 575.548 494.793L569.248 502.401L582.755 515.909L590.364 509.609C595.831 513.198 601.835 515.613 608.027 516.897L608.956 526.762L628.056 526.761L628.986 516.898C635.179 515.611 641.183 513.198 646.65 509.609L654.259 515.909L667.766 502.401L661.467 494.791C665.055 489.325 667.47 483.321 668.755 477.129L678.618 476.199L678.619 457.099L668.755 456.169C667.47 449.978 665.055 443.974 661.466 438.507L667.766 430.898L654.258 417.391L646.65 423.69C641.182 420.102 635.178 417.686 628.987 416.401L628.058 406.537L608.956 406.538L608.027 416.401C601.835 417.687 595.831 420.101 590.366 423.69L582.755 417.39L569.248 430.898L575.548 438.507Z" fill="#ECECEC" />
                                    </g>
                                    <mask id="mask1_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="-1" width="1000" height="668">
                                        <path d="M0 -0.00231934H1000V666.664H0V-0.00231934Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask1_30_2)">
                                        <path d="M367.528 82.5966C324.457 86.5486 282.925 94.9606 246.091 108.155C202.676 123.709 158.317 147.937 171.419 179.627C195.607 238.134 311.643 239.199 288.475 278.538C262.232 323.097 279.831 375.365 397.587 389.899C621.249 417.506 891.624 255.973 815.685 167.211C768.409 111.951 596.221 61.6166 367.528 82.5966Z" fill="#007CFF" />
                                        <mask id="mask2_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="169" y="77" width="660" height="317">
                                            <path d="M169.083 77.7309H828.747V393.032H169.083V77.7309Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask2_30_2)">
                                            <g opacity="0.899994">
                                                <path d="M367.528 82.5966C324.457 86.5486 282.925 94.9606 246.091 108.155C202.676 123.709 158.317 147.937 171.419 179.627C195.607 238.134 311.643 239.199 288.475 278.538C262.232 323.097 279.831 375.365 397.587 389.899C621.249 417.506 891.624 255.973 815.685 167.211C768.409 111.951 596.221 61.6166 367.528 82.5966Z" fill="white" />
                                            </g>
                                        </g>
                                    </g>
                                    <mask id="mask3_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="-1" width="1000" height="668">
                                        <path d="M0 -0.00231934H1000V666.664H0V-0.00231934Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask3_30_2)">
                                        <path d="M934.017 597.856C934.017 602.372 745.67 606.032 513.333 606.032C280.997 606.032 92.6501 602.372 92.6501 597.856C92.6501 593.34 280.997 589.68 513.333 589.68C745.67 589.68 934.017 593.34 934.017 597.856Z" fill="#F5F5F5" />
                                    </g>
                                    <mask id="mask4_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="-1" width="1000" height="668">
                                        <path d="M0 -0.00231934H1000V666.664H0V-0.00231934Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask4_30_2)">
                                        <path d="M156.106 365.539C131.792 393.98 124.69 436.079 138.33 470.923C153.485 457.398 164.157 436.78 164.832 418.748C165.508 400.715 160.788 382.966 156.106 365.539Z" fill="currentColor" />
                                        <path d="M151.864 474.21C143.615 486.851 139.666 502.245 140.811 517.297C153.955 512.721 165.543 497.874 172.49 485.813C179.436 473.753 183.322 460.207 186.855 446.746C172.616 451.757 160.115 461.569 151.864 474.21Z" fill="currentColor" />
                                        <path d="M148.832 415.207C139.064 450.31 134.089 486.722 134.117 523.16C134.127 533.527 134.547 543.89 135.356 554.223C135.407 554.862 136.407 554.867 136.356 554.223C133.508 517.879 135.621 481.179 142.679 445.41C144.664 435.343 147.045 425.358 149.796 415.472C149.969 414.852 149.004 414.587 148.832 415.207Z" fill="#1A2E35" />
                                        <path d="M135.63 529.189C145.608 505.433 158.728 483.179 173.892 462.378C174.271 461.858 173.404 461.358 173.028 461.874C161.158 478.157 150.491 495.322 141.664 513.45C139.186 518.541 136.858 523.702 134.666 528.923C134.416 529.515 135.384 529.774 135.63 529.189Z" fill="#1A2E35" />
                                        <path d="M121.477 493.907C128.357 504.449 131.649 517.285 130.694 529.835C119.733 526.019 110.072 513.639 104.28 503.582C98.4864 493.526 95.2477 482.231 92.301 471.006C104.173 475.185 114.598 483.366 121.477 493.907Z" fill="currentColor" />
                                        <path d="M135.333 538.152C127.147 518.678 116.33 500.627 103.902 483.579C103.526 483.064 102.658 483.563 103.038 484.084C115.41 501.054 126.219 519.03 134.369 538.418C134.614 539.003 135.582 538.746 135.333 538.152Z" fill="#1A2E35" />
                                        <path d="M135.717 544.621C151.183 528.709 166.977 513.117 182.443 497.205C182.891 496.742 182.185 496.034 181.735 496.497C166.269 512.41 150.475 528.001 135.01 543.914C134.561 544.375 135.267 545.083 135.717 544.621Z" fill="#1A2E35" />
                                        <path d="M183.025 489.893C169.606 502.835 157.38 517.012 146.553 532.188L149.008 532.189C159.221 531.711 169.136 526.672 175.544 518.704C181.952 510.736 184.748 499.972 183.025 489.893Z" fill="currentColor" />
                                        <path d="M119.504 459.03C125.265 468.453 130.695 478.074 135.78 487.878C136.077 488.45 136.94 487.945 136.644 487.374C131.557 477.57 126.129 467.949 120.368 458.525C120.032 457.977 119.167 458.48 119.504 459.03Z" fill="#1A2E35" />
                                        <path d="M105.609 411.456C103.412 421.34 101.232 434.192 101.211 444.484C101.188 454.776 104.328 464.819 110.176 471.715C116.024 478.611 127.831 481.632 132.589 477.687L105.609 411.456Z" fill="currentColor" />
                                        <path d="M163.928 560.079H105.309V549.215H163.928V560.079Z" fill="#1A2E35" />
                                        <path d="M154.434 598.782H118.034L111.419 557.59H159.659L154.434 598.782Z" fill="#1A2E35" />
                                        <mask id="mask5_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="111" y="560" width="49" height="5">
                                            <path d="M111.851 560.281H159.317V564.944H111.851V560.281Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask5_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M111.851 560.281H159.318L158.726 564.944H112.6L111.851 560.281Z" fill="black" />
                                            </g>
                                        </g>
                                    </g>
                                    <mask id="mask6_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="-1" width="1000" height="668">
                                        <path d="M0 -0.00231934H1000V666.664H0V-0.00231934Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask6_30_2)">
                                        <path d="M846.9 314.437C861.71 305.969 880.579 311.109 889.046 325.918C897.514 340.727 892.374 359.597 877.564 368.063C866.132 374.601 852.299 372.999 842.68 365.129L833.516 366.57L835.695 357.014C835.607 356.866 835.504 356.733 835.419 356.582C826.951 341.774 832.091 322.905 846.9 314.437Z" fill="currentColor" />
                                        <path d="M852.388 307.59C842.527 309.489 833.848 316.675 830.142 326.009" stroke="#007CFF" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M828.594 330.35C827.925 331.727 827.545 333.244 827.483 334.775" stroke="#007CFF" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M858.611 352.924L845.574 341.026L849.726 336.476L858.469 344.454L872.995 330.269L877.298 334.676L858.611 352.924Z" fill="white" />
                                    </g>
                                    <mask id="mask7_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="-1" width="1000" height="668">
                                        <path d="M0 -0.00231934H1000V666.664H0V-0.00231934Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask7_30_2)">
                                        <path d="M528.769 117.208C544.326 108.168 564.268 113.451 573.308 129.01C582.348 144.567 577.065 164.508 561.506 173.548C549.496 180.527 534.893 178.94 524.689 170.708L515.034 172.296L517.262 162.2C517.169 162.044 517.06 161.904 516.968 161.747C507.928 146.19 513.212 126.248 528.769 117.208Z" fill="currentColor" />
                                        <path d="M573.365 121.51C567.037 113.015 556.229 108.068 545.663 108.831" stroke="#007CFF" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M540.831 109.353C539.215 109.349 537.6 109.683 536.117 110.329" stroke="#007CFF" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M559.265 140.695H528.832V148.303H559.265V140.695Z" fill="white" />
                                        <path d="M556.452 152.445V137.073L563.948 144.758L556.452 152.445Z" fill="white" />
                                    </g>
                                    <mask id="mask8_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="-9" y="28" width="1000" height="667">
                                        <path d="M-9 28.0001H991V694.667H-9V28.0001Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask8_30_2)">
                                        <path d="M728.104 310.727C728.104 310.727 727.295 324.69 720.475 349.164C716.196 364.286 711.004 379.136 704.927 393.629C701.526 401.817 697.622 410.509 693.14 419.65C691.124 423.806 688.966 428.036 686.698 432.372C684.088 506.44 642.52 581.731 642.52 581.731C640.218 582.919 632.174 581.623 632.227 579.283C638.382 569.512 650.492 474.606 658.302 429.584C658.788 423.465 659.49 416.986 660.354 410.13C662.639 391.956 666.022 372.197 669.351 354.814C674.515 327.425 679.428 305.957 679.428 305.957L693.122 307.289L728.104 310.727Z" fill="#FDC2BC" />
                                        <path d="M642.071 597.71H639.731L639.065 594.759L631.148 598.358H611.083C611.083 598.358 607.899 595.154 617.436 592.618C617.9 592.485 618.352 592.31 618.785 592.095C623.877 589.702 631.112 581.641 631.112 581.641H642.107C642.447 582.151 642.747 582.686 643.007 583.242C644.212 585.618 646.281 590.763 642.071 597.71Z" fill="#1A2E35" />
                                        <path d="M643.006 583.206C641.566 581.586 634.962 588.694 630.122 591.123C625.804 593.265 620.945 594.219 618.785 592.042C623.878 589.649 632.948 578.449 632.948 578.449L640.721 579.229C640.721 579.229 642.502 582.162 643.006 583.206Z" fill="#FDC2BC" />
                                        <path d="M744.444 413.262C743.34 421.227 741.918 429.751 740.178 438.832C755.025 488.372 724.488 585.059 724.488 585.059C719.322 586.086 714.752 585.419 712.43 583.674C718.189 554.54 714.05 478.799 709.569 433.542C709.173 429.439 708.67 424.923 708.13 420.1C707.212 411.93 706.114 402.932 704.945 393.63C702.965 378.063 700.752 361.688 698.754 347.167C696.308 329.622 694.184 314.775 693.086 307.307C692.636 304.032 692.366 302.179 692.366 302.179L735.23 306.822C735.23 306.822 746.136 319.04 747.826 357.207C748.385 375.956 747.253 394.716 744.444 413.262Z" fill="#FDC2BC" />
                                        <path d="M725.549 597.71H723.156L722.491 594.759L714.591 598.358H694.544C694.544 598.358 691.359 595.154 700.913 592.618C701.379 592.485 701.831 592.31 702.264 592.095C707.339 589.702 714.591 581.641 714.591 581.641H725.585C725.916 582.157 726.217 582.691 726.485 583.242C727.691 585.618 729.707 590.763 725.549 597.71Z" fill="#1A2E35" />
                                        <path d="M726.485 583.206C725.027 581.586 718.423 588.694 713.582 591.123C709.263 593.265 704.405 594.219 702.263 592.042C707.338 589.649 715.346 579.229 715.346 579.229H724.181C724.181 579.229 725.963 582.162 726.485 583.206Z" fill="#FDC2BC" />
                                        <path d="M755.7 203.094C753.498 201.193 749.942 201.922 746.916 201.566C742.321 201.026 738.618 197.706 736.64 193.939C734.662 190.174 734.088 185.959 733.382 181.843C732.678 177.726 731.768 173.51 729.245 170.017C726.722 166.523 720.646 162.193 716.232 164.842L710.32 174.003C713.868 184.738 716.753 195.649 718.957 206.67C719.941 211.591 720.92 216.797 724.492 220.629C727.992 224.383 733.533 226.215 738.968 226.566C741.724 226.743 744.574 226.567 747.093 225.545C749.61 224.522 751.756 222.547 752.314 220.115C752.872 217.683 751.532 214.875 748.97 213.945C751.442 212.901 754.016 211.785 755.664 209.826C757.312 207.867 757.669 204.795 755.7 203.094Z" fill="#1A2E35" />
                                        <path d="M671.018 157.499C664.261 164.038 663.407 171.82 664.481 177.147C666.749 184.192 670.183 188.846 673.41 195.506L684.855 149.774C680.545 151.475 678.365 150.924 671.018 157.499Z" fill="#1A2E35" />
                                        <path d="M691.4 149.506C704.592 149.774 717.836 160.805 718.874 171.507C719.91 182.211 709.383 196.023 707.407 196.87L701.16 199.167C701.16 199.167 708.051 183.231 705.191 178.974C702.331 174.717 700.258 174.67 700.258 174.67L691.4 149.506Z" fill="#1A2E35" />
                                        <path d="M680.198 152.043C687.061 147.19 695.167 149.965 699.978 152.043C705.397 155.17 709.221 160.466 710.483 166.594C711.531 172.349 712.802 179.322 709.861 182.957C708.223 185.05 705.781 186.358 703.131 186.561L669.893 165.486C672.129 160.202 675.675 155.575 680.198 152.043Z" fill="#1A2E35" />
                                        <path d="M693.606 229.974C696.204 231.832 698.066 230.715 700.767 228.988C717.006 219.575 710.334 212.122 710.334 212.122C706.334 208.854 705.346 204.254 705.263 196.983C705.248 196.774 705.22 196.564 705.176 196.359C704.994 195.419 704.524 194.56 703.834 193.899C701.995 192.039 698.998 192.023 697.138 193.862C697.138 193.862 697.135 193.864 697.134 193.867L689.759 197.507C689.758 197.618 689.755 197.728 689.754 197.852C690.435 201.714 691.09 204.688 691.492 207.048C691.487 207.339 691.594 207.632 691.63 207.91C691.626 208.2 691.703 208.506 691.754 208.784C692.155 212.044 687.559 217.778 685.539 219.308C684.331 220.326 684.795 223.716 693.606 229.974Z" fill="#FDC2BC" />
                                        <mask id="mask9_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="689" y="192" width="17" height="17">
                                            <path d="M689.767 192.387H705.051V208.727H689.767V192.387Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask9_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M689.773 197.396C689.79 197.516 689.788 197.637 689.766 197.756C690.449 201.617 691.104 204.592 691.506 206.952C691.573 207.236 691.62 207.522 691.644 207.813C691.682 208.116 691.7 208.422 691.697 208.728C697.316 206.044 701.976 201.701 705.052 196.286C704.876 195.361 704.433 194.506 703.778 193.828C701.957 191.952 698.962 191.901 697.078 193.713L689.773 197.396Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M706.266 169.03C708.392 182.387 709.582 187.974 704.58 196.348C697.038 208.93 680.574 208.939 674.528 196.552C669.181 185.383 666.545 165.468 677.974 157.079C689.404 148.691 704.128 155.659 706.266 169.03Z" fill="#FDC2BC" />
                                        <path d="M714.232 179.35C713.409 182.467 711.345 184.843 709.189 186.05C705.945 187.866 702.633 182.758 702.876 178.95C703.096 175.522 705.952 172.518 709.524 172.285C713.043 172.055 715.172 175.786 714.232 179.35Z" fill="#FDC2BC" />
                                        <mask id="mask10_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="706" y="174" width="5" height="7">
                                            <path d="M706.261 174.487H710.885V180.975H706.261V174.487Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask10_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M706.689 180.642C706.434 179.374 706.702 178.01 707.418 176.933C708.133 175.857 709.285 175.079 710.552 174.821" stroke="black" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </g>
                                        <path d="M689.979 177.913C690.291 179.321 689.847 180.668 688.987 180.92C688.127 181.172 687.178 180.235 686.866 178.827C686.554 177.419 686.998 176.072 687.858 175.82C688.716 175.568 689.667 176.505 689.979 177.913Z" fill="#1A2E35" />
                                        <path d="M677.004 181.386C677.304 182.751 676.852 184.062 675.995 184.314C675.137 184.565 674.2 183.662 673.9 182.297C673.6 180.931 674.052 179.621 674.909 179.369C675.767 179.117 676.704 180.021 677.004 181.386Z" fill="#1A2E35" />
                                        <path d="M691.409 172.326C691.247 172.39 691.064 172.387 690.901 172.303C688.368 170.976 686.267 172.252 686.243 172.267C685.931 172.456 685.537 172.359 685.367 172.034C685.196 171.711 685.313 171.291 685.627 171.095C685.736 171.027 688.373 169.422 691.517 171.07C691.831 171.234 691.947 171.643 691.777 171.984C691.695 172.147 691.561 172.266 691.409 172.326Z" fill="#1A2E35" />
                                        <path d="M670.857 175.97C670.713 175.962 670.576 175.893 670.478 175.765C670.278 175.5 670.322 175.081 670.576 174.832C673.122 172.329 675.698 173.01 675.808 173.041C676.114 173.126 676.28 173.482 676.176 173.837C676.072 174.19 675.74 174.408 675.433 174.324C675.333 174.296 673.328 173.801 671.302 175.792C671.172 175.921 671.01 175.98 670.857 175.97Z" fill="#1A2E35" />
                                        <path d="M680.357 179.79C680.357 179.79 679.633 185.267 678.144 188.963C677.884 189.61 678.348 190.325 679.041 190.386C680.826 190.543 682.58 189.487 682.58 189.487L680.357 179.79Z" fill="#EC837E" />
                                        <path d="M688.368 175.743L685.157 175.847C685.157 175.847 687.417 177.651 688.368 175.743Z" fill="#1A2E35" />
                                        <path d="M675.228 179.316L672.018 179.421C672.018 179.421 674.278 181.224 675.228 179.316Z" fill="#1A2E35" />
                                        <path d="M702.251 173.111C702.251 173.111 693.068 165.812 691.48 158.428C691.48 158.428 663.189 157.348 669.972 180.36C669.972 180.36 660.399 161.136 682.009 153.776C703.621 146.416 713.491 174.594 705.264 186.542C705.205 186.444 707.944 177.695 702.251 173.111Z" fill="#1A2E35" />
                                        <path d="M672.438 158.522C670.025 161.861 668.738 165.881 668.765 169.999C669.292 172.894 673.613 174.269 673.613 174.269L677.276 167.081L678.286 172.625C686.009 170.325 689.804 165.31 691.4 158.779L685.577 151.733C685.577 151.733 674.641 155.779 672.438 158.522Z" fill="#1A2E35" />
                                        <path d="M688.096 191.878C688.981 192.021 689.928 191.722 690.569 191.096C691.212 190.468 691.533 189.53 691.412 188.641" stroke="#1A2E35" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <mask id="mask11_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="714" y="164" width="8" height="24">
                                            <path d="M714.455 164.642H721.415V187.551H714.455V164.642Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask11_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M714.455 187.551C714.455 187.551 724.424 175.183 716.618 164.643C716.618 164.643 722.37 168.6 721.278 175.431C720.419 180.793 718.082 185.141 714.455 187.551Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask12_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="660" y="347" width="88" height="74">
                                            <path d="M660.372 347.147H747.861V420.1H660.372V347.147Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask12_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M744.444 413.261C732.717 417.22 720.494 419.523 708.13 420.1C707.212 411.929 706.114 402.932 704.945 393.629C701.544 401.816 697.638 410.508 693.158 419.649C681.721 418.611 670.592 415.385 660.372 410.148C662.657 391.973 666.04 372.215 669.369 354.832C673.912 352.165 678.824 350.183 683.945 348.948C688.813 347.775 693.801 347.171 698.809 347.148C706.102 347.115 713.381 347.784 720.546 349.145C729.852 350.887 738.952 353.589 747.701 357.207C748.301 375.952 747.212 394.712 744.444 413.261Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M678.6 302.179H735.519L737.066 309.52C737.066 309.52 757.976 338.456 747.376 410.616C747.376 410.616 701.58 415.907 658.446 406.658C658.446 406.658 668.127 332.519 678.24 308.315L678.6 302.179Z" fill="#1A2E35" />
                                        <path d="M732.644 279.803L736.69 310.071L674.293 307.556C674.129 301.053 679.93 283.797 679.26 279.079C677.366 273.251 667.78 264.453 665.229 257.409C662.506 247.631 668.125 220.739 669.958 219.887C672.18 218.853 674.949 218.947 676.652 218.196C683.274 216.637 698.344 211.256 705.094 210.416C706.402 210.293 707.698 210.059 708.989 209.908C708.989 209.908 734.518 208.68 735.648 219.067C735.76 219.644 729.564 246.892 732.644 279.803Z" fill="currentColor" />
                                        <mask id="mask13_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="706" y="239" width="27" height="39">
                                            <path d="M706.115 239.338H732.152V277.883H706.115V239.338Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask13_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M732.151 273.381L731.643 265.09L722.186 239.338L729.595 269.658L706.115 277.884L732.151 273.381Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask14_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="704" y="285" width="31" height="16">
                                            <path d="M704.976 285.252H734.413V300.395H704.976V285.252Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask14_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M704.976 300.395C705.81 300.285 713.22 292.237 713.22 292.237L734.413 293.039L733.389 285.376C734.018 284.879 708.624 286.037 708.624 286.037L704.976 293.948V300.395Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M726.009 212.323C727.101 212.459 731.538 209.946 739.55 220.235C747.561 230.525 756.541 269.75 757.049 275.473C757.693 282.741 752.849 286.325 748.018 287.122C733.529 289.514 706.782 289.997 706.782 289.997V277.677L733.469 271.634C733.469 271.634 718.325 235.178 720.714 225.786C723.105 216.394 726.009 212.323 726.009 212.323Z" fill="currentColor" />
                                        <path d="M714.007 209.873C712.08 220.347 704.247 228.568 693.934 231.224C690.316 232.092 686.274 230.092 683.414 227.721C680.515 225.303 678.586 221.921 677.978 218.196C690.538 213.245 701.914 208.999 714.007 209.873Z" fill="#FDC2BC" />
                                        <mask id="mask15_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="732" y="270" width="8" height="4">
                                            <path d="M732.872 270.043H739.645V273.754H732.872V270.043Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask15_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M733.468 271.634C733.468 271.634 737.806 271.389 739.646 273.754C739.646 273.754 738.538 269.222 732.872 270.174L733.468 271.634Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M698.164 350.69V213.307H560.975V268.198C563.462 269.143 571.587 269.764 574.056 268.844C578.387 267.231 575.562 262.242 579.742 260.274C585.91 257.368 593.594 261.462 596.827 267.464C599.335 272.12 599.806 274.559 599.575 278.582C599.806 282.604 599.335 285.042 596.827 289.699C593.594 295.7 585.91 299.794 579.742 296.89C575.562 294.922 578.96 290.056 574.631 288.443C572.16 287.522 563.462 288.02 560.975 288.964V350.69H622.323C622.396 352.03 622.243 353.37 621.77 354.64C620.156 358.97 615.554 361.547 613.586 365.727C610.682 371.895 614.775 379.58 620.776 382.812C625.432 385.32 627.871 385.791 631.894 385.562C635.916 385.791 638.355 385.32 643.011 382.812C649.012 379.58 653.106 371.895 650.202 365.727C648.234 361.547 643.631 358.97 642.018 354.64C641.544 353.37 641.391 352.03 641.464 350.69H698.164Z" fill="currentColor" />
                                        <path d="M704.975 350.69V213.307H567.786V268.198C570.273 269.143 572.995 269.378 575.466 268.458C579.795 266.844 582.373 262.242 586.553 260.274C592.721 257.368 600.405 261.462 603.638 267.464C606.146 272.12 606.617 274.559 606.386 278.582C606.617 282.604 606.146 285.042 603.638 289.699C600.405 295.7 592.721 299.794 586.553 296.89C582.373 294.922 579.795 290.319 575.466 288.706C572.995 287.784 570.273 288.02 567.786 288.964V350.69H629.134C629.207 352.03 629.054 353.37 628.581 354.64C626.967 358.97 622.365 361.547 620.397 365.727C617.493 371.895 621.586 379.58 627.587 382.812C632.243 385.32 634.682 385.791 638.705 385.562C642.727 385.791 645.166 385.32 649.822 382.812C655.823 379.58 659.917 371.895 657.013 365.727C655.045 361.547 650.442 358.97 648.829 354.64C648.355 353.37 648.202 352.03 648.275 350.69H704.975Z" fill="currentColor" />
                                        <mask id="mask16_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="567" y="213" width="138" height="173">
                                            <path d="M567.787 213.307H704.976V385.614H567.787V213.307Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask16_30_2)">
                                            <g opacity="0.300003">
                                                <path d="M704.976 350.69V213.307H567.786V268.198C570.273 269.143 572.996 269.378 575.466 268.458C579.796 266.845 582.373 262.242 586.553 260.274C592.721 257.369 600.405 261.462 603.638 267.465C606.146 272.121 606.617 274.559 606.386 278.582C606.617 282.605 606.146 285.042 603.638 289.699C600.405 295.701 592.721 299.794 586.553 296.89C582.373 294.922 579.796 290.319 575.466 288.706C572.996 287.785 570.273 288.021 567.786 288.965V350.69H629.134C629.208 352.03 629.054 353.37 628.581 354.641C626.968 358.97 622.365 361.547 620.397 365.727C617.493 371.895 621.586 379.581 627.588 382.813C632.244 385.321 634.682 385.791 638.705 385.562C642.728 385.791 645.166 385.321 649.822 382.813C655.824 379.581 659.917 371.895 657.013 365.727C655.045 361.547 650.442 358.97 648.829 354.641C648.356 353.37 648.202 352.03 648.276 350.69H704.976Z" fill="white" />
                                            </g>
                                        </g>
                                        <path d="M704.976 280.085C704.976 280.085 695.768 282.386 694.758 284.553C693.75 286.719 697.157 286.554 697.157 286.554C697.157 286.554 693.42 286.966 693.38 288.577C693.333 290.51 696.901 290.319 696.901 290.319C696.901 290.319 693.864 290.782 693.925 292.217C693.988 293.705 698.032 293.777 698.032 293.777C698.032 293.777 695.953 294.507 696.561 295.481C697.168 296.454 705.745 296.773 708.272 295.167C710.797 293.562 710.808 282.539 710.314 280.134C709.822 277.729 707.997 276.431 704.976 272.778V280.085Z" fill="#FDC2BC" />
                                        <mask id="mask17_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="696" y="285" width="8" height="2">
                                            <path d="M696.996 285.34H703.797V286.734H696.996V285.34Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask17_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M697.165 286.734C697.17 286.734 697.176 286.733 697.181 286.733L703.661 285.701C703.748 285.686 703.808 285.595 703.794 285.497C703.781 285.398 703.697 285.327 703.613 285.342L697.132 286.374C697.045 286.389 696.985 286.479 696.998 286.578C697.012 286.671 697.084 286.738 697.165 286.734Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask18_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="696" y="289" width="8" height="2">
                                            <path d="M696.927 289.635H703.551V290.492H696.927V289.635Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask18_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M697.096 290.492H697.1L703.404 289.996C703.492 289.989 703.557 289.902 703.549 289.804C703.543 289.704 703.479 289.644 703.377 289.634L697.073 290.13C696.985 290.138 696.921 290.224 696.928 290.324C696.935 290.422 697.009 290.496 697.096 290.492Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask19_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="698" y="293" width="6" height="1">
                                            <path d="M698.087 293.351H703.101V293.947H698.087V293.351Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask19_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M698.255 293.947L702.95 293.713C703.038 293.709 703.105 293.623 703.101 293.525C703.095 293.425 703.019 293.347 702.933 293.351L698.237 293.586C698.15 293.59 698.082 293.675 698.087 293.774C698.093 293.874 698.167 293.951 698.255 293.947Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M599.673 276.448C599.673 276.448 609.535 279.204 610.543 281.371C611.553 283.538 608.146 283.372 608.146 283.372C608.146 283.372 611.883 283.786 611.922 285.395C611.969 287.328 608.401 287.139 608.401 287.139C608.401 287.139 611.438 287.6 611.377 289.035C611.314 290.524 607.271 290.596 607.271 290.596C607.271 290.596 609.349 291.326 608.741 292.3C608.134 293.272 599.557 293.591 597.03 291.986C594.505 290.38 594.494 279.358 594.987 276.952C595.479 274.547 595.681 274.944 598.702 271.292L599.251 273.336C599.401 273.892 599.502 274.46 599.551 275.034L599.673 276.448Z" fill="#FDC2BC" />
                                        <mask id="mask20_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="601" y="282" width="8" height="2">
                                            <path d="M601.505 282.159H608.305V283.552H601.505V282.159Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask20_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M608.137 283.553C608.131 283.553 608.127 283.553 608.121 283.551L601.641 282.519C601.554 282.505 601.494 282.414 601.507 282.315C601.521 282.217 601.605 282.146 601.689 282.161L608.17 283.193C608.257 283.207 608.317 283.298 608.303 283.397C608.29 283.49 608.218 283.557 608.137 283.553Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask21_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="601" y="286" width="8" height="2">
                                            <path d="M601.752 286.454H608.375V287.311H601.752V286.454Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask21_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M608.206 287.31H608.202L601.898 286.814C601.81 286.806 601.745 286.721 601.753 286.621C601.76 286.521 601.822 286.462 601.925 286.453L608.229 286.949C608.316 286.956 608.381 287.042 608.374 287.142C608.366 287.24 608.292 287.314 608.206 287.31Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask22_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="602" y="290" width="6" height="1">
                                            <path d="M602.201 290.17H607.215V290.766H602.201V290.17Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask22_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M607.046 290.766L602.352 290.531C602.264 290.527 602.197 290.442 602.201 290.343C602.206 290.243 602.282 290.166 602.369 290.17L607.065 290.405C607.153 290.409 607.22 290.494 607.214 290.594C607.209 290.693 607.134 290.77 607.046 290.766Z" fill="black" />
                                            </g>
                                        </g>
                                    </g>
                                    <path d="M397.574 582.341L411.19 583.675L421.253 549.201L400.54 546.947L397.574 582.341Z" fill="#FDC2BC" />
                                    <mask id="mask23_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="-1" width="1000" height="668">
                                        <path d="M0 -0.00231934H1000V666.664H0V-0.00231934Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask23_30_2)">
                                        <path d="M413.162 577.662H408.301C407.201 577.662 406.183 578.218 405.534 579.106C402.73 582.934 400.623 581.487 397.574 577.888C395.635 577.662 395.114 579.887 394.955 580.484L391.322 593.703C391.006 594.807 391.645 595.958 392.749 596.274C392.945 596.33 393.149 596.356 393.353 596.354H409.397H431.867C437.993 596.354 439.263 590.18 436.739 589.608C425.393 587.102 417.358 583.763 413.851 580.462C413.201 579.884 413.869 579.452 413.162 577.662Z" fill="#1A2E35" />
                                        <path d="M423.758 579.437C423.882 579.513 423.945 579.659 423.917 579.802C423.892 580.257 423.672 580.678 423.314 580.961C421.933 581.991 418.601 581.547 416.808 581.214C419.33 580.103 422.917 578.85 423.758 579.437ZM423.71 581.421C424.222 581.053 424.529 580.463 424.536 579.834C424.578 579.495 424.425 579.162 424.14 578.977C422.616 577.898 416.538 580.738 415.856 581.071C415.78 581.098 415.72 581.158 415.693 581.234C415.642 581.374 415.714 581.529 415.856 581.579C417.349 581.933 418.876 582.13 420.41 582.166C421.561 582.275 422.718 582.014 423.71 581.421Z" fill="currentColor" />
                                        <path d="M420.299 575.945C420.917 576.009 420.917 576.231 420.917 576.311C421.092 577.279 418.315 579.769 416.331 580.817C416.744 579.421 417.965 575.929 420.076 575.929L420.299 575.945ZM416.061 581.643C417.887 580.881 421.711 577.881 421.505 576.295C421.473 575.961 421.235 575.564 420.409 575.453C417.077 575.073 415.649 581.056 415.649 581.309C415.616 581.412 415.647 581.524 415.728 581.595C415.791 581.613 415.856 581.613 415.919 581.595L416.061 581.643Z" fill="currentColor" />
                                        <path d="M416.537 581.413C414.862 581.641 413.309 582.643 412.409 584.073" stroke="#43C170" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M419.558 583.688C417.883 583.916 416.33 584.917 415.43 586.346" stroke="#43C170" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M423.317 585.6C421.642 585.828 420.089 586.829 419.189 588.258" stroke="#43C170" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <mask id="mask24_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="398" y="565" width="18" height="7">
                                            <path d="M398.676 565.721H415.934V571.648H398.676V565.721Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask24_30_2)">
                                            <g opacity="0.300003">
                                                <path d="M415.934 567.42L414.7 571.648L398.676 569.187L398.966 565.72L415.934 567.42Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M476.833 582.341L490.449 583.674L500.512 549.201L479.799 546.946L476.833 582.341Z" fill="#FDC2BC" />
                                        <path d="M492.421 577.662H487.56C486.46 577.662 485.443 578.218 484.792 579.106C481.989 582.934 479.883 581.487 476.833 577.888C474.895 577.662 474.373 579.887 474.215 580.484L470.581 593.703C470.265 594.807 470.904 595.958 472.008 596.274C472.204 596.33 472.408 596.356 472.612 596.354H488.656H511.127C517.253 596.354 518.523 590.18 515.999 589.608C504.652 587.102 496.617 583.763 493.111 580.462C492.46 579.884 493.128 579.452 492.421 577.662Z" fill="#1A2E35" />
                                        <path d="M503.018 579.437C503.142 579.513 503.205 579.659 503.177 579.802C503.151 580.257 502.931 580.678 502.574 580.961C501.193 581.991 497.861 581.547 496.067 581.214C498.59 580.103 502.177 578.85 503.018 579.437ZM502.97 581.421C503.482 581.053 503.789 580.463 503.795 579.834C503.839 579.495 503.685 579.162 503.399 578.977C501.875 577.898 495.798 580.738 495.115 581.071C495.039 581.098 494.979 581.158 494.953 581.234C494.902 581.374 494.975 581.529 495.115 581.579C496.609 581.933 498.135 582.13 499.67 582.166C500.821 582.275 501.978 582.014 502.97 581.421Z" fill="currentColor" />
                                        <path d="M499.558 575.945C500.177 576.009 500.177 576.231 500.177 576.311C500.352 577.279 497.574 579.769 495.592 580.817C496.004 579.421 497.225 575.929 499.336 575.929L499.558 575.945ZM495.321 581.643C497.146 580.881 500.97 577.881 500.765 576.295C500.733 575.961 500.494 575.564 499.669 575.453C496.337 575.073 494.909 581.056 494.909 581.309C494.876 581.412 494.906 581.524 494.988 581.595C495.05 581.613 495.116 581.613 495.178 581.595L495.321 581.643Z" fill="currentColor" />
                                        <path d="M495.796 581.413C494.122 581.641 492.568 582.643 491.668 584.073" stroke="#43C170" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M498.817 583.688C497.143 583.916 495.589 584.917 494.689 586.346" stroke="#43C170" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M502.576 585.6C500.902 585.828 499.348 586.829 498.448 588.258" stroke="#43C170" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <mask id="mask25_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="477" y="565" width="19" height="7">
                                            <path d="M477.936 565.721H495.193V571.648H477.936V565.721Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask25_30_2)">
                                            <g opacity="0.300003">
                                                <path d="M495.193 567.42L493.959 571.648L477.935 569.187L478.225 565.72L495.193 567.42Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M505.936 322.564C505.936 322.564 517.221 372.4 522.6 415.808C524.239 429.038 524.552 446.73 521.655 459.756L499.904 567.893L472.532 565.151C476.833 518.513 482.828 460.993 484.545 436.52C478.524 407.841 465.695 373.125 453.081 338.601L505.936 322.564Z" fill="currentColor" />
                                        <mask id="mask26_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="453" y="322" width="71" height="246">
                                            <path d="M453.081 322.563H523.837V567.893H453.081V322.563Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask26_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M505.936 322.564C505.936 322.564 517.222 372.4 522.6 415.808C524.239 429.038 524.552 446.73 521.655 459.756L499.904 567.893L472.532 565.151C476.834 518.513 482.828 460.993 484.546 436.52C478.524 407.841 465.695 373.125 453.082 338.601L505.936 322.564Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M415.995 445.228C416.614 442.531 417.603 437.052 418.816 429.827C418.78 429.819 418.739 429.811 418.703 429.801C419.592 420.247 421.238 375.924 424.26 347.655C426.584 329.648 431.187 317.463 435.82 311.496C436.059 311.189 436.278 310.911 436.478 310.663C437.247 309.701 437.714 309.173 437.714 309.173C438.595 309.393 439.471 309.599 440.342 309.789C440.668 309.861 440.992 309.931 441.315 309.999C474.032 316.839 502.824 308.24 502.824 308.24C505.836 315.677 508.086 331.537 510.283 347.985C506.86 351.741 491.842 356.613 474.612 359.843L469.699 382.064C467.114 395.841 463.794 409.355 460.974 421.523L458.027 434.849C457.848 435.723 457.672 436.589 457.507 437.441C456.011 445.101 420.438 568.54 420.438 568.54L397.26 567.183C397.26 567.183 407.612 481.749 415.995 445.228Z" fill="currentColor" />
                                        <mask id="mask27_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="397" y="308" width="114" height="261">
                                            <path d="M397.26 308.239H510.282V568.541H397.26V308.239Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask27_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M415.995 445.228C416.614 442.531 417.603 437.052 418.816 429.827C418.78 429.819 418.739 429.811 418.703 429.801C419.592 420.247 421.238 375.924 424.26 347.655C426.584 329.648 431.187 317.463 435.82 311.496C436.059 311.189 436.278 310.911 436.478 310.663C437.247 309.701 437.714 309.173 437.714 309.173C438.595 309.393 439.471 309.599 440.342 309.789C440.668 309.861 440.992 309.931 441.315 309.999C474.032 316.839 502.824 308.24 502.824 308.24C505.836 315.677 508.086 331.537 510.283 347.985C506.86 351.741 491.842 356.613 474.612 359.843L469.699 382.064C467.114 395.841 463.794 409.355 460.974 421.523L458.027 434.849C457.848 435.723 457.672 436.589 457.507 437.441C456.011 445.101 420.438 568.54 420.438 568.54L397.26 567.183C397.26 567.183 407.612 481.749 415.995 445.228Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask28_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="469" y="345" width="14" height="58">
                                            <path d="M469.381 345.661H482.904V402.128H469.381V345.661Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask28_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M469.382 384.117C469.291 384.571 479.997 345.661 479.997 345.661C479.997 345.661 489.009 380.4 475.295 402.128L469.382 384.117Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M446.35 208.568C446.35 208.568 451.792 212.753 458.802 218.793C460.262 220.051 461.868 221.139 463.571 222.044C468.164 224.483 472.35 225.879 473.484 223.664C473.736 223.177 473.93 222.649 474.074 222.097C475.036 218.389 474.642 213.177 471.644 210.792C468.264 208.101 466.635 205.8 467.244 202.16C467.564 200.096 468.311 197.964 469.184 195.895L466.526 192.785L452.618 178.749C452.966 188.123 453.675 203.48 446.35 208.568Z" fill="#FDC2BC" />
                                        <mask id="mask29_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="459" y="187" width="10" height="16">
                                            <path d="M459.572 187.41H468.469V202.959H459.572V187.41Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask29_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M467.132 202.959C463.306 200.688 459.11 196.75 459.613 192.25C459.837 190.355 460.246 188.56 460.7 187.408L468.469 197.695C467.832 199.354 467.598 200.45 467.132 202.959Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M448.68 163.691C449.99 177.982 450.242 184.041 457.616 191.534C468.708 202.805 485.772 199.014 488.71 184.849C491.355 172.101 488.77 150.874 474.74 144.867C460.919 138.951 447.371 149.401 448.68 163.691Z" fill="#FDC2BC" />
                                        <path d="M466.48 168.197C466.554 169.535 467.376 170.636 468.316 170.655C469.256 170.675 469.957 169.607 469.882 168.269C469.809 166.931 468.986 165.831 468.046 165.811C467.108 165.791 466.405 166.86 466.48 168.197Z" fill="#1A2E35" />
                                        <path d="M481.289 167.995C481.363 169.291 482.185 170.357 483.121 170.377C484.058 170.397 484.757 169.363 484.682 168.067C484.606 166.771 483.786 165.703 482.849 165.683C481.913 165.663 481.214 166.699 481.289 167.995Z" fill="#1A2E35" />
                                        <path d="M464.207 163.077C464.39 163.097 464.574 163.044 464.715 162.915C466.917 160.876 469.395 161.592 469.425 161.6C469.791 161.707 470.163 161.499 470.247 161.124C470.331 160.749 470.097 160.356 469.726 160.244C469.595 160.205 466.485 159.304 463.753 161.835C463.481 162.087 463.475 162.533 463.741 162.832C463.869 162.975 464.037 163.059 464.207 163.077Z" fill="#1A2E35" />
                                        <path d="M485.861 162.366C486.031 162.407 486.209 162.386 486.363 162.29C486.677 162.094 486.759 161.66 486.545 161.323C484.407 157.94 481.225 157.735 481.089 157.73C480.709 157.71 480.407 158.008 480.413 158.399C480.42 158.788 480.735 159.119 481.113 159.142C481.239 159.148 483.704 159.344 485.405 162.034C485.515 162.208 485.683 162.323 485.861 162.366Z" fill="#1A2E35" />
                                        <path d="M454.769 172.657C454.769 172.657 459.178 165.991 457.361 153.013C457.057 150.837 458.433 148.777 460.59 148.358C466.755 147.161 474.998 139.383 485.055 154.829C485.055 154.829 480.258 136.327 452.179 143.781C427.19 150.414 444.299 171.594 446.877 173.773C449.453 175.951 454.769 172.657 454.769 172.657Z" fill="#1A2E35" />
                                        <path d="M444.357 175.338C446.045 178.268 448.788 180.108 451.302 180.739C455.085 181.688 457.038 175.607 455.748 171.816C454.585 168.406 450.868 166.147 447.186 166.891C443.56 167.624 442.428 171.987 444.357 175.338Z" fill="#FDC2BC" />
                                        <path d="M477.686 181.955C476.524 183.746 475.125 187.215 475.125 187.215C474.788 187.146 474.45 187.076 474.117 186.988C469.568 185.923 467.809 183.926 467.24 182.035C466.932 181 466.992 179.987 467.146 179.186C467.316 178.255 467.648 177.632 467.648 177.632C469.722 179.638 473.888 180.956 476.141 181.568C477.082 181.834 477.686 181.955 477.686 181.955Z" fill="#1A2E35" />
                                        <path d="M476.141 181.568L475.346 183.1C471.062 182.086 468.184 180.798 467.146 179.185C467.316 178.256 467.648 177.632 467.648 177.632C469.722 179.637 473.888 180.956 476.141 181.568Z" fill="white" />
                                        <path d="M474.117 186.988C469.568 185.924 467.809 183.926 467.239 182.034C468.776 182.458 470.581 183.138 472.056 184.218C473.188 185.04 473.787 186.04 474.117 186.988Z" fill="#FC5652" />
                                        <path d="M477.448 167.604C477.448 167.604 479.684 172.953 482.206 176.288C482.647 176.871 482.374 177.721 481.688 177.973C479.924 178.623 477.859 178.035 477.859 178.035L477.448 167.604Z" fill="#EC837E" />
                                        <path d="M467.76 165.778L471.04 165.004C471.04 165.004 469.247 167.449 467.76 165.778Z" fill="#1A2E35" />
                                        <path d="M482.512 165.717L485.792 164.942C485.792 164.942 483.999 167.388 482.512 165.717Z" fill="#1A2E35" />
                                        <path d="M487.555 160.874C487.555 160.874 496.21 150.635 490.435 142.197C488.266 139.025 484.281 138.551 480.765 137.002C472.651 133.427 466.075 132.706 455.721 142.854C444.947 153.413 442.998 156.967 454.881 169.977C454.881 169.977 453.598 168.275 457.991 164.405C462.385 160.535 467.233 157.091 464.879 153.339C464.879 153.339 468.531 154.747 468.793 158.223L475.217 156.469C475.217 156.469 474.938 153.985 473.238 151.501C473.238 151.501 476.567 153.462 477.649 156.338L483.206 157.383C483.206 157.383 482.39 152.285 480.821 150.454C480.821 150.454 485.911 155.689 487.555 160.874Z" fill="#1A2E35" />
                                        <mask id="mask30_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="447" y="169" width="7" height="7">
                                            <path d="M447.126 169.464H453.181V175.251H447.126V169.464Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask30_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M452.848 174.918C452.729 173.57 452.102 172.271 451.122 171.339C450.14 170.406 448.813 169.847 447.46 169.798" stroke="black" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </g>
                                        <path d="M520.787 293.498C519.983 292.878 519.22 292.193 518.505 291.447C517.899 290.811 517.476 289.991 517.623 289.991C517.591 289.899 517.555 289.81 517.512 289.725L517.255 289.13L516.629 287.53C516.207 286.382 515.801 285.13 515.397 283.859C514.551 281.337 513.76 278.711 512.988 276.066C511.424 270.754 509.935 265.381 508.425 259.986L505.659 248.678C505.257 246.846 504.636 244.177 503.811 241.131L503.809 241.122C501.559 232.817 497.797 221.738 492.881 217.333C485.248 211.493 480.376 218.697 477.235 226.187C474.219 233.377 481.661 253.022 481.661 253.022L490.729 252.367C491.876 256.547 493.077 260.705 494.263 264.95C495.807 270.487 497.647 275.922 499.487 281.357C500.424 284.085 501.399 286.813 502.465 289.561C503.092 290.955 503.661 292.329 504.305 293.785C504.619 294.503 504.968 295.262 505.353 296.021L506.035 297.293C506.32 297.823 506.64 298.33 506.991 298.81C508.335 300.539 509.989 301.937 511.847 302.911C513.277 303.714 514.783 304.339 516.335 304.778C519.161 305.595 522.081 305.947 524.999 305.825L526.636 297.907C524.687 296.451 522.535 294.934 520.787 293.498Z" fill="#1A2E35" />
                                        <mask id="mask31_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="476" y="215" width="51" height="91">
                                            <path d="M476.515 215.197H526.636V305.848H476.515V215.197Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask31_30_2)">
                                            <g opacity="0.5">
                                                <path d="M520.787 293.498C519.983 292.878 519.22 292.193 518.505 291.447C517.899 290.811 517.476 289.991 517.623 289.991C517.591 289.899 517.555 289.81 517.512 289.725L517.255 289.13L516.629 287.53C516.207 286.382 515.801 285.13 515.397 283.859C514.551 281.337 513.76 278.711 512.988 276.066C511.424 270.754 509.935 265.381 508.425 259.986L505.659 248.678C505.257 246.846 504.636 244.177 503.811 241.131L503.809 241.122C501.559 232.817 497.797 221.738 492.881 217.333C485.248 211.493 480.376 218.697 477.235 226.187C474.219 233.377 481.661 253.022 481.661 253.022L490.729 252.367C491.876 256.547 493.077 260.705 494.263 264.95C495.807 270.487 497.647 275.922 499.487 281.357C500.424 284.085 501.399 286.813 502.465 289.561C503.092 290.955 503.661 292.329 504.305 293.785C504.619 294.503 504.968 295.262 505.353 296.021L506.035 297.293C506.32 297.823 506.64 298.33 506.991 298.81C508.335 300.539 509.989 301.937 511.847 302.911C513.277 303.714 514.783 304.339 516.335 304.778C519.161 305.595 522.081 305.947 524.999 305.825L526.636 297.907C524.687 296.451 522.535 294.934 520.787 293.498Z" fill="white" />
                                            </g>
                                        </g>
                                        <mask id="mask32_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="494" y="230" width="5" height="32">
                                            <path d="M494.125 230.094H498.357V261.324H494.125V230.094Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask32_30_2)">
                                            <g opacity="0.300003">
                                                <path d="M494.557 230.094C496.089 232.71 496.614 234.2 497.574 237.215C498.534 240.23 499.621 256.511 494.125 261.324V250.035C494.325 243.119 494.356 237.01 494.557 230.094Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M426.942 250.685L418.43 221.661C423.816 213.624 450.458 207.449 450.458 207.449L464.113 212.241L468.012 208.409C468.012 208.409 474.758 209.915 480.534 211.797C488.245 214.312 492.414 216.335 494.253 220.613C494.253 220.613 497.47 230.093 495.536 249.628C495.004 255 495.608 282.928 497.108 292.153L506.192 320.911C474.12 345.888 429.225 322.564 429.225 322.564C430.666 318.153 435.47 304.611 436.122 300.301C435.652 294.803 436.306 286.323 433.978 276.695C433.529 274.836 427.722 252.491 426.942 250.685Z" fill="#1A2E35" />
                                        <mask id="mask33_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="418" y="207" width="89" height="126">
                                            <path d="M418.431 207.45H506.192V332.456H418.431V207.45Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask33_30_2)">
                                            <g opacity="0.5">
                                                <path d="M426.943 250.685L418.431 221.661C423.816 213.624 450.459 207.449 450.459 207.449L464.113 212.241L468.012 208.409C468.012 208.409 474.759 209.915 480.535 211.797C488.245 214.312 492.415 216.335 494.253 220.613C494.253 220.613 497.471 230.093 495.536 249.628C495.004 255 495.608 282.928 497.108 292.153L506.192 320.911C474.12 345.888 429.225 322.564 429.225 322.564C430.667 318.153 435.471 304.611 436.123 300.301C435.652 294.803 436.307 286.323 433.979 276.695C433.529 274.836 427.723 252.491 426.943 250.685Z" fill="white" />
                                            </g>
                                        </g>
                                        <path d="M524.38 281.943C525.379 269.864 534.692 260.132 546.715 258.603L544.254 262.706L548.95 259.916L527.416 286.927L524.38 281.943Z" fill="currentColor" />
                                        <mask id="mask34_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="524" y="258" width="25" height="29">
                                            <path d="M524.38 258.603H548.951V286.927H524.38V258.603Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask34_30_2)">
                                            <g opacity="0.800003">
                                                <path d="M524.38 281.943C525.379 269.864 534.692 260.132 546.715 258.603L544.254 262.705L548.95 259.916L527.416 286.927L524.38 281.943Z" fill="white" />
                                            </g>
                                        </g>
                                        <path d="M490.643 259.773L498.047 259.547L533.486 271.566L501.184 320.91L469.395 312.973C467.583 312.471 466.522 310.595 467.023 308.783C467.098 308.514 467.206 308.254 467.344 308.01L480.183 284.794C480.439 284.335 480.439 283.777 480.183 283.317L478.44 280.221C478.074 279.586 478.074 278.803 478.44 278.169L487.054 262.029C487.783 260.71 489.139 259.859 490.643 259.773Z" fill="currentColor" />
                                        <path d="M533.486 271.565L553.668 258.604L520.484 307.908L501.185 320.911L533.486 271.565Z" fill="currentColor" />
                                        <mask id="mask35_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="501" y="258" width="53" height="63">
                                            <path d="M501.184 258.603H553.668V320.911H501.184V258.603Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask35_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M533.486 271.565L553.667 258.604L520.483 307.908L501.185 320.911L533.486 271.565Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M529.524 294.495C529.524 294.495 521.681 292.439 519.957 293.784C518.235 295.13 520.593 296.407 520.593 296.407C520.593 296.407 517.893 295.194 517.088 296.488C516.12 298.042 518.599 299.367 518.599 299.367C518.599 299.367 516.344 298.483 515.689 299.676C515.012 300.914 517.681 302.65 517.681 302.65C517.681 302.65 515.939 302.383 515.873 303.427C515.808 304.471 521.391 308.288 523.857 308.03C526.324 307.771 531.667 298.804 532.503 296.642C533.337 294.479 533.251 292.795 531.667 291.291L529.524 294.495Z" fill="#FDC2BC" />
                                        <mask id="mask36_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="520" y="296" width="6" height="3">
                                            <path d="M520.456 296.246H525.564V298.419H520.456V296.246Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask36_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M520.511 296.558C520.515 296.56 520.518 296.562 520.522 296.564L525.357 298.413C525.422 298.437 525.506 298.388 525.545 298.302C525.583 298.216 525.561 298.124 525.498 298.101L520.663 296.252C520.598 296.228 520.514 296.277 520.475 296.362C520.439 296.444 520.455 296.528 520.511 296.558Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask37_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="518" y="299" width="6" height="3">
                                            <path d="M518.591 299.275H523.321V301.811H518.591V299.275Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask37_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M518.646 299.588L518.649 299.589L523.106 301.801C523.167 301.832 523.253 301.789 523.297 301.705C523.339 301.62 523.326 301.545 523.262 301.496L518.806 299.285C518.743 299.254 518.658 299.297 518.615 299.381C518.573 299.464 518.586 299.556 518.646 299.588Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask38_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="517" y="302" width="5" height="3">
                                            <path d="M517.693 302.568H521.221V304.65H517.693V302.568Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask38_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M517.749 302.882L521.002 304.639C521.063 304.671 521.15 304.631 521.194 304.547C521.239 304.464 521.226 304.37 521.166 304.336L517.911 302.58C517.85 302.547 517.765 302.588 517.719 302.671C517.675 302.754 517.687 302.848 517.749 302.882Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M473.044 209.638L467.125 203.906L464.113 212.242L450.964 201.76L444.296 209.075L460.811 220.583L464.113 213.275L473.044 219.975V209.638Z" fill="#1A2E35" />
                                        <mask id="mask39_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="444" y="209" width="31" height="15">
                                            <path d="M444.941 209.637H474.073V223.791H444.941V209.637Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask39_30_2)">
                                            <g opacity="0.300003">
                                                <path d="M473.044 209.638C473.464 210.283 473.044 219.975 473.044 219.975L464.113 213.275L460.811 220.583L444.941 209.638L461.185 223.791L464.113 215.198L474.073 223.791L473.044 209.638Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask40_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="436" y="252" width="46" height="47">
                                            <path d="M436.005 252.194H481.494V298.419H436.005V252.194Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask40_30_2)">
                                            <g opacity="0.300003">
                                                <path d="M481.494 254.589L436.005 298.419V289.757C436.005 289.757 476.951 252.248 477.449 252.195C477.945 252.14 481.494 254.589 481.494 254.589Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask41_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="432" y="237" width="7" height="25">
                                            <path d="M432.866 237.736H438.769V261.324H432.866V237.736Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask41_30_2)">
                                            <g opacity="0.300003">
                                                <path d="M438.77 258.058L433.843 237.737L432.867 261.323L438.77 258.058Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M446.933 180.365C446.933 181.875 448.157 183.099 449.666 183.099C451.177 183.099 452.399 181.875 452.399 180.365C452.399 178.856 451.177 177.632 449.666 177.632C448.157 177.632 446.933 178.856 446.933 180.365Z" fill="currentColor" />
                                        <path d="M418.43 221.661C418.43 221.661 412.28 227.649 410.209 248.077C408.724 262.739 404.966 294.358 416.361 298.418C427.756 302.478 477.448 254.97 477.448 254.97L469.381 241.122L432.866 261.323C432.866 261.323 436.589 227.833 430.154 224.773C423.718 221.711 418.43 221.661 418.43 221.661Z" fill="#1A2E35" />
                                        <mask id="mask42_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="408" y="221" width="70" height="78">
                                            <path d="M408.412 221.66H477.448V298.664H408.412V221.66Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask42_30_2)">
                                            <g opacity="0.5">
                                                <path d="M418.43 221.661C418.43 221.661 412.28 227.649 410.209 248.077C408.724 262.739 404.966 294.358 416.361 298.418C427.756 302.478 477.448 254.97 477.448 254.97L469.381 241.122L432.866 261.323C432.866 261.323 436.589 227.833 430.154 224.773C423.718 221.711 418.43 221.661 418.43 221.661Z" fill="white" />
                                            </g>
                                        </g>
                                        <path d="M472.501 240.095C472.501 240.095 477.294 230.495 479.57 230.072C481.845 229.648 483.677 230.408 483.677 230.408C483.677 230.408 499.169 221.28 500.201 223.683C500.758 224.983 497.318 227.847 489.933 232.06C489.933 232.06 494.186 233.626 492.472 236.118C492.472 236.118 495.602 237.554 493.932 240.664C493.932 240.664 495.369 243.412 493.562 245.167C491.756 246.922 483.244 251.766 478.314 252.488C473.385 253.212 470.51 243.632 470.51 243.632L472.501 240.095Z" fill="#FDC2BC" />
                                    </g>
                                    <mask id="mask43_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="-1" width="1000" height="668">
                                        <path d="M0 -0.00231934H1000V666.664H0V-0.00231934Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask43_30_2)">
                                        <path d="M524.836 514.386C529.016 516.354 531.594 520.957 535.923 522.57C538.355 523.477 541.034 523.265 543.49 522.355V460.586H484.368C484.295 459.246 484.448 457.906 484.922 456.635C486.535 452.305 491.138 449.729 493.106 445.549C496.01 439.381 491.916 431.695 485.915 428.462C481.259 425.954 478.82 425.483 474.798 425.714C470.775 425.483 468.336 425.954 463.68 428.462C457.679 431.695 453.586 439.381 456.49 445.549C458.458 449.729 463.06 452.305 464.674 456.635C465.147 457.906 465.3 459.246 465.227 460.586H406.107V597.969H543.49V543.033C541.034 542.123 538.355 541.911 535.923 542.818C531.594 544.431 528.999 548.998 524.836 551.002C519.284 553.674 511.01 549.803 507.751 543.811C505.224 539.166 504.772 536.717 505.002 532.694C504.772 528.671 505.243 526.233 507.751 521.577C510.984 515.575 518.668 511.482 524.836 514.386Z" fill="currentColor" />
                                        <mask id="mask44_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="406" y="425" width="138" height="173">
                                            <path d="M406.107 425.663H543.489V597.969H406.107V425.663Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask44_30_2)">
                                            <g opacity="0.399994">
                                                <path d="M524.836 514.386C529.016 516.354 531.594 520.957 535.923 522.57C538.355 523.477 541.034 523.265 543.49 522.355V460.586H484.368C484.295 459.246 484.448 457.906 484.922 456.635C486.535 452.305 491.138 449.729 493.106 445.549C496.01 439.381 491.916 431.695 485.915 428.462C481.259 425.954 478.82 425.483 474.798 425.714C470.775 425.483 468.336 425.954 463.68 428.462C457.679 431.695 453.586 439.381 456.49 445.549C458.458 449.729 463.06 452.305 464.674 456.635C465.147 457.906 465.3 459.246 465.227 460.586H406.107V597.969H543.49V543.033C541.034 542.123 538.355 541.911 535.923 542.818C531.594 544.431 528.999 548.998 524.836 551.002C519.284 553.674 511.01 549.803 507.751 543.811C505.224 539.166 504.772 536.717 505.002 532.694C504.772 528.671 505.243 526.233 507.751 521.577C510.984 515.575 518.668 511.482 524.836 514.386Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M531.572 514.386C535.752 516.354 538.33 520.957 542.659 522.57C545.091 523.477 547.77 523.265 550.226 522.355V460.586H491.104C491.031 459.246 491.184 457.906 491.658 456.635C493.271 452.305 497.874 449.729 499.842 445.549C502.746 439.381 498.652 431.695 492.651 428.462C487.995 425.954 485.556 425.483 481.534 425.714C477.511 425.483 475.072 425.954 470.416 428.462C464.415 431.695 460.322 439.381 463.226 445.549C465.194 449.729 469.796 452.305 471.41 456.635C471.883 457.906 472.036 459.246 471.963 460.586H412.842V597.969H550.226V543.033C547.77 542.123 545.091 541.911 542.659 542.818C538.33 544.431 535.735 548.998 531.572 551.002C526.02 553.674 517.746 549.803 514.487 543.811C511.96 539.166 511.508 536.717 511.738 532.694C511.508 528.671 511.979 526.233 514.487 521.577C517.72 515.575 525.404 511.482 531.572 514.386Z" fill="currentColor" />
                                        <mask id="mask45_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="527" y="543" width="24" height="17">
                                            <path d="M527.413 543.784H550.225V559.812H527.413V543.784Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask45_30_2)">
                                            <g opacity="0.399994">
                                                <path d="M527.414 551.956C527.414 551.956 532.171 560.481 540.342 559.77C548.514 559.06 550.224 555.506 550.224 555.506L550.111 543.784L531.883 550.764C530.624 551.796 529.118 552.149 527.414 551.956Z" fill="black" />
                                            </g>
                                        </g>
                                    </g>
                                    <mask id="mask46_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="-1" width="1000" height="668">
                                        <path d="M0 -0.00231934H1000V666.664H0V-0.00231934Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask46_30_2)">
                                        <path d="M696.589 479.438L743.549 461.394L770.656 435.115C771.409 434.243 779.269 420.688 779.269 420.688L792.573 449.187C792.573 449.187 759.492 482.43 747.377 486.3C737.584 489.428 702.913 497.923 702.913 497.923L696.589 479.438Z" fill="currentColor" />
                                        <mask id="mask47_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="725" y="463" width="48" height="30">
                                            <path d="M725.376 463.942H772.251V492.288H725.376V463.942Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask47_30_2)">
                                            <g opacity="0.399994">
                                                <path d="M725.377 492.288C725.377 492.288 731.038 470.093 743.694 465.476C756.35 460.86 772.71 468.1 772.241 468.412C771.773 468.725 758.069 481.484 757.599 481.641C757.25 481.757 739.83 487.899 730.814 490.877L725.377 492.288Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M640.12 461.293C640.046 462.633 640.2 463.973 640.673 465.243C642.286 469.573 646.889 472.15 648.857 476.33C651.761 482.498 647.668 490.182 641.666 493.415C637.01 495.923 634.572 496.394 630.549 496.165C626.526 496.394 624.088 495.923 619.432 493.415C613.429 490.182 609.337 482.498 612.241 476.33C614.209 472.15 618.812 469.573 620.425 465.243C620.898 463.973 621.052 462.633 620.978 461.293H559.744V523.018C557.257 523.962 554.534 524.198 552.064 523.277C547.734 521.663 545.158 517.061 540.977 515.093C534.809 512.189 527.125 516.282 523.892 522.283C521.384 526.941 520.913 529.378 521.144 533.401C520.913 537.423 521.384 539.862 523.892 544.518C527.125 550.521 534.809 554.614 540.977 551.709C545.158 549.741 547.734 545.138 552.064 543.525C554.534 542.605 557.257 542.839 559.744 543.785V598.675L696.652 599.287V461.905L640.12 461.293Z" fill="#1A2E35" />
                                        <mask id="mask48_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="521" y="461" width="176" height="139">
                                            <path d="M521.092 461.292H696.652V599.288H521.092V461.292Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask48_30_2)">
                                            <g opacity="0.399994">
                                                <path d="M640.12 461.293C640.046 462.633 640.2 463.973 640.673 465.243C642.286 469.573 646.889 472.15 648.857 476.33C651.761 482.498 647.668 490.182 641.666 493.415C637.01 495.923 634.572 496.394 630.549 496.165C626.526 496.394 624.088 495.923 619.432 493.415C613.429 490.182 609.337 482.498 612.241 476.33C614.209 472.15 618.812 469.573 620.425 465.243C620.898 463.973 621.052 462.633 620.978 461.293H559.744V523.018C557.257 523.962 554.534 524.198 552.064 523.277C547.734 521.663 545.158 517.061 540.977 515.093C534.809 512.189 527.125 516.282 523.892 522.283C521.384 526.941 520.913 529.378 521.144 533.401C520.913 537.423 521.384 539.862 523.892 544.518C527.125 550.521 534.809 554.614 540.977 551.709C545.158 549.741 547.734 545.138 552.064 543.525C554.534 542.605 557.257 542.839 559.744 543.785V598.675L696.652 599.287V461.905L640.12 461.293Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M646.18 461.293C646.106 462.633 646.26 463.973 646.733 465.243C648.346 469.573 652.949 472.15 654.917 476.33C657.821 482.498 653.728 490.182 647.726 493.415C643.07 495.923 640.632 496.394 636.609 496.165C632.586 496.394 630.148 495.923 625.492 493.415C619.489 490.182 615.397 482.498 618.301 476.33C620.269 472.15 624.872 469.573 626.485 465.243C626.958 463.973 627.112 462.633 627.038 461.293H565.804V523.018C563.317 523.962 560.594 524.198 558.124 523.277C553.794 521.663 551.218 517.061 547.037 515.093C540.869 512.189 533.185 516.282 529.952 522.283C527.444 526.941 526.973 529.378 527.204 533.401C526.973 537.423 527.444 539.862 529.952 544.518C533.185 550.521 540.869 554.614 547.037 551.709C551.218 549.741 553.794 545.138 558.124 543.525C560.594 542.605 563.317 542.839 565.804 543.785V598.675L702.712 599.287V461.905L646.18 461.293Z" fill="#1A2E35" />
                                        <path d="M742.615 553.901L764.148 552.598C760.704 571.57 757.162 583.877 758.668 593.617L749.988 599.419L741.951 591.515C741.951 591.515 740.467 576.009 742.615 553.901Z" fill="#FBB473" />
                                        <path d="M740.658 578.203L748.483 578.295C752.269 584.851 754.889 583.307 758.901 578.682C761.173 578.444 761.754 581.055 761.93 581.758L766.002 597.28C766.357 598.576 765.593 599.915 764.297 600.27C764.066 600.332 763.827 600.362 763.589 600.355C756.678 600.274 753.409 600.235 744.809 600.134L718.506 599.826C711.335 599.742 709.934 592.498 712.895 591.863C726.211 589.084 735.662 585.287 739.813 581.471C740.582 580.804 739.806 580.288 740.658 578.203Z" fill="currentColor" />
                                        <path d="M736.656 582.548C738.613 582.839 740.417 584.031 741.452 585.717" stroke="#1A2E35" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M733.088 585.168C735.046 585.459 736.85 586.651 737.884 588.338" stroke="#1A2E35" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M728.662 587.355C730.619 587.646 732.423 588.838 733.458 590.524" stroke="#1A2E35" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <mask id="mask49_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="711" y="595" width="56" height="6">
                                            <path d="M711.724 595.581H766.077V600.355H711.724V595.581Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask49_30_2)">
                                            <g opacity="0.699997">
                                                <path d="M764.297 600.27C764.066 600.332 763.827 600.362 763.589 600.355C756.678 600.274 753.409 600.235 744.809 600.134L718.505 599.826C714.626 599.779 712.447 597.638 711.723 595.582C712.815 595.603 765.079 596.622 765.771 596.398L766.049 597.555C766.234 598.76 765.502 599.94 764.297 600.27Z" fill="white" />
                                            </g>
                                        </g>
                                        <path d="M825.081 496.79C825.081 496.79 766.27 466.419 754.82 465.554C743.368 464.688 732.425 470.89 730.236 494.6C728.048 518.312 732.425 579.291 732.425 579.291L764.148 579.836L768.08 509.191C768.08 509.191 817.212 545.08 818.67 544.715C820.129 544.351 839.308 543.483 839.308 543.483L825.081 496.79Z" fill="#1A2E35" />
                                        <mask id="mask50_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="729" y="465" width="111" height="115">
                                            <path d="M729.623 465.476H839.308V579.836H729.623V465.476Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask50_30_2)">
                                            <g opacity="0.300003">
                                                <path d="M825.081 496.79C825.081 496.79 766.27 466.419 754.82 465.554C743.368 464.688 732.425 470.89 730.236 494.6C728.048 518.312 732.425 579.291 732.425 579.291L764.148 579.836L768.08 509.191C768.08 509.191 817.212 545.08 818.67 544.715C820.129 544.351 839.308 543.483 839.308 543.483L825.081 496.79Z" fill="white" />
                                            </g>
                                        </g>
                                        <mask id="mask51_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="740" y="542" width="27" height="49">
                                            <path d="M740.081 542.229H766.277V590.296H740.081V542.229Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask51_30_2)">
                                            <g opacity="0.399994">
                                                <path d="M766.278 542.229C766.278 542.229 740.36 551.306 740.084 572.681C739.807 594.054 762.666 589.986 762.666 589.986L766.278 542.229Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M847.592 597.917L841.762 576.721C862.142 574.514 875.756 579.533 885.232 575.06L893.764 582.161L888.128 592.737C888.128 592.737 873.106 597.842 847.592 597.917Z" fill="#FBB473" />
                                        <path d="M874.947 598.069L872.681 590.063C878.225 584.229 875.861 582.022 869.936 579.325C869.009 577.081 871.496 575.702 872.159 575.31L886.757 566.479C887.973 565.727 889.568 566.102 890.32 567.318C890.453 567.534 890.555 567.769 890.62 568.014C892.62 575.083 893.565 578.429 896.055 587.227L903.668 614.137C905.743 621.473 898.78 625.085 897.241 622.257C890.395 609.518 883.675 601.027 878.533 597.946C877.621 597.363 877.329 598.309 874.947 598.069Z" fill="currentColor" />
                                        <path d="M880.582 600.839C880.289 598.757 880.961 596.558 882.368 594.995" stroke="#1A2E35" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M884.329 603.687C884.036 601.604 884.708 599.406 886.114 597.842" stroke="#1A2E35" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M887.892 607.541C887.599 605.458 888.271 603.259 889.678 601.695" stroke="#1A2E35" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <mask id="mask52_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="885" y="566" width="20" height="57">
                                            <path d="M885.927 566.102H904.049V622.331H885.927V566.102Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask52_30_2)">
                                            <g opacity="0.699997">
                                                <path d="M890.319 567.318C890.453 567.534 890.554 567.768 890.619 568.014C892.619 575.083 893.566 578.428 896.055 587.227L903.667 614.138C904.79 618.107 903.263 620.972 901.385 622.331C901.078 621.211 886.363 567.62 885.927 566.982L887.023 566.35C888.197 565.798 889.621 566.188 890.319 567.318Z" fill="white" />
                                            </g>
                                        </g>
                                        <path d="M889.534 508.367L892.087 521.186C892.087 521.186 898.633 546.612 889.458 559.383C880.694 571.584 867.761 573.76 867.761 573.76L870.419 598.282L867.761 599.938C867.761 599.938 850.845 599.938 816.214 598.356C783.318 596.854 755.041 595.283 749.205 585.068C743.369 574.854 742.021 569.894 751.565 557.71C760.191 546.698 825.867 530.476 828.151 529.82L827.235 524.224L826.17 520.262L889.534 508.367Z" fill="#1A2E35" />
                                        <mask id="mask53_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="744" y="508" width="151" height="92">
                                            <path d="M744.611 508.367H894.349V599.937H744.611V508.367Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask53_30_2)">
                                            <g opacity="0.300003">
                                                <path d="M889.534 508.367L892.087 521.186C892.087 521.186 898.633 546.612 889.458 559.383C880.694 571.584 867.761 573.76 867.761 573.76L870.419 598.282L867.761 599.938C867.761 599.938 850.845 599.938 816.214 598.356C783.318 596.854 755.041 595.283 749.205 585.068C743.369 574.854 742.021 569.894 751.565 557.71C760.191 546.698 825.867 530.476 828.151 529.82L827.235 524.224L826.17 520.262L889.534 508.367Z" fill="white" />
                                            </g>
                                        </g>
                                        <mask id="mask54_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="794" y="571" width="74" height="7">
                                            <path d="M794.401 571.986H867.761V577.16H794.401V571.986Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask54_30_2)">
                                            <g opacity="0.399994">
                                                <path d="M867.761 573.76C865.743 574.287 794.401 571.987 794.401 571.987C794.401 571.987 815.488 575.603 831.081 576.918C846.675 578.232 867.761 573.76 867.761 573.76Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask55_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="828" y="522" width="42" height="8">
                                            <path d="M828.152 522.65H869.233V529.82H828.152V522.65Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask55_30_2)">
                                            <g opacity="0.399994">
                                                <path d="M828.152 529.821L869.233 522.657C869.233 522.657 839.621 522.175 828.152 529.821Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M723.424 500.733C723.424 500.733 719.997 495.457 714.896 494.435C709.796 493.415 705.995 491.242 702.151 490.745C698.307 490.247 701.795 494.147 704.069 495.846C706.344 497.545 708.907 499.494 707.353 500.997C705.801 502.499 687.789 507.069 685.873 509.397C683.957 511.725 687.103 511.897 687.103 511.897C687.103 511.897 682.757 513.125 682.775 514.978C682.78 515.459 683.571 516.571 685.639 516.322C690.291 515.762 699.992 514.083 699.992 514.083C699.433 514.169 687.607 517.095 685.892 517.766C683.652 518.641 683.041 520.197 683.592 521.478C684.373 523.303 699.161 520.174 699.877 520.478C699.877 520.478 691.304 521.995 690.484 524.422C689.664 526.85 695.113 526.19 699.808 524.694C704.111 523.325 712.912 521.762 717.151 519.945C722.375 517.705 725.379 515.027 725.493 509.699C725.605 504.37 723.424 500.733 723.424 500.733Z" fill="#FBB473" />
                                        <path d="M717.788 500.618L730.942 495.356L735.486 509.586L720.06 515.087L717.788 500.618Z" fill="#FBB473" />
                                        <path d="M813.211 402.201C813.211 402.201 809.639 394.133 810.396 378.16C810.391 378.144 809.522 377.984 809.518 377.968C809.614 375.736 809.787 373.653 809.987 371.837C809.988 371.785 809.984 371.769 809.984 371.769L792.574 389.284C794.196 393.945 794.69 403.585 794.599 407.728C794.599 407.728 793.708 415.404 803.172 413.467C810.087 412.051 813.211 402.201 813.211 402.201Z" fill="#FBB473" />
                                        <mask id="mask56_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="793" y="390" width="12" height="12">
                                            <path d="M793.829 390.619H804.955V401.951H793.829V390.619Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask56_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M793.829 396.083L804.955 390.619C804.761 394.531 802.563 399.641 794.464 401.951C794.464 401.951 794.301 397.663 793.829 396.083Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M807.767 361.806C809.489 375.088 810.727 382.544 805.37 390.5C797.311 402.468 780.33 399.655 774.661 387.118C769.557 375.832 767.599 356.007 779.493 348.427C791.21 340.959 806.046 348.523 807.767 361.806Z" fill="#FBB473" />
                                        <path d="M802.652 343.121C796.503 335.922 785.052 342.226 780.7 346.897C780.05 347.594 791.827 350.922 791.13 350.81L794.85 353.894C795.33 353.686 796.323 358.252 797.162 362.206C797.934 365.84 799.667 369.184 802.199 371.898C804.322 374.174 807.163 376.9 810.356 379.11C814.508 375.993 813.24 367.964 813.771 362.936C814.562 355.444 814.388 341.418 802.652 343.121Z" fill="#1A2E35" />
                                        <path d="M815.059 371.751C814.66 375.333 812.635 378.383 810.279 380.177C806.736 382.877 804.452 378.876 804.027 374.668C803.644 370.881 803.857 366.137 808.091 365.091C812.263 364.059 815.515 367.656 815.059 371.751Z" fill="#FBB473" />
                                        <path d="M789.707 369.213C789.966 370.556 789.461 371.776 788.581 371.936C787.699 372.097 786.775 371.139 786.517 369.795C786.258 368.452 786.762 367.232 787.643 367.072C788.525 366.911 789.449 367.869 789.707 369.213Z" fill="#1A2E35" />
                                        <path d="M776.583 372.012C776.841 373.356 776.337 374.575 775.456 374.735C774.575 374.896 773.651 373.938 773.392 372.594C773.133 371.251 773.637 370.031 774.519 369.871C775.4 369.71 776.324 370.67 776.583 372.012Z" fill="#1A2E35" />
                                        <path d="M780.726 370.442C780.726 370.442 777.758 377.935 776.919 380.915C779.114 382.245 782.185 380.846 782.185 380.846L780.726 370.442Z" fill="#ED883E" />
                                        <path d="M791.772 362.25C791.585 362.371 791.339 362.392 791.124 362.283C788.571 360.978 786.503 362.114 786.481 362.124C786.175 362.298 785.781 362.191 785.604 361.886C785.428 361.579 785.536 361.19 785.841 361.016C785.951 360.955 788.541 359.532 791.709 361.151C792.025 361.312 792.151 361.696 791.989 362.01C791.937 362.111 791.861 362.191 791.772 362.25Z" fill="#1A2E35" />
                                        <path d="M787.411 384.279C789.592 383.876 791.074 382.464 792.45 380.516" stroke="#1A2E35" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <mask id="mask57_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="805" y="367" width="7" height="8">
                                            <path d="M805.772 367.762H811.695V374.118H805.772V367.762Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask57_30_2)">
                                            <g opacity="0.199997">
                                                <path d="M811.362 368.698C810.682 368.016 809.548 367.936 808.674 368.338C807.799 368.741 807.163 369.544 806.75 370.413C806.254 371.457 806.035 372.632 806.124 373.785" stroke="black" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </g>
                                        <path d="M769.678 367.461C769.557 367.459 769.434 367.421 769.326 367.347C769.035 367.143 768.959 366.744 769.159 366.453C771.161 363.544 774.103 363.629 774.235 363.616C774.589 363.628 774.869 363.924 774.861 364.277C774.853 364.629 774.563 364.905 774.213 364.897C774.09 364.889 771.822 364.853 770.215 367.188C770.09 367.371 769.885 367.467 769.678 367.461Z" fill="#1A2E35" />
                                        <path d="M802.652 343.121C802.652 343.121 794.475 333.017 780.332 336.35C768.956 339.032 763.023 347.353 762.802 355.316C762.707 358.737 763.467 361.282 764.364 363.073C765.042 364.425 766.986 364.222 767.422 362.773C767.544 362.362 767.694 361.957 767.867 361.561C767.912 361.652 767.962 361.74 768.012 361.826C768.842 363.214 771.046 362.704 771.08 361.088C771.091 360.577 771.148 360.066 771.255 359.562C771.262 359.574 771.27 359.586 771.278 359.598C772.035 360.816 773.935 360.446 774.239 359.044C775.576 352.856 783.118 348.206 789.934 350.974L794.85 353.894C800.486 350.601 802.652 343.121 802.652 343.121Z" fill="#1A2E35" />
                                        <mask id="mask58_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="800" y="519" width="30" height="18">
                                            <path d="M800.163 519.714H829.088V536.132H800.163V519.714Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask58_30_2)">
                                            <g opacity="0.399994">
                                                <path d="M823.878 520.636L823.102 525.839L800.163 532.743L805.45 536.132L828.152 529.821L829.087 519.713L823.878 520.636Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M841.016 403.835C830.716 397.231 812.564 400.371 812.564 400.371L779.269 420.689L802.036 474.203C802.036 474.203 811.537 496.963 816.663 512.119C817.932 515.875 820.361 521.114 824.293 520.601L887.532 509.167C890.623 508.609 892.575 505.526 891.737 502.499C885.633 480.449 850.241 409.75 841.016 403.835Z" fill="currentColor" />
                                        <mask id="mask59_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="802" y="433" width="45" height="53">
                                            <path d="M802.396 433.6H846.96V485.714H802.396V433.6Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask59_30_2)">
                                            <g opacity="0.399994">
                                                <path d="M846.96 433.601C846.96 433.601 836.826 452.678 819.033 469.311C811.848 476.029 806.857 485.714 806.857 485.714L802.396 474.317L846.96 433.601Z" fill="black" />
                                            </g>
                                        </g>
                                        <path d="M815.611 418.898L772.5 472.656L721.887 495.633L726.932 516.584C726.932 516.584 767.971 505.51 784.466 495.232C800.959 484.953 828.152 456.21 828.152 456.21C828.152 456.21 851.867 437.178 850.735 421.781C849.603 406.385 827.031 402.789 815.611 418.898Z" fill="currentColor" />
                                        <path d="M792.208 412.793C792.208 412.793 793.81 404.581 794.586 404.911C795.362 405.242 803.068 409.867 803.068 409.867L811.687 396.955L816.86 400.378L804.954 425.062L792.208 412.793Z" fill="currentColor" />
                                        <mask id="mask60_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="778" y="416" width="40" height="39">
                                            <path d="M778.481 416.107H817.875V454.967H778.481V416.107Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask60_30_2)">
                                            <g opacity="0.399994">
                                                <path d="M788.423 447.245L778.482 433.601L786.514 454.967L790.424 450.807L817.875 416.107L788.423 447.245Z" fill="black" />
                                            </g>
                                        </g>
                                        <mask id="mask61_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="792" y="399" width="25" height="22">
                                            <path d="M792.208 399.926H816.176V420.127H792.208V399.926Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask61_30_2)">
                                            <g opacity="0.399994">
                                                <path d="M792.208 412.793C792.643 412.949 799.782 417.761 799.392 417.841C799.002 417.919 802.395 412.083 802.395 412.083L809.963 414.962L816.175 399.926L810.06 417.246L802.892 413.779L799.392 420.127L792.208 412.793Z" fill="black" />
                                            </g>
                                        </g>
                                    </g>
                                    <path d="M300.963 310.595C301.036 309.255 300.883 307.915 300.41 306.645C298.796 302.315 294.194 299.738 292.226 295.558C289.322 289.39 293.415 281.706 299.416 278.473C304.072 275.965 306.511 275.494 310.534 275.723C314.556 275.494 316.995 275.965 321.651 278.473C327.654 281.706 331.746 289.39 328.842 295.558C326.874 299.738 322.271 302.315 320.658 306.645C320.184 307.915 320.031 309.255 320.104 310.595H381.339V248.87C383.826 247.926 386.548 247.69 389.018 248.611C393.348 250.225 395.924 254.826 400.106 256.795C406.272 259.699 413.958 255.606 417.191 249.605C419.699 244.947 420.17 242.51 419.939 238.487C420.17 234.465 419.699 232.026 417.191 227.37C413.958 221.367 406.272 217.274 400.106 220.179C395.924 222.147 393.348 226.75 389.018 228.363C386.548 229.283 383.826 229.049 381.339 228.103V173.213L244.431 172.601V309.983L300.963 310.595Z" fill="#1A2E35" />
                                    <mask id="mask62_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="244" y="172" width="176" height="139">
                                        <path d="M244.432 172.6H419.991V310.595H244.432V172.6Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask62_30_2)">
                                        <g opacity="0.399994">
                                            <path d="M300.963 310.595C301.037 309.255 300.883 307.915 300.41 306.645C298.797 302.315 294.194 299.738 292.226 295.558C289.322 289.39 293.415 281.706 299.417 278.473C304.073 275.965 306.511 275.494 310.534 275.723C314.557 275.494 316.995 275.965 321.651 278.473C327.654 281.706 331.746 289.39 328.842 295.558C326.874 299.738 322.271 302.315 320.658 306.645C320.185 307.915 320.031 309.255 320.105 310.595H381.339V248.87C383.826 247.926 386.549 247.69 389.018 248.611C393.349 250.225 395.925 254.826 400.106 256.795C406.273 259.699 413.958 255.606 417.191 249.605C419.699 244.947 420.17 242.51 419.939 238.487C420.17 234.465 419.699 232.026 417.191 227.37C413.958 221.367 406.273 217.274 400.106 220.179C395.925 222.147 393.349 226.75 389.018 228.363C386.549 229.283 383.826 229.049 381.339 228.103V173.213L244.431 172.601V309.983L300.963 310.595Z" fill="black" />
                                        </g>
                                    </g>
                                    <path d="M305.113 310.595C305.187 309.255 305.033 307.915 304.56 306.645C302.947 302.315 298.344 299.738 296.376 295.558C293.472 289.39 297.565 281.706 303.567 278.473C308.223 275.965 310.661 275.494 314.684 275.723C318.707 275.494 321.145 275.965 325.801 278.473C331.804 281.706 335.896 289.39 332.992 295.558C331.024 299.738 326.421 302.315 324.808 306.645C324.335 307.915 324.181 309.255 324.255 310.595H385.489V248.87C387.976 247.926 390.699 247.69 393.168 248.611C397.499 250.225 400.075 254.826 404.256 256.795C410.424 259.699 418.108 255.606 421.341 249.605C423.849 244.947 424.32 242.51 424.089 238.487C424.32 234.465 423.849 232.026 421.341 227.37C418.108 221.367 410.424 217.274 404.256 220.179C400.075 222.147 397.499 226.75 393.168 228.363C390.699 229.283 387.976 229.049 385.489 228.103V173.213L248.581 172.601V309.983L305.113 310.595Z" fill="#1A2E35" />
                                    <path d="M214.086 237.059C214.086 237.059 204.089 272.478 210.484 278.643C216.877 284.809 239.257 280.698 238.114 280.242C236.973 279.785 243.824 237.19 244.28 238.734C244.737 240.279 214.086 237.059 214.086 237.059Z" fill="#CD7A63" />
                                    <path d="M226.524 556.862L226.493 587.588L240.76 588.698L245.774 559.832C239.249 555.119 232.829 553.994 226.524 556.862Z" fill="#CD7A63" />
                                    <path d="M226.366 584.382C224.962 588.437 224.87 605.029 224.87 605.029L255.111 605.065C256.909 599.065 254.129 594.969 250.601 594.425C249.085 594.194 247.302 592.507 246.002 591.035C245.994 590.845 244.145 581.629 243.002 581.187C243.002 581.187 242.214 580.229 241.543 581.186C240.871 582.142 240.29 585.257 240.29 585.257C235.569 578.91 230.943 579.758 226.366 584.382Z" fill="#1A2E35" />
                                    <path d="M225.999 589.199C229.416 587.835 233.083 588.353 236.062 590.62C236.583 591.016 237.078 590.089 236.56 589.696C233.387 587.28 229.375 586.715 225.736 588.167C225.144 588.403 225.4 589.437 225.999 589.199Z" fill="white" />
                                    <path d="M255.021 602.638L225.223 602.603C224.95 602.603 224.73 602.363 224.73 602.067C224.73 601.772 224.951 601.532 225.225 601.532L255.022 601.567C255.294 601.567 255.515 601.807 255.515 602.103C255.514 602.398 255.293 602.638 255.021 602.638Z" fill="white" />
                                    <path d="M288.074 552.855L288.039 587.534L301.766 588.667L308.519 556.206C303.008 551.77 296.607 549.596 288.074 552.855Z" fill="#CD7A63" />
                                    <path d="M287.418 584.454C286.014 588.508 285.922 605.1 285.922 605.1L320.665 605.142C322.462 599.142 318.707 595.584 315.181 595.04C313.665 594.81 308.354 592.579 307.054 591.107C307.046 590.916 305.197 581.7 304.054 581.259C304.054 581.259 303.266 580.3 302.595 581.258C301.923 582.214 301.342 585.328 301.342 585.328C296.622 578.982 291.995 579.83 287.418 584.454Z" fill="#1A2E35" />
                                    <path d="M287.051 589.271C290.468 587.907 294.135 588.425 297.114 590.692C297.635 591.088 298.13 590.16 297.612 589.767C294.439 587.352 290.427 586.787 286.788 588.239C286.196 588.475 286.452 589.509 287.051 589.271Z" fill="white" />
                                    <path d="M320.667 602.715L286.275 602.675C286.002 602.673 285.782 602.435 285.782 602.139C285.782 601.843 286.003 601.604 286.277 601.604L320.669 601.644C320.941 601.644 321.162 601.884 321.162 602.18C321.161 602.475 320.941 602.715 320.667 602.715Z" fill="white" />
                                    <path d="M220.608 572.004L251.011 573.623C257.831 551.517 264.573 472.256 265.269 448.46C266.103 420.027 276.283 348.667 267.281 333.817C258.28 318.968 217.563 330.795 217.563 330.795C217.563 330.795 222.636 417.684 220.608 445.395C218.851 469.412 216.131 540.009 220.608 572.004Z" fill="#1A2E35" />
                                    <path d="M254.293 565.614L252.315 575.771L219.37 574.701L218.162 564.947L254.293 565.614Z" fill="currentColor" />
                                    <path d="M281.327 572.004L311.467 573.623C315.137 549.152 329.878 460.033 328.667 442.963C327.187 422.111 309.731 331.852 303.239 324.893C296.749 317.935 249.222 335.972 249.222 335.972C249.222 335.972 268.754 413.588 284.155 447.157C287.355 454.131 278.853 542.241 281.327 572.004Z" fill="#1A2E35" />
                                    <path d="M314.913 566.375L313.376 575.771L279.88 573.623L279.207 563.786L314.913 566.375Z" fill="currentColor" />
                                    <mask id="mask63_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="243" y="369" width="26" height="65">
                                        <path d="M243.684 369.695H268.237V433.131H243.684V369.695Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask63_30_2)">
                                        <g opacity="0.300003">
                                            <path d="M268.237 404.401L259.387 374.819L243.685 369.694L255.961 379.213L265.833 433.13L268.237 404.401Z" fill="black" />
                                        </g>
                                    </g>
                                    <path d="M285.173 142.404C285.173 143.68 285.733 144.643 286.538 144.777C287.345 144.912 288.084 143.837 288.15 142.539C288.218 141.24 287.613 140.299 286.808 140.165C286.001 140.031 285.33 141.172 285.173 142.404Z" fill="#1A2E35" />
                                    <path d="M285.688 142.225C286.136 146.338 287.153 150.37 288.71 154.204C286.692 154.945 284.45 154.765 282.576 153.712L285.688 142.225Z" fill="#B94D3C" />
                                    <path d="M282.867 138.307C282.701 138.323 282.536 138.284 282.396 138.195C282.105 137.908 282.103 137.44 282.389 137.149C282.392 137.147 282.393 137.145 282.396 137.143C283.891 135.283 286.195 134.264 288.576 134.411C288.971 134.447 289.261 134.795 289.227 135.188C289.225 135.191 289.225 135.192 289.225 135.195C289.157 135.592 288.799 135.872 288.397 135.844C286.511 135.757 284.699 136.592 283.539 138.083C283.369 138.271 283.115 138.356 282.867 138.307Z" fill="#1A2E35" />
                                    <path d="M285.711 159.352C285.545 160.034 285.337 160.704 285.093 161.363C283.723 165.122 281.231 168.384 277.942 170.726C277.115 171.323 276.242 171.854 275.33 172.315C268.166 176.082 259.327 174.7 253.706 168.935C246.47 161.752 246.658 153.454 245.834 139.411C245.615 136.392 246.115 133.366 247.294 130.571C251.441 120.763 262.889 116.116 272.865 120.192C272.865 120.192 272.869 120.194 272.871 120.195C286.829 125.806 288.754 146.694 285.711 159.352Z" fill="#CD7A63" />
                                    <mask id="mask64_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="259" y="168" width="19" height="7">
                                        <path d="M259.619 168.008H277.891V174.415H259.619V168.008Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask64_30_2)">
                                        <g opacity="0.199997">
                                            <path d="M277.89 170.726C277.064 171.322 276.19 171.854 275.277 172.314C270.43 174.855 264.674 175.105 259.618 172.99C260.265 171.302 261.126 169.701 262.18 168.225C267.553 167.562 273.005 168.43 277.89 170.726Z" fill="black" />
                                        </g>
                                    </g>
                                    <path d="M249.134 188.944C256.182 195.231 273.422 192.916 273.422 192.916C273.422 192.916 284.182 190.009 281.912 186.713C275.587 185.683 272.511 182.776 271.239 179.04C270.552 176.733 270.336 174.315 270.603 171.925C270.704 170.593 270.882 169.267 271.135 167.955L249.822 152.44C252.606 162.681 256.026 181.525 249.134 188.944Z" fill="#CD7A63" />
                                    <path d="M277.89 146.576L280.968 147.708L279.437 141.522C279.437 141.522 283.941 134.762 279.437 128.898C279.437 128.898 291.882 125.18 284.852 118.758C282.24 116.358 278.99 118.758 270.396 115.09C265.738 113.08 251.162 112.928 250.44 118.758C250.44 118.758 239.937 118.758 238.804 136.334C238.132 146.76 242.206 156.938 249.924 164.118C249.924 164.118 262.609 167.058 268.832 162.056C275.054 157.053 277.89 146.576 277.89 146.576Z" fill="#1A2E35" />
                                    <path d="M269.777 147.573C270.32 150.249 272.064 152.541 274.521 153.809C277.427 155.026 279.351 151.003 278.921 146.778C278.527 143.026 276.549 137.754 273.439 138.463C270.328 139.174 268.763 143.787 269.777 147.573Z" fill="#CD7A63" />
                                    <path d="M227.461 185.566C227.461 185.566 222.509 187.071 220.045 187.974C214.909 189.855 211.519 195.572 209.661 201.186C205.119 214.903 197.781 247.375 197.781 247.375L224.411 252.972L238.618 222.376L227.461 185.566Z" fill="currentColor" />
                                    <mask id="mask65_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="197" y="185" width="42" height="68">
                                        <path d="M197.78 185.566H238.617V252.971H197.78V185.566Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask65_30_2)">
                                        <g opacity="0.5">
                                            <path d="M227.461 185.566C227.461 185.566 220.334 186.892 216.582 189.991C213.727 192.351 211.454 195.771 209.661 201.186C205.119 214.903 197.781 247.375 197.781 247.375L224.411 252.972L238.618 222.376L227.461 185.566Z" fill="white" />
                                        </g>
                                    </g>
                                    <path d="M291.956 187.14C284.102 186.295 259.94 180.836 227.46 185.565L219.86 305.66C219.86 305.66 218.884 324.033 216.007 339.8C249.014 353.973 288.063 349.92 310.143 338.005C309.887 338.507 309.164 325.403 308.031 306.207C306.035 272.379 302.77 219.636 298.556 189.101C298.442 188.347 292.739 187.224 291.956 187.14Z" fill="currentColor" />
                                    <mask id="mask66_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="216" y="183" width="95" height="166">
                                        <path d="M216.007 183.659H310.143V348.807H216.007V183.659Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask66_30_2)">
                                        <g opacity="0.5">
                                            <path d="M291.956 187.14C284.102 186.294 259.94 180.836 227.46 185.565L219.86 305.66C219.86 305.66 218.884 324.033 216.007 339.8C249.014 353.973 288.063 349.92 310.143 338.005C309.887 338.506 309.164 325.402 308.031 306.206C306.035 272.378 302.77 219.636 298.556 189.101C298.442 188.346 292.739 187.224 291.956 187.14Z" fill="white" />
                                        </g>
                                    </g>
                                    <path d="M248.776 184.316C249.715 181.524 251.021 179.56 252.696 178.424L270.783 179.818L279.264 185.41L248.776 184.316Z" fill="#007CFF" />
                                    <mask id="mask67_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="248" y="178" width="32" height="8">
                                        <path d="M248.776 178.424H279.264V185.41H248.776V178.424Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask67_30_2)">
                                        <g opacity="0.5">
                                            <path d="M248.776 184.317C249.715 181.526 251.021 179.561 252.696 178.425L270.783 179.818L279.264 185.409L248.776 184.317Z" fill="white" />
                                        </g>
                                    </g>
                                    <mask id="mask68_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="291" y="224" width="16" height="50">
                                        <path d="M291.115 224.519H306.035V273.803H291.115V224.519Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask68_30_2)">
                                        <g opacity="0.199997">
                                            <path d="M291.115 224.519C294.011 238.046 298.176 264.562 306.035 273.803L304.167 246.967L291.115 224.519Z" fill="black" />
                                        </g>
                                    </g>
                                    <mask id="mask69_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="216" y="217" width="8" height="36">
                                        <path d="M216.137 217.915H223.417V252.599H216.137V217.915Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask69_30_2)">
                                        <g opacity="0.199997">
                                            <path d="M222.717 252.599L223.417 217.916L216.137 250.949L222.717 252.599Z" fill="black" />
                                        </g>
                                    </g>
                                    <path d="M304.981 235.217C303.966 235.608 323.553 279.677 331.527 280.07C339.502 280.464 376.945 263.426 376.945 263.426L368.543 253.4L340.245 255.022L325.811 224.297L304.981 235.217Z" fill="#CD7A63" />
                                    <path d="M295.132 188.652C284.973 195.361 279.938 210.552 307.172 257.453L336.582 239.493C330.633 228.517 324.329 220.537 317.325 204.64C303.205 184.313 295.132 188.652 295.132 188.652Z" fill="currentColor" />
                                    <mask id="mask70_30_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="287" y="188" width="50" height="70">
                                        <path d="M287.004 188.263H336.581V257.454H287.004V188.263Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask70_30_2)">
                                        <g opacity="0.5">
                                            <path d="M295.132 188.652C284.973 195.361 279.938 210.552 307.172 257.453L336.582 239.493C330.633 228.517 324.329 220.537 317.325 204.64C303.205 184.313 295.132 188.652 295.132 188.652Z" fill="white" />
                                        </g>
                                    </g>
                                    <path d="M390.133 253.103C390.133 250.531 389.341 247.735 387.957 247.649C386.572 247.564 379.176 247.641 379.176 247.641C379.176 245.565 383.069 243.295 381.801 241.877C380.147 240.028 370.561 247.929 369.956 249.541C368.769 252.707 368.176 253.499 368.176 253.499L373.241 265.127C373.241 265.127 382.616 271.301 384.792 269.125C386.968 266.949 386.771 264.624 386.771 264.624C386.771 264.624 388.947 261.609 388.748 259.631C388.551 257.652 390.133 255.675 390.133 253.103Z" fill="#CD7A63" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_30_2">
                                        <rect width="1000" height="666.667" fill="white" transform="translate(0 -0.00244141)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="md:w-[40%] md:pt-5 lg:pt-12 lg:w-1/2">
                        <div class="mb-6">
                            <h2 class="mb-4 text-center text-2xl font-bold md:mb-6 md:text-left lg:text-3xl">
                                Here’s What Revoke Digital Can Do for You
                            </h2>

                            <p class="mx-auto max-w-screen-md text-center sm:px-10 md:text-lg md:text-left md:p-0">
                                Lorem ipsum dolor sit
                                amet
                                consectetur
                                adipisicing elit. Quo culpa magni neque ex expedita hic quae est, illo vel
                                doloremque
                                suscipit</p>
                        </div>
                        <div class="flex flex-wrap -mx-[15px] md:hidden lg:block lg:w-full">
                            <div class=" sm:w-1/2 w-full lg:w-full">
                                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                    <span class="text-primary ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                            <path d="M22 4L12 14.01l-3-3"></path>
                                        </svg>
                                    </span>
                                    <span>Authentic Cliche Forage Authentic Cliche Forage</span>
                                </div>
                            </div>
                            <div class=" sm:w-1/2 w-full lg:w-full">
                                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                    <span class="text-primary ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                            <path d="M22 4L12 14.01l-3-3"></path>
                                        </svg>
                                    </span>
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                                        molestiae provident suscipit ea.</span>
                                </div>
                            </div>
                            <div class=" sm:w-1/2 w-full lg:w-full">
                                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                    <span class="text-primary ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                            <path d="M22 4L12 14.01l-3-3"></path>
                                        </svg>
                                    </span>
                                    <span>Authentic Cliche Forage Authentic Cliche Forage</span>
                                </div>
                            </div>
                            <div class=" sm:w-1/2 w-full lg:w-full">
                                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                    <span class="text-primary ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                            <path d="M22 4L12 14.01l-3-3"></path>
                                        </svg>
                                    </span>
                                    <span>Authentic Cliche Forage</span>
                                </div>
                            </div>
                            <div class=" sm:w-1/2 w-full lg:w-full">
                                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                    <span class="text-primary ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                            <path d="M22 4L12 14.01l-3-3"></path>
                                        </svg>
                                    </span>
                                    <span>Authentic Cliche Forage Authentic Cliche Forage</span>
                                </div>
                            </div>
                            <div class=" sm:w-1/2 w-full lg:w-full">
                                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                    <span class="text-primary ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                            <path d="M22 4L12 14.01l-3-3"></path>
                                        </svg>
                                    </span>
                                    <span>Authentic Cliche Forage</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-full">
                    <div class="flex-wrap -mx-[15px] hidden md:flex lg:w-4/5 lg:hidden">
                        <div class=" sm:w-1/2 w-full">
                            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                <span class="text-primary ">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                </span>
                                <span>Authentic Cliche Forage Authentic Cliche Forage</span>
                            </div>
                        </div>
                        <div class=" sm:w-1/2 w-full">
                            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                <span class="text-primary ">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                </span>
                                <span>Lorem ipsum dolor sit amet consectetur provident suscipit ea.</span>
                            </div>
                        </div>
                        <div class=" sm:w-1/2 w-full">
                            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                <span class="text-primary ">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                </span>
                                <span>Authentic Cliche Forage Authentic Cliche Forage</span>
                            </div>
                        </div>
                        <div class=" sm:w-1/2 w-full">
                            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                <span class="text-primary ">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                </span>
                                <span>met consectetur adipisicing elit. Nesciunt molestiae </span>
                            </div>
                        </div>
                        <div class=" sm:w-1/2 w-full">
                            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                <span class="text-primary ">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                </span>
                                <span>Authentic Cliche Forage Authentic Cliche Forage</span>
                            </div>
                        </div>
                        <div class=" sm:w-1/2 w-full">
                            <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                <span class="text-primary ">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                </span>
                                <span>Authentic Cliche Forage</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Marketing & Promotions -->
<section>
    <div class="py-5 pt-10 pb-10 lg:pt-32">
        <div class="container">
            <div class="lg:flex lg:flex-row-reverse">
                <div class="lg:w-1/2">
                    <div class="text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1000 667" fill="none">
                            <g clip-path="url(#clip0_24_594)">
                                <mask id="mask0_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask0_24_594)">
                                    <path d="M638.283 617.333H585.176C575.376 617.333 567.432 609.389 567.432 599.589V557.714C567.432 547.914 575.376 539.97 585.176 539.97H638.283C641.879 539.97 644.795 542.886 644.795 546.482V610.821C644.795 614.417 641.879 617.333 638.283 617.333Z" fill="#E1E1E1" />
                                    <path d="M625.501 617.333H558.946C555.961 617.333 553.542 614.914 553.542 611.929V545.374C553.542 542.389 555.961 539.97 558.946 539.97H625.501C628.485 539.97 630.905 542.389 630.905 545.374V611.929C630.905 614.914 628.485 617.333 625.501 617.333Z" fill="#ECECEC" />
                                    <path d="M595.566 598.263L572.129 582.586L577.6 574.407L593.316 584.919L612.872 559.04L620.721 564.972L595.566 598.263Z" fill="#E1E1E1" />
                                    <path d="M272.757 559.355C272.985 573.651 284.749 585.095 298.979 584.866C313.21 584.637 324.601 572.818 324.373 558.522C324.143 544.226 312.381 532.782 298.15 533.011C283.919 533.242 272.529 545.059 272.757 559.355ZM352.541 558.067C353.019 587.967 329.194 612.683 299.431 613.165C269.67 613.645 245.066 589.709 244.589 559.81C244.11 529.91 267.935 505.194 297.698 504.714C327.461 504.234 352.063 528.169 352.541 558.067Z" fill="#ECECEC" />
                                    <path d="M352.54 558.068C353.018 587.968 329.194 612.684 299.432 613.164L298.979 584.866C313.21 584.636 324.602 572.818 324.372 558.522C324.144 544.226 312.38 532.782 298.15 533.012L297.698 504.714C327.46 504.234 352.062 528.168 352.54 558.068Z" fill="#E1E1E1" />
                                    <path d="M304.278 617.516C269.459 618.077 241.682 591.054 241.123 556.074L274.077 555.542C274.345 572.268 287.071 582.798 303.719 582.529L304.278 617.516Z" fill="#F5F5F5" />
                                    <path d="M866.903 90.0726C867.081 101.235 876.267 110.171 887.377 109.991C898.489 109.813 907.384 100.585 907.205 89.4219C907.027 78.2592 897.841 69.3246 886.731 69.5032C875.619 69.6819 866.724 78.9099 866.903 90.0726ZM929.2 89.0672C929.573 112.414 910.969 131.713 887.731 132.087C864.492 132.462 845.281 113.774 844.908 90.4272C844.535 67.0806 863.139 47.7832 886.377 47.4072C909.616 47.0326 928.827 65.7219 929.2 89.0672Z" fill="#ECECEC" />
                                    <path d="M929.199 89.0669C929.572 112.414 910.97 131.712 887.731 132.087L887.378 109.992C898.488 109.812 907.383 100.584 907.206 89.4216C907.027 78.2603 897.842 69.3243 886.73 69.5029L886.376 47.4069C909.616 47.0322 928.826 65.7203 929.199 89.0669Z" fill="#E1E1E1" />
                                    <path d="M891.515 135.485C864.327 135.924 842.639 114.824 842.202 87.5106L867.934 87.0959C868.142 100.155 878.079 108.377 891.078 108.168L891.515 135.485Z" fill="#F5F5F5" />
                                    <path d="M72.1368 290.826H82.0047V266.115H88.8887L89.6234 257.841H82.0047V253.129C82.0047 251.178 82.3967 250.407 84.2821 250.407H89.6234V241.821H82.7901C75.4474 241.821 72.1368 245.055 72.1368 251.245V257.841H67.0034V266.218H72.1368V290.826Z" fill="#ECECEC" />
                                    <path d="M274.526 75.4259L314.23 69.3592C317.558 91.1405 302.374 111.802 280.593 115.13C258.811 118.458 238.15 103.274 234.822 81.4925C231.494 59.7112 246.678 39.0499 268.459 35.7219C271.927 35.1925 275.449 35.1192 278.937 35.5045L274.526 75.4259Z" fill="#F5F5F5" />
                                    <path d="M287.408 35.6311L282.588 66.4084L312.799 60.7351C312.799 60.7351 308.356 43.4871 287.408 35.6311Z" fill="#E1E1E1" />
                                    <path d="M147.797 366.225H60.078C47.202 366.225 36.7633 376.664 36.7633 389.54V442.542C36.7633 455.418 47.202 465.857 60.078 465.857H92.246L103.937 482.696L115.629 465.857H147.797C160.673 465.857 171.111 455.418 171.111 442.542V389.54C171.111 376.664 160.673 366.225 147.797 366.225Z" fill="white" />
                                    <path d="M147.797 366.225C147.797 366.225 148.838 366.161 150.827 366.366C152.806 366.56 155.777 367.194 159.177 369.025C160.855 369.972 162.629 371.209 164.333 372.85C165.999 374.522 167.594 376.581 168.846 379.062C170.099 381.538 170.998 384.438 171.263 387.605C171.469 390.784 171.338 394.089 171.391 397.609C171.409 404.636 171.426 412.378 171.446 420.757C171.454 424.949 171.462 429.3 171.471 433.801C171.474 436.052 171.478 438.338 171.482 440.664C171.535 442.968 171.415 445.413 170.893 447.782C169.821 452.522 167.221 457.105 163.303 460.461C159.425 463.822 154.298 466.038 148.878 466.222C138.221 466.341 127.142 466.273 115.629 466.304L115.997 466.112C112.306 471.433 108.345 477.144 104.314 482.957L103.938 483.5L103.561 482.957C99.8526 477.62 95.8873 471.912 91.8646 466.122L92.246 466.322C84.7953 466.322 76.8953 466.324 68.8966 466.325C66.974 466.324 65.058 466.324 63.146 466.324C61.246 466.336 59.3273 466.348 57.386 466.161C53.5406 465.701 49.8326 464.328 46.674 462.18C43.5406 459.996 40.938 457.109 39.138 453.806C37.3766 450.481 36.4193 446.777 36.3326 443.084C36.3326 428.578 36.3326 414.586 36.3326 401.256C36.3353 397.925 36.3393 394.634 36.342 391.388C36.2766 388.156 36.5713 384.813 37.6713 381.794C39.7686 375.702 44.3486 370.806 49.778 368.217C52.49 366.908 55.4033 366.154 58.298 365.94C61.2073 365.765 63.9766 365.9 66.738 365.864C72.238 365.874 77.5166 365.885 82.5566 365.894C102.689 365.957 118.99 366.008 130.293 366.044C135.903 366.081 140.271 366.11 143.271 366.13C144.731 366.15 145.853 366.166 146.646 366.177C147.407 366.193 147.797 366.225 147.797 366.225C147.797 366.225 147.407 366.257 146.646 366.273C145.853 366.284 144.731 366.3 143.271 366.32C140.271 366.34 135.903 366.369 130.293 366.408C118.99 366.442 102.689 366.493 82.5566 366.556C77.5166 366.565 72.238 366.576 66.738 366.586C64.002 366.63 61.1513 366.508 58.3526 366.688C55.5513 366.905 52.7353 367.641 50.1166 368.916C44.8726 371.433 40.458 376.18 38.4486 382.064C37.394 385.008 37.1166 388.14 37.1846 391.388C37.1886 394.634 37.1913 397.925 37.194 401.256C37.2113 414.58 37.23 428.564 37.2486 443.062C37.3366 446.616 38.2593 450.173 39.9513 453.368C41.6833 456.54 44.1886 459.314 47.1993 461.412C50.2366 463.473 53.7966 464.79 57.49 465.233C59.33 465.41 61.2273 465.401 63.146 465.389C65.058 465.389 66.974 465.389 68.8966 465.389C76.8953 465.39 84.7953 465.39 92.246 465.392H92.49L92.6286 465.592C96.6473 471.384 100.61 477.094 104.314 482.434H103.561C107.598 476.625 111.566 470.918 115.262 465.601L115.395 465.409H115.629C127.125 465.393 138.258 465.478 148.841 465.384C154.071 465.218 159.019 463.09 162.777 459.853C166.571 456.62 169.095 452.196 170.146 447.614C170.658 445.304 170.783 443.004 170.739 440.664C170.743 438.338 170.747 436.052 170.75 433.801C170.759 429.3 170.767 424.949 170.775 420.757C170.795 412.378 170.813 404.636 170.83 397.609C170.797 394.108 170.946 390.742 170.765 387.646C170.525 384.545 169.665 381.697 168.455 379.258C167.245 376.813 165.695 374.774 164.073 373.113C162.41 371.481 160.675 370.244 159.031 369.289C155.698 367.44 152.767 366.761 150.807 366.52C149.829 366.328 149.066 366.37 148.562 366.302C148.055 366.265 147.797 366.225 147.797 366.225Z" fill="#E1E1E1" />
                                    <path d="M85.8592 417.398C85.8592 421.566 82.4805 424.943 78.3138 424.943C74.1458 424.943 70.7685 421.566 70.7685 417.398C70.7685 413.231 74.1458 409.852 78.3138 409.852C82.4805 409.852 85.8592 413.231 85.8592 417.398Z" fill="#E1E1E1" />
                                    <path d="M110.688 417.398C110.688 421.566 107.309 424.943 103.143 424.943C98.9746 424.943 95.5973 421.566 95.5973 417.398C95.5973 413.231 98.9746 409.852 103.143 409.852C107.309 409.852 110.688 413.231 110.688 417.398Z" fill="#E1E1E1" />
                                    <path d="M135.517 417.398C135.517 421.566 132.138 424.943 127.971 424.943C123.803 424.943 120.426 421.566 120.426 417.398C120.426 413.231 123.803 409.852 127.971 409.852C132.138 409.852 135.517 413.231 135.517 417.398Z" fill="#E1E1E1" />
                                    <path d="M831.671 157.479H762.149C751.945 157.479 743.672 165.753 743.672 175.957V217.965C743.672 228.169 751.945 236.442 762.149 236.442H787.644L796.911 249.787L806.176 236.442H831.671C841.876 236.442 850.148 228.169 850.148 217.965V175.957C850.148 165.753 841.876 157.479 831.671 157.479Z" fill="white" />
                                    <path d="M831.67 157.479C831.67 157.479 832.496 157.427 834.072 157.591C835.641 157.745 837.996 158.247 840.69 159.699C842.02 160.449 843.426 161.429 844.777 162.73C846.097 164.055 847.361 165.687 848.353 167.654C849.346 169.615 850.058 171.914 850.269 174.425C850.432 176.943 850.329 179.563 850.37 182.353C850.384 187.922 850.398 194.058 850.414 200.699C850.421 204.021 850.426 207.469 850.433 211.035C850.437 212.819 850.44 214.633 850.442 216.475C850.485 218.301 850.389 220.239 849.974 222.118C849.125 225.874 847.065 229.506 843.961 232.166C840.886 234.83 836.824 236.586 832.528 236.733C824.081 236.826 815.301 236.771 806.176 236.797L806.468 236.645C803.542 240.861 800.404 245.387 797.208 249.995L796.91 250.425L796.612 249.995C793.673 245.765 790.529 241.241 787.341 236.653L787.644 236.811C781.738 236.811 775.478 236.813 769.138 236.813C767.614 236.813 766.096 236.813 764.581 236.813C763.074 236.821 761.554 236.831 760.016 236.683C756.969 236.318 754.029 235.23 751.526 233.527C749.044 231.798 746.98 229.51 745.553 226.891C744.158 224.257 743.398 221.321 743.33 218.393C743.33 206.897 743.33 195.807 743.33 185.243C743.333 182.602 743.336 179.995 743.337 177.422C743.285 174.861 743.52 172.211 744.39 169.819C746.053 164.99 749.684 161.11 753.986 159.058C756.136 158.021 758.445 157.423 760.738 157.253C763.045 157.115 765.238 157.221 767.428 157.193C771.788 157.202 775.97 157.21 779.965 157.217C795.92 157.267 808.84 157.307 817.798 157.335C822.244 157.365 825.706 157.389 828.084 157.405C829.241 157.421 830.13 157.433 830.76 157.442C831.361 157.454 831.67 157.479 831.67 157.479C831.67 157.479 831.361 157.505 830.76 157.518C830.13 157.526 829.241 157.538 828.084 157.554C825.706 157.57 822.244 157.594 817.798 157.623C808.84 157.651 795.92 157.691 779.965 157.742C775.97 157.749 771.788 157.757 767.428 157.766C765.258 157.801 763.001 157.703 760.782 157.846C758.561 158.018 756.329 158.602 754.254 159.611C750.098 161.607 746.6 165.369 745.006 170.031C744.172 172.365 743.952 174.847 744.006 177.422C744.008 179.995 744.01 182.602 744.013 185.243C744.026 195.802 744.041 206.886 744.056 218.377C744.125 221.193 744.857 224.011 746.198 226.543C747.572 229.058 749.556 231.257 751.942 232.919C754.349 234.554 757.172 235.597 760.098 235.947C761.556 236.089 763.06 236.081 764.581 236.071C766.096 236.071 767.614 236.071 769.138 236.071C775.478 236.073 781.738 236.073 787.644 236.074H787.837L787.946 236.231C791.132 240.822 794.273 245.349 797.208 249.581H796.612C799.812 244.977 802.956 240.454 805.885 236.239L805.99 236.087H806.176C815.288 236.074 824.11 236.142 832.498 236.067C836.642 235.935 840.565 234.25 843.544 231.683C846.55 229.121 848.552 225.615 849.384 221.985C849.789 220.153 849.889 218.33 849.853 216.475C849.857 214.633 849.86 212.819 849.862 211.035C849.869 207.469 849.876 204.021 849.882 200.699C849.898 194.058 849.912 187.922 849.925 182.353C849.9 179.578 850.017 176.911 849.873 174.457C849.684 171.998 849.002 169.742 848.044 167.809C847.084 165.871 845.857 164.255 844.569 162.938C843.253 161.645 841.878 160.665 840.574 159.907C837.932 158.442 835.61 157.903 834.056 157.713C833.281 157.561 832.676 157.594 832.277 157.541C831.876 157.51 831.67 157.479 831.67 157.479Z" fill="#E1E1E1" />
                                    <path d="M782.582 198.036C782.582 201.339 779.905 204.016 776.602 204.016C773.3 204.016 770.622 201.339 770.622 198.036C770.622 194.733 773.3 192.056 776.602 192.056C779.905 192.056 782.582 194.733 782.582 198.036Z" fill="#E1E1E1" />
                                    <path d="M802.26 198.036C802.26 201.339 799.583 204.016 796.28 204.016C792.978 204.016 790.3 201.339 790.3 198.036C790.3 194.733 792.978 192.056 796.28 192.056C799.583 192.056 802.26 194.733 802.26 198.036Z" fill="#E1E1E1" />
                                    <path d="M821.938 198.036C821.938 201.339 819.261 204.016 815.958 204.016C812.655 204.016 809.978 201.339 809.978 198.036C809.978 194.733 812.655 192.056 815.958 192.056C819.261 192.056 821.938 194.733 821.938 198.036Z" fill="#E1E1E1" />
                                    <path d="M899.2 223.142C903.077 225.628 907.681 227.078 912.628 227.078C928.893 227.078 938.081 213.341 937.528 201.02C939.238 199.785 940.725 198.242 941.9 196.484C940.328 197.181 938.638 197.652 936.868 197.862C938.676 196.781 940.065 195.064 940.718 193.017C939.026 194.021 937.15 194.75 935.157 195.144C933.558 193.441 931.282 192.378 928.762 192.378C923.108 192.378 918.952 197.654 920.229 203.134C912.948 202.769 906.493 199.281 902.173 193.98C899.878 197.918 900.982 203.07 904.884 205.677C903.448 205.632 902.096 205.236 900.914 204.581C900.82 208.64 903.729 212.436 907.941 213.282C906.708 213.617 905.357 213.693 903.986 213.432C905.1 216.913 908.334 219.444 912.169 219.516C908.486 222.402 903.848 223.692 899.2 223.142Z" fill="#ECECEC" />
                                </g>
                                <mask id="mask1_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask1_24_594)">
                                    <path d="M931.185 95.4741L929.935 93.4167C919.409 76.0687 900.375 65.6114 880.309 66.8807C877.73 67.0434 875.161 67.3927 872.627 67.9354C854.382 71.8407 838.507 85.6381 831.926 103.307C828.057 113.699 826.975 125.665 819.631 133.914C810.074 144.649 793.847 144.986 779.581 144.541C765.314 144.097 749.077 144.475 739.565 155.254C733.609 162.003 731.715 171.602 732.195 180.641C733.467 204.573 750.143 225.973 771.351 236.609C792.559 247.245 817.53 248.198 840.741 243.518C873.257 236.963 904.178 218.963 922.765 191.162C941.351 163.359 946.055 125.482 931.185 95.4741Z" fill="#F5F5F5" />
                                    <path d="M296.634 575.463L298.53 573.153C314.51 553.675 318.914 527.074 309.16 504.094C307.906 501.141 306.438 498.275 304.76 495.531C292.666 475.771 269.966 462.863 246.558 462.437C232.793 462.187 218.333 465.851 205.646 460.649C189.134 453.878 182.053 435.011 176.696 418.119C171.337 401.226 164.202 382.365 147.66 375.666C137.3 371.47 125.278 373.209 114.889 377.495C87.3824 388.846 69.1917 417.195 65.4731 446.418C61.7544 475.641 70.9277 505.278 85.9717 530.535C107.048 565.918 140.872 594.718 181.093 605.031C221.314 615.345 267.617 605.246 296.634 575.463Z" fill="#F5F5F5" />
                                    <path d="M654.731 539.581C654.731 556.37 641.121 569.979 624.333 569.979C607.543 569.979 593.933 556.37 593.933 539.581C593.933 522.791 607.543 509.182 624.333 509.182C641.121 509.182 654.731 522.791 654.731 539.581Z" fill="#F5F5F5" />
                                    <path d="M243.003 67.936C243.003 84.7254 229.392 98.3347 212.604 98.3347C195.815 98.3347 182.204 84.7254 182.204 67.936C182.204 51.1467 195.815 37.5374 212.604 37.5374C229.392 37.5374 243.003 51.1467 243.003 67.936Z" fill="#F5F5F5" />
                                </g>
                                <mask id="mask2_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask2_24_594)">
                                    <path d="M946.159 618.2C946.159 618.2 945.396 618.215 943.909 618.208C942.412 618.199 940.201 618.183 937.307 618.164C931.495 618.108 922.939 618.028 911.924 617.923C889.871 617.751 857.976 617.502 818.568 617.192C779.152 616.926 732.22 616.794 680.105 616.687C627.991 616.714 570.697 616.744 510.56 616.775C390.245 617.203 281.339 617.591 202.499 617.871C163.089 618.004 131.196 618.114 109.144 618.188C98.1307 618.207 89.576 618.222 83.764 618.232C80.8693 618.23 78.66 618.228 77.1627 618.226C75.676 618.222 74.9133 618.2 74.9133 618.2C74.9133 618.2 75.676 618.174 77.1627 618.155C78.66 618.142 80.868 618.12 83.7627 618.092C89.5747 618.052 98.1294 617.994 109.144 617.918C131.195 617.791 163.087 617.607 202.496 617.38C281.328 616.951 390.239 616.355 510.559 616.082C570.697 615.958 627.992 615.952 680.107 616.047C732.221 616.19 779.156 616.371 818.571 616.702C838.277 616.878 856.105 617.038 871.764 617.179C887.417 617.364 900.903 617.523 911.927 617.654C922.941 617.814 931.496 617.939 937.309 618.024C940.204 618.074 942.413 618.112 943.909 618.138C945.397 618.167 946.159 618.2 946.159 618.2Z" fill="#1A2E35" />
                                </g>
                                <mask id="mask3_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask3_24_594)">
                                    <path d="M147.332 168.579L144.133 157.878C147.624 152.213 149.641 145.542 149.641 138.399C149.641 117.858 132.989 101.206 112.448 101.206C91.9054 101.206 75.2534 117.858 75.2534 138.399C75.2534 158.941 91.9054 175.594 112.448 175.594C121.025 175.594 128.917 172.683 135.211 167.805L135.197 167.821L147.332 168.579Z" fill="#FAFAFA" />
                                    <path d="M147.332 168.579C147.332 168.579 147.091 168.581 146.58 168.559C146.029 168.533 145.267 168.498 144.281 168.451C142.183 168.343 139.137 168.186 135.187 167.982C135.099 167.978 135.031 167.902 135.035 167.814C135.037 167.781 135.051 167.747 135.069 167.722C135.069 167.722 135.077 167.711 135.083 167.706L135.309 167.933C131.531 170.89 125.911 174.103 118.536 175.343C114.872 175.993 110.805 176.029 106.581 175.374C102.361 174.725 97.9707 173.301 93.824 170.93C89.68 168.57 85.788 165.269 82.628 161.131C79.4654 157.002 77.048 152.033 75.8174 146.59C73.2614 135.755 76.0134 122.926 84.1774 113.71C88.2814 109.046 93.4187 105.414 99.028 103.347C104.608 101.221 110.54 100.497 116.165 101.034C121.799 101.594 127.089 103.462 131.604 106.165C136.131 108.87 139.883 112.414 142.715 116.311C148.411 124.153 150.316 133.161 149.819 140.563C149.363 148.046 146.775 153.958 144.267 157.959L144.283 157.834C145.28 161.318 146.052 164.01 146.585 165.871C146.831 166.743 147.02 167.418 147.157 167.909C147.284 168.362 147.343 168.589 147.332 168.579C147.332 168.579 147.24 168.329 147.091 167.862C146.935 167.366 146.717 166.683 146.439 165.803C145.871 163.978 145.048 161.338 143.984 157.923C143.971 157.881 143.98 157.833 144.001 157.797C146.435 153.794 148.933 147.923 149.331 140.535C149.768 133.223 147.839 124.369 142.207 116.682C139.408 112.862 135.708 109.391 131.257 106.749C126.815 104.107 121.621 102.289 116.095 101.749C110.573 101.231 104.76 101.951 99.2934 104.039C93.7974 106.069 88.7654 109.634 84.7414 114.203C76.7414 123.237 74.0334 135.799 76.5187 146.434C77.7174 151.773 80.076 156.654 83.1694 160.717C86.26 164.79 90.0734 168.046 94.1374 170.382C98.2054 172.729 102.517 174.15 106.669 174.811C110.825 175.478 114.836 175.469 118.456 174.854C125.739 173.681 131.327 170.559 135.111 167.678C135.181 167.622 135.283 167.634 135.337 167.705C135.384 167.763 135.381 167.846 135.337 167.903C135.333 167.91 135.325 167.919 135.325 167.919L135.208 167.661C139.104 167.947 142.108 168.167 144.177 168.319C145.18 168.398 145.956 168.458 146.516 168.502C147.045 168.545 147.332 168.579 147.332 168.579Z" fill="#1A2E35" />
                                    <path d="M101.965 138.387C101.965 140.474 100.273 142.166 98.1867 142.166C96.1 142.166 94.408 140.474 94.408 138.387C94.408 136.301 96.1 134.609 98.1867 134.609C100.273 134.609 101.965 136.301 101.965 138.387Z" fill="#1A2E35" />
                                    <path d="M117.086 138.387C117.086 140.474 115.394 142.166 113.308 142.166C111.221 142.166 109.529 140.474 109.529 138.387C109.529 136.301 111.221 134.609 113.308 134.609C115.394 134.609 117.086 136.301 117.086 138.387Z" fill="#1A2E35" />
                                    <path d="M132.168 136.498C133.212 138.305 132.592 140.617 130.786 141.66C128.978 142.704 126.667 142.084 125.624 140.277C124.58 138.469 125.199 136.158 127.007 135.116C128.814 134.072 131.124 134.692 132.168 136.498Z" fill="#1A2E35" />
                                </g>
                                <mask id="mask4_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask4_24_594)">
                                    <path d="M487.102 521.329C487.071 521.332 487.038 523.328 487.006 526.836C484.618 524.666 481.806 523 478.743 521.932L478.778 521.93C478.778 521.93 462.114 511.61 454.509 498.462C448.989 488.916 447.135 477.358 447.135 477.358C447.137 476.785 447.075 471.716 447.025 467.568C446.982 464.168 444.267 461.441 440.869 461.32C433.723 461.065 414.69 461.738 413.346 474.937C411.341 494.632 425.981 512.01 427.179 517.676C427.405 518.746 427.589 519.613 427.737 520.318C422.113 520.32 417.766 520.389 417.765 520.482L417.773 520.485L380.81 520.425C380.81 520.425 368.413 519.602 367.189 532.4C365.965 545.197 380.363 546.022 380.363 546.022C380.363 546.022 373.962 547.212 374.741 558.412C375.521 569.613 387.918 570.436 387.918 570.436C387.918 570.436 380.717 571.622 381.098 581.624C381.47 591.357 394.354 594.292 395.041 594.441C393.239 594.472 392.125 594.514 392.125 594.564C392.125 594.608 392.977 594.649 394.393 594.684C389.151 596.625 389.858 603.238 389.858 603.238C389.433 617.238 400.231 617.657 400.231 617.657L467.718 617.781C474.509 617.794 481.102 615.97 486.857 612.61C486.875 615.481 486.898 617.094 486.926 617.097L534.062 617.184C534.165 617.184 534.286 595.744 534.335 569.302C534.383 542.852 534.341 521.416 534.238 521.416L487.102 521.329Z" fill="currentColor" />
                                    <mask id="mask5_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="367" y="461" width="168" height="157">
                                        <path d="M367.115 461.281H534.355V617.781H367.115V461.281Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask5_24_594)">
                                        <g opacity="0.300003">
                                            <path d="M487.102 521.329C487.071 521.332 487.038 523.328 487.006 526.836C484.618 524.667 481.806 523 478.743 521.932L478.778 521.931C478.778 521.931 462.114 511.611 454.509 498.463C448.989 488.916 447.135 477.359 447.135 477.359C447.137 476.785 447.075 471.716 447.025 467.568C446.982 464.168 444.267 461.441 440.869 461.32C433.723 461.065 414.69 461.739 413.346 474.937C411.341 494.632 425.981 512.011 427.179 517.676C427.405 518.747 427.589 519.613 427.737 520.319C422.113 520.32 417.766 520.389 417.765 520.483L417.773 520.485L380.81 520.425C380.81 520.425 368.413 519.603 367.189 532.4C365.965 545.197 380.363 546.023 380.363 546.023C380.363 546.023 373.962 547.212 374.741 558.412C375.521 569.613 387.918 570.436 387.918 570.436C387.918 570.436 380.717 571.623 381.098 581.624C381.47 591.357 394.354 594.292 395.041 594.441C393.239 594.472 392.125 594.515 392.125 594.564C392.125 594.608 392.977 594.649 394.393 594.684C389.151 596.625 389.858 603.239 389.858 603.239C389.433 617.239 400.231 617.657 400.231 617.657L467.718 617.781C474.509 617.795 481.102 615.971 486.857 612.611C486.875 615.481 486.898 617.095 486.926 617.097L534.062 617.184C534.165 617.184 534.286 595.744 534.335 569.303C534.383 542.852 534.341 521.416 534.238 521.416L487.102 521.329Z" fill="black" />
                                        </g>
                                    </g>
                                    <path d="M481.408 536.072L483.622 541.684L483.504 606.207C476.339 613.791 466.362 618.08 455.93 618.06L388.444 617.936C388.444 617.936 377.646 617.518 378.071 603.519C378.071 603.519 377.284 596.318 383.287 594.728C383.287 594.728 369.692 591.903 369.311 581.903C368.928 571.902 376.131 570.715 376.131 570.715C376.131 570.715 363.732 569.894 362.954 558.692C362.174 547.491 368.576 546.303 368.576 546.303C368.576 546.303 354.178 545.476 355.402 532.679C356.624 519.882 369.023 520.704 369.023 520.704L417.022 520.782L459.098 520.859C468.951 520.878 477.794 526.907 481.408 536.072Z" fill="currentColor" />
                                    <path d="M466.99 522.21C466.99 522.21 450.326 511.89 442.721 498.741C437.201 489.196 435.348 477.637 435.348 477.637C435.348 477.065 435.288 471.996 435.237 467.848C435.194 464.448 432.48 461.721 429.081 461.6C421.936 461.345 410.572 467.498 409.228 480.698C407.222 500.392 414.193 512.29 415.39 517.956L416.589 523.621L466.99 522.21Z" fill="currentColor" />
                                    <path d="M475.139 617.376L522.275 617.463L522.451 521.695L475.315 521.608L475.139 617.376Z" fill="currentColor" />
                                    <path d="M475.139 617.376C475.036 617.376 474.993 595.936 475.041 569.495C475.091 543.043 475.212 521.608 475.315 521.608C475.416 521.608 475.46 543.044 475.411 569.495C475.363 595.936 475.24 617.376 475.139 617.376Z" fill="#1A2E35" />
                                    <path d="M522.275 617.463C522.173 617.463 522.129 596.023 522.177 569.58C522.227 543.13 522.348 521.695 522.451 521.695C522.552 521.695 522.596 543.131 522.547 569.582C522.499 596.023 522.377 617.463 522.275 617.463Z" fill="#1A2E35" />
                                    <path d="M491.914 543.561C491.905 548.431 495.848 552.389 500.718 552.397C505.589 552.406 509.545 548.465 509.554 543.593C509.564 538.722 505.622 534.766 500.75 534.757C495.88 534.747 491.924 538.69 491.914 543.561Z" fill="white" />
                                    <path d="M405.977 520.762C405.977 520.659 411.117 520.586 417.455 520.598C423.796 520.61 428.933 520.702 428.933 520.805C428.933 520.906 423.795 520.979 417.455 520.967C411.116 520.957 405.977 520.863 405.977 520.762Z" fill="#1A2E35" />
                                    <path d="M375.174 571.168C375.174 571.065 378.46 570.989 382.51 570.997C386.564 571.004 389.848 571.093 389.848 571.195C389.848 571.297 386.562 571.373 382.51 571.367C378.46 571.359 375.174 571.269 375.174 571.168Z" fill="#1A2E35" />
                                    <path d="M367.647 546.068C367.647 545.965 372.31 545.892 378.061 545.903C383.813 545.913 388.474 546.004 388.474 546.107C388.474 546.208 383.811 546.283 378.059 546.272C372.31 546.261 367.647 546.169 367.647 546.068Z" fill="#1A2E35" />
                                    <path d="M380.337 594.844C380.337 594.741 385 594.668 390.751 594.678C396.503 594.689 401.164 594.78 401.164 594.882C401.164 594.984 396.501 595.058 390.749 595.048C385 595.037 380.337 594.945 380.337 594.844Z" fill="#1A2E35" />
                                    <mask id="mask6_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="417" y="465" width="16" height="30">
                                        <path d="M417.081 465.367H432.988V494.655H417.081V465.367Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask6_24_594)">
                                        <g opacity="0.300003">
                                            <path d="M429.742 466.187C431.434 467.163 432.104 469.325 432 471.274C431.896 473.226 431.178 475.083 430.748 476.99C429.797 481.202 430.281 485.726 432.102 489.642C432.658 490.838 433.345 492.213 432.772 493.401C431.958 495.083 429.47 494.83 427.77 494.051C421.332 491.102 416.952 484.137 417.084 477.055C417.14 474.071 417.982 471.019 419.914 468.745C421.846 466.469 425.073 464.065 429.742 466.187Z" fill="white" />
                                        </g>
                                    </g>
                                    <mask id="mask7_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="362" y="522" width="47" height="11">
                                        <path d="M362.692 522.636H408.635V532.015H362.692V522.636Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask7_24_594)">
                                        <g opacity="0.300003">
                                            <path d="M365.201 523.257C366.701 522.591 368.402 522.615 370.042 522.65C379.581 522.851 389.118 523.053 398.655 523.254C401.775 523.321 407.458 522.706 408.21 525.699C409.185 527.205 408.365 529.349 406.909 530.394C405.453 531.441 403.575 531.661 401.786 531.783C398.038 532.042 394.277 532.027 390.519 532.002C382.971 531.95 375.386 531.85 367.941 530.599C366.837 530.414 365.714 530.195 364.73 529.658C363.747 529.121 362.907 528.209 362.727 527.102C362.465 525.483 363.701 523.921 365.201 523.257Z" fill="white" />
                                        </g>
                                    </g>
                                    <path d="M486.425 524.343C486.425 524.241 493.012 524.171 501.136 524.186C509.261 524.201 515.847 524.295 515.847 524.397C515.847 524.499 509.261 524.57 501.135 524.555C493.012 524.541 486.425 524.445 486.425 524.343Z" fill="white" />
                                    <path d="M368.17 562.573C368.147 562.585 368.042 562.411 367.87 562.085C367.691 561.763 367.488 561.266 367.291 560.637C367.088 560.009 366.935 559.231 366.85 558.361C366.783 557.489 366.796 556.521 366.944 555.519C367.106 554.521 367.386 553.594 367.714 552.782C368.058 551.977 368.439 551.283 368.823 550.746C369.2 550.205 369.544 549.794 369.812 549.541C370.075 549.282 370.227 549.149 370.246 549.166C370.296 549.214 369.727 549.794 369.042 550.889C368.694 551.433 368.347 552.121 368.028 552.909C367.728 553.705 367.467 554.606 367.31 555.577C367.166 556.547 367.143 557.486 367.188 558.335C367.254 559.183 367.375 559.943 367.543 560.567C367.864 561.818 368.232 562.543 368.17 562.573Z" fill="white" />
                                    <path d="M361.236 538.301C361.216 538.331 360.713 538.023 360.115 537.295C359.516 536.573 358.885 535.389 358.649 533.963C358.419 532.536 358.637 531.212 358.976 530.337C359.311 529.457 359.689 529.004 359.717 529.025C359.775 529.059 359.483 529.553 359.224 530.42C358.96 531.283 358.795 532.543 359.013 533.903C359.24 535.263 359.8 536.403 360.324 537.137C360.845 537.876 361.28 538.252 361.236 538.301Z" fill="white" />
                                    <path d="M376.434 588.531C376.423 588.564 375.772 588.344 374.956 587.623C374.147 586.919 373.214 585.631 372.931 583.97C372.654 582.307 373.115 580.784 373.648 579.855C374.184 578.906 374.727 578.486 374.748 578.514C374.799 578.556 374.335 579.035 373.882 579.975C373.426 580.9 373.035 582.347 373.295 583.908C373.56 585.468 374.403 586.708 375.136 587.434C375.872 588.174 376.467 588.474 376.434 588.531Z" fill="white" />
                                    <path d="M385.983 611.29C385.96 611.318 385.468 610.97 384.878 610.204C384.287 609.447 383.652 608.234 383.378 606.776C383.11 605.318 383.263 603.958 383.542 603.038C383.818 602.111 384.151 601.61 384.183 601.627C384.242 601.655 383.996 602.191 383.795 603.102C383.59 604.01 383.484 605.311 383.742 606.708C384.004 608.104 384.572 609.28 385.091 610.054C385.607 610.831 386.028 611.243 385.983 611.29Z" fill="white" />
                                    <path d="M413.701 502.266C413.678 502.277 413.5 501.932 413.194 501.294C413.038 500.977 412.857 500.584 412.678 500.116C412.494 499.648 412.265 499.122 412.077 498.518C411.653 497.328 411.254 495.872 410.916 494.232C410.602 492.589 410.362 490.76 410.282 488.829C410.221 486.897 410.328 485.054 410.522 483.393C410.74 481.733 411.032 480.252 411.368 479.033C411.512 478.417 411.704 477.877 411.852 477.397C411.997 476.917 412.149 476.512 412.281 476.184C412.54 475.526 412.692 475.168 412.716 475.177C412.74 475.186 412.632 475.562 412.417 476.232C412.305 476.565 412.174 476.974 412.049 477.457C411.92 477.94 411.748 478.481 411.621 479.096C411.321 480.314 411.057 481.788 410.86 483.433C410.686 485.081 410.592 486.904 410.653 488.816C410.73 490.726 410.957 492.537 411.25 494.168C411.566 495.794 411.936 497.244 412.325 498.437C412.496 499.041 412.706 499.569 412.87 500.041C413.03 500.514 413.19 500.912 413.326 501.237C413.589 501.889 413.724 502.256 413.701 502.266Z" fill="white" />
                                </g>
                                <mask id="mask8_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask8_24_594)">
                                    <path d="M673.233 440.908H295.874C284.084 440.908 274.526 431.35 274.526 419.559V112.523C274.526 100.732 284.084 91.1749 295.874 91.1749H673.233C685.024 91.1749 694.582 100.732 694.582 112.523V419.559C694.582 431.35 685.024 440.908 673.233 440.908Z" fill="white" />
                                    <path d="M295.875 91.8409C284.471 91.8409 275.193 101.118 275.193 112.524V419.56C275.193 430.962 284.471 440.241 295.875 440.241H673.233C684.636 440.241 693.914 430.962 693.914 419.56V112.524C693.914 101.118 684.636 91.8409 673.233 91.8409H295.875ZM673.233 441.574H295.875C283.735 441.574 273.86 431.698 273.86 419.56V112.524C273.86 100.384 283.735 90.5076 295.875 90.5076H673.233C685.372 90.5076 695.248 100.384 695.248 112.524V419.56C695.248 431.698 685.372 441.574 673.233 441.574Z" fill="#1A2E35" />
                                    <path d="M349.889 412.611H341.011V351.099H349.889V412.611Z" fill="currentColor" />
                                    <path d="M333.064 412.611H324.187V397.233H333.064V412.611Z" fill="currentColor" />
                                    <path d="M365.252 412.611H356.373V381.855H365.252V412.611Z" fill="currentColor" />
                                    <path d="M380.36 412.611H371.483V363.941H380.36V412.611Z" fill="currentColor" />
                                    <path d="M397.772 412.611H388.893V399.601H397.772V412.611Z" fill="currentColor" />
                                    <path d="M674.283 401.304C674.447 401.072 674.53 400.751 674.53 400.344C674.53 399.936 674.447 399.616 674.283 399.383C674.119 399.151 673.894 399.033 673.607 399.033C673.321 399.033 673.095 399.149 672.931 399.377C672.766 399.607 672.685 399.928 672.685 400.344C672.685 400.759 672.766 401.081 672.931 401.309C673.095 401.539 673.321 401.653 673.607 401.653C673.894 401.653 674.119 401.537 674.283 401.304ZM672.307 401.836C671.978 401.457 671.814 400.96 671.814 400.344C671.814 399.728 671.978 399.231 672.307 398.852C672.637 398.472 673.07 398.283 673.607 398.283C674.145 398.283 674.578 398.472 674.91 398.852C675.245 399.231 675.411 399.728 675.411 400.344C675.411 400.96 675.245 401.457 674.91 401.836C674.578 402.215 674.145 402.404 673.607 402.404C673.07 402.404 672.637 402.215 672.307 401.836ZM673.189 394.816H674.239L669.109 402.329H668.058L673.189 394.816ZM669.361 397.767C669.522 397.539 669.603 397.217 669.603 396.801C669.603 396.387 669.522 396.064 669.361 395.835C669.199 395.607 668.973 395.491 668.679 395.491C668.401 395.491 668.177 395.608 668.009 395.84C667.841 396.073 667.755 396.393 667.755 396.801C667.755 397.209 667.841 397.529 668.009 397.763C668.177 397.995 668.401 398.111 668.679 398.111C668.973 398.111 669.199 397.996 669.361 397.767ZM667.381 398.293C667.053 397.915 666.887 397.417 666.887 396.801C666.887 396.185 667.053 395.688 667.381 395.309C667.71 394.929 668.143 394.74 668.679 394.74C669.217 394.74 669.651 394.928 669.985 395.304C670.317 395.68 670.483 396.179 670.483 396.801C670.483 397.424 670.317 397.923 669.985 398.299C669.651 398.675 669.217 398.861 668.679 398.861C668.143 398.861 667.71 398.672 667.381 398.293Z" fill="currentColor" />
                                    <path d="M623.647 360.682H652.953C654.161 360.682 654.773 359.228 653.928 358.364L639.275 343.397C638.74 342.852 637.86 342.852 637.325 343.397L622.672 358.364C621.827 359.228 622.439 360.682 623.647 360.682Z" fill="#ECECEC" />
                                    <path d="M648.104 387.685H629.312V357.891H648.104V387.685Z" fill="#ECECEC" />
                                    <path d="M641.833 412.67V418.746H623.207V413.931L631.607 406.163C632.337 405.476 632.823 404.891 633.067 404.403C633.31 403.918 633.433 403.44 633.433 402.975C633.433 402.4 633.239 401.952 632.853 401.631C632.465 401.31 631.906 401.15 631.175 401.15C630.467 401.15 629.803 401.338 629.183 401.714C628.563 402.09 628.087 402.622 627.755 403.308L621.847 400.354C622.731 398.694 624.027 397.382 625.731 396.418C627.434 395.456 629.493 394.975 631.906 394.975C633.743 394.975 635.369 395.274 636.786 395.871C638.202 396.47 639.309 397.32 640.106 398.427C640.903 399.534 641.302 400.806 641.302 402.246C641.302 403.53 641.029 404.73 640.487 405.848C639.945 406.966 638.889 408.232 637.317 409.648L633.997 412.67H641.833Z" fill="currentColor" />
                                    <path d="M656.606 407.125C656.606 403.208 655.721 401.249 653.95 401.249C652.18 401.249 651.294 403.208 651.294 407.125C651.294 411.043 652.18 413.001 653.95 413.001C655.721 413.001 656.606 411.043 656.606 407.125ZM648.489 417.832C646.906 416.869 645.666 415.476 644.77 413.649C643.874 411.823 643.425 409.649 643.425 407.125C643.425 404.601 643.874 402.428 644.77 400.601C645.666 398.776 646.906 397.381 648.489 396.419C650.072 395.456 651.892 394.975 653.95 394.975C656.009 394.975 657.829 395.456 659.412 396.419C660.993 397.381 662.233 398.776 663.13 400.601C664.026 402.428 664.473 404.601 664.473 407.125C664.473 409.649 664.026 411.823 663.13 413.649C662.233 415.476 660.993 416.869 659.412 417.832C657.829 418.795 656.009 419.276 653.95 419.276C651.892 419.276 650.072 418.795 648.489 417.832Z" fill="currentColor" />
                                    <path d="M367.849 233.585C368.013 233.353 368.096 233.031 368.096 232.625C368.096 232.217 368.013 231.897 367.849 231.663C367.685 231.431 367.46 231.314 367.173 231.314C366.885 231.314 366.661 231.43 366.497 231.658C366.332 231.887 366.251 232.209 366.251 232.625C366.251 233.039 366.332 233.362 366.497 233.59C366.661 233.819 366.885 233.934 367.173 233.934C367.46 233.934 367.685 233.818 367.849 233.585ZM365.873 234.117C365.544 233.738 365.38 233.241 365.38 232.625C365.38 232.009 365.544 231.511 365.873 231.133C366.203 230.753 366.636 230.563 367.173 230.563C367.711 230.563 368.144 230.753 368.476 231.133C368.811 231.511 368.977 232.009 368.977 232.625C368.977 233.241 368.811 233.738 368.476 234.117C368.144 234.495 367.711 234.685 367.173 234.685C366.636 234.685 366.203 234.495 365.873 234.117ZM366.755 227.097H367.805L362.675 234.61H361.624L366.755 227.097ZM362.927 230.047C363.088 229.819 363.169 229.498 363.169 229.082C363.169 228.666 363.088 228.345 362.927 228.115C362.765 227.887 362.539 227.771 362.245 227.771C361.967 227.771 361.743 227.889 361.573 228.121C361.407 228.354 361.321 228.674 361.321 229.082C361.321 229.49 361.407 229.81 361.573 230.043C361.743 230.275 361.967 230.391 362.245 230.391C362.539 230.391 362.765 230.277 362.927 230.047ZM360.947 230.574C360.619 230.195 360.453 229.698 360.453 229.082C360.453 228.466 360.619 227.969 360.947 227.59C361.276 227.21 361.709 227.021 362.245 227.021C362.783 227.021 363.217 227.209 363.551 227.585C363.883 227.959 364.049 228.459 364.049 229.082C364.049 229.705 363.883 230.205 363.551 230.579C363.217 230.955 362.783 231.142 362.245 231.142C361.709 231.142 361.276 230.953 360.947 230.574Z" fill="currentColor" />
                                    <path d="M288.879 228.775H315.693C316.799 228.775 317.359 227.443 316.585 226.654L303.177 212.96C302.688 212.46 301.884 212.46 301.393 212.96L287.987 226.654C287.213 227.443 287.773 228.775 288.879 228.775Z" fill="#ECECEC" />
                                    <path d="M311.257 253.483H294.063V226.221H311.257V253.483Z" fill="#ECECEC" />
                                    <path d="M334.548 228.077V251.316H326.712V233.987H322.73V228.077H334.548Z" fill="currentColor" />
                                    <path d="M350.583 239.697C350.583 235.779 349.697 233.821 347.927 233.821C346.156 233.821 345.271 235.779 345.271 239.697C345.271 243.614 346.156 245.573 347.927 245.573C349.697 245.573 350.583 243.614 350.583 239.697ZM342.465 250.403C340.883 249.441 339.644 248.046 338.748 246.221C337.851 244.394 337.403 242.221 337.403 239.697C337.403 237.174 337.851 234.999 338.748 233.173C339.644 231.347 340.883 229.953 342.465 228.99C344.048 228.027 345.868 227.546 347.927 227.546C349.985 227.546 351.805 228.027 353.388 228.99C354.971 229.953 356.211 231.347 357.107 233.173C358.003 234.999 358.451 237.174 358.451 239.697C358.451 242.221 358.003 244.394 357.107 246.221C356.211 248.046 354.971 249.441 353.388 250.403C351.805 251.366 349.985 251.847 347.927 251.847C345.868 251.847 344.048 251.366 342.465 250.403Z" fill="currentColor" />
                                    <path d="M402.735 412.907C402.735 413.099 384.655 413.254 362.356 413.254C340.049 413.254 321.973 413.099 321.973 412.907C321.973 412.715 340.049 412.561 362.356 412.561C384.655 412.561 402.735 412.715 402.735 412.907Z" fill="#1A2E35" />
                                </g>
                                <mask id="mask9_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask9_24_594)">
                                    <path d="M731.43 144.787H552.484C546.492 144.787 541.635 139.93 541.635 133.938V38.7522C541.635 32.7602 546.492 27.9029 552.484 27.9029H731.43C737.422 27.9029 742.279 32.7602 742.279 38.7522V133.938C742.279 139.93 737.422 144.787 731.43 144.787Z" fill="white" />
                                    <path d="M731.43 144.787C731.427 144.754 731.972 144.784 733.01 144.623C734.038 144.468 735.591 144.078 737.31 142.966C738.984 141.848 740.864 139.924 741.716 137.043C742.172 135.615 742.19 134.003 742.159 132.272C742.155 130.543 742.15 128.703 742.144 126.754C742.118 111.143 742.08 88.5803 742.034 60.7016C742.027 53.7296 742.019 46.4256 742.011 38.815C742.046 35.0936 739.948 31.3376 736.526 29.4923C734.826 28.571 732.891 28.1176 730.899 28.187C728.886 28.1883 726.854 28.1896 724.804 28.191C708.407 28.2016 690.888 28.2123 672.454 28.223C635.582 28.231 595.047 28.2403 552.499 28.251C549.918 28.251 547.371 29.2296 545.472 30.951C543.564 32.6576 542.314 35.0696 542.048 37.603C541.916 42.7776 542.011 48.055 541.98 53.2176C541.979 63.5803 541.976 73.791 541.975 83.8243C541.972 93.8576 541.97 103.712 541.967 113.364C541.964 118.191 541.963 122.966 541.962 127.687C541.978 130.036 541.92 132.419 541.998 134.703C542.144 136.966 543.064 139.142 544.535 140.828C545.991 142.528 548.004 143.714 550.155 144.203C551.24 144.444 552.322 144.491 553.467 144.472C554.598 144.472 555.724 144.474 556.847 144.474C561.338 144.476 565.77 144.479 570.136 144.482C578.871 144.487 587.351 144.494 595.55 144.499C611.946 144.514 627.219 144.528 641.163 144.542C669.042 144.588 691.603 144.626 707.212 144.652C715 144.68 721.05 144.702 725.168 144.716C727.211 144.732 728.772 144.743 729.839 144.751C730.891 144.763 731.43 144.787 731.43 144.787C731.43 144.787 730.891 144.811 729.839 144.823C728.772 144.831 727.211 144.842 725.168 144.856C721.05 144.872 715 144.894 707.212 144.922C691.603 144.948 669.042 144.986 641.163 145.032C627.219 145.046 611.946 145.059 595.55 145.075C587.351 145.08 578.871 145.086 570.136 145.092C565.77 145.095 561.338 145.098 556.847 145.1C555.724 145.1 554.598 145.102 553.467 145.102C552.352 145.123 551.152 145.076 550.015 144.82C547.732 144.304 545.598 143.05 544.051 141.247C542.491 139.46 541.511 137.15 541.352 134.75C541.27 132.372 541.328 130.058 541.31 127.687C541.307 122.966 541.306 118.191 541.303 113.364C541.3 103.712 541.298 93.8576 541.295 83.8243C541.294 73.791 541.291 63.5803 541.29 53.2176C541.32 48.0216 541.219 42.8523 541.358 37.5283C541.642 34.827 542.975 32.2523 545.008 30.435C547.03 28.6003 549.752 27.555 552.499 27.5563C595.047 27.5656 635.582 27.575 672.454 27.583C690.888 27.595 708.407 27.6056 724.804 27.615C726.854 27.6176 728.886 27.619 730.899 27.6203C732.939 27.551 735.019 28.031 736.795 29.0056C740.392 30.951 742.592 34.9123 742.547 38.815C742.539 46.4256 742.531 53.7296 742.524 60.7016C742.478 88.5803 742.44 111.143 742.414 126.754C742.408 128.703 742.403 130.543 742.399 132.272C742.419 133.988 742.39 135.655 741.914 137.103C741.024 140.034 739.094 141.971 737.387 143.082C735.632 144.19 734.058 144.56 733.019 144.694C732.499 144.787 732.096 144.77 731.831 144.784C731.564 144.792 731.43 144.787 731.43 144.787Z" fill="#1A2E35" />
                                    <path d="M573.077 122.737H567.324V101.843H573.077V122.737Z" fill="currentColor" />
                                    <path d="M593.58 122.737H587.827V84.9426H593.58V122.737Z" fill="currentColor" />
                                    <path d="M584.005 122.737H576.897V60.1573H584.005V122.737Z" fill="#375A64" />
                                    <path d="M614.081 122.737H608.328V108.439H614.081V122.737Z" fill="currentColor" />
                                    <path d="M603.831 122.737H598.077V108.439H603.831V122.737Z" fill="#375A64" />
                                    <path d="M634.583 122.737H628.829V99.3199H634.583V122.737Z" fill="currentColor" />
                                    <path d="M624.332 122.737H618.579V78.9906H624.332V122.737Z" fill="#375A64" />
                                    <path d="M665.336 122.737H659.583V78.9906H665.336V122.737Z" fill="#375A64" />
                                    <path d="M644.833 122.737H639.08V56.8453H644.833V122.737Z" fill="#375A64" />
                                    <path d="M655.085 122.737H649.332V106.419H655.085V122.737Z" fill="currentColor" />
                                    <path d="M706.339 122.737H700.585V110.756H706.339V122.737Z" fill="#375A64" />
                                    <path d="M685.837 122.737H680.084V58.092H685.837V122.737Z" fill="#375A64" />
                                    <path d="M696.088 122.737H690.335V71.3146H696.088V122.737Z" fill="currentColor" />
                                    <path d="M675.587 122.737H669.833V69.448H675.587V122.737Z" fill="currentColor" />
                                    <path d="M716.591 122.737H710.837V78.9906H716.591V122.737Z" fill="currentColor" />
                                    <path d="M580.186 131.311H568.289C567.841 131.311 567.476 130.947 567.476 130.497V129.748C567.476 129.299 567.841 128.935 568.289 128.935H580.186C580.636 128.935 581 129.299 581 129.748V130.497C581 130.947 580.636 131.311 580.186 131.311Z" fill="#E1E1E1" />
                                    <path d="M619.37 131.311H607.474C607.025 131.311 606.659 130.947 606.659 130.497V129.748C606.659 129.299 607.025 128.935 607.474 128.935H619.37C619.819 128.935 620.183 129.299 620.183 129.748V130.497C620.183 130.947 619.819 131.311 619.37 131.311Z" fill="#E1E1E1" />
                                    <path d="M653.96 131.311H642.064C641.615 131.311 641.25 130.947 641.25 130.497V129.748C641.25 129.299 641.615 128.935 642.064 128.935H653.96C654.41 128.935 654.774 129.299 654.774 129.748V130.497C654.774 130.947 654.41 131.311 653.96 131.311Z" fill="#E1E1E1" />
                                    <path d="M689.585 131.311H677.689C677.24 131.311 676.874 130.947 676.874 130.497V129.748C676.874 129.299 677.24 128.935 677.689 128.935H689.585C690.034 128.935 690.398 129.299 690.398 129.748V130.497C690.398 130.947 690.034 131.311 689.585 131.311Z" fill="#E1E1E1" />
                                    <path d="M719.774 131.311H707.878C707.429 131.311 707.065 130.947 707.065 130.497V129.748C707.065 129.299 707.429 128.935 707.878 128.935H719.774C720.223 128.935 720.587 129.299 720.587 129.748V130.497C720.587 130.947 720.223 131.311 719.774 131.311Z" fill="#E1E1E1" />
                                    <path d="M723.958 122.737C723.958 122.929 686.926 123.084 641.254 123.084C595.566 123.084 558.542 122.929 558.542 122.737C558.542 122.545 595.566 122.39 641.254 122.39C686.926 122.39 723.958 122.545 723.958 122.737Z" fill="#1A2E35" />
                                    <path d="M563.953 44.4308C563.953 46.1762 562.538 47.5908 560.793 47.5908C559.049 47.5908 557.634 46.1762 557.634 44.4308C557.634 42.6855 559.049 41.2708 560.793 41.2708C562.538 41.2708 563.953 42.6855 563.953 44.4308Z" fill="#E1E1E1" />
                                    <path d="M572.541 44.4308C572.541 46.1762 571.126 47.5908 569.381 47.5908C567.637 47.5908 566.221 46.1762 566.221 44.4308C566.221 42.6855 567.637 41.2708 569.381 41.2708C571.126 41.2708 572.541 42.6855 572.541 44.4308Z" fill="#E1E1E1" />
                                    <path d="M581.043 44.4308C581.043 46.1762 579.629 47.5908 577.883 47.5908C576.139 47.5908 574.725 46.1762 574.725 44.4308C574.725 42.6855 576.139 41.2708 577.883 41.2708C579.629 41.2708 581.043 42.6855 581.043 44.4308Z" fill="#E1E1E1" />
                                </g>
                                <mask id="mask10_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask10_24_594)">
                                    <path d="M407.566 299.184L427.21 340.14L437.484 337.471L503.139 393.767L522.511 357.179C522.511 357.179 483.412 339.188 476.398 324.805C469.383 310.421 475.976 310.839 475.976 310.839L459.732 285.636L407.566 299.184Z" fill="#1A2E35" />
                                    <path d="M432.96 244.586C432.96 244.586 453.556 238.537 486.501 215.199C510.595 198.133 529.431 177.807 537.812 168.117C541.837 163.463 548.827 162.741 553.521 166.699C560.767 172.807 570.759 188.143 581.644 227.117C600.833 295.833 587.067 308.899 581.293 307.862C575.52 306.823 537.525 294.265 512.524 293.197C487.523 292.13 449.42 299.573 449.42 299.573L432.96 244.586Z" fill="#E1E1E1" />
                                    <path d="M432.96 244.586C432.941 244.577 433.019 244.883 433.187 245.497C433.376 246.17 433.632 247.081 433.961 248.249C434.685 250.755 435.727 254.359 437.069 259.009C439.861 268.534 443.905 282.331 448.996 299.702L449.108 300.085L449.504 300.013C460.343 298.037 472.74 296.118 486.441 294.799C493.292 294.165 500.476 293.663 507.936 293.697C515.391 293.714 523.084 294.669 530.96 296.081C546.756 298.862 563.08 303.642 580.34 308.354L581.18 308.539L582.167 308.563C582.829 308.594 583.411 308.285 584.029 308.139C584.556 307.817 585.113 307.518 585.608 307.157L586.912 305.885C588.368 303.99 589.508 301.857 590.135 299.594C591.511 295.102 592.085 290.382 592.113 285.67C592.308 276.219 591.051 266.697 589.375 257.178C588.976 255.067 588.577 252.962 588.18 250.863C587.753 248.771 587.245 246.706 586.784 244.637C585.891 240.489 584.835 236.414 583.747 232.379C581.683 224.279 579.292 216.397 576.721 208.723C574.121 201.062 571.307 193.606 567.921 186.578C564.54 179.578 560.707 172.825 555.357 167.487C554.012 166.219 552.479 164.905 550.651 164.271C548.857 163.598 546.916 163.334 545.045 163.589C543.18 163.833 541.363 164.47 539.823 165.529C538.239 166.555 537.065 168.041 535.943 169.319C531.336 174.57 526.683 179.507 522.053 184.145C512.8 193.43 503.616 201.491 494.865 208.365C477.215 221.93 461.637 231.118 450.584 236.763C445.047 239.585 440.629 241.529 437.604 242.766C436.093 243.391 434.925 243.826 434.143 244.123C433.368 244.41 432.936 244.574 432.96 244.586C432.985 244.598 433.375 244.517 434.188 244.259C434.988 244.007 436.175 243.615 437.705 243.031C440.771 241.877 445.236 240.009 450.824 237.257C461.987 231.743 477.671 222.673 495.465 209.157C504.288 202.307 513.544 194.261 522.865 184.978C527.529 180.341 532.216 175.403 536.859 170.145C538.04 168.805 539.093 167.485 540.505 166.578C541.889 165.63 543.524 165.067 545.195 164.853C548.604 164.401 552.004 165.783 554.471 168.429C559.601 173.566 563.396 180.233 566.723 187.166C570.061 194.127 572.851 201.543 575.429 209.17C577.977 216.809 580.355 224.67 582.407 232.743C583.489 236.765 584.54 240.826 585.428 244.953C585.885 247.013 586.392 249.071 586.816 251.151C587.211 253.238 587.607 255.331 588.004 257.431C589.671 266.889 590.915 276.346 590.728 285.634C590.708 290.27 590.135 294.878 588.829 299.157C588.239 301.327 587.163 303.285 585.881 304.975L584.764 306.071C584.352 306.366 583.907 306.597 583.485 306.874C582.509 307.165 581.751 307.378 580.625 307.009C563.524 302.362 547.027 297.571 531.177 294.827C523.263 293.43 515.472 292.489 507.941 292.499C500.42 292.491 493.208 293.026 486.337 293.694C472.593 295.082 460.197 297.071 449.336 299.133L449.844 299.442C444.587 282.243 440.411 268.581 437.528 259.151C436.083 254.486 434.963 250.871 434.184 248.357C433.808 247.169 433.513 246.242 433.297 245.557C433.092 244.923 432.979 244.597 432.96 244.586Z" fill="#1A2E35" />
                                    <path d="M379.192 302.769L392.566 300.725L384.88 282.968L373.628 288.973L379.192 302.769Z" fill="currentColor" />
                                    <path d="M383.09 281.172L389.078 295.002L392.346 302.55C396.826 312.904 408.529 317.894 418.976 313.905L473.301 299.03L451.232 230.188L396.245 250.505C385.694 255.257 378.542 267.778 383.09 281.172Z" fill="currentColor" />
                                    <mask id="mask11_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="539" y="168" width="47" height="134">
                                        <path d="M539.312 168.416H585.764V301.349H539.312V168.416Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask11_24_594)">
                                        <g opacity="0.300003">
                                            <path d="M577.148 230.807C587.12 267.445 588.661 298.969 580.592 301.221C572.524 303.473 557.899 275.596 547.927 238.959C537.956 202.32 536.415 170.795 544.483 168.544C552.552 166.293 567.176 194.168 577.148 230.807Z" fill="black" />
                                        </g>
                                    </g>
                                    <path d="M542.828 217.435C542.828 217.435 562.231 209.137 568.166 234.862C574.099 260.586 554.876 261.613 554.876 261.613C549.111 248.451 545.044 233.771 542.828 217.435Z" fill="white" />
                                    <path d="M440.367 256.972C440.485 257.328 431.159 260.776 419.543 264.673C407.923 268.572 398.411 271.444 398.295 271.088C398.179 270.732 407.502 267.285 419.122 263.387C430.738 259.489 440.251 256.616 440.367 256.972Z" fill="#1A2E35" />
                                    <path d="M442.768 264.553C442.884 264.909 433.56 268.357 421.944 272.254C410.324 276.153 400.812 279.024 400.696 278.669C400.58 278.313 409.901 274.865 421.523 270.966C433.139 267.069 442.652 264.198 442.768 264.553Z" fill="#1A2E35" />
                                    <path d="M445.169 272.133C445.285 272.489 435.961 275.937 424.345 279.835C412.725 283.735 403.213 286.605 403.097 286.249C402.98 285.893 412.303 282.447 423.924 278.547C435.54 274.649 445.053 271.777 445.169 272.133Z" fill="#1A2E35" />
                                    <path d="M447.57 279.714C447.686 280.07 438.362 283.519 426.746 287.415C415.126 291.314 405.614 294.186 405.498 293.83C405.382 293.474 414.705 290.026 426.323 286.129C437.941 282.23 447.454 279.359 447.57 279.714Z" fill="#1A2E35" />
                                    <path d="M611.691 250.349C611.612 250.581 622.819 254.713 636.719 259.577C650.624 264.442 661.957 268.197 662.036 267.965C662.116 267.733 650.912 263.601 637.005 258.736C623.105 253.872 611.769 250.117 611.691 250.349Z" fill="#1A2E35" />
                                    <path d="M607.169 224.049C607.205 224.293 625.09 221.798 647.111 218.48C669.141 215.158 686.965 212.27 686.929 212.028C686.893 211.784 669.011 214.278 646.982 217.598C624.961 220.917 607.133 223.806 607.169 224.049Z" fill="#1A2E35" />
                                    <path d="M603.189 197.058C603.354 197.238 609.621 191.644 617.183 184.566C624.749 177.484 630.746 171.599 630.581 171.418C630.417 171.238 624.151 176.83 616.586 183.911C609.023 190.991 603.025 196.878 603.189 197.058Z" fill="#1A2E35" />
                                    <path d="M540.633 172.523C540.585 172.52 540.52 172.976 540.44 173.85C540.365 174.888 540.272 176.15 540.161 177.675C540.039 179.338 539.931 181.374 539.927 183.74C539.909 186.107 539.807 188.804 539.947 191.783C540.048 197.744 540.575 204.835 541.552 212.659C542.617 220.471 544.185 229.011 546.453 237.823C548.784 246.622 551.589 254.831 554.477 262.156C557.447 269.45 560.449 275.878 563.271 281.111C564.604 283.77 566.009 286.064 567.18 288.112C568.339 290.168 569.425 291.884 570.343 293.268C571.184 294.538 571.881 295.588 572.453 296.454C572.948 297.172 573.228 297.536 573.268 297.51C573.308 297.483 573.108 297.067 572.689 296.299C572.179 295.399 571.557 294.304 570.805 292.98C569.961 291.556 568.945 289.806 567.856 287.719C566.753 285.642 565.415 283.324 564.145 280.648C561.448 275.382 558.556 268.947 555.669 261.674C552.865 254.367 550.116 246.202 547.801 237.462C545.548 228.708 543.955 220.236 542.825 212.483C541.784 204.716 541.157 197.676 540.932 191.748C540.729 188.787 540.763 186.102 540.707 183.744C540.636 181.386 540.664 179.355 540.704 177.694C540.711 176.167 540.716 174.904 540.721 173.866C540.711 172.988 540.681 172.526 540.633 172.523Z" fill="#1A2E35" />
                                </g>
                                <mask id="mask12_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask12_24_594)">
                                    <path d="M720.498 343.012C694.455 343.012 673.345 321.902 673.345 295.859C673.345 269.818 694.455 248.706 720.498 248.706C746.541 248.706 767.651 269.818 767.651 295.859C767.651 321.902 746.541 343.012 720.498 343.012Z" fill="currentColor" />
                                    <path d="M738.804 304.504C738.704 306.698 738.337 307.888 738.029 308.68C737.621 309.73 737.135 310.479 736.347 311.266C735.56 312.052 734.811 312.54 733.761 312.948C732.969 313.256 731.777 313.623 729.585 313.723C727.215 313.831 726.504 313.854 720.499 313.854C714.492 313.854 713.781 313.831 711.411 313.723C709.217 313.623 708.027 313.256 707.235 312.948C706.185 312.54 705.436 312.052 704.648 311.266C703.863 310.479 703.375 309.73 702.967 308.68C702.659 307.888 702.292 306.698 702.192 304.504C702.084 302.134 702.061 301.422 702.061 295.416C702.061 289.412 702.084 288.7 702.192 286.33C702.292 284.136 702.659 282.946 702.967 282.154C703.375 281.104 703.863 280.355 704.648 279.568C705.436 278.78 706.185 278.294 707.235 277.886C708.027 277.578 709.217 277.211 711.411 277.111C713.781 277.003 714.493 276.98 720.499 276.98L729.585 277.111C731.777 277.211 732.969 277.578 733.761 277.886C734.811 278.294 735.56 278.78 736.347 279.568C737.135 280.355 737.621 281.104 738.029 282.154C738.337 282.946 738.704 284.136 738.804 286.33C738.912 288.7 738.935 289.412 738.935 295.416C738.935 301.422 738.912 302.134 738.804 304.504ZM742.852 286.144C742.743 283.751 742.363 282.116 741.807 280.686C741.232 279.207 740.463 277.952 739.212 276.702C737.963 275.452 736.708 274.683 735.229 274.108C733.799 273.552 732.164 273.172 729.771 273.063C727.371 272.954 726.605 272.928 720.499 272.928C714.391 272.928 713.624 272.954 711.225 273.063C708.832 273.172 707.197 273.552 705.767 274.108C704.288 274.683 703.033 275.452 701.784 276.702C700.533 277.952 699.764 279.207 699.191 280.686C698.633 282.116 698.253 283.751 698.144 286.144C698.035 288.543 698.009 289.31 698.009 295.416C698.009 301.524 698.035 302.291 698.144 304.69C698.253 307.083 698.633 308.718 699.191 310.148C699.764 311.627 700.533 312.882 701.784 314.131C703.033 315.382 704.288 316.151 705.767 316.726C707.197 317.28 708.832 317.662 711.225 317.771C713.624 317.88 714.391 317.906 720.499 317.906C726.605 317.906 727.371 317.88 729.771 317.771C732.164 317.662 733.799 317.28 735.229 316.726C736.708 316.151 737.963 315.382 739.212 314.131C740.463 312.882 741.232 311.627 741.807 310.148C742.363 308.718 742.743 307.083 742.852 304.69C742.961 302.291 742.987 301.524 742.987 295.416C742.987 289.31 742.961 288.543 742.852 286.144Z" fill="white" />
                                    <path d="M720.498 302.913C716.358 302.913 713.002 299.557 713.002 295.417C713.002 291.276 716.358 287.921 720.498 287.921C724.638 287.921 727.994 291.276 727.994 295.417C727.994 299.557 724.638 302.913 720.498 302.913ZM720.498 283.869C714.121 283.869 708.95 289.039 708.95 295.417C708.95 301.795 714.121 306.965 720.498 306.965C726.877 306.965 732.046 301.795 732.046 295.417C732.046 289.039 726.877 283.869 720.498 283.869Z" fill="white" />
                                    <path d="M732.503 280.714C731.012 280.714 729.804 281.922 729.804 283.412C729.804 284.903 731.012 286.111 732.503 286.111C733.994 286.111 735.202 284.903 735.202 283.412C735.202 281.922 733.994 280.714 732.503 280.714Z" fill="white" />
                                    <path d="M678.947 298.301L616.382 297.419L616.401 296.086L678.966 296.967L678.947 298.301Z" fill="currentColor" />
                                    <path d="M619.022 293.258C620.952 294.71 621.34 297.453 619.887 299.383C618.435 301.314 615.692 301.701 613.763 300.249C611.832 298.797 611.444 296.054 612.896 294.123C614.348 292.193 617.091 291.806 619.022 293.258Z" fill="currentColor" />
                                </g>
                                <mask id="mask13_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask13_24_594)">
                                    <path d="M566.993 474.058C540.95 474.058 519.839 452.947 519.839 426.905C519.839 400.863 540.95 379.751 566.993 379.751C593.035 379.751 614.146 400.863 614.146 426.905C614.146 452.947 593.035 474.058 566.993 474.058Z" fill="currentColor" />
                                    <path d="M545.643 443.398C549.521 445.883 554.125 447.334 559.071 447.334C575.337 447.334 584.525 433.597 583.971 421.275C585.683 420.041 587.169 418.498 588.343 416.739C586.771 417.437 585.082 417.907 583.311 418.119C585.119 417.037 586.509 415.319 587.162 413.273C585.47 414.277 583.594 415.006 581.601 415.399C580.002 413.697 577.726 412.634 575.206 412.634C569.551 412.634 565.395 417.91 566.673 423.39C559.391 423.025 552.937 419.537 548.617 414.235C546.322 418.174 547.426 423.326 551.327 425.933C549.891 425.887 548.539 425.491 547.358 424.837C547.265 428.895 550.173 432.691 554.385 433.538C553.151 433.873 551.801 433.949 550.43 433.687C551.543 437.169 554.778 439.699 558.613 439.771C554.93 442.658 550.291 443.947 545.643 443.398Z" fill="white" />
                                    <path d="M561.828 387.874L549.378 345.625L550.657 345.246L563.106 387.497L561.828 387.874Z" fill="currentColor" />
                                    <path d="M554.391 344.511C554.391 346.927 552.433 348.885 550.017 348.885C547.602 348.885 545.643 346.927 545.643 344.511C545.643 342.095 547.602 340.136 550.017 340.136C552.433 340.136 554.391 342.095 554.391 344.511Z" fill="currentColor" />
                                </g>
                                <mask id="mask14_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask14_24_594)">
                                    <path d="M450.735 137.692C424.058 137.692 402.431 116.067 402.431 89.3895C402.431 62.7135 424.058 41.0855 450.735 41.0855C477.412 41.0855 499.039 62.7121 499.039 89.3881C499.039 116.065 477.412 137.692 450.735 137.692Z" fill="currentColor" />
                                    <path d="M444.558 110.97H454.426V86.2595H461.31L462.045 77.9849H454.426V73.2729C454.426 71.3222 454.818 70.5516 456.704 70.5516H462.045V61.9649H455.212C447.869 61.9649 444.558 65.1995 444.558 71.3889V77.9849H439.425V86.3622H444.558V110.97Z" fill="white" />
                                    <path d="M452.485 185.555H451.152V128.971H452.485V185.555Z" fill="currentColor" />
                                    <path d="M447.352 186.622C447.954 184.282 450.338 182.873 452.676 183.473C455.016 184.074 456.427 186.458 455.826 188.798C455.224 191.138 452.84 192.547 450.5 191.946C448.162 191.346 446.751 188.962 447.352 186.622Z" fill="currentColor" />
                                </g>
                                <mask id="mask15_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask15_24_594)">
                                    <path d="M337.694 215.267C311.652 215.267 290.541 194.156 290.541 168.113C290.541 142.072 311.652 120.96 337.694 120.96C363.737 120.96 384.848 142.072 384.848 168.113C384.848 194.156 363.737 215.267 337.694 215.267Z" fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M337.959 188.018C333.62 188.018 329.59 186.734 326.214 184.512L318.011 187.126L320.674 179.256C318.118 175.761 316.607 171.47 316.607 166.833C316.607 166.144 316.643 165.454 316.714 164.776C317.76 154.053 326.891 145.648 337.959 145.648C349.17 145.648 358.384 154.266 359.239 165.18C359.287 165.728 359.311 166.274 359.311 166.833C359.311 178.52 349.728 188.018 337.959 188.018ZM363.342 166.19C362.996 152.566 351.774 141.629 337.959 141.629C324.311 141.629 313.183 152.317 312.59 165.728C312.578 166.096 312.566 166.465 312.566 166.833C312.566 171.6 313.896 176.046 316.203 179.85L313.358 188.253C312.64 190.374 314.639 192.41 316.774 191.732L325.69 188.898C329.328 190.896 333.512 192.037 337.959 192.037C351.988 192.037 363.352 180.754 363.352 166.833C363.352 166.618 363.352 166.405 363.342 166.19Z" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M349.598 171.921C348.969 171.613 345.913 170.114 345.342 169.912C344.77 169.698 344.356 169.604 343.938 170.221C343.524 170.84 342.322 172.23 341.965 172.634C341.597 173.05 341.241 173.098 340.61 172.789C339.993 172.48 337.984 171.838 335.605 169.721C333.764 168.093 332.502 166.072 332.145 165.454C331.789 164.836 332.11 164.502 332.42 164.193C332.704 163.909 333.038 163.468 333.358 163.112C333.442 163.005 333.513 162.91 333.584 162.814C333.726 162.589 333.833 162.374 333.977 162.077C334.19 161.661 334.084 161.305 333.929 160.996C333.774 160.686 332.526 157.644 332.002 156.406C331.492 155.17 330.969 155.384 330.6 155.384C330.244 155.384 329.828 155.325 329.412 155.325C328.996 155.325 328.318 155.48 327.748 156.097C327.177 156.716 325.572 158.213 325.572 161.257C325.572 161.97 325.702 162.684 325.893 163.361C326.522 165.537 327.878 167.332 328.116 167.642C328.425 168.045 332.42 174.489 338.744 176.974C345.08 179.434 345.08 178.614 346.222 178.508C347.362 178.412 349.908 177.021 350.418 175.57C350.942 174.133 350.942 172.896 350.786 172.634C350.633 172.385 350.216 172.23 349.598 171.921Z" fill="white" />
                                    <path d="M386.219 226.606L357.384 193.309L358.392 192.437L387.227 225.734L386.219 226.606Z" fill="currentColor" />
                                    <path d="M383.125 228.823C382.124 226.625 383.096 224.031 385.295 223.03C387.493 222.03 390.087 223.001 391.088 225.199C392.088 227.398 391.117 229.991 388.919 230.993C386.72 231.993 384.125 231.022 383.125 228.823Z" fill="currentColor" />
                                </g>
                                <mask id="mask16_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1000" height="667">
                                    <path d="M0 0.00012207H1000V666.667H0V0.00012207Z" fill="white" />
                                </mask>
                                <g mask="url(#mask16_24_594)">
                                    <path d="M873.764 615.663H787.062C777.264 615.663 769.32 607.719 769.32 597.919V522.45C769.32 512.651 777.264 504.707 787.062 504.707H873.764C877.36 504.707 880.276 507.622 880.276 511.219V609.151C880.276 612.747 877.36 615.663 873.764 615.663Z" fill="#375A64" />
                                    <mask id="mask17_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="769" y="504" width="112" height="112">
                                        <path d="M769.32 504.707H880.276V615.663H769.32V504.707Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask17_24_594)">
                                        <g opacity="0.300003">
                                            <path d="M873.764 615.663H787.062C777.264 615.663 769.32 607.719 769.32 597.919V522.45C769.32 512.651 777.264 504.707 787.062 504.707H873.764C877.36 504.707 880.276 507.622 880.276 511.219V609.151C880.276 612.747 877.36 615.663 873.764 615.663Z" fill="black" />
                                        </g>
                                    </g>
                                    <path d="M849.126 615.663H754.801C751.815 615.663 749.397 613.244 749.397 610.259V510.11C749.397 507.126 751.815 504.707 754.801 504.707H849.126C852.11 504.707 854.53 507.126 854.53 510.11V610.259C854.53 613.244 852.11 615.663 849.126 615.663Z" fill="#375A64" />
                                    <path d="M736.327 370.925C736.327 370.925 724.619 360.73 721.48 358.973C718.343 357.217 712.985 358.272 708.244 357.546C703.503 356.821 696.761 353.626 695.053 354.553C693.029 355.653 695.143 360.248 702.403 363.102L700.289 362.913L695.127 363.326C695.127 363.326 693.219 360.514 691.591 360.536C689.263 360.565 689.331 362.48 689.331 362.48C689.331 362.48 685.803 358.324 684.636 362.816C684.636 362.816 680.485 361.248 680.203 364.386C680.203 364.386 679.283 366.904 688.163 367.592C688.163 367.592 695.711 374.682 697.563 375.404C699.416 376.126 705.833 375.134 705.833 375.134C705.833 375.134 707.709 377.83 709.68 377.944C713.431 378.158 723.048 377.508 723.048 377.508L726.84 382.029L736.327 370.925Z" fill="#FFC19D" />
                                    <path d="M706.062 375.21C706.104 375.18 705.754 374.662 705.152 373.718C704.585 372.772 703.649 371.372 703.38 369.435C703.098 367.496 703.98 365.174 705.637 363.163C706.045 362.652 706.49 362.146 706.958 361.636C707.434 361.135 707.892 360.566 708.418 360.191C708.945 359.796 709.57 359.748 710.038 360.182C710.516 360.588 710.693 361.278 710.661 361.987C710.569 363.955 709.516 365.783 708.08 366.858L707.756 367.099L708.062 367.358C709.045 368.19 709.866 369.123 710.525 370.084L710.694 370.33L710.938 370.164C713.978 368.111 716.989 367.17 719.11 366.736C721.245 366.303 722.521 366.292 722.517 366.207C722.517 366.176 722.198 366.151 721.604 366.154C721.01 366.163 720.138 366.214 719.046 366.386C716.873 366.724 713.762 367.602 710.608 369.668L711.021 369.75C710.348 368.736 709.501 367.75 708.478 366.871L708.462 367.371C710.06 366.191 711.22 364.214 711.326 362.011C711.366 361.21 711.16 360.267 710.472 359.682C710.146 359.391 709.692 359.198 709.232 359.215C708.77 359.23 708.366 359.428 708.044 359.658C707.393 360.136 706.966 360.703 706.488 361.208C706.02 361.73 705.569 362.251 705.154 362.784C703.465 364.88 702.544 367.406 702.913 369.499C703.27 371.574 704.302 372.95 704.937 373.863C705.612 374.771 706.029 375.234 706.062 375.21Z" fill="#FF9C6A" />
                                    <path d="M694.469 362.693C694.329 362.811 695.909 364.921 697.998 367.405C698.532 368.021 698.994 368.619 699.541 369.138C700.1 369.665 700.772 369.933 701.34 370.009C701.929 370.078 702.372 369.937 702.657 369.85C702.944 369.754 703.094 369.674 703.085 369.63C703.076 369.585 702.905 369.579 702.609 369.595C702.313 369.606 701.889 369.659 701.422 369.545C700.953 369.422 700.412 369.163 699.965 368.695C699.51 368.225 699.034 367.587 698.508 366.977C696.417 364.493 694.609 362.574 694.469 362.693Z" fill="#FF9C6A" />
                                    <path d="M697.962 374.43C698.105 374.292 695.773 371.786 693.338 368.362C690.888 364.949 689.27 361.933 689.094 362.022C688.94 362.092 690.31 365.284 692.797 368.749C695.269 372.225 697.848 374.554 697.962 374.43Z" fill="#FF9C6A" />
                                    <path d="M690.584 369.815C690.684 369.693 689.249 368.123 687.568 366.071C685.867 364.039 684.489 362.389 684.341 362.491C684.188 362.599 685.34 364.447 687.057 366.498C688.751 368.566 690.449 369.978 690.584 369.815Z" fill="#FF9C6A" />
                                    <path d="M704.524 363.427C704.548 363.245 703.472 363.023 702.12 362.934C700.769 362.843 699.669 362.919 699.664 363.103C699.657 363.286 700.735 363.507 702.067 363.597C703.4 363.686 704.5 363.61 704.524 363.427Z" fill="#FF9C6A" />
                                    <path d="M803.529 339.602C803.529 339.602 791.052 338.674 783.808 353.217C779.019 362.832 764.451 388.76 764.451 388.76L735.796 364.693L719.002 382.858C719.002 382.858 747.681 417.016 758.821 419.606C769.961 422.197 783.09 414.633 787.202 408.808C791.315 402.981 805.002 388.76 805.002 388.76L803.529 339.602Z" fill="currentColor" />
                                    <path d="M807.005 370.392L808.996 338.19C809.055 313.191 806.483 284.268 809.54 276.094C815.188 260.996 835.463 257.756 835.463 257.756C862.823 254.966 868.356 275.886 871.704 294.992C872.272 298.234 873.829 303.976 875.791 310.611C880.271 324.415 885.803 338.558 896.229 347.716C900.209 351.211 902.961 356.214 903.999 361.407C905.036 366.602 902.451 372.978 897.256 374.008C899.999 376.467 901.521 380.226 901.263 383.9C901.005 387.574 898.972 391.083 895.912 393.134C891.601 396.023 885.997 395.867 880.825 395.428C875.688 394.992 870.297 394.28 866.167 391.195C862.027 388.103 859.811 383.11 858.091 378.238C856.02 372.37 854.42 366.338 853.297 360.218L807.005 370.392Z" fill="#1A2E35" />
                                    <path d="M834.477 264.827L836.423 263.473L853.61 273.691C856.239 274.247 858.006 276.723 857.675 279.39L846.361 338.639C845.758 342.693 846.334 346.519 843.39 349.369L823.245 368.291C816.178 375.133 819.355 358.157 816.027 348.901C815.795 348.254 817.545 346.249 817.511 345.809C817.495 345.262 817.405 344.889 817.445 344.431C817.642 339.542 818.254 335.371 818.254 335.371C818.743 330.046 818.97 327.865 818.961 327.914C818.961 327.914 807.935 324.89 807.126 310.011C806.723 302.611 808.531 292.795 810.455 283.158C813.117 269.821 823.685 263.146 834.477 264.827Z" fill="#FFC19D" />
                                    <path d="M830.219 295.738C830.082 296.726 830.805 297.657 831.834 297.82C832.861 297.982 833.806 297.316 833.945 296.328C834.081 295.34 833.358 294.408 832.333 294.245C831.303 294.082 830.357 294.75 830.219 295.738Z" fill="#1A2E35" />
                                    <path d="M811.893 292.849C811.756 293.837 812.479 294.768 813.507 294.93C814.535 295.093 815.48 294.426 815.617 293.438C815.755 292.45 815.032 291.518 814.005 291.356C812.976 291.193 812.031 291.861 811.893 292.849Z" fill="#1A2E35" />
                                    <path d="M811.707 287.988C811.915 288.257 813.446 287.352 815.466 287.565C817.486 287.752 818.862 288.944 819.106 288.72C819.225 288.621 819.033 288.155 818.437 287.617C817.85 287.084 816.813 286.517 815.554 286.391C814.295 286.268 813.189 286.623 812.531 287.033C811.861 287.445 811.605 287.867 811.707 287.988Z" fill="#1A2E35" />
                                    <path d="M831.221 290.643C831.455 290.889 832.887 289.831 834.917 289.837C836.945 289.813 838.435 290.859 838.655 290.611C838.763 290.5 838.527 290.056 837.877 289.584C837.238 289.112 836.149 288.655 834.883 288.66C833.618 288.667 832.554 289.132 831.942 289.608C831.319 290.088 831.106 290.533 831.221 290.643Z" fill="#1A2E35" />
                                    <path d="M822.832 304.153C822.853 304.04 821.62 303.693 819.612 303.221C819.103 303.115 818.624 302.961 818.573 302.601C818.491 302.215 818.764 301.683 819.076 301.108C819.691 299.909 820.333 298.653 821.009 297.337C823.707 291.964 825.716 287.524 825.499 287.417C825.281 287.311 822.919 291.58 820.221 296.953C819.568 298.279 818.944 299.543 818.351 300.753C818.095 301.319 817.689 301.949 817.873 302.749C817.972 303.149 818.323 303.469 818.644 303.592C818.964 303.728 819.253 303.763 819.507 303.804C821.543 304.127 822.812 304.268 822.832 304.153Z" fill="#1A2E35" />
                                    <path d="M818.962 327.914C818.962 327.914 828.743 329.569 839.107 324.715C839.107 324.715 833.128 334.338 818.62 331.451L818.962 327.914Z" fill="#FF9C6A" />
                                    <path d="M831.447 282.385C831.631 282.942 833.666 282.741 836.038 283.097C838.419 283.406 840.319 284.159 840.65 283.673C840.798 283.441 840.479 282.911 839.718 282.354C838.963 281.798 837.75 281.255 836.324 281.054C834.899 280.857 833.583 281.045 832.706 281.373C831.822 281.699 831.368 282.119 831.447 282.385Z" fill="#1A2E35" />
                                    <path d="M813.002 279.871C813.301 280.42 813.653 280.262 815.595 280.723C817.55 281.128 820.471 282.015 820.966 281.64C821.189 281.455 821.042 280.942 820.431 280.339C819.83 279.74 818.735 279.1 817.397 278.802C816.057 278.506 814.802 278.623 814.014 278.914C813.215 279.202 812.875 279.607 813.002 279.871Z" fill="#1A2E35" />
                                    <path d="M853.372 304.82C853.372 304.82 844.354 306.464 836.047 281.504C833.243 273.077 833.12 262.962 833.12 262.962L836.528 262.486C836.528 262.486 855.895 271.317 856.195 271.625C856.496 271.933 859.686 282.886 859.686 282.886L853.372 304.82Z" fill="#1A2E35" />
                                    <path d="M850.988 303.485C851.104 302.396 852.63 299.956 853.724 299.9C856.646 299.749 861.803 300.516 861.095 307.822C860.127 317.809 850.3 314.778 850.31 314.49C850.318 314.265 850.59 307.249 850.988 303.485Z" fill="#FFC19D" />
                                    <path d="M853.728 311.002C853.774 310.974 853.89 311.14 854.17 311.304C854.445 311.463 854.929 311.602 855.469 311.456C856.561 311.171 857.612 309.583 857.836 307.787C857.949 306.88 857.842 305.996 857.589 305.248C857.356 304.488 856.933 303.932 856.41 303.787C855.894 303.612 855.486 303.895 855.337 304.163C855.176 304.43 855.221 304.636 855.166 304.647C855.136 304.67 854.968 304.459 855.088 304.055C855.149 303.86 855.289 303.636 855.542 303.467C855.801 303.295 856.162 303.23 856.529 303.306C857.294 303.434 857.918 304.21 858.196 305.031C858.516 305.859 858.657 306.855 858.529 307.872C858.27 309.879 857.057 311.663 855.573 311.94C854.853 312.055 854.288 311.787 854.008 311.522C853.722 311.246 853.692 311.016 853.728 311.002Z" fill="#FF9C6A" />
                                    <path d="M855.468 315.563C855.486 316.983 854.348 318.15 852.927 318.167C851.507 318.183 850.342 317.046 850.324 315.626C850.307 314.204 851.444 313.039 852.864 313.022C854.286 313.004 855.451 314.143 855.468 315.563Z" fill="#375A64" />
                                    <path d="M886.706 268.997C883.95 265.58 879.151 264.026 874.864 264.972C870.62 265.908 866.982 269.212 865.642 273.345L864.43 298.48C866.092 299.208 868.182 298.82 869.474 297.544C870.766 296.269 871.178 294.184 870.471 292.512C871.663 294.464 874.107 295.608 876.346 295.146C878.586 294.684 880.41 292.572 880.418 290.285C880.424 288.434 879.172 286.66 877.486 285.964C881.356 286.622 885.586 284.708 887.643 281.325C889.926 277.574 889.462 272.414 886.706 268.997Z" fill="#1A2E35" />
                                    <path d="M868.695 292.821C868.704 292.84 868.547 292.936 868.236 293.102C867.92 293.253 867.478 293.541 866.847 293.772C865.62 294.31 863.735 294.877 861.339 295.117C858.946 295.368 856.035 295.169 852.967 294.297C849.906 293.421 846.706 291.81 843.911 289.4C841.148 286.958 839.066 284.066 837.639 281.228C836.198 278.389 835.352 275.632 834.879 273.284C834.402 270.933 834.242 268.994 834.216 267.657C834.183 266.99 834.222 266.47 834.226 266.118C834.24 265.768 834.258 265.584 834.278 265.584C834.328 265.584 834.354 266.321 834.454 267.645C834.55 268.969 834.775 270.882 835.299 273.192C835.82 275.498 836.695 278.2 838.138 280.972C839.566 283.744 841.616 286.558 844.311 288.941C847.031 291.288 850.143 292.874 853.124 293.76C856.114 294.64 858.954 294.88 861.303 294.688C866.047 294.329 868.644 292.646 868.695 292.821Z" fill="#375A64" />
                                    <path d="M869.099 296.011C869.161 296.048 868.893 296.658 868.222 297.492C867.558 298.326 866.445 299.344 864.994 300.114C863.541 300.879 862.071 301.224 861.009 301.304C859.941 301.388 859.287 301.266 859.291 301.195C859.275 301.004 861.933 301.075 864.71 299.576C867.511 298.127 868.951 295.891 869.099 296.011Z" fill="#375A64" />
                                    <path d="M871.526 295.259C871.436 295.27 871.211 293.963 870.812 291.863C870.414 289.762 869.815 286.871 868.995 283.717C868.172 280.563 867.284 277.747 866.608 275.718C865.932 273.69 865.491 272.439 865.575 272.406C865.647 272.377 866.23 273.571 867.012 275.573C867.796 277.573 868.755 280.387 869.584 283.563C870.41 286.739 870.946 289.665 871.236 291.793C871.528 293.922 871.603 295.25 871.526 295.259Z" fill="#375A64" />
                                    <path d="M828.384 310.673C828.389 309.925 828.069 309.22 827.611 308.703C826.692 307.667 825.183 307.371 823.963 307.985C822.743 308.601 821.887 310.091 821.895 311.585C822.401 312.531 823.279 313.243 824.325 313.481C824.488 313.519 824.653 313.547 824.819 313.565C825.625 313.655 826.48 313.496 827.175 312.989C827.869 312.481 828.379 311.596 828.384 310.673Z" fill="#FF9C6A" />
                                    <path d="M827.719 306.905C827.403 306.861 827.224 308.981 825.284 310.339C823.348 311.7 821.106 311.276 821.064 311.571C821.024 311.701 821.535 312.024 822.487 312.128C823.42 312.237 824.812 312.049 825.999 311.22C827.183 310.388 827.76 309.195 827.904 308.331C828.059 307.451 827.866 306.905 827.719 306.905Z" fill="#1A2E35" />
                                    <path d="M802.076 339.591C802.076 339.591 786.682 360.372 785.411 367.577C784.142 374.783 787.716 421.349 789.559 429.4L777.639 456.209L798.019 460.983L865.748 459.825L862.892 415.248L869.751 385.625L870.452 346.652L846.36 338.64C840.044 351.404 819.238 347.216 818.123 337.005L802.076 339.591Z" fill="currentColor" />
                                    <path d="M870.452 346.652C870.452 346.652 878.747 349.638 883.507 359.202C887.343 366.907 897.867 400.287 900.48 408.731C903.362 418.044 904.282 425.951 899.026 432.36C897.511 434.206 897.256 436.424 886.174 441.048C875.206 445.624 846.108 454.436 846.108 454.436L840.044 439.38L875.787 417.452L865.46 389.628L870.452 346.652Z" fill="currentColor" />
                                    <path d="M873.133 375.206C873.313 375.253 871.153 384.18 868.309 395.142C865.465 406.109 863.013 414.958 862.833 414.912C862.653 414.865 864.813 405.94 867.657 394.973C870.501 384.01 872.953 375.16 873.133 375.206Z" fill="#1A2E35" />
                                    <path d="M809.365 443.522L812.275 442.15L811.188 443.477C811.188 443.477 809.78 444.97 810.215 446.618C810.648 448.267 813.672 448.622 813.672 448.622C813.672 448.622 813.408 450.358 814.54 451.869C815.597 453.278 819.637 452.247 819.637 452.247L819.08 453.453C818.396 454.739 820.043 456.335 820.807 456.53C821.571 456.725 824.533 455.89 825.867 455.013C827.201 454.135 832.112 454.529 832.112 454.529C832.112 454.529 838.261 456.49 840.876 455.554C843.489 454.618 844.248 452.715 844.248 452.715C844.248 452.715 843.812 441.209 840.044 439.379C838.124 438.447 826.948 434.163 823.62 432.741C822.496 432.261 821.236 432.233 820.093 432.665C816.477 434.029 809.913 436.763 808.273 438.015C808.273 438.015 805.405 439.819 805.98 441.539C806.311 442.531 807.231 443.947 809.365 443.522Z" fill="#FFC19D" />
                                    <path d="M817.828 438.276C817.874 438.338 816.57 439.354 814.918 440.545C813.266 441.736 811.89 442.65 811.844 442.588C811.799 442.526 813.102 441.51 814.755 440.318C816.407 439.128 817.783 438.213 817.828 438.276Z" fill="#FF9C6A" />
                                    <path d="M820.793 444.631C820.826 444.709 819.15 445.445 817.198 446.563C815.25 447.685 813.721 448.695 813.671 448.621C813.65 448.591 814.01 448.304 814.615 447.876C815.221 447.451 816.075 446.883 817.061 446.32C818.045 445.759 818.973 445.316 819.657 445.028C820.342 444.74 820.778 444.597 820.793 444.631Z" fill="#FF9C6A" />
                                    <path d="M824.939 449.263C824.976 449.33 823.737 450.093 822.172 450.965C820.607 451.837 819.307 452.489 819.269 452.422C819.232 452.355 820.471 451.593 822.036 450.721C823.601 449.849 824.901 449.195 824.939 449.263Z" fill="#FF9C6A" />
                                    <path d="M788.491 355.569C788.515 355.573 788.504 355.801 788.464 356.233C788.407 356.742 788.338 357.364 788.254 358.116C788.046 359.745 787.779 362.109 787.491 365.03C786.91 370.874 786.38 378.978 786.458 387.936C786.548 396.898 787.23 404.99 787.92 410.822C788.263 413.738 788.574 416.096 788.811 417.722C788.91 418.472 788.991 419.09 789.058 419.6C789.107 420.03 789.12 420.258 789.098 420.262C789.074 420.268 789.014 420.046 788.92 419.624C788.818 419.12 788.695 418.506 788.544 417.766C788.224 416.152 787.839 413.8 787.434 410.884C786.615 405.054 785.854 396.937 785.763 387.942C785.686 378.952 786.295 370.822 787.003 364.978C787.355 362.056 787.696 359.697 787.986 358.076C788.122 357.332 788.234 356.717 788.326 356.212C788.411 355.786 788.467 355.565 788.491 355.569Z" fill="#1A2E35" />
                                    <path d="M756.115 598.832L771.112 621.705C771.112 621.705 753.67 644.596 756.043 649.092L799.968 621.672L778.014 585.077L756.115 598.832Z" fill="#375A64" />
                                    <path d="M783.501 611.26C784.497 610.969 785.683 611.591 786.025 612.601C786.366 613.612 785.778 614.841 784.787 615.149C783.798 615.459 782.351 614.757 782.122 613.715C781.893 612.673 782.661 611.271 783.698 611.215" fill="#E1E1E1" />
                                    <path d="M799.968 621.673L797.614 618.07L756.38 645.707C756.38 645.707 754.958 647.807 756.042 649.093L799.968 621.673Z" fill="#1A2E35" />
                                    <path d="M770.26 621.919C770.401 622.136 771.534 621.567 773.022 621.621C774.51 621.635 775.637 622.256 775.781 622.044C775.953 621.879 774.829 620.753 773.028 620.72C771.226 620.671 770.089 621.744 770.26 621.919Z" fill="white" />
                                    <path d="M766.848 626.764C766.929 627.009 768.086 626.807 769.384 627.289C770.694 627.733 771.493 628.632 771.701 628.489C771.924 628.399 771.284 627.007 769.661 626.439C768.042 625.855 766.724 626.549 766.848 626.764Z" fill="white" />
                                    <path d="M767.688 634.095C767.91 634.021 767.538 632.727 766.25 631.857C764.969 630.978 763.668 631.13 763.689 631.371C763.678 631.63 764.724 631.874 765.77 632.605C766.833 633.31 767.461 634.207 767.688 634.095Z" fill="white" />
                                    <path d="M767.401 616.327C767.613 616.474 768.412 615.553 769.676 614.882C770.926 614.183 772.125 614.015 772.121 613.755C772.148 613.518 770.729 613.271 769.252 614.085C767.769 614.886 767.19 616.219 767.401 616.327Z" fill="white" />
                                    <path d="M801.281 459.825C801.281 459.825 729.125 483.881 717.265 493.461C707.713 501.175 708.974 523.305 714.518 532.137C716.775 535.731 766.61 619.337 766.61 619.337L791.354 605.811L758.023 524.175C758.023 524.175 839.426 508.37 854.486 501.587C873.133 493.191 867.161 473.831 867.161 473.831L863.897 459.825H801.281Z" fill="#1A2E35" />
                                    <path d="M774.512 576.139L789.509 599.013C789.509 599.013 772.066 621.903 774.44 626.401L818.365 598.981L796.412 562.385L774.512 576.139Z" fill="#375A64" />
                                    <path d="M801.898 588.567C802.894 588.277 804.08 588.898 804.422 589.909C804.763 590.919 804.175 592.149 803.184 592.457C802.195 592.766 800.748 592.063 800.519 591.022C800.291 589.981 801.058 588.578 802.095 588.522" fill="#E1E1E1" />
                                    <path d="M818.364 598.98L816.011 595.377L774.776 623.015C774.776 623.015 773.355 625.115 774.439 626.4L818.364 598.98Z" fill="#1A2E35" />
                                    <path d="M789.492 599.226C789.633 599.443 790.767 598.874 792.255 598.929C793.743 598.942 794.869 599.563 795.013 599.351C795.185 599.185 794.061 598.061 792.26 598.027C790.459 597.978 789.323 599.051 789.492 599.226Z" fill="white" />
                                    <path d="M786.029 604.198C786.111 604.443 787.268 604.24 788.565 604.723C789.876 605.167 790.675 606.066 790.883 605.923C791.105 605.832 790.465 604.442 788.843 603.872C787.224 603.288 785.905 603.983 786.029 604.198Z" fill="white" />
                                    <path d="M786.869 611.631C787.092 611.556 786.72 610.263 785.432 609.392C784.151 608.513 782.849 608.665 782.871 608.907C782.86 609.165 783.905 609.409 784.952 610.14C786.015 610.845 786.643 611.743 786.869 611.631Z" fill="white" />
                                    <path d="M787.136 595.044C787.348 595.189 788.147 594.269 789.411 593.598C790.661 592.9 791.86 592.732 791.856 592.472C791.883 592.233 790.464 591.988 788.987 592.801C787.504 593.602 786.925 594.936 787.136 595.044Z" fill="white" />
                                    <path d="M723.578 461.907C719.434 465.731 713.091 478.259 719.843 492.972C724.125 502.302 783.165 593.584 783.165 593.584L807.121 577.81C807.121 577.81 786.595 534.779 779.749 514.63C774.542 499.304 762.965 475.679 762.215 474.132L799.425 460.466C799.425 460.466 759.657 447.838 745.179 450.931C730.701 454.024 723.578 461.907 723.578 461.907Z" fill="#1A2E35" />
                                    <path d="M723.578 461.907C723.578 461.907 723.886 461.527 724.579 460.881C725.273 460.235 726.342 459.313 727.843 458.241C730.831 456.107 735.61 453.327 742.342 451.47C743.186 451.261 744.054 451.045 744.946 450.825C745.849 450.657 746.793 450.558 747.751 450.417C749.677 450.291 751.707 450.23 753.813 450.385C758.026 450.617 762.569 451.227 767.383 452.134C777.021 453.923 787.811 456.635 799.505 460.213L800.257 460.443L799.517 460.715C788.281 464.855 775.719 469.483 762.321 474.419L762.49 474.001C765.366 479.897 768.241 486.03 771.083 492.381C773.91 498.737 776.731 505.303 779.229 512.171C781.594 519.075 784.31 525.99 787.263 532.969C790.203 539.949 793.313 546.997 796.523 554.11C800.151 562.134 803.793 570.013 807.422 577.666L807.547 577.929L807.303 578.089C799.061 583.514 791.046 588.787 783.343 593.857L783.07 594.037L782.891 593.761C770.986 575.31 759.938 558.061 750.089 542.55C740.245 527.034 731.57 513.277 724.593 501.691C722.865 498.783 721.203 496.042 719.822 493.323C718.565 490.555 717.682 487.815 717.209 485.187C716.775 482.554 716.669 480.07 716.825 477.802C717.035 475.541 717.405 473.497 717.95 471.721C719.013 468.157 720.505 465.659 721.63 464.098C722.778 462.538 723.578 461.907 723.578 461.907C723.578 461.907 723.417 462.101 723.079 462.458C722.737 462.809 722.277 463.381 721.722 464.165C720.634 465.737 719.183 468.237 718.163 471.783C717.638 473.55 717.287 475.579 717.097 477.822C716.958 480.069 717.081 482.527 717.525 485.13C718.009 487.729 718.898 490.434 720.155 493.167C721.53 495.841 723.209 498.585 724.946 501.478C731.966 513.027 740.683 526.758 750.559 542.25C760.442 557.738 771.517 574.97 783.438 593.409L782.986 593.314C790.686 588.239 798.697 582.961 806.937 577.531L806.818 577.954C803.183 570.295 799.539 562.417 795.909 554.387C792.697 547.27 789.586 540.217 786.647 533.229C783.697 526.251 780.967 519.291 778.61 512.394C776.129 505.551 773.317 498.991 770.502 492.641C767.669 486.294 764.806 480.163 761.941 474.266L761.793 473.962L762.11 473.846C775.519 468.937 788.09 464.334 799.333 460.217L799.345 460.719C787.687 457.121 776.91 454.375 767.306 452.553C762.506 451.63 757.981 451.002 753.793 450.75C751.699 450.585 749.686 450.635 747.781 450.749C746.837 450.883 745.909 450.974 745.013 451.134C744.126 451.347 743.262 451.557 742.421 451.759C735.717 453.562 730.938 456.285 727.933 458.369C726.423 459.417 725.342 460.315 724.633 460.939C724.026 461.497 723.745 461.754 723.578 461.907Z" fill="#375A64" />
                                    <path d="M753.494 465.294C753.588 465.148 756.088 466.704 758.572 469.32C761.069 471.926 762.505 474.495 762.357 474.582C762.19 474.691 760.53 472.335 758.085 469.786C755.653 467.223 753.377 465.455 753.494 465.294Z" fill="#375A64" />
                                    <path d="M774.512 576.139C774.5 576.137 774.618 576.053 774.86 575.891C775.136 575.71 775.496 575.474 775.952 575.175C776.965 574.522 778.398 573.597 780.233 572.415C784.041 569.986 789.504 566.502 796.282 562.178L796.49 562.046L796.62 562.259C802.488 571.991 810.105 584.627 818.654 598.806L818.825 599.09L818.542 599.266C812.844 602.827 806.8 606.605 800.581 610.49C791.446 616.185 782.688 621.643 774.613 626.677L774.298 626.873L774.15 626.553C773.764 625.71 773.89 624.878 774.038 624.135C774.189 623.377 774.436 622.665 774.698 621.969C775.238 620.585 775.881 619.278 776.552 618.015C777.902 615.495 779.36 613.143 780.808 610.907C783.721 606.442 786.605 602.433 789.31 598.862L789.3 599.149C784.714 592.051 780.996 586.295 778.397 582.275C777.149 580.322 776.172 578.793 775.481 577.714C775.172 577.221 774.926 576.831 774.741 576.535C774.577 576.27 774.5 576.137 774.512 576.139C774.524 576.142 774.625 576.281 774.812 576.55C775.016 576.847 775.282 577.241 775.622 577.738C776.344 578.811 777.368 580.334 778.673 582.278C781.305 586.233 785.072 591.894 789.717 598.877L789.813 599.021L789.706 599.163C787.038 602.742 784.182 606.765 781.301 611.226C779.87 613.461 778.43 615.807 777.104 618.307C776.444 619.558 775.816 620.851 775.296 622.198C775.044 622.873 774.808 623.561 774.673 624.262C774.522 624.949 774.466 625.702 774.728 626.247L774.266 626.123C782.334 621.079 791.086 615.609 800.214 609.901C806.436 606.021 812.484 602.25 818.185 598.694L818.076 599.154C809.589 584.937 802.028 572.267 796.202 562.509L796.541 562.59C789.756 566.786 784.288 570.166 780.477 572.523C778.596 573.675 777.124 574.575 776.085 575.211C775.602 575.502 775.22 575.731 774.928 575.907C774.664 576.063 774.524 576.142 774.512 576.139Z" fill="#1A2E35" />
                                    <mask id="mask18_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="725" y="457" width="141" height="12">
                                        <path d="M725.869 457.048H865.817V468.067H725.869V457.048Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask18_24_594)">
                                        <g opacity="0.300003">
                                            <path d="M725.869 459.825L780.676 462.378L865.817 468.066L863.897 459.825H865.748L865.571 457.049H729.781L725.869 459.825Z" fill="black" />
                                        </g>
                                    </g>
                                    <path d="M869.512 400.544C869.546 400.531 869.741 400.956 870.072 401.755C870.432 402.656 870.893 403.808 871.452 405.208C872.633 408.297 874.229 412.473 876.088 417.34L876.182 417.585L875.954 417.725C873.093 419.491 869.966 421.419 866.686 423.441C859.877 427.62 853.693 431.368 849.198 434.052C847.02 435.336 845.218 436.396 843.857 437.199C842.588 437.929 841.874 438.313 841.849 438.272C841.824 438.232 842.489 437.769 843.716 436.969C845.048 436.119 846.81 434.993 848.941 433.633C853.37 430.843 859.513 427.028 866.324 422.849C869.613 420.843 872.748 418.929 875.618 417.177L875.485 417.563C873.72 412.663 872.205 408.456 871.085 405.345C870.594 403.919 870.192 402.745 869.877 401.827C869.606 401.005 869.477 400.556 869.512 400.544Z" fill="#1A2E35" />
                                    <path d="M715.844 393.138L788.522 396.746C790.881 396.844 793.088 398.07 793.344 400.417L799.09 453.736L836.538 455.29C837.745 455.34 838.681 456.358 838.632 457.564C838.581 458.769 837.564 459.706 836.358 459.656L799.564 458.129L792.58 457.84L716.753 454.693L710.9 398.428C710.582 395.524 712.924 393.017 715.844 393.138Z" fill="#E1E1E1" />
                                    <path d="M715.844 393.138C715.844 393.138 715.45 393.072 714.693 393.198C713.958 393.337 712.794 393.74 711.84 394.925C711.365 395.504 710.989 396.289 710.845 397.208C710.688 398.14 710.914 399.137 710.988 400.209C711.204 402.364 711.452 404.844 711.73 407.633C712.869 418.809 714.512 434.916 716.53 454.716L716.549 454.909L716.744 454.917C747.693 456.22 788.364 457.932 832.776 459.802C833.82 459.845 834.86 459.889 835.898 459.932C836.38 459.972 837.052 459.972 837.564 459.686C838.092 459.424 838.513 458.962 838.737 458.42C839.218 457.329 838.754 455.949 837.733 455.354C837.248 455.032 836.584 454.978 836.108 454.978L834.569 454.914C830.473 454.745 826.418 454.578 822.417 454.413C814.412 454.084 806.616 453.762 799.102 453.453L799.372 453.705C797.3 434.61 795.366 416.796 793.632 400.816C793.59 399.806 793.181 398.7 792.402 397.99C791.642 397.258 790.657 396.845 789.673 396.649C788.668 396.453 787.702 396.496 786.746 396.424C785.786 396.378 784.836 396.332 783.892 396.286C780.118 396.104 776.468 395.928 772.949 395.758C765.914 395.422 759.409 395.11 753.502 394.828C741.701 394.277 732.293 393.838 725.816 393.537C722.596 393.397 720.109 393.289 718.406 393.216C717.576 393.185 716.94 393.162 716.493 393.145C716.064 393.132 715.844 393.138 715.844 393.138C715.844 393.138 716.062 393.166 716.492 393.196C716.937 393.224 717.573 393.264 718.402 393.316C720.104 393.41 722.589 393.549 725.806 393.729C732.282 394.07 741.688 394.565 753.486 395.186C759.392 395.49 765.896 395.825 772.93 396.186C776.448 396.366 780.097 396.552 783.87 396.745C784.814 396.793 785.765 396.841 786.725 396.89C787.68 396.962 788.666 396.929 789.58 397.113C790.497 397.297 791.398 397.685 792.069 398.337C792.757 398.989 793.098 399.872 793.148 400.868C794.858 416.852 796.765 434.668 798.809 453.766L798.834 454.009L799.078 454.02C806.592 454.333 814.388 454.66 822.393 454.994C826.394 455.161 830.449 455.33 834.545 455.501L836.084 455.565C836.626 455.573 837.03 455.61 837.428 455.856C838.208 456.312 838.562 457.362 838.194 458.196C838.024 458.609 837.702 458.962 837.3 459.161C836.88 459.377 836.472 459.382 835.924 459.344C834.885 459.301 833.844 459.258 832.8 459.214C788.385 457.398 747.713 455.734 716.762 454.469L716.976 454.67C714.876 434.877 713.166 418.777 711.981 407.606C711.68 404.82 711.412 402.341 711.18 400.189C711.096 399.113 710.862 398.12 711.005 397.232C711.136 396.342 711.488 395.576 711.942 395.005C712.854 393.838 713.986 393.421 714.706 393.264C715.448 393.117 715.845 393.168 715.844 393.138Z" fill="#1A2E35" />
                                    <path d="M755.37 424.862C755.266 427.375 753.143 429.329 750.628 429.225C748.115 429.121 746.162 426.998 746.266 424.485C746.371 421.97 748.492 420.017 751.007 420.122C753.52 420.226 755.474 422.349 755.37 424.862Z" fill="white" />
                                    <path d="M795.983 457.491C795.879 457.504 794.126 443.915 792.066 427.143C790.005 410.365 788.419 396.759 788.522 396.745C788.626 396.733 790.379 410.319 792.441 427.096C794.501 443.868 796.086 457.479 795.983 457.491Z" fill="#1A2E35" />
                                </g>
                                <path d="M215.965 576.558L214.942 603.452C214.942 603.452 241.937 613.524 242.231 618.512L190.013 618.403L189.886 576.432L215.965 576.558Z" fill="#1A2E35" />
                                <path d="M198.8 601.156C197.789 601.431 197.088 602.565 197.32 603.587C197.552 604.608 198.7 605.331 199.716 605.075C200.732 604.819 201.614 603.481 201.269 602.492C200.925 601.503 199.53 600.728 198.605 601.221" fill="#E1E1E1" />
                                <path d="M190.012 618.403L190.166 614.173L240.175 615.859C240.175 615.859 242.498 616.875 242.231 618.513L190.012 618.403Z" fill="#375A64" />
                                <path d="M215.789 603.189C215.78 603.443 214.505 603.557 213.249 604.374C211.97 605.158 211.321 606.262 211.088 606.159C210.853 606.11 211.236 604.586 212.774 603.623C214.304 602.647 215.845 602.955 215.789 603.189Z" fill="white" />
                                <path d="M221.261 605.465C221.319 605.712 220.213 606.144 219.345 607.22C218.445 608.272 218.225 609.437 217.971 609.425C217.731 609.465 217.557 607.972 218.663 606.653C219.756 605.327 221.256 605.223 221.261 605.465Z" fill="white" />
                                <path d="M224.358 612.027C224.126 612.08 223.774 610.806 224.432 609.411C225.08 608.011 226.284 607.463 226.39 607.675C226.534 607.886 225.758 608.632 225.237 609.787C224.686 610.927 224.612 612.003 224.358 612.027Z" fill="white" />
                                <path d="M215.342 597.033C215.234 597.265 214.066 596.911 212.625 597.007C211.181 597.072 210.058 597.553 209.926 597.335C209.778 597.149 210.875 596.208 212.575 596.12C214.273 596.019 215.467 596.833 215.342 597.033Z" fill="white" />
                                <path d="M152.042 572.9L149.215 605.34L154.377 631.641C154.749 633.537 153.437 635.352 151.521 635.594C150.447 635.729 149.383 635.345 148.651 634.548C143.998 629.473 126.971 610.722 127.31 608.36C127.705 605.624 128.021 573.945 128.021 573.945L152.042 572.9Z" fill="#1A2E35" />
                                <path d="M151.521 635.594L127.452 606.167L127.362 607.545C127.286 608.734 127.629 609.914 128.342 610.87C130.25 613.427 135.673 620.373 148.553 634.542C149.302 635.366 150.42 635.763 151.521 635.594Z" fill="#375A64" />
                                <mask id="mask19_24_594" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="131" y="595" width="5" height="5">
                                    <path d="M131.766 595.73H135.516V599.531H131.766V595.73Z" fill="white" />
                                </mask>
                                <g mask="url(#mask19_24_594)">
                                    <g opacity="0.600006">
                                        <path d="M134.792 596.113C135.571 596.727 135.758 597.977 135.175 598.779C134.592 599.582 133.324 599.782 132.536 599.181C131.747 598.581 131.476 597.089 132.146 596.355C132.814 595.623 134.316 595.469 134.938 596.242" fill="white" />
                                    </g>
                                </g>
                                <path d="M145.005 620.919C145.182 621.021 146.025 619.366 148.017 618.575C149.983 617.723 151.749 618.297 151.803 618.099C151.837 618.021 151.441 617.742 150.687 617.586C149.942 617.427 148.835 617.463 147.742 617.914C146.651 618.369 145.843 619.126 145.429 619.767C145.007 620.411 144.926 620.887 145.005 620.919Z" fill="white" />
                                <path d="M147.04 625.419C147.185 625.57 148.296 624.58 150.008 624.207C151.712 623.795 153.143 624.2 153.208 624C153.312 623.842 151.792 623.051 149.848 623.51C147.899 623.947 146.877 625.32 147.04 625.419Z" fill="white" />
                                <path d="M141.054 615.066C141.197 615.23 142.897 613.699 145.507 612.884C148.106 612.03 150.379 612.287 150.401 612.071C150.465 611.9 148.079 611.294 145.29 612.204C142.493 613.084 140.903 614.964 141.054 615.066Z" fill="white" />
                                <path d="M141.09 605.132C141.164 605.332 143.007 604.698 145.348 604.763C147.691 604.796 149.506 605.51 149.588 605.312C149.688 605.159 147.88 604.09 145.363 604.048C142.847 603.984 140.996 604.975 141.09 605.132Z" fill="white" />
                                <path d="M141.678 595.589C141.766 595.784 143.642 594.816 146.102 595.087C148.568 595.304 150.216 596.62 150.341 596.445C150.398 596.381 150.07 595.951 149.349 595.469C148.633 594.988 147.498 594.509 146.172 594.376C144.845 594.247 143.638 594.495 142.842 594.827C142.041 595.157 141.634 595.515 141.678 595.589Z" fill="white" />
                                <path d="M146.16 593.268C146.202 593.271 146.303 592.839 146.283 592.041C146.262 591.249 146.108 590.077 145.514 588.76C145.2 588.133 144.884 587.335 144.006 586.848C143.568 586.603 142.891 586.644 142.479 587.049C142.07 587.443 141.915 587.968 141.87 588.483C141.771 590.548 143.414 592.657 145.715 593.101C148.028 593.507 150.224 592.312 151.26 590.591C151.492 590.143 151.668 589.585 151.451 589.02C151.239 588.451 150.592 588.188 150.122 588.237C149.147 588.32 148.503 588.837 147.91 589.213C146.732 590.041 145.978 590.944 145.53 591.596C145.08 592.252 144.923 592.667 144.959 592.687C145.067 592.779 145.883 591.143 148.191 589.633C148.77 589.289 149.442 588.851 150.139 588.831C150.48 588.819 150.763 588.972 150.866 589.253C150.974 589.523 150.879 589.927 150.68 590.277C149.807 591.685 147.798 592.772 145.848 592.399C143.906 592.044 142.464 590.188 142.527 588.525C142.548 588.125 142.68 587.731 142.91 587.507C143.135 587.287 143.459 587.243 143.751 587.384C144.367 587.679 144.747 588.388 145.058 588.979C146.274 591.452 146.014 593.292 146.16 593.268Z" fill="white" />
                                <path d="M241.118 349.837C241.118 349.837 245.077 365.166 243.641 383.842C243.085 391.069 218.7 590.987 218.7 590.987H185.774L195.029 403.091L192.333 403.677C192.333 403.677 174.36 483.814 172.893 496.789C171.574 508.451 156.417 593.178 156.417 593.178L126.313 593.523L135.926 481.454L147.116 373.921L151.325 342.619L241.118 349.837Z" fill="#1A2E35" />
                                <path d="M195.903 390.588C195.89 390.605 195.961 390.681 196.117 390.813C196.278 390.932 196.539 391.094 196.919 391.192C197.663 391.405 198.906 391.296 200.042 390.453C201.226 389.622 201.934 387.968 202.174 386.198C202.41 384.408 202.445 382.485 202.578 380.449C202.799 376.382 202.965 372.7 203.051 370.032C203.138 367.364 203.147 365.712 203.059 365.708C202.971 365.702 202.802 367.346 202.598 370.006C202.395 372.669 202.159 376.348 201.938 380.414C201.806 382.44 201.783 384.402 201.589 386.116C201.387 387.82 200.775 389.32 199.765 390.094C198.771 390.9 197.662 391.07 196.971 390.948C196.259 390.836 195.939 390.529 195.903 390.588Z" fill="#375A64" />
                                <path d="M147.466 371.257C147.455 371.297 147.781 371.426 148.389 371.589C148.997 371.754 149.894 371.93 151.019 372.032C153.258 372.244 156.47 372.033 159.698 370.736C162.929 369.438 165.394 367.369 166.863 365.666C167.606 364.814 168.133 364.066 168.458 363.528C168.783 362.989 168.929 362.67 168.894 362.649C168.801 362.588 168.067 363.769 166.53 365.358C165.009 366.946 162.581 368.888 159.459 370.141C156.339 371.394 153.245 371.672 151.047 371.578C148.838 371.494 147.49 371.149 147.466 371.257Z" fill="#375A64" />
                                <path d="M230.069 362.894C230.002 362.9 230.057 364.188 230.569 366.199C231.074 368.206 232.126 370.914 233.88 373.563C235.644 376.208 237.733 378.227 239.388 379.47C241.044 380.72 242.209 381.27 242.241 381.211C242.39 381.042 237.845 378.45 234.414 373.208C230.913 368.018 230.282 362.822 230.069 362.894Z" fill="#375A64" />
                                <path d="M224.845 149.609C227.82 149.797 230.744 147.471 231.229 144.529C231.716 141.588 229.695 138.445 226.817 137.665C228.561 135.687 228.865 132.572 227.537 130.293C226.208 128.015 223.347 126.745 220.767 127.288C220.527 124.695 218.847 122.281 216.499 121.156C214.151 120.031 211.217 120.232 209.045 121.669C206.048 119.352 201.412 119.495 198.563 121.991C196.013 121.652 193.327 123.137 192.257 125.476C191.187 127.815 191.82 130.817 193.744 132.524" fill="#1A2E35" />
                                <path d="M197.56 128.054L198.894 127.987C212.33 127.319 224.026 137.079 225.77 150.418C227.394 162.823 229.028 176.55 229.278 183.235C229.794 197.08 216.062 199.919 216.062 199.919L218.058 216.483L184.428 217.111L178.462 156.974C176.51 142.668 183.206 129.61 197.56 128.054Z" fill="#C17560" />
                                <path d="M216.176 199.893C216.176 199.893 207.367 200.864 197.784 195.488C197.784 195.488 202.758 205.486 216.5 203.554L216.176 199.893Z" fill="#7C4236" />
                                <path d="M222.85 163.634C222.94 164.675 222.13 165.61 221.045 165.722C219.96 165.834 219.008 165.083 218.92 164.042C218.83 163 219.638 162.066 220.724 161.952C221.809 161.84 222.762 162.592 222.85 163.634Z" fill="#1A2E35" />
                                <path d="M223.133 157.334C222.901 157.604 221.349 156.57 219.223 156.682C217.098 156.762 215.591 157.934 215.349 157.685C215.229 157.576 215.455 157.097 216.11 156.569C216.754 156.044 217.871 155.508 219.197 155.448C220.521 155.389 221.659 155.821 222.325 156.289C223.003 156.758 223.247 157.213 223.133 157.334Z" fill="#1A2E35" />
                                <path d="M204.057 164.467C204.146 165.508 203.337 166.442 202.25 166.555C201.166 166.667 200.214 165.916 200.125 164.875C200.037 163.834 200.846 162.898 201.93 162.786C203.015 162.672 203.969 163.426 204.057 164.467Z" fill="#1A2E35" />
                                <path d="M203.236 158.769C203.004 159.038 201.45 158.006 199.326 158.117C197.202 158.198 195.695 159.369 195.451 159.12C195.332 159.01 195.556 158.533 196.214 158.005C196.858 157.478 197.975 156.944 199.299 156.882C200.624 156.824 201.763 157.257 202.428 157.724C203.104 158.193 203.351 158.648 203.236 158.769Z" fill="#1A2E35" />
                                <path d="M210.753 174.154C210.737 174.034 212.048 173.739 214.175 173.359C214.716 173.277 215.224 173.143 215.297 172.767C215.405 172.369 215.149 171.795 214.855 171.177C214.279 169.889 213.676 168.538 213.044 167.122C210.521 161.346 208.668 156.587 208.901 156.487C209.135 156.389 211.368 160.989 213.889 166.763C214.499 168.189 215.081 169.546 215.635 170.846C215.871 171.453 216.259 172.135 216.023 172.963C215.896 173.375 215.512 173.69 215.169 173.801C214.827 173.925 214.521 173.946 214.253 173.975C212.104 174.198 210.768 174.274 210.753 174.154Z" fill="#1A2E35" />
                                <path d="M203.691 150.497C203.438 151.05 201.586 150.555 199.339 150.595C197.091 150.583 195.222 151.099 194.99 150.55C194.887 150.287 195.262 149.783 196.048 149.311C196.83 148.841 198.032 148.446 199.38 148.437C200.727 148.43 201.915 148.809 202.678 149.271C203.447 149.734 203.803 150.233 203.691 150.497Z" fill="#1A2E35" />
                                <path d="M222.8 148.562C222.376 149.067 220.596 148.652 218.486 148.734C216.372 148.754 214.604 149.252 214.168 148.767C213.976 148.531 214.232 148.034 214.991 147.538C215.738 147.044 217.006 146.607 218.458 146.572C219.91 146.539 221.188 146.914 221.947 147.372C222.716 147.831 222.987 148.316 222.8 148.562Z" fill="#1A2E35" />
                                <path d="M224.125 144.138C224.125 144.138 220.045 135.655 215.766 133.841C210.588 131.645 208.686 137.303 203.798 136.195C198.912 135.089 193.966 132.979 189.225 136.95C184.036 141.297 186.704 144.033 186.677 150.187C186.562 175.143 182.368 182.409 180.492 170.749C180.286 169.471 176.672 168.627 175.873 163.227C174.838 156.225 174.144 147.694 175.466 142.622C176.581 138.347 178.836 135.321 182.98 131.901C189.521 126.502 198.846 125.93 205.216 126.253C211.584 126.575 224.164 133.261 224.125 144.138Z" fill="#1A2E35" />
                                <path d="M181.355 170.329C181.161 168.198 179.237 166.603 177.12 166.911C174.552 167.285 171.753 168.893 172.188 174.215C172.96 183.661 182.283 180.937 182.277 180.665C182.273 180.479 181.713 174.278 181.355 170.329Z" fill="#C17560" />
                                <path d="M179.932 177.279C179.888 177.253 179.776 177.409 179.509 177.558C179.248 177.705 178.789 177.829 178.281 177.683C177.253 177.399 176.284 175.885 176.099 174.186C176.005 173.329 176.117 172.495 176.368 171.793C176.599 171.078 177.007 170.559 177.501 170.429C177.992 170.273 178.372 170.543 178.509 170.801C178.657 171.054 178.613 171.247 178.664 171.259C178.692 171.282 178.853 171.085 178.747 170.701C178.692 170.517 178.563 170.303 178.327 170.139C178.084 169.974 177.743 169.907 177.396 169.974C176.672 170.083 176.072 170.807 175.797 171.578C175.484 172.355 175.337 173.294 175.443 174.257C175.659 176.155 176.779 177.857 178.176 178.139C178.855 178.258 179.392 178.013 179.66 177.766C179.933 177.509 179.965 177.294 179.932 177.279Z" fill="#7C4236" />
                                <path d="M180.629 151.993C181.898 152.77 183.24 153.57 184.728 153.643C186.214 153.717 187.865 152.782 188.042 151.303C188.121 150.639 187.922 149.883 188.33 149.353C188.817 148.721 189.78 148.863 190.576 148.907C193.341 149.063 196.402 145.866 196.97 143.155C197.724 144.171 199.276 144.413 200.304 143.675C201.33 142.938 201.698 142.529 202.482 141.535C203.265 140.543 204.389 139.634 205.648 139.75C206.352 139.815 207.028 140.198 207.728 140.101C208.965 139.929 209.498 138.445 209.625 137.202C209.752 135.959 209.826 134.514 210.845 133.791C211.789 133.122 213.072 133.418 214.222 133.53C215.374 133.642 216.838 133.299 217.076 132.167C217.2 131.573 216.917 130.969 216.566 130.473C214.978 128.227 211.716 127.357 209.22 128.513C208.14 125.433 205.096 123.146 201.837 122.965C198.577 122.785 195.3 124.721 193.884 127.662C191.794 125.947 188.852 125.33 186.25 126.061C183.648 126.793 181.457 128.851 180.566 131.403C178.234 130.913 175.657 131.933 174.292 133.885C172.929 135.838 172.858 138.61 174.121 140.63C172.469 141.686 171.097 143.447 171.16 145.407C171.221 147.367 173.225 149.223 175.089 148.614C174.401 150.177 175.125 152.214 176.645 152.993C178.164 153.771 180.241 153.169 181.108 151.697" fill="#1A2E35" />
                                <path d="M210.061 131.261C210.069 131.261 210.07 131.32 210.068 131.435C210.061 131.549 210.062 131.721 210.033 131.943C209.966 132.384 209.824 133.04 209.436 133.8C209.045 134.548 208.425 135.423 207.45 136.14C206.496 136.864 205.165 137.445 203.63 137.437L203.78 137.22C204.114 138.015 204.081 138.989 203.72 139.841C203.38 140.705 202.816 141.485 202.217 142.248C201.908 142.615 201.646 143.041 201.212 143.385C200.789 143.717 200.274 143.923 199.741 144.016C198.681 144.205 197.46 143.936 196.641 143.077L196.99 142.959C196.844 144.851 195.868 146.785 194.225 148.016C193.358 148.711 192.265 149.164 191.169 149.188C190.074 149.232 189.04 148.961 188.074 148.669L188.322 148.545C187.872 149.747 187.141 150.788 186.229 151.576C185.334 152.361 184.114 152.857 182.978 152.637C180.722 152.276 179.149 150.492 178.764 148.759L178.982 148.848C177.905 149.507 176.718 149.624 175.756 149.487C174.78 149.359 174 148.976 173.438 148.588C172.874 148.193 172.533 147.776 172.325 147.485C172.132 147.183 172.05 147.013 172.06 147.008C172.106 146.967 172.409 147.711 173.528 148.456C174.085 148.811 174.846 149.157 175.784 149.259C176.71 149.371 177.832 149.232 178.826 148.603L178.998 148.493L179.046 148.692C179.428 150.308 180.94 151.971 183.03 152.281C184.06 152.469 185.132 152.028 185.98 151.284C186.83 150.543 187.528 149.539 187.945 148.409L188.01 148.231L188.193 148.285C189.142 148.571 190.14 148.823 191.152 148.78C192.166 148.751 193.146 148.348 193.973 147.689C195.525 146.524 196.441 144.715 196.589 142.923L196.626 142.472L196.938 142.804C197.629 143.54 198.721 143.801 199.674 143.633C200.153 143.551 200.61 143.371 200.98 143.085C201.338 142.811 201.614 142.388 201.926 142.019C202.526 141.268 203.074 140.519 203.4 139.713C203.744 138.917 203.774 138.06 203.488 137.34L203.398 137.117L203.637 137.121C205.084 137.147 206.366 136.617 207.3 135.936C208.254 135.263 208.876 134.432 209.28 133.716C210.07 132.243 209.992 131.243 210.061 131.261Z" fill="#375A64" />
                                <path d="M210.651 181.452C210.58 181.101 208.277 181.704 206.124 180.164C203.968 178.629 203.58 176.108 203.253 176.175C203.1 176.18 202.949 176.839 203.195 177.881C203.427 178.907 204.144 180.304 205.461 181.247C206.78 182.184 208.253 182.349 209.217 182.179C210.204 182.013 210.705 181.607 210.651 181.452Z" fill="#1A2E35" />
                                <path d="M285.676 315.071H291.529C292.976 312.879 294.443 312.465 297.488 310.665C305.243 306.078 315.58 302.373 317.783 304.137C319.985 305.901 317.275 307.842 316.427 308.371C315.58 308.899 308.124 311.803 308.463 314.233C308.801 316.662 333.141 321.042 334.22 323.365C335.671 326.489 333.088 327.763 322.752 325.999L319.816 325.482C319.816 325.482 321.511 327.951 319.647 329.891C317.783 331.833 316.257 330.95 316.257 330.95C316.257 330.95 316.427 333.243 314.055 334.302C311.683 335.361 310.672 334.302 310.672 334.302C310.672 334.302 311.233 340.127 306.091 339.241C301.456 338.442 298.284 338.442 293.716 337.491C291.659 337.062 289.893 336.062 289.893 336.062L284.101 333.851C283.155 329.686 285.232 316.197 285.676 315.071Z" fill="#C17560" />
                                <path d="M316.258 330.95C316.174 331.008 315.454 329.802 313.521 328.722C312.582 328.153 311.378 327.593 310.142 326.724C309.547 326.293 308.863 325.798 308.429 325C308.222 324.606 308.083 324.148 308.107 323.658C308.125 323.168 308.349 322.673 308.69 322.321C309.375 321.596 310.381 321.39 311.218 321.448C312.074 321.501 312.825 321.712 313.546 321.901C314.985 322.3 316.23 322.845 317.206 323.414C318.186 323.98 318.895 324.566 319.349 325.002C319.803 325.438 320.003 325.726 319.977 325.753C319.897 325.844 318.933 324.829 316.979 323.829C316.007 323.332 314.79 322.85 313.386 322.496C312.686 322.326 311.931 322.137 311.187 322.102C310.447 322.061 309.679 322.248 309.177 322.78C308.662 323.292 308.673 324.068 309.009 324.696C309.337 325.324 309.927 325.794 310.505 326.226C311.657 327.078 312.842 327.689 313.774 328.322C314.715 328.941 315.398 329.584 315.783 330.089C316.167 330.598 316.289 330.933 316.258 330.95Z" fill="#7C4236" />
                                <path d="M306.515 315.837C306.591 315.854 306.493 316.726 306.015 318.054C305.543 319.381 304.627 321.14 303.218 322.784C301.802 324.422 300.197 325.589 298.957 326.253C297.713 326.922 296.866 327.149 296.838 327.077C296.733 326.889 299.991 325.554 302.71 322.348C305.477 319.182 306.314 315.761 306.515 315.837Z" fill="#7C4236" />
                                <path d="M310.672 334.302C310.629 334.381 309.888 334.073 308.799 333.382C308.256 333.033 307.623 332.595 306.971 332.027C306.324 331.479 305.617 330.691 305.316 329.675C304.996 328.682 305.059 327.575 305.567 326.761C306.069 325.933 306.927 325.561 307.597 325.485C309.024 325.335 309.68 326.119 309.603 326.139C309.557 326.246 308.86 325.701 307.676 325.95C307.109 326.073 306.455 326.421 306.097 327.074C305.728 327.722 305.68 328.619 305.955 329.475C306.217 330.346 306.78 331.009 307.387 331.571C307.984 332.137 308.575 332.605 309.071 332.995C310.069 333.771 310.719 334.219 310.672 334.302Z" fill="#7C4236" />
                                <path d="M307.166 338.442C307.108 338.514 306.515 338.169 305.602 337.55C304.723 336.954 303.3 336.068 302.635 334.328C302.324 333.466 302.339 332.538 302.655 331.79C302.956 331.029 303.61 330.53 304.182 330.365C304.762 330.18 305.274 330.252 305.575 330.385C305.882 330.518 305.998 330.668 305.975 330.7C305.939 330.8 305.288 330.394 304.348 330.806C303.892 331.005 303.442 331.404 303.227 332.017C303.004 332.618 303.006 333.385 303.264 334.1C303.807 335.568 305.074 336.489 305.903 337.186C306.735 337.894 307.223 338.37 307.166 338.442Z" fill="#7C4236" />
                                <path d="M264.52 305.991L261.984 304.288L253.006 241.336C252.221 235.828 243.857 221.389 227.405 215.843L230.729 251.469L244.445 327.642C244.445 327.642 249.197 330.087 257.966 333.171C266.736 336.256 284.266 339.604 284.266 339.604L289.916 313.483L264.52 305.991Z" fill="#E1E1E1" />
                                <path d="M154.878 219.796L179.148 209.728L182.021 198.67L211.952 212.819L216.962 204.823L220.846 213.699L227.405 215.843L242.734 242.804L242.688 300.255L245.789 349.811L242.465 357.634L215.004 361.686C212.001 362.128 208.95 362.132 205.946 361.695L150.205 352.583L148.769 336.211L154.722 291.082L154.878 219.796Z" fill="#E1E1E1" />
                                <path d="M210.128 272.595C209.648 259.965 211.639 227.745 211.639 227.745L215.802 227.075C215.802 227.075 223.576 258.396 226.479 296.777C227.654 312.309 227.654 330.301 227.654 330.301L219.294 348.244L210.054 330.419C210.054 330.419 210.711 287.941 210.128 272.595Z" fill="currentColor" />
                                <path d="M210.557 216.956L214.042 215.596L217.378 220.027L216.23 228.095L212.068 228.764L207.958 223.681L210.557 216.956Z" fill="currentColor" />
                                <path d="M155.532 219.797C155.532 219.797 139.633 223.917 135.093 239.583C133.947 243.539 127.923 302.139 126.996 309.735C126.071 317.333 123.311 328.546 132.579 336.297C138.311 341.093 186.295 346.079 186.295 346.079L196.035 322.934L158.103 308.158L163.915 257.603L155.532 219.797Z" fill="#E1E1E1" />
                                <path d="M230.316 347.019L205.175 321.805C204.583 321.21 204.566 320.254 205.135 319.638C205.739 318.986 206.763 318.967 207.391 319.595L232.531 344.81C233.124 345.405 233.142 346.361 232.572 346.978C231.968 347.63 230.944 347.649 230.316 347.019Z" fill="#1A2E35" />
                                <path d="M194.855 322.831C195.019 322.952 205.923 323.354 209.291 324.079C212.659 324.804 220.651 326.82 223.207 328.634C225.762 330.447 230.913 337.024 229.617 337.984C228.321 338.943 226.737 338.767 225.901 337.984C225.195 337.324 218.931 332.543 218.931 332.543C218.931 332.543 215.173 331.283 215.055 332.25C214.939 333.218 224.39 338.347 222.881 340.643C221.37 342.94 217.306 342.336 217.306 342.336C217.306 342.336 218.467 346.015 217.189 347.863C215.911 349.711 212.717 350.679 212.717 350.679C212.717 350.679 213.755 353.814 210.651 355.071C208.401 355.982 205.009 353.702 205.009 353.702L190.475 346.326L186.294 346.079L194.855 322.831Z" fill="#C17560" />
                                <path d="M139.384 339.058C139.385 339.049 139.461 339.054 139.61 339.073C139.789 339.097 140.004 339.127 140.27 339.165C140.894 339.265 141.745 339.401 142.829 339.574C145.112 339.962 148.368 340.517 152.468 341.214C160.778 342.674 172.5 344.734 186.35 347.169L185.996 347.375C188.613 339.814 191.496 331.481 194.529 322.718L194.73 323.153C192.486 322.282 190.1 321.355 187.688 320.418C176.556 316.081 165.986 311.963 156.541 308.283L156.305 308.191L156.342 307.942C158.43 293.989 160.2 282.162 161.456 273.773C162.097 269.641 162.606 266.357 162.964 264.055C163.144 262.965 163.285 262.11 163.389 261.482C163.438 261.215 163.478 261.002 163.51 260.822C163.541 260.675 163.561 260.601 163.569 260.602C163.578 260.602 163.576 260.679 163.562 260.83C163.544 261.011 163.52 261.227 163.492 261.497C163.412 262.127 163.302 262.989 163.164 264.085C162.849 266.391 162.398 269.685 161.832 273.829C160.638 282.226 158.954 294.065 156.969 308.033L156.77 307.693C166.222 311.355 176.8 315.454 187.94 319.771C190.352 320.709 192.737 321.637 194.981 322.509L195.292 322.63L195.182 322.945C192.129 331.701 189.226 340.027 186.593 347.582L186.504 347.838L186.238 347.79C172.406 345.254 160.7 343.109 152.401 341.587C148.314 340.815 145.068 340.202 142.794 339.773C141.717 339.558 140.872 339.39 140.252 339.266C139.989 339.209 139.778 339.162 139.601 339.123C139.456 339.089 139.382 339.066 139.384 339.058Z" fill="#1A2E35" />
                                <path d="M156.5 308.077C156.536 308.297 152.957 308.557 149.18 310.625C145.375 312.641 143.188 315.487 143.024 315.336C142.868 315.276 144.888 312.121 148.851 310.013C152.791 307.864 156.536 307.913 156.5 308.077Z" fill="#1A2E35" />
                                <path d="M162.409 244.332C162.292 244.32 162.399 243.077 162.275 241.089C162.156 239.104 161.713 236.37 160.633 233.536C159.543 230.706 158.045 228.376 156.807 226.821C155.569 225.258 154.659 224.406 154.739 224.318C154.784 224.261 155.82 224.99 157.183 226.505C158.545 228.012 160.159 230.373 161.281 233.288C162.395 236.205 162.772 239.04 162.765 241.072C162.765 243.109 162.481 244.342 162.409 244.332Z" fill="#1A2E35" />
                                <path d="M243.955 246.343C244.147 246.343 244.302 266.34 244.302 291.003C244.302 315.675 244.147 335.668 243.955 335.668C243.763 335.668 243.608 315.675 243.608 291.003C243.608 266.34 243.763 246.343 243.955 246.343Z" fill="#1A2E35" />
                                <path d="M220.846 213.7C220.883 213.72 220.595 214.332 220.033 215.436C219.407 216.632 218.582 218.209 217.574 220.136L217.414 220.442L217.199 220.162C215.658 218.154 213.798 215.729 211.706 213.005L212.238 212.932C210.865 216.469 209.305 220.489 207.649 224.757L207.509 225.12L207.163 224.937C206.75 224.718 206.306 224.484 205.859 224.248C198.437 220.322 191.737 216.734 186.903 214.108C184.569 212.822 182.642 211.761 181.195 210.965C179.855 210.209 179.125 209.77 179.147 209.728C179.17 209.686 179.943 210.044 181.322 210.725C182.795 211.473 184.755 212.468 187.133 213.673C192.025 216.19 198.762 219.709 206.183 223.634C206.63 223.87 207.075 224.105 207.487 224.324L207.003 224.504C208.686 220.246 210.271 216.236 211.666 212.708L211.87 212.193L212.197 212.636C214.238 215.398 216.054 217.857 217.557 219.893L217.182 219.92C218.263 218.034 219.149 216.49 219.819 215.32C220.449 214.252 220.809 213.68 220.846 213.7Z" fill="#1A2E35" />
                            </g>
                            <defs>
                                <clipPath id="clip0_24_594">
                                    <rect width="1000" height="666.667" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:pr-10">
                    <div class="mb-6">
                        <h2 class="mb-4 text-center text-2xl font-bold md:mb-6 lg:text-3xl lg:text-left">Marketing &
                            Promotion
                        </h2>

                        <p class="mx-auto max-w-screen-md text-center sm:px-10 md:text-lg lg:text-left lg:pl-0">
                            Lorem ipsum dolor sit
                            amet
                            consectetur
                            adipisicing elit. Quo culpa magni neque ex expedita hic quae est, illo vel doloremque
                            suscipit</p>
                    </div>

                    <div class="grid gap-2 sm:grid-cols-2 md:gap-4 lg:grid-cols-1 lg:-ml-4">
                        <!-- feature - start -->
                        <div class="flex rounded-lg items-center">
                            <div class="flex items-center p-2 text-primary md:p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <div class="p-2 pl-0">
                                <p class="leading-5">Our creative team will work with you directly to produce a
                                    bespoke campaign strategy for your release.</p>
                            </div>
                        </div>
                        <!-- feature - end -->
                        <!-- feature - start -->
                        <div class="flex rounded-lg items-center">
                            <div class="flex items-center p-2 text-primary md:p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <div class="p-2 pl-0">
                                <p class="leading-5">We can pitch your music to the curators at Spotify, Apple
                                    Music, Boomplay, JioSaavn and more for playlisting.</p>
                            </div>
                        </div>
                        <!-- feature - end -->
                        <!-- feature - start -->
                        <div class="flex rounded-lg items-center">
                            <div class="flex items-center p-2 text-primary md:p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <div class="p-2 pl-0">
                                <p class="leading-5">Our radio plugging services reach over 1000+ contacts and won’t
                                    break the bank.</p>
                            </div>
                        </div>
                        <!-- feature - end -->
                        <!-- feature - start -->
                        <div class="flex rounded-lg items-center">
                            <div class="flex items-center p-2 text-primary md:p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <div class="p-2 pl-0">
                                <p class="leading-5">Our radio plugging services reach over 1000+ contacts and won’t
                                    break the bank.</p>
                            </div>
                        </div>
                        <!-- feature - end -->
                    </div>
                    <div class="text-center py-5 pb-10 lg:text-left lg:pb-18 lg:pt-10">
                        <a href="<?= get_permalink(463); ?>" class="btn btn-primary px-14">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Testimonials -->
<section>
    <div class="bg-secBgBG py-10 pb-14 lg:py-14 xl:py-24">
        <div class="container">
            <div>
                <div>
                    <h2 class="text-[2rem] font-nexaBold font-black text-center capitalize leading-10 mb-2 md:mb-6 xl:text-[42px] lg:text-[32px] md:text-[36px]">
                        What our client <span class="text-secondary">say</span>
                        <br>about us
                    </h2>
                </div>
                <div class="relative">
                    <div class="swiper testimonialSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full bg-gray-3 p-8 rounded">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim
                                            brunch
                                            everyday carry neutra before they sold out fixie 90's microdosing. Tacos
                                            pinterest fanny pack venmo, post-ironic heirloom try-hard pabst
                                            authentic
                                            iceland.</p>
                                        <a class="inline-flex items-center">
                                            <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                            <span class="flex-grow flex flex-col pl-4">
                                                <span class="title-font font-medium text-gray-900">Holden
                                                    Caulfield</span>
                                                <span class="text-gray-500 text-sm">UI DEVELOPER</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full bg-gray-3 p-8 rounded">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim
                                            brunch
                                            everyday carry neutra before they sold out fixie 90's microdosing. Tacos
                                            pinterest fanny pack venmo, post-ironic heirloom try-hard pabst
                                            authentic
                                            iceland.</p>
                                        <a class="inline-flex items-center">
                                            <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                            <span class="flex-grow flex flex-col pl-4">
                                                <span class="title-font font-medium text-gray-900">Holden
                                                    Caulfield</span>
                                                <span class="text-gray-500 text-sm">UI DEVELOPER</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full bg-gray-3 p-8 rounded">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim
                                            brunch
                                            everyday carry neutra before they sold out fixie 90's microdosing. Tacos
                                            pinterest fanny pack venmo, post-ironic heirloom try-hard pabst
                                            authentic
                                            iceland.</p>
                                        <a class="inline-flex items-center">
                                            <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                            <span class="flex-grow flex flex-col pl-4">
                                                <span class="title-font font-medium text-gray-900">Holden
                                                    Caulfield</span>
                                                <span class="text-gray-500 text-sm">UI DEVELOPER</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full lg:p-4">
                                    <div class="h-full bg-gray-3 p-8 rounded">
                                        <div class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim
                                            brunch
                                            everyday carry neutra before they sold out fixie 90's microdosing. Tacos
                                            pinterest fanny pack venmo, post-ironic heirloom try-hard pabst
                                            authentic
                                            iceland.</p>
                                        <a class="inline-flex items-center">
                                            <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                            <span class="flex-grow flex flex-col pl-4">
                                                <span class="title-font font-medium text-gray-900">Holden
                                                    Caulfield</span>
                                                <span class="text-gray-500 text-sm">UI DEVELOPER</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="swiper-pagination testimonialSwiperPagination  !-bottom-8 lg:!-bottom-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ's -->
<section>
    <div class="py-10 pt-24 bg-white xl:pt-28">
        <div class="container">
            <div>
                <!-- text - start -->
                <div class="mb-7 md:mb-16 xl:mb-12">
                    <h2 class="text-[2rem] font-nexaBold font-black text-center capitalize leading-10 mb-2 md:mb-6 xl:text-[42px] lg:text-[32px] md:text-[36px]">
                        FAQ's</h2>


                    <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">Lorem ipsum dolor
                        sit amet
                        consectetur adipisicing elit.</p>
                </div>
                <!-- text - end -->
                <div class="accordion-group accordion-group-hover">
                    <div class="accordion">
                        <input type="checkbox" id="toggle-9" class="accordion-toggle" checked />
                        <label for="toggle-9" class="accordion-title relative bg-white !pr-12 !pl-2  lg:!pr-10 ">
                            <span class="text-lg lg:text-xl">Pay once. Your music in stores forever.</span>
                            <span class="text-sm text-content3 font-normal">With Revoke you get truly unlimited
                                music
                                distribution.</span>
                            <span class="accordion-arrow w-[25px] h-[25px] text-black absolute top-[50%] right-3 -translate-y-[50%]">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg>
                            </span>
                        </label>
                        <div class="accordion-content text-content2">
                            <div class="min-h-0">With Revoke you get truly unlimited music distribution. You pay
                                a single
                                one-time fee to get your music online. With no annual fee to keep your songs in
                                the stores —
                                no matter which pricing plan you're on! Don't pay extra to leave a legacy.</div>
                        </div>
                    </div>
                    <div class="accordion">
                        <input type="checkbox" id="toggle-10" class="accordion-toggle" />
                        <label for="toggle-10" class="accordion-title relative bg-white !pr-12 !pl-2  lg:!pr-10 ">
                            <span class="text-lg lg:text-xl">Widest coverage on the market</span>
                            <span class="text-sm text-content3 font-normal">You keep 100% of your
                                copyrights</span>
                            <span class="accordion-arrow w-[25px] h-[25px] text-black absolute top-[50%] right-3 -translate-y-[50%]">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg>
                            </span>
                        </label>
                        <div class="accordion-content text-content2">
                            <div class="min-h-0">You keep 100% of your copyrights</div>
                        </div>
                    </div>
                    <div class="accordion">
                        <input type="checkbox" id="toggle-11" class="accordion-toggle" />
                        <label for="toggle-11" class="accordion-title relative bg-white !pr-12 !pl-2  lg:!pr-10 ">
                            <span class="text-lg lg:text-xl">Pay once. Your music in stores forever.</span>
                            <span class="text-sm text-content3 font-normal">With Revoke you get truly unlimited
                                music
                                distribution.</span>
                            <span class="accordion-arrow w-[25px] h-[25px] text-black absolute top-[50%] right-3 -translate-y-[50%]">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg>
                            </span>
                        </label>
                        <div class="accordion-content text-content2">
                            <div class="min-h-0">With Revoke you get truly unlimited music distribution. You pay
                                a single
                                one-time fee to get your music online. With no annual fee to keep your songs in
                                the stores —
                                no matter which pricing plan you're on! Don't pay extra to leave a legacy.</div>
                        </div>
                    </div>
                    <div class="accordion">
                        <input type="checkbox" id="toggle-12" class="accordion-toggle" />
                        <label for="toggle-12" class="accordion-title relative bg-white !pr-12 !pl-2  lg:!pr-10 ">
                            <span class="text-lg lg:text-xl">Pay once. Your music in stores forever.</span>
                            <span class="text-sm text-content3 font-normal">With Revoke you get truly unlimited
                                music
                                distribution.</span>
                            <span class="accordion-arrow w-[25px] h-[25px] text-black absolute top-[50%] right-3 -translate-y-[50%]">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg>
                            </span>
                        </label>
                        <div class="accordion-content text-content2">
                            <div class="min-h-0">With Revoke you get truly unlimited music distribution. You pay
                                a single
                                one-time fee to get your music online. With no annual fee to keep your songs in
                                the stores —
                                no matter which pricing plan you're on! Don't pay extra to leave a legacy.</div>
                        </div>
                    </div>
                    <div class="accordion">
                        <input type="checkbox" id="toggle-13" class="accordion-toggle" />
                        <label for="toggle-13" class="accordion-title relative bg-white !pr-12 !pl-2  lg:!pr-10 ">
                            <span class="text-lg lg:text-xl">Widest coverage on the market</span>
                            <span class="text-sm text-content3 font-normal">You keep 100% of your
                                copyrights</span>
                            <span class="accordion-arrow w-[25px] h-[25px] text-black absolute top-[50%] right-3 -translate-y-[50%]">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg>
                            </span>
                        </label>
                        <div class="accordion-content text-content2">
                            <div class="min-h-0">You keep 100% of your copyrights</div>
                        </div>
                    </div>
                    <div class="accordion">
                        <input type="checkbox" id="toggle-14" class="accordion-toggle" />
                        <label for="toggle-14" class="accordion-title relative bg-white !pr-12 !pl-2  lg:!pr-10 ">
                            <span class="text-lg lg:text-xl">Pay once. Your music in stores forever.</span>
                            <span class="text-sm text-content3 font-normal">With Revoke you get truly unlimited
                                music
                                distribution.</span>
                            <span class="accordion-arrow w-[25px] h-[25px] text-black absolute top-[50%] right-3 -translate-y-[50%]">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" height="100%" width="100%" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg>
                            </span>
                        </label>
                        <div class="accordion-content text-content2">
                            <div class="min-h-0">With Revoke you get truly unlimited music distribution. You pay
                                a single
                                one-time fee to get your music online. With no annual fee to keep your songs in
                                the stores —
                                no matter which pricing plan you're on! Don't pay extra to leave a legacy.</div>
                        </div>
                    </div>

                </div>
                <div class="text-center py-5 pb-10 lg:pb-18 lg:pt-10">
                    <a href="<?= get_permalink(465); ?>" class="btn btn-primary px-14">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
<script src="<?php bloginfo('template_directory'); ?>/js/three-page-home.min.js"></script>
<script>
    const particleWave = () => {
        const heroBanner = document.querySelector(".heroSec");
        let w = heroBanner.clientWidth;
        let h = heroBanner.clientHeight;
        const dpr = window.devicePixelRatio;

        const fov = 60;
        const fovRad = fov * (Math.PI / 180);
        const dist = h / 2 / Math.tan(fovRad);

        const clock = new THREE.Clock();
        const pointSize = 4 * dpr;

        const renderer = new THREE.WebGLRenderer();
        renderer.setSize(w, h);
        renderer.setClearColor(new THREE.Color("#fff"), 1.0);
        renderer.setPixelRatio(dpr);

        const container = document.getElementById("webgl-canvas");
        container.appendChild(renderer.domElement);

        const camera = new THREE.PerspectiveCamera(fov, w / h, 1, dist * 8);
        camera.position.x = 0;
        camera.position.y = 20;
        camera.position.z = 150;

        const scene = new THREE.Scene();

        // TODO: This fog isn't working for some reason
        const fogColor = "#f4f4f4"; // white
        const near = 1.8;
        const far = 2;
        scene.fog = new THREE.Fog(fogColor, near, far);
        scene.background = new THREE.Color(fogColor);

        const geo = new THREE.BufferGeometry();
        const positions = [];

        const width = 200 * (w / h);
        const depth = 100;
        const distance = 5;

        for (let x = 0; x < width; x += distance) {
            for (let z = 0; z < depth; z += distance) {
                positions.push(-width / 2 + x, -30, -depth / 2 + z);
            }
        }
        const positionAttribute = new THREE.Float32BufferAttribute(positions, 3);
        geo.setAttribute("position", positionAttribute);

        const mat = new THREE.ShaderMaterial({
            uniforms: {
                u_time: {
                    value: 0.0
                },
                color1: {
                    value: new THREE.Color("#66d0b6")
                },
                color2: {
                    value: new THREE.Color("#6a569c")
                },
                color3: {
                    value: new THREE.Color("#f16078")
                },
                color4: {
                    value: new THREE.Color("#6a569c")
                },
                color5: {
                    value: new THREE.Color("#66d0b6")
                },
                resolution: {
                    type: "v2",
                    value: new THREE.Vector2(w * dpr, h * dpr)
                },
                pointSize: {
                    value: pointSize
                }
            },
            vertexShader: `
        precision highp float;
        #define M_PI 3.1415926535897932384626433832795
        
        uniform float u_time;
        uniform float pointSize;
        
        void main() {
          vec3 p = position;
          p.y += (
             cos(p.x / M_PI * 8.0 + u_time * 1.5) * 15.0 +
             sin(p.z / M_PI * 8.0 + u_time * 1.5) * 15.0 + 
             60.0
           ) ;
          
          gl_PointSize = pointSize;
          gl_Position = projectionMatrix * modelViewMatrix * vec4(p, 1.0);
        }   
    
    `,
            fragmentShader: `
        precision highp float;
        
        uniform vec3 color1;
        uniform vec3 color2;
        uniform vec3 color3;
        uniform vec3 color4;
        uniform vec3 color5;
        uniform vec2 resolution;
        
        void main() {
          // create circles instead of squares
          if ( length( gl_PointCoord - vec2( 0.5, 0.5 ) ) > 0.475 ) discard;
          
          float x = gl_FragCoord.x;
          float step1 = 0.25;
          float step2 = 0.45;
          float step3 = 0.55;
          float step4 = 0.75;
          float step5 = 1.00;
          
          float mixValue = x / resolution.x;
          
          // create color stops using 'mix', and convert the progress through each 'step'
          // to a value between 0 and 1
          vec3 mixedColor;
          if(mixValue < step1) {
            mixedColor = mix(color1, color2, mixValue / step1);
          } else if (mixValue >= step1 && mixValue < step2) {
            mixedColor = mix(color2, color3, ((mixValue - step1) / (step2 - step1)));
          } else if (mixValue >= step2 && mixValue < step3) {
            mixedColor = color3;
          } else if (mixValue >= step3 && mixValue < step4) {
            mixedColor = mix(color3, color4, ((mixValue - step3) / (step4 - step3)));
          } else {
            mixedColor = mix(color4, color5, ((mixValue - step4) / (step5 - step4)));
          }
          
          gl_FragColor = vec4(mixedColor, 1.0);
        }
    `
        });

        const mesh = new THREE.Points(geo, mat);
        scene.add(mesh);

        function render() {
            const time = clock.getElapsedTime();
            mesh.material.uniforms.u_time.value = time;
            renderer.render(scene, camera);
            requestAnimationFrame(render);
        }
        render();

        function onWindowResize() {
            w = heroBanner.clientWidth;
            h = heroBanner.clientHeight;
            camera.aspect = w / h;
            camera.updateProjectionMatrix();
            renderer.setSize(w, h);
        }
        window.addEventListener("resize", onWindowResize);
    };

    window.addEventListener("load", particleWave);
</script>

<script>
    var swiper = new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".testimonialSwiperPagination",
            clickable: true,
        },
        loop: true,
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
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
</script>