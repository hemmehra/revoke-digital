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
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 127 123" fill="none">
												<path d="M69.0867 37.6929H22.4466L0.5 -0.000360039H47.1401L48.2333 1.86631L69.0867 37.6929Z" fill="url(#paint0_linear_63_4slll)"></path>
												<path d="M68.0468 47.7464L24.5801 122.226L2.28688 82.5198L2.22021 82.413L22.0202 47.7464H68.0468Z" fill="url(#paint1_linear_63_4slll)"></path>
												<path d="M118.234 122.093L83.2605 122.373L82.8871 121.72L60.0605 82.5199L59.6738 81.8397L77.2605 51.7199L95.1939 82.5199L99.7939 90.4264L118.234 122.093Z" fill="url(#paint2_linear_63_4slll)"></path>
												<mask id="mask0_63_4ll" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="58" y="-1" width="69" height="82">
													<path d="M126.247 41.4396V41.4532L125.967 41.9597L105.34 80.1597L58.6602 -0.000228882H102.287C103.033 1.27977 103.873 2.77316 104.847 4.45316C109.82 13.0665 117.647 26.5996 126.247 41.4396Z" fill="white"></path>
												</mask>
												<g mask="url(#mask0_63_4ll)">
													<path d="M126.247 41.4396V41.4532L125.967 41.9597L105.34 80.1597L58.6602 -0.000228882H102.287C103.033 1.27977 103.873 2.77316 104.847 4.45316C109.82 13.0665 117.647 26.5996 126.247 41.4396Z" fill="url(#paint3_linear_63_4slll)"></path>
												</g>
												<defs>
													<linearGradient id="paint0_linear_63_4slll" x1="0.5" y1="18.8529" x2="69.0857" y2="18.8529" gradientUnits="userSpaceOnUse">
														<stop stop-color="#C51605"></stop>
														<stop offset="0.994413" stop-color="#FF9843"></stop>
													</linearGradient>
													<linearGradient id="paint1_linear_63_4slll" x1="2.22021" y1="84.9863" x2="68.0448" y2="84.9863" gradientUnits="userSpaceOnUse">
														<stop stop-color="#C51605"></stop>
														<stop offset="0.994413" stop-color="#FF9843"></stop>
													</linearGradient>
													<linearGradient id="paint2_linear_63_4slll" x1="59.6738" y1="87.0398" x2="118.234" y2="87.0398" gradientUnits="userSpaceOnUse">
														<stop stop-color="#FF9843"></stop>
														<stop offset="0.994413" stop-color="#C51605"></stop>
													</linearGradient>
													<linearGradient id="paint3_linear_63_4slll" x1="58.6602" y1="40.0797" x2="126.24" y2="40.0797" gradientUnits="userSpaceOnUse">
														<stop stop-color="#FF9843"></stop>
														<stop offset="0.994413" stop-color="#C51605"></stop>
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