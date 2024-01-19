<?php

/** Template Name:Login */
get_header();
// include_once get_template_directory() . '/template-parts/content/content-page-header-banner.php';
?>
<div class="py-20">
    <div class="container">
        <div>
            <div>
                <form class="mx-auto flex w-full max-w-lg flex-col rounded-xl border border-border bg-backgroundSecondary p-4 sm:p-14" id="login-form">
                    <div class="alert alert-error mb-6 hidden" id="alert-error">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 4C12.96 4 4 12.96 4 24C4 35.04 12.96 44 24 44C35.04 44 44 35.04 44 24C44 12.96 35.04 4 24 4ZM24 26C22.9 26 22 25.1 22 24V16C22 14.9 22.9 14 24 14C25.1 14 26 14.9 26 16V24C26 25.1 25.1 26 24 26ZM26 34H22V30H26V34Z" fill="#E92C2C" />
                        </svg>
                        <div class="flex flex-col">
                            <span>invalid login credentials</span>
                        </div>
                    </div>
                    <div class="mt-5 text-center sm:mt-0">
                        <a href="/" class="mb-5 inline-flex items-center gap-2.5 text-2xl font-bold md:text-3xl" aria-label="logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 126 123" fill="none">
                                <path d="M68.5867 37.6931H21.9466L0 -0.000115898H46.6401L47.7333 1.86655L68.5867 37.6931Z" fill="url(#paint0_linear_4_243p)"></path>
                                <path d="M67.5468 47.7466L24.0801 122.227L1.78688 82.5201L1.72021 82.4133L21.5202 47.7466H67.5468Z" fill="url(#paint1_linear_4_243p)"></path>
                                <path d="M117.734 122.093L82.7605 122.373L82.3871 121.72L59.5605 82.5202L59.1738 81.84L76.7605 51.7202L94.6939 82.5202L99.2939 90.4267L117.734 122.093Z" fill="url(#paint2_linear_4_243p)"></path>
                                <mask id="mask0_4_243" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="58" y="0" width="68" height="81">
                                    <path d="M125.747 41.4399V41.4534L125.467 41.9599L104.84 80.1599L58.1602 1.20954e-05H101.787C102.533 1.28001 103.373 2.7734 104.347 4.4534C109.32 13.0667 117.147 26.5999 125.747 41.4399Z" fill="white"></path>
                                </mask>
                                <g mask="url(#mask0_4_243)">
                                    <path d="M125.747 41.4399V41.4534L125.467 41.9599L104.84 80.1599L58.1602 1.20954e-05H101.787C102.533 1.28001 103.373 2.7734 104.347 4.4534C109.32 13.0667 117.147 26.5999 125.747 41.4399Z" fill="url(#paint3_linear_4_243p)"></path>
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_4_243p" x1="0" y1="18.8532" x2="68.5857" y2="18.8532" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#86CF41"></stop>
                                        <stop offset="0.994413" stop-color="#50C064"></stop>
                                        <stop offset="1" stop-color="#50C064"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_4_243p" x1="1.72021" y1="84.9866" x2="67.5448" y2="84.9866" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#86CF41"></stop>
                                        <stop offset="0.994413" stop-color="#50C064"></stop>
                                        <stop offset="1" stop-color="#50C064"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_4_243p" x1="59.1738" y1="87.0401" x2="117.734" y2="87.0401" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#86CF41"></stop>
                                        <stop offset="0.994413" stop-color="#50C064"></stop>
                                        <stop offset="1" stop-color="#50C064"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_4_243p" x1="58.1602" y1="40.08" x2="125.74" y2="40.08" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#86CF41"></stop>
                                        <stop offset="0.994413" stop-color="#50C064"></stop>
                                        <stop offset="1" stop-color="#50C064"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <div class="flex flex-col items-center mb-8">
                        <h1 class="text-3xl font-semibold">Sign In</h1>
                        <p class="text-sm">Sign in to access your account</p>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label class="form-label">Email address</label>
                            <input placeholder="Type here" type="email" class="input max-w-full" required data-parsley-required-message="Please enter email address" data-parsley-type-message="Please enter valid email address" />
                        </div>
                        <div class="form-field">
                            <label class="form-label">
                                <span>Password</span>
                            </label>
                            <input placeholder="Type here" type="password" class="input max-w-full" autocomplete="on" required data-parsley-required-message="Please enter password" />
                        </div>
                        <div class="form-field">
                            <div class="form-control justify-between">
                                <div class="flex gap-2">
                                    <input type="checkbox" class="checkbox" id="remember" />
                                    <label for="remember">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-field pt-5">
                            <div class="form-control justify-between">
                                <button type="submit" class="loginSubmitBtn btn btn-primary flex-row-reverse gap-2 w-full">Sign in</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
<script src="<?php bloginfo('template_directory'); ?>/js/parsley.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('#login-form').parsley().on('field:validated', function() {
                var ok = $('.parsley-error').length === 0;
                $('.bs-callout-info').toggleClass('hidden', !ok);
                $('.bs-callout-warning').toggleClass('hidden', ok);
            })
            .on('form:submit', function() {
                var form_data = $('#login-form').serialize();
                $('.loginSubmitBtn').addClass('btn-loading');
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: ajaxurl,
                    data: {
                        action: "revoke_digital_login",
                        formData: form_data,
                    },
                    success: function(data) {
                        $('.loginSubmitBtn').removeClass('btn-loading');
                        $('#alert-error').css('display', 'flex');
                        $('html,body').animate({
                            scrollTop: 0
                        }, 0);

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('.loginSubmitBtn').removeClass('btn-loading');
                    }
                });

                return false; // Don't submit form for this demo
            });
    });
</script>