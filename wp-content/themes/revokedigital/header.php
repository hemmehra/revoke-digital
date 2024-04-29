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
	<link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.min.css">
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
			<div class="MainHeadSec shadow-[none]">
				<div class="<?php if(is_front_page()){ echo 'absolute'; }else{ echo 'relative'; } ?> z-[999] bg-transparent current:navbar-glass navbar py-[15px] px-0 transition-all ease-in shadow-[none] MainHeadSecInner" id="MainHeadSecInner">
					<div class="container">
						<div class="head-inner">
							<div class="flex">
								<div class="navbar-start lg:w-[30%]">
									<a href="/" class="navbar-item pl-0 sm:px-0">
										<span class="md:hidden text">
											<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 127 123" fill="none">
												<path d="M69.0867 37.6929H22.4466L0.5 -0.000360039H47.1401L48.2333 1.86631L69.0867 37.6929Z" fill="url(#paint0_linear_63_4sl)" />
												<path d="M68.0468 47.7464L24.5801 122.226L2.28688 82.5198L2.22021 82.413L22.0202 47.7464H68.0468Z" fill="url(#paint1_linear_63_4sl)" />
												<path d="M118.234 122.093L83.2605 122.373L82.8871 121.72L60.0605 82.5199L59.6738 81.8397L77.2605 51.7199L95.1939 82.5199L99.7939 90.4264L118.234 122.093Z" fill="url(#paint2_linear_63_4sl)" />
												<mask id="mask0_63_4" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="58" y="-1" width="69" height="82">
													<path d="M126.247 41.4396V41.4532L125.967 41.9597L105.34 80.1597L58.6602 -0.000228882H102.287C103.033 1.27977 103.873 2.77316 104.847 4.45316C109.82 13.0665 117.647 26.5996 126.247 41.4396Z" fill="white" />
												</mask>
												<g mask="url(#mask0_63_4)">
													<path d="M126.247 41.4396V41.4532L125.967 41.9597L105.34 80.1597L58.6602 -0.000228882H102.287C103.033 1.27977 103.873 2.77316 104.847 4.45316C109.82 13.0665 117.647 26.5996 126.247 41.4396Z" fill="url(#paint3_linear_63_4sl)" />
												</g>
												<defs>
													<linearGradient id="paint0_linear_63_4sl" x1="0.5" y1="18.8529" x2="69.0857" y2="18.8529" gradientUnits="userSpaceOnUse">
														<stop stop-color="#C51605" />
														<stop offset="0.994413" stop-color="#FF9843" />
													</linearGradient>
													<linearGradient id="paint1_linear_63_4sl" x1="2.22021" y1="84.9863" x2="68.0448" y2="84.9863" gradientUnits="userSpaceOnUse">
														<stop stop-color="#C51605" />
														<stop offset="0.994413" stop-color="#FF9843" />
													</linearGradient>
													<linearGradient id="paint2_linear_63_4sl" x1="59.6738" y1="87.0398" x2="118.234" y2="87.0398" gradientUnits="userSpaceOnUse">
														<stop stop-color="#FF9843" />
														<stop offset="0.994413" stop-color="#C51605" />
													</linearGradient>
													<linearGradient id="paint3_linear_63_4sl" x1="58.6602" y1="40.0797" x2="126.24" y2="40.0797" gradientUnits="userSpaceOnUse">
														<stop stop-color="#FF9843" />
														<stop offset="0.994413" stop-color="#C51605" />
													</linearGradient>
												</defs>
											</svg>
										</span>
										<span class="hidden text-white current:primary md:block">
											<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" id="eH89I1l4MF51" viewBox="0 0 1095 123" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
												<defs>
													<linearGradient id="eH89I1l4MF52-fill" x1="0" y1="18.8532" x2="68.5857" y2="18.8532" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
														<stop id="eH89I1l4MF52-fill-0" offset="0%" stop-color="#C51605" />
														<stop id="eH89I1l4MF52-fill-1" offset="99.4413%" stop-color="#FF9843" />
													</linearGradient>
													<linearGradient id="eH89I1l4MF53-fill" x1="1.72021" y1="84.9866" x2="67.5448" y2="84.9866" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
														<stop id="eH89I1l4MF53-fill-0" offset="0%" stop-color="#C51605" />
														<stop id="eH89I1l4MF53-fill-1" offset="100%" stop-color="#FF9843" />
													</linearGradient>
													<linearGradient id="eH89I1l4MF54-fill" x1="59.1738" y1="87.0401" x2="117.734" y2="87.0401" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
														<stop id="eH89I1l4MF54-fill-0" offset="0%" stop-color="#FF9843" />
														<stop id="eH89I1l4MF54-fill-1" offset="99.4413%" stop-color="#C51605" />
													</linearGradient>
													<linearGradient id="eH89I1l4MF55-fill" x1="58.1602" y1="40.08" x2="125.74" y2="40.08" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
														<stop id="eH89I1l4MF55-fill-0" offset="0%" stop-color="#FF9843" />
														<stop id="eH89I1l4MF55-fill-1" offset="99.4413%" stop-color="#C51605" />
													</linearGradient>
													<linearGradient id="eH89I1l4MF57-fill" x1="240.16" y1="26.5332" x2="300.243" y2="26.5332" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
														<stop id="eH89I1l4MF57-fill-0" offset="0%" stop-color="#FF9843" />
														<stop id="eH89I1l4MF57-fill-1" offset="99.4413%" stop-color="#C51605" />
													</linearGradient>
													<linearGradient id="eH89I1l4MF512-fill" x1="560.894" y1="26.5332" x2="620.976" y2="26.5332" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
														<stop id="eH89I1l4MF512-fill-0" offset="0%" stop-color="#FF9843" />
														<stop id="eH89I1l4MF512-fill-1" offset="100%" stop-color="#C51605" />
													</linearGradient>
												</defs>
												<path id="eH89I1l4MF52" d="M68.5867,37.6931h-46.6401L0,-0.000116h46.6401L47.7333,1.86655L68.5867,37.6931Z" transform="translate(-2.76011 0.000116)" fill="url(#eH89I1l4MF52-fill)" />
												<path id="eH89I1l4MF53" d="M67.5468,47.7466L24.0801,122.227L1.78688,82.5201l-.06667-.1068L21.5202,47.7466h46.0266Z" transform="translate(-1.72021 0.146)" fill="url(#eH89I1l4MF53-fill)" />
												<path id="eH89I1l4MF54" d="M117.734,122.093l-34.9735.28-.3734-.653L59.5605,82.5202l-.3867-.6802L76.7605,51.7202l17.9334,30.8l4.6,7.9065L117.734,122.093Z" transform="translate(-2.155603 2.813)" fill="url(#eH89I1l4MF54-fill)" />
												<path id="eH89I1l4MF55" d="M125.747,41.4399v.0135l-.28.5065-20.627,38.2L58.1602,0.000012h43.6268c.746,1.279998,1.586,2.773388,2.56,4.453388c4.973,8.6133,12.8,22.1465,21.4,36.9865Z" transform="translate(-1.9864 -0.000012)" fill="url(#eH89I1l4MF55-fill)" />
												<path d="M196.534,32.9598h-24.627v28.6935h24.627c9.68,0,15.507-5.3735,15.507-14.3469c0-8.8666-5.827-14.3466-15.507-14.3466Zm-7.933,41.1734h-16.574v27.8798h-13.653v-81.6532h38.267c17.506,0,28.933,10.7333,28.933,26.9466c0,13.5333-8.04,23.2136-21.107,26.0136l24.84,28.693h-17.026l-23.68-27.8798Z" fill="currentColor" />
												<path id="eH89I1l4MF57" d="M300.254,20.3598h-60.08v12.3602h60.08v-12.3602Z" opacity="1" fill="url(#eH89I1l4MF57-fill)" />
												<path d="M253.694,89.5332v-22.8666h44.573v-12.1334h-58.093v47.4798h60.773v-12.4798h-47.253Z" fill="currentColor" />
												<path d="M388.333,20.3598l-33.72,81.6532h-14.693L306.08,20.3598h14.707l13.76,33.9466l12.6,31.8401L373.64,20.3598h14.693Z" fill="currentColor" />
												<path d="M460.44,61.1867C460.44,43.3334,449,31.2,432.2,31.2c-16.906,0-28.346,12.1334-28.346,29.9867s11.44,29.9865,28.346,29.9865c16.8,0,28.24-12.1331,28.24-29.9865Zm-70.346,0C390.094,35.7601,407,18.6,432.2,18.6c25.094,0,42,17.1601,42,42.5867s-16.906,42.5863-42,42.5863c-25.2,0-42.106-17.1596-42.106-42.5863Z" fill="currentColor" />
												<path d="M536.041,102.013L500.814,65.3866v36.6264h-13.773v-81.6532h13.773v34.8799l32.547-34.8799h17.733L513.761,59.9064l40.826,42.1066h-18.546Z" fill="currentColor" />
												<path id="eH89I1l4MF512" d="M620.987,20.3598h-60.093v12.3602h60.093v-12.3602Z" transform="translate(0-1.513192)" opacity="1" fill="url(#eH89I1l4MF512-fill)" />
												<path d="M574.427,89.5332v-22.8666h44.573v-12.1334h-58.106v47.4798h60.786v-12.4798h-47.253Z" fill="currentColor" />
												<path d="M722.6,61.1866c0-17.8533-12.133-30.2135-29.52-30.2135h-19.013v60.4268h19.013c17.507,0,29.52-12.3599,29.52-30.2133Zm11.547,0c0,24.3867-16.68,40.8264-41.067,40.8264h-30.333v-81.6532h30.333c24.387,0,41.067,16.4402,41.067,40.8268Z" fill="currentColor" />
												<path d="M747.694,20.3598h11.306v81.6532h-11.306v-81.6532Z" fill="currentColor" />
												<path d="M847.2,56.6398v33.6c-9.093,9.0933-19.6,13.4132-32.546,13.4132-25.2,0-42-17.0397-42-42.4663c0-24.96,17.493-42.4667,42.693-42.4667c11.56,0,22.173,4.4399,30.107,12.4799l-7.347,7.5868c-5.84-5.9467-14.36-9.3334-22.76-9.3334-18.427,0-31.267,12.9467-31.267,31.7334c0,19.2533,12.134,31.7333,30.574,31.7333c8.626,0,15.626-2.3333,21.933-7.4667v-18.5469h-24.146v-10.2666h34.759Z" fill="currentColor" />
												<path d="M862.027,20.3598h11.32v81.6532h-11.32v-81.6532Z" fill="currentColor" />
												<path d="M949.52,30.9731h-27.413v71.0399h-11.2v-71.0399h-27.413v-10.6133h66.026v10.6133Z" fill="currentColor" />
												<path d="M967.96,73.6666h36.4l-18.2-41.5334-18.2,41.5334Zm41.07,10.5065h-45.736L955.48,102.013h-12.373l36.64-81.6532h12.827l36.636,81.6532h-12.37l-7.81-17.8399Z" fill="currentColor" />
												<path d="M1038.79,20.3598h11.3v71.0401h44.11v10.6131h-55.41v-81.6532Z" fill="currentColor" />
												<script>
													<![CDATA[
													! function(t, n) {
														"object" == typeof exports && "undefined" != typeof module ? module.exports = n() : "function" == typeof __SVGATOR_DEFINE__ && __SVGATOR_DEFINE__.amd ? __SVGATOR_DEFINE__(n) : ((t = "undefined" != typeof globalThis ? globalThis : t || self).__SVGATOR_PLAYER__ = t.__SVGATOR_PLAYER__ || {}, t.__SVGATOR_PLAYER__["5c7f360c"] = n())
													}(this, (function() {
														"use strict";

														function t(t, n) {
															var e = Object.keys(t);
															if (Object.getOwnPropertySymbols) {
																var r = Object.getOwnPropertySymbols(t);
																n && (r = r.filter((function(n) {
																	return Object.getOwnPropertyDescriptor(t, n).enumerable
																}))), e.push.apply(e, r)
															}
															return e
														}

														function n(n) {
															for (var e = 1; e < arguments.length; e++) {
																var r = null != arguments[e] ? arguments[e] : {};
																e % 2 ? t(Object(r), !0).forEach((function(t) {
																	u(n, t, r[t])
																})) : Object.getOwnPropertyDescriptors ? Object.defineProperties(n, Object.getOwnPropertyDescriptors(r)) : t(Object(r)).forEach((function(t) {
																	Object.defineProperty(n, t, Object.getOwnPropertyDescriptor(r, t))
																}))
															}
															return n
														}

														function e(t) {
															return (e = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
																return typeof t
															} : function(t) {
																return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
															})(t)
														}

														function r(t, n) {
															if (!(t instanceof n)) throw new TypeError("Cannot call a class as a function")
														}

														function i(t, n) {
															for (var e = 0; e < n.length; e++) {
																var r = n[e];
																r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
															}
														}

														function o(t, n, e) {
															return n && i(t.prototype, n), e && i(t, e), t
														}

														function u(t, n, e) {
															return n in t ? Object.defineProperty(t, n, {
																value: e,
																enumerable: !0,
																configurable: !0,
																writable: !0
															}) : t[n] = e, t
														}

														function a(t) {
															return (a = Object.setPrototypeOf ? Object.getPrototypeOf : function(t) {
																return t.__proto__ || Object.getPrototypeOf(t)
															})(t)
														}

														function l(t, n) {
															return (l = Object.setPrototypeOf || function(t, n) {
																return t.__proto__ = n, t
															})(t, n)
														}

														function s() {
															if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
															if (Reflect.construct.sham) return !1;
															if ("function" == typeof Proxy) return !0;
															try {
																return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function() {}))), !0
															} catch (t) {
																return !1
															}
														}

														function f(t, n, e) {
															return (f = s() ? Reflect.construct : function(t, n, e) {
																var r = [null];
																r.push.apply(r, n);
																var i = new(Function.bind.apply(t, r));
																return e && l(i, e.prototype), i
															}).apply(null, arguments)
														}

														function c(t, n) {
															if (n && ("object" == typeof n || "function" == typeof n)) return n;
															if (void 0 !== n) throw new TypeError("Derived constructors may only return object or undefined");
															return function(t) {
																if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
																return t
															}(t)
														}

														function h(t, n, e) {
															return (h = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function(t, n, e) {
																var r = function(t, n) {
																	for (; !Object.prototype.hasOwnProperty.call(t, n) && null !== (t = a(t)););
																	return t
																}(t, n);
																if (r) {
																	var i = Object.getOwnPropertyDescriptor(r, n);
																	return i.get ? i.get.call(e) : i.value
																}
															})(t, n, e || t)
														}

														function v(t) {
															return function(t) {
																if (Array.isArray(t)) return y(t)
															}(t) || function(t) {
																if ("undefined" != typeof Symbol && null != t[Symbol.iterator] || null != t["@@iterator"]) return Array.from(t)
															}(t) || function(t, n) {
																if (!t) return;
																if ("string" == typeof t) return y(t, n);
																var e = Object.prototype.toString.call(t).slice(8, -1);
																"Object" === e && t.constructor && (e = t.constructor.name);
																if ("Map" === e || "Set" === e) return Array.from(t);
																if ("Arguments" === e || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e)) return y(t, n)
															}(t) || function() {
																throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
															}()
														}

														function y(t, n) {
															(null == n || n > t.length) && (n = t.length);
															for (var e = 0, r = new Array(n); e < n; e++) r[e] = t[e];
															return r
														}

														function g(t, n, e) {
															if (Number.isInteger(t)) return t;
															var r = Math.pow(10, n);
															return Math[e]((+t + Number.EPSILON) * r) / r
														}
														Number.isInteger || (Number.isInteger = function(t) {
															return "number" == typeof t && isFinite(t) && Math.floor(t) === t
														}), Number.EPSILON || (Number.EPSILON = 2220446049250313e-31);
														var d = p(Math.pow(10, -6));

														function p(t) {
															var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 6;
															return g(t, n, "round")
														}

														function m(t, n) {
															var e = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : d;
															return Math.abs(t - n) < e
														}
														p(Math.pow(10, -2)), p(Math.pow(10, -4));
														var b = Math.PI / 180;

														function w(t) {
															return t
														}

														function A(t, n, e) {
															var r = 1 - e;
															return 3 * e * r * (t * r + n * e) + e * e * e
														}

														function _() {
															var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
																n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
																e = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1,
																r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 1;
															return t < 0 || t > 1 || e < 0 || e > 1 ? null : m(t, n) && m(e, r) ? w : function(i) {
																if (i <= 0) return t > 0 ? i * n / t : 0 === n && e > 0 ? i * r / e : 0;
																if (i >= 1) return e < 1 ? 1 + (i - 1) * (r - 1) / (e - 1) : 1 === e && t < 1 ? 1 + (i - 1) * (n - 1) / (t - 1) : 1;
																for (var o, u = 0, a = 1; u < a;) {
																	var l = A(t, e, o = (u + a) / 2);
																	if (m(i, l)) break;
																	l < i ? u = o : a = o
																}
																return A(n, r, o)
															}
														}

														function x() {
															return 1
														}

														function k(t) {
															return 1 === t ? 1 : 0
														}

														function S() {
															var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
																n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
															if (1 === t) {
																if (0 === n) return k;
																if (1 === n) return x
															}
															var e = 1 / t;
															return function(t) {
																return t >= 1 ? 1 : (t += n * e) - t % e
															}
														}
														var O = Math.sin,
															j = Math.cos,
															M = Math.acos,
															E = Math.asin,
															P = Math.tan,
															I = Math.atan2,
															R = Math.PI / 180,
															F = 180 / Math.PI,
															N = Math.sqrt,
															T = function() {
																function t() {
																	var n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
																		e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
																		i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0,
																		o = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 1,
																		u = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 0,
																		a = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 0;
																	r(this, t), this.m = [n, e, i, o, u, a], this.i = null, this.w = null, this.s = null
																}
																return o(t, [{
																	key: "determinant",
																	get: function() {
																		var t = this.m;
																		return t[0] * t[3] - t[1] * t[2]
																	}
																}, {
																	key: "isIdentity",
																	get: function() {
																		if (null === this.i) {
																			var t = this.m;
																			this.i = 1 === t[0] && 0 === t[1] && 0 === t[2] && 1 === t[3] && 0 === t[4] && 0 === t[5]
																		}
																		return this.i
																	}
																}, {
																	key: "point",
																	value: function(t, n) {
																		var e = this.m;
																		return {
																			x: e[0] * t + e[2] * n + e[4],
																			y: e[1] * t + e[3] * n + e[5]
																		}
																	}
																}, {
																	key: "translateSelf",
																	value: function() {
																		var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
																			n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
																		if (!t && !n) return this;
																		var e = this.m;
																		return e[4] += e[0] * t + e[2] * n, e[5] += e[1] * t + e[3] * n, this.w = this.s = this.i = null, this
																	}
																}, {
																	key: "rotateSelf",
																	value: function() {
																		var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
																		if (t %= 360) {
																			var n = O(t *= R),
																				e = j(t),
																				r = this.m,
																				i = r[0],
																				o = r[1];
																			r[0] = i * e + r[2] * n, r[1] = o * e + r[3] * n, r[2] = r[2] * e - i * n, r[3] = r[3] * e - o * n, this.w = this.s = this.i = null
																		}
																		return this
																	}
																}, {
																	key: "scaleSelf",
																	value: function() {
																		var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
																			n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1;
																		if (1 !== t || 1 !== n) {
																			var e = this.m;
																			e[0] *= t, e[1] *= t, e[2] *= n, e[3] *= n, this.w = this.s = this.i = null
																		}
																		return this
																	}
																}, {
																	key: "skewSelf",
																	value: function(t, n) {
																		if (n %= 360, (t %= 360) || n) {
																			var e = this.m,
																				r = e[0],
																				i = e[1],
																				o = e[2],
																				u = e[3];
																			t && (t = P(t * R), e[2] += r * t, e[3] += i * t), n && (n = P(n * R), e[0] += o * n, e[1] += u * n), this.w = this.s = this.i = null
																		}
																		return this
																	}
																}, {
																	key: "resetSelf",
																	value: function() {
																		var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
																			n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
																			e = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0,
																			r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 1,
																			i = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 0,
																			o = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 0,
																			u = this.m;
																		return u[0] = t, u[1] = n, u[2] = e, u[3] = r, u[4] = i, u[5] = o, this.w = this.s = this.i = null, this
																	}
																}, {
																	key: "recomposeSelf",
																	value: function() {
																		var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null,
																			n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null,
																			e = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null,
																			r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : null,
																			i = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : null;
																		return this.isIdentity || this.resetSelf(), t && (t.x || t.y) && this.translateSelf(t.x, t.y), n && this.rotateSelf(n), e && (e.x && this.skewSelf(e.x, 0), e.y && this.skewSelf(0, e.y)), !r || 1 === r.x && 1 === r.y || this.scaleSelf(r.x, r.y), i && (i.x || i.y) && this.translateSelf(i.x, i.y), this
																	}
																}, {
																	key: "decompose",
																	value: function() {
																		var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
																			n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
																			e = this.m,
																			r = e[0] * e[0] + e[1] * e[1],
																			i = [
																				[e[0], e[1]],
																				[e[2], e[3]]
																			],
																			o = N(r);
																		if (0 === o) return {
																			origin: {
																				x: p(e[4]),
																				y: p(e[5])
																			},
																			translate: {
																				x: p(t),
																				y: p(n)
																			},
																			scale: {
																				x: 0,
																				y: 0
																			},
																			skew: {
																				x: 0,
																				y: 0
																			},
																			rotate: 0
																		};
																		i[0][0] /= o, i[0][1] /= o;
																		var u = e[0] * e[3] - e[1] * e[2] < 0;
																		u && (o = -o);
																		var a = i[0][0] * i[1][0] + i[0][1] * i[1][1];
																		i[1][0] -= i[0][0] * a, i[1][1] -= i[0][1] * a;
																		var l = N(i[1][0] * i[1][0] + i[1][1] * i[1][1]);
																		if (0 === l) return {
																			origin: {
																				x: p(e[4]),
																				y: p(e[5])
																			},
																			translate: {
																				x: p(t),
																				y: p(n)
																			},
																			scale: {
																				x: p(o),
																				y: 0
																			},
																			skew: {
																				x: 0,
																				y: 0
																			},
																			rotate: 0
																		};
																		i[1][0] /= l, i[1][1] /= l, a /= l;
																		var s = 0;
																		return i[1][1] < 0 ? (s = M(i[1][1]) * F, i[0][1] < 0 && (s = 360 - s)) : s = E(i[0][1]) * F, u && (s = -s), a = I(a, N(i[0][0] * i[0][0] + i[0][1] * i[0][1])) * F, u && (a = -a), {
																			origin: {
																				x: p(e[4]),
																				y: p(e[5])
																			},
																			translate: {
																				x: p(t),
																				y: p(n)
																			},
																			scale: {
																				x: p(o),
																				y: p(l)
																			},
																			skew: {
																				x: p(a),
																				y: 0
																			},
																			rotate: p(s)
																		}
																	}
																}, {
																	key: "clone",
																	value: function() {
																		var t = this.m;
																		return new this.constructor(t[0], t[1], t[2], t[3], t[4], t[5])
																	}
																}, {
																	key: "toString",
																	value: function() {
																		var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : " ";
																		if (null === this.s) {
																			var n = this.m.map((function(t) {
																				return p(t)
																			}));
																			1 === n[0] && 0 === n[1] && 0 === n[2] && 1 === n[3] ? this.s = "translate(" + n[4] + t + n[5] + ")" : this.s = "matrix(" + n.join(t) + ")"
																		}
																		return this.s
																	}
																}], [{
																	key: "create",
																	value: function(t) {
																		return t ? Array.isArray(t) ? f(this, v(t)) : t instanceof this ? t.clone() : (new this).recomposeSelf(t.origin, t.rotate, t.skew, t.scale, t.translate) : new this
																	}
																}]), t
															}();

														function q(t, n, e) {
															return t >= .5 ? e : n
														}

														function B(t, n, e) {
															return 0 === t || n === e ? n : t * (e - n) + n
														}

														function D(t, n, e) {
															var r = B(t, n, e);
															return r <= 0 ? 0 : r
														}

														function L(t, n, e) {
															var r = B(t, n, e);
															return r <= 0 ? 0 : r >= 1 ? 1 : r
														}

														function C(t, n, e) {
															return 0 === t ? n : 1 === t ? e : {
																x: B(t, n.x, e.x),
																y: B(t, n.y, e.y)
															}
														}

														function V(t, n, e) {
															var r = function(t, n, e) {
																return Math.round(B(t, n, e))
															}(t, n, e);
															return r <= 0 ? 0 : r >= 255 ? 255 : r
														}

														function G(t, n, e) {
															return 0 === t ? n : 1 === t ? e : {
																r: V(t, n.r, e.r),
																g: V(t, n.g, e.g),
																b: V(t, n.b, e.b),
																a: B(t, null == n.a ? 1 : n.a, null == e.a ? 1 : e.a)
															}
														}

														function z(t, n) {
															for (var e = [], r = 0; r < t; r++) e.push(n);
															return e
														}

														function Y(t, n) {
															if (--n <= 0) return t;
															var e = (t = Object.assign([], t)).length;
															do {
																for (var r = 0; r < e; r++) t.push(t[r])
															} while (--n > 0);
															return t
														}
														var $, U = function() {
																function t(n) {
																	r(this, t), this.list = n, this.length = n.length
																}
																return o(t, [{
																	key: "setAttribute",
																	value: function(t, n) {
																		for (var e = this.list, r = 0; r < this.length; r++) e[r].setAttribute(t, n)
																	}
																}, {
																	key: "removeAttribute",
																	value: function(t) {
																		for (var n = this.list, e = 0; e < this.length; e++) n[e].removeAttribute(t)
																	}
																}, {
																	key: "style",
																	value: function(t, n) {
																		for (var e = this.list, r = 0; r < this.length; r++) e[r].style[t] = n
																	}
																}]), t
															}(),
															Q = /-./g,
															H = function(t, n) {
																return n.toUpperCase()
															};

														function J(t) {
															return "function" == typeof t ? t : q
														}

														function Z(t) {
															return t ? "function" == typeof t ? t : Array.isArray(t) ? function(t) {
																var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : w;
																if (!Array.isArray(t)) return n;
																switch (t.length) {
																	case 1:
																		return S(t[0]) || n;
																	case 2:
																		return S(t[0], t[1]) || n;
																	case 4:
																		return _(t[0], t[1], t[2], t[3]) || n
																}
																return n
															}(t, null) : function(t, n) {
																var e = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : w;
																switch (t) {
																	case "linear":
																		return w;
																	case "steps":
																		return S(n.steps || 1, n.jump || 0) || e;
																	case "bezier":
																	case "cubic-bezier":
																		return _(n.x1 || 0, n.y1 || 0, n.x2 || 0, n.y2 || 0) || e
																}
																return e
															}(t.type, t.value, null) : null
														}

														function K(t, n, e) {
															var r = arguments.length > 3 && void 0 !== arguments[3] && arguments[3],
																i = n.length - 1;
															if (t <= n[0].t) return r ? [0, 0, n[0].v] : n[0].v;
															if (t >= n[i].t) return r ? [i, 1, n[i].v] : n[i].v;
															var o, u = n[0],
																a = null;
															for (o = 1; o <= i; o++) {
																if (!(t > n[o].t)) {
																	a = n[o];
																	break
																}
																u = n[o]
															}
															return null == a ? r ? [i, 1, n[i].v] : n[i].v : u.t === a.t ? r ? [o, 1, a.v] : a.v : (t = (t - u.t) / (a.t - u.t), u.e && (t = u.e(t)), r ? [o, t, e(t, u.v, a.v)] : e(t, u.v, a.v))
														}

														function W(t, n) {
															var e = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null;
															return t && t.length ? "function" != typeof n ? null : ("function" != typeof e && (e = null), function(r) {
																var i = K(r, t, n);
																return null != i && e && (i = e(i)), i
															}) : null
														}

														function X(t, n) {
															return t.t - n.t
														}

														function tt(t, n, r, i, o) {
															var u, a = "@" === r[0],
																l = "#" === r[0],
																s = $[r],
																f = q;
															switch (a ? (u = r.substr(1), r = u.replace(Q, H)) : l && (r = r.substr(1)), e(s)) {
																case "function":
																	if (f = s(i, o, K, Z, r, a, n, t), l) return f;
																	break;
																case "string":
																	f = W(i, J(s));
																	break;
																case "object":
																	if ((f = W(i, J(s.i), s.f)) && "function" == typeof s.u) return s.u(n, f, r, a, t)
															}
															return f ? function(t, n, e) {
																if (arguments.length > 3 && void 0 !== arguments[3] && arguments[3]) return t instanceof U ? function(r) {
																	return t.style(n, e(r))
																} : function(r) {
																	return t.style[n] = e(r)
																};
																if (Array.isArray(n)) {
																	var r = n.length;
																	return function(i) {
																		var o = e(i);
																		if (null == o)
																			for (var u = 0; u < r; u++) t[u].removeAttribute(n);
																		else
																			for (var a = 0; a < r; a++) t[a].setAttribute(n, o)
																	}
																}
																return function(r) {
																	var i = e(r);
																	null == i ? t.removeAttribute(n) : t.setAttribute(n, i)
																}
															}(n, r, f, a) : null
														}

														function nt(t, n, r, i) {
															if (!i || "object" !== e(i)) return null;
															var o = null,
																u = null;
															return Array.isArray(i) ? u = function(t) {
																if (!t || !t.length) return null;
																for (var n = 0; n < t.length; n++) t[n].e && (t[n].e = Z(t[n].e));
																return t.sort(X)
															}(i) : (u = i.keys, o = i.data || null), u ? tt(t, n, r, u, o) : null
														}

														function et(t, n, e) {
															if (!e) return null;
															var r = [];
															for (var i in e)
																if (e.hasOwnProperty(i)) {
																	var o = nt(t, n, i, e[i]);
																	o && r.push(o)
																} return r.length ? r : null
														}

														function rt(t, n) {
															if (!n.settings.duration || n.settings.duration < 0) return null;
															var e, r, i, o, u, a = function(t, n) {
																if (!n) return null;
																var e = [];
																if (Array.isArray(n))
																	for (var r = n.length, i = 0; i < r; i++) {
																		var o = n[i];
																		if (2 === o.length) {
																			var u = null;
																			if ("string" == typeof o[0]) u = t.getElementById(o[0]);
																			else if (Array.isArray(o[0])) {
																				u = [];
																				for (var a = 0; a < o[0].length; a++)
																					if ("string" == typeof o[0][a]) {
																						var l = t.getElementById(o[0][a]);
																						l && u.push(l)
																					} u = u.length ? 1 === u.length ? u[0] : new U(u) : null
																			}
																			if (u) {
																				var s = et(t, u, o[1]);
																				s && (e = e.concat(s))
																			}
																		}
																	} else
																		for (var f in n)
																			if (n.hasOwnProperty(f)) {
																				var c = t.getElementById(f);
																				if (c) {
																					var h = et(t, c, n[f]);
																					h && (e = e.concat(h))
																				}
																			} return e.length ? e : null
															}(t, n.elements);
															return a ? (e = a, r = n.settings, i = r.duration, o = e.length, u = null, function(t, n) {
																var a = r.iterations || 1 / 0,
																	l = (r.alternate && a % 2 == 0) ^ r.direction > 0 ? i : 0,
																	s = t % i,
																	f = 1 + (t - s) / i;
																n *= r.direction, r.alternate && f % 2 == 0 && (n = -n);
																var c = !1;
																if (f > a) s = l, c = !0, -1 === r.fill && (s = r.direction > 0 ? 0 : i);
																else if (n < 0 && (s = i - s), s === u) return !1;
																u = s;
																for (var h = 0; h < o; h++) e[h](s);
																return c
															}) : null
														}

														function it(t, n) {
															for (var e = n.querySelectorAll("svg"), r = 0; r < e.length; r++)
																if (e[r].id === t.root && !e[r].svgatorAnimation) return e[r].svgatorAnimation = !0, e[r];
															return null
														}

														function ot(t) {
															var n = function(t) {
																return t.shadowRoot
															};
															return document ? Array.from(t.querySelectorAll(":not(" + ["a", "area", "audio", "br", "canvas", "circle", "datalist", "embed", "g", "head", "hr", "iframe", "img", "input", "link", "object", "path", "polygon", "rect", "script", "source", "style", "svg", "title", "track", "video"].join() + ")")).filter(n).map(n) : []
														}

														function ut(t) {
															var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : document,
																e = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0,
																r = it(t, n);
															if (r) return r;
															if (e >= 20) return null;
															for (var i = ot(n), o = 0; o < i.length; o++) {
																var u = ut(t, i[o], e + 1);
																if (u) return u
															}
															return null
														}

														function at(t, n) {
															if ($ = n, !t || !t.root || !Array.isArray(t.animations)) return null;
															var e = ut(t);
															if (!e) return null;
															var r = t.animations.map((function(t) {
																return rt(e, t)
															})).filter((function(t) {
																return !!t
															}));
															return r.length ? {
																svg: e,
																animations: r,
																animationSettings: t.animationSettings,
																options: t.options || void 0
															} : null
														}

														function lt(t) {
															var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null,
																e = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : Number,
																r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : "undefined" != typeof BigInt && BigInt,
																i = "0x" + (t.replace(/[^0-9a-fA-F]+/g, "") || 27);
															return n && r && e.isSafeInteger && !e.isSafeInteger(+i) ? e(r(i)) % n + n : +i
														}

														function st(t, n, e) {
															return !t || !e || n > t.length ? t : t.substring(0, n) + st(t.substring(n + 1), e, e)
														}

														function ft(t) {
															var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 27;
															return !t || t % n ? t % n : [0, 1].includes(n) ? n : ft(t / n, n)
														}

														function ct(t, n, e) {
															if (t && t.length) {
																var r = lt(e),
																	i = ft(r) + 5,
																	o = st(t, ft(r, 5), i);
																return o = o.replace(/\x7c$/g, "==").replace(/\x2f$/g, "="), o = function(t, n, e) {
																	var r = +("0x" + t.substring(0, 4));
																	t = t.substring(4);
																	for (var i = lt(n, r) % r + e % 27, o = [], u = 0; u < t.length; u += 2)
																		if ("|" !== t[u]) {
																			var a = +("0x" + t[u] + t[u + 1]) - i;
																			o.push(a)
																		} else {
																			var l = +("0x" + t.substring(u + 1, u + 1 + 4)) - i;
																			u += 3, o.push(l)
																		} return String.fromCharCode.apply(String, o)
																}(o = (o = atob(o)).replace(/[\x41-\x5A]/g, ""), n, r), o = JSON.parse(o)
															}
														}
														var ht = [{
																key: "alternate",
																def: !1
															}, {
																key: "fill",
																def: 1
															}, {
																key: "iterations",
																def: 0
															}, {
																key: "direction",
																def: 1
															}, {
																key: "speed",
																def: 1
															}, {
																key: "fps",
																def: 100
															}],
															vt = function() {
																function t(n, e) {
																	var i = this,
																		o = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null;
																	r(this, t), this._id = 0, this._running = !1, this._rollingBack = !1, this._animations = n, this._settings = e, (!o || o < "2022-05-02") && delete this._settings.speed, ht.forEach((function(t) {
																		i._settings[t.key] = i._settings[t.key] || t.def
																	})), this.duration = e.duration, this.offset = e.offset || 0, this.rollbackStartOffset = 0
																}
																return o(t, [{
																	key: "alternate",
																	get: function() {
																		return this._settings.alternate
																	}
																}, {
																	key: "fill",
																	get: function() {
																		return this._settings.fill
																	}
																}, {
																	key: "iterations",
																	get: function() {
																		return this._settings.iterations
																	}
																}, {
																	key: "direction",
																	get: function() {
																		return this._settings.direction
																	}
																}, {
																	key: "speed",
																	get: function() {
																		return this._settings.speed
																	}
																}, {
																	key: "fps",
																	get: function() {
																		return this._settings.fps
																	}
																}, {
																	key: "maxFiniteDuration",
																	get: function() {
																		return this.iterations > 0 ? this.iterations * this.duration : this.duration
																	}
																}, {
																	key: "_apply",
																	value: function(t) {
																		for (var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}, e = this._animations, r = e.length, i = 0, o = 0; o < r; o++) n[o] ? i++ : (n[o] = e[o](t, 1), n[o] && i++);
																		return i
																	}
																}, {
																	key: "_rollback",
																	value: function(t) {
																		var n = this,
																			e = 1 / 0,
																			r = null;
																		this.rollbackStartOffset = t, this._rollingBack = !0, this._running = !0;
																		this._id = window.requestAnimationFrame((function i(o) {
																			if (n._rollingBack) {
																				null == r && (r = o);
																				var u = Math.round(t - (o - r) * n.speed);
																				if (u > n.duration && e !== 1 / 0) {
																					var a = !!n.alternate && u / n.duration % 2 > 1,
																						l = u % n.duration;
																					u = (l += a ? n.duration : 0) || n.duration
																				}
																				var s = (n.fps ? 1e3 / n.fps : 0) * n.speed,
																					f = Math.max(0, u);
																				f <= e - s && (n.offset = f, e = f, n._apply(f));
																				var c = n.iterations > 0 && -1 === n.fill && u >= n.maxFiniteDuration;
																				(u <= 0 || n.offset < u || c) && n.stop(), n._id = window.requestAnimationFrame(i)
																			}
																		}))
																	}
																}, {
																	key: "_start",
																	value: function() {
																		var t = this,
																			n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
																			e = -1 / 0,
																			r = null,
																			i = {};
																		this._running = !0;
																		var o = function o(u) {
																			null == r && (r = u);
																			var a = Math.round((u - r) * t.speed + n),
																				l = (t.fps ? 1e3 / t.fps : 0) * t.speed;
																			if (a >= e + l && !t._rollingBack && (t.offset = a, e = a, t._apply(a, i) === t._animations.length)) return void t.pause(!0);
																			t._id = window.requestAnimationFrame(o)
																		};
																		this._id = window.requestAnimationFrame(o)
																	}
																}, {
																	key: "_pause",
																	value: function() {
																		this._id && window.cancelAnimationFrame(this._id), this._running = !1
																	}
																}, {
																	key: "play",
																	value: function() {
																		if (!this._running) return this._rollingBack ? this._rollback(this.offset) : this._start(this.offset)
																	}
																}, {
																	key: "stop",
																	value: function() {
																		this._pause(), this.offset = 0, this.rollbackStartOffset = 0, this._rollingBack = !1, this._apply(0)
																	}
																}, {
																	key: "reachedToEnd",
																	value: function() {
																		return this.iterations > 0 && this.offset >= this.iterations * this.duration
																	}
																}, {
																	key: "restart",
																	value: function() {
																		var t = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
																		this.stop(t), this.play(t)
																	}
																}, {
																	key: "pause",
																	value: function() {
																		this._pause()
																	}
																}, {
																	key: "reverse",
																	value: function() {
																		this.direction = -this.direction
																	}
																}], [{
																	key: "build",
																	value: function(t, n) {
																		delete t.animationSettings, t.options = ct(t.options, t.root, "5c7f360c"), t.animations.map((function(n) {
																			n.settings = ct(n.s, t.root, "5c7f360c"), delete n.s, t.animationSettings || (t.animationSettings = n.settings)
																		}));
																		var e = t.version;
																		if (!(t = at(t, n))) return null;
																		var r = t.options || {},
																			i = new this(t.animations, t.animationSettings, e);
																		return {
																			el: t.svg,
																			options: r,
																			player: i
																		}
																	}
																}, {
																	key: "push",
																	value: function(t) {
																		return this.build(t)
																	}
																}, {
																	key: "init",
																	value: function() {
																		var t = this,
																			n = window.__SVGATOR_PLAYER__ && window.__SVGATOR_PLAYER__["5c7f360c"];
																		Array.isArray(n) && n.splice(0).forEach((function(n) {
																			return t.build(n)
																		}))
																	}
																}]), t
															}();

														function yt(t) {
															return p(t) + ""
														}

														function gt(t) {
															var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : " ";
															return t && t.length ? t.map(yt).join(n) : ""
														}

														function dt(t) {
															if (!t) return "transparent";
															if (null == t.a || t.a >= 1) {
																var n = function(t) {
																		return 1 === (t = parseInt(t).toString(16)).length ? "0" + t : t
																	},
																	e = function(t) {
																		return t.charAt(0) === t.charAt(1)
																	},
																	r = n(t.r),
																	i = n(t.g),
																	o = n(t.b);
																return e(r) && e(i) && e(o) && (r = r.charAt(0), i = i.charAt(0), o = o.charAt(0)), "#" + r + i + o
															}
															return "rgba(" + t.r + "," + t.g + "," + t.b + "," + t.a + ")"
														}

														function pt(t) {
															return t ? "url(#" + t + ")" : "none"
														}! function() {
															for (var t = 0, n = ["ms", "moz", "webkit", "o"], e = 0; e < n.length && !window.requestAnimationFrame; ++e) window.requestAnimationFrame = window[n[e] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[n[e] + "CancelAnimationFrame"] || window[n[e] + "CancelRequestAnimationFrame"];
															window.requestAnimationFrame || (window.requestAnimationFrame = function(n) {
																var e = Date.now(),
																	r = Math.max(0, 16 - (e - t)),
																	i = window.setTimeout((function() {
																		n(e + r)
																	}), r);
																return t = e + r, i
															}, window.cancelAnimationFrame = window.clearTimeout)
														}();
														var mt = {
																f: null,
																i: function(t, n, e) {
																	return 0 === t ? n : 1 === t ? e : {
																		x: D(t, n.x, e.x),
																		y: D(t, n.y, e.y)
																	}
																},
																u: function(t, n) {
																	return function(e) {
																		var r = n(e);
																		t.setAttribute("rx", yt(r.x)), t.setAttribute("ry", yt(r.y))
																	}
																}
															},
															bt = {
																f: null,
																i: function(t, n, e) {
																	return 0 === t ? n : 1 === t ? e : {
																		width: D(t, n.width, e.width),
																		height: D(t, n.height, e.height)
																	}
																},
																u: function(t, n) {
																	return function(e) {
																		var r = n(e);
																		t.setAttribute("width", yt(r.width)), t.setAttribute("height", yt(r.height))
																	}
																}
															};
														Object.freeze({
															M: 2,
															L: 2,
															Z: 0,
															H: 1,
															V: 1,
															C: 6,
															Q: 4,
															T: 2,
															S: 4,
															A: 7
														});
														var wt = {},
															At = null;

														function _t(t) {
															var n = function() {
																if (At) return At;
																if ("object" !== ("undefined" == typeof document ? "undefined" : e(document)) || !document.createElementNS) return {};
																var t = document.createElementNS("http://www.w3.org/2000/svg", "svg");
																return t && t.style ? (t.style.position = "absolute", t.style.opacity = "0.01", t.style.zIndex = "-9999", t.style.left = "-9999px", t.style.width = "1px", t.style.height = "1px", At = {
																	svg: t
																}) : {}
															}().svg;
															if (!n) return function(t) {
																return null
															};
															var r = document.createElementNS(n.namespaceURI, "path");
															r.setAttributeNS(null, "d", t), r.setAttributeNS(null, "fill", "none"), r.setAttributeNS(null, "stroke", "none"), n.appendChild(r);
															var i = r.getTotalLength();
															return function(t) {
																var n = r.getPointAtLength(i * t);
																return {
																	x: n.x,
																	y: n.y
																}
															}
														}

														function xt(t) {
															return wt[t] ? wt[t] : wt[t] = _t(t)
														}

														function kt(t, n, e, r) {
															if (!t || !r) return !1;
															var i = ["M", t.x, t.y];
															if (n && e && (i.push("C"), i.push(n.x), i.push(n.y), i.push(e.x), i.push(e.y)), n ? !e : e) {
																var o = n || e;
																i.push("Q"), i.push(o.x), i.push(o.y)
															}
															return n || e || i.push("L"), i.push(r.x), i.push(r.y), i.join(" ")
														}

														function St(t, n, e, r) {
															var i = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 1,
																o = kt(t, n, e, r),
																u = xt(o);
															try {
																return u(i)
															} catch (t) {
																return null
															}
														}

														function Ot(t, n, e) {
															return t + (n - t) * e
														}

														function jt(t, n, e) {
															var r = arguments.length > 3 && void 0 !== arguments[3] && arguments[3],
																i = {
																	x: Ot(t.x, n.x, e),
																	y: Ot(t.y, n.y, e)
																};
															return r && (i.a = Mt(t, n)), i
														}

														function Mt(t, n) {
															return Math.atan2(n.y - t.y, n.x - t.x)
														}

														function Et(t, n, e, r) {
															var i = 1 - r;
															return i * i * t + 2 * i * r * n + r * r * e
														}

														function Pt(t, n, e, r) {
															return 2 * (1 - r) * (n - t) + 2 * r * (e - n)
														}

														function It(t, n, e, r) {
															var i = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
																o = St(t, n, null, e, r);
															return o || (o = {
																x: Et(t.x, n.x, e.x, r),
																y: Et(t.y, n.y, e.y, r)
															}), i && (o.a = Rt(t, n, e, r)), o
														}

														function Rt(t, n, e, r) {
															return Math.atan2(Pt(t.y, n.y, e.y, r), Pt(t.x, n.x, e.x, r))
														}

														function Ft(t, n, e, r, i) {
															var o = i * i;
															return i * o * (r - t + 3 * (n - e)) + 3 * o * (t + e - 2 * n) + 3 * i * (n - t) + t
														}

														function Nt(t, n, e, r, i) {
															var o = 1 - i;
															return 3 * (o * o * (n - t) + 2 * o * i * (e - n) + i * i * (r - e))
														}

														function Tt(t, n, e, r, i) {
															var o = arguments.length > 5 && void 0 !== arguments[5] && arguments[5],
																u = St(t, n, e, r, i);
															return u || (u = {
																x: Ft(t.x, n.x, e.x, r.x, i),
																y: Ft(t.y, n.y, e.y, r.y, i)
															}), o && (u.a = qt(t, n, e, r, i)), u
														}

														function qt(t, n, e, r, i) {
															return Math.atan2(Nt(t.y, n.y, e.y, r.y, i), Nt(t.x, n.x, e.x, r.x, i))
														}

														function Bt(t, n, e) {
															var r = arguments.length > 3 && void 0 !== arguments[3] && arguments[3];
															if (Lt(n)) {
																if (Ct(e)) return It(n, e.start, e, t, r)
															} else if (Lt(e)) {
																if (Vt(n)) return It(n, n.end, e, t, r)
															} else {
																if (Vt(n)) return Ct(e) ? Tt(n, n.end, e.start, e, t, r) : It(n, n.end, e, t, r);
																if (Ct(e)) return It(n, e.start, e, t, r)
															}
															return jt(n, e, t, r)
														}

														function Dt(t, n, e) {
															var r = Bt(t, n, e, !0);
															return r.a = function(t) {
																return arguments.length > 1 && void 0 !== arguments[1] && arguments[1] ? t + Math.PI : t
															}(r.a) / b, r
														}

														function Lt(t) {
															return !t.type || "corner" === t.type
														}

														function Ct(t) {
															return null != t.start && !Lt(t)
														}

														function Vt(t) {
															return null != t.end && !Lt(t)
														}
														var Gt = new T;
														var zt = {
																f: yt,
																i: B
															},
															Yt = {
																f: yt,
																i: L
															};

														function $t(t, n, e) {
															return t.map((function(t) {
																return function(t, n, e) {
																	var r = t.v;
																	if (!r || "g" !== r.t || r.s || !r.v || !r.r) return t;
																	var i = e.getElementById(r.r),
																		o = i && i.querySelectorAll("stop") || [];
																	return r.s = r.v.map((function(t, n) {
																		var e = o[n] && o[n].getAttribute("offset");
																		return {
																			c: t,
																			o: e = p(parseInt(e) / 100)
																		}
																	})), delete r.v, t
																}(t, 0, e)
															}))
														}
														var Ut = {
															gt: "gradientTransform",
															c: {
																x: "cx",
																y: "cy"
															},
															rd: "r",
															f: {
																x: "x1",
																y: "y1"
															},
															to: {
																x: "x2",
																y: "y2"
															}
														};

														function Qt(t, n, r, i, o, u, a, l) {
															return $t(t, 0, l), n = function(t, n, e) {
																	for (var r, i, o, u = t.length - 1, a = {}, l = 0; l <= u; l++)(r = t[l]).e && (r.e = n(r.e)), r.v && "g" === (i = r.v).t && i.r && (o = e.getElementById(i.r)) && (a[i.r] = {
																		e: o,
																		s: o.querySelectorAll("stop")
																	});
																	return a
																}(t, i, l),
																function(i) {
																	var o = r(i, t, Ht);
																	if (!o) return "none";
																	if ("c" === o.t) return dt(o.v);
																	if ("g" === o.t) {
																		if (!n[o.r]) return pt(o.r);
																		var u = n[o.r];
																		return function(t, n) {
																			for (var e = t.s, r = e.length; r < n.length; r++) {
																				var i = e[e.length - 1].cloneNode();
																				i.id = Kt(i.id), t.e.appendChild(i), e = t.s = t.e.querySelectorAll("stop")
																			}
																			for (var o = 0, u = e.length, a = n.length - 1; o < u; o++) e[o].setAttribute("stop-color", dt(n[Math.min(o, a)].c)), e[o].setAttribute("offset", n[Math.min(o, a)].o)
																		}(u, o.s), Object.keys(Ut).forEach((function(t) {
																			if (void 0 !== o[t])
																				if ("object" !== e(Ut[t])) {
																					var n, r = "gt" === t ? (n = o[t], Array.isArray(n) ? "matrix(" + n.join(" ") + ")" : "") : o[t],
																						i = Ut[t];
																					u.e.setAttribute(i, r)
																				} else Object.keys(Ut[t]).forEach((function(n) {
																					if (void 0 !== o[t][n]) {
																						var e = o[t][n],
																							r = Ut[t][n];
																						u.e.setAttribute(r, e)
																					}
																				}))
																		})), pt(o.r)
																	}
																	return "none"
																}
														}

														function Ht(t, e, r) {
															if (0 === t) return e;
															if (1 === t) return r;
															if (e && r) {
																var i = e.t;
																if (i === r.t) switch (e.t) {
																	case "c":
																		return {
																			t: i, v: G(t, e.v, r.v)
																		};
																	case "g":
																		if (e.r === r.r) {
																			var o = {
																				t: i,
																				s: Jt(t, e.s, r.s),
																				r: e.r
																			};
																			return e.gt && r.gt && (o.gt = function(t, n, e) {
																				var r = n.length;
																				if (r !== e.length) return q(t, n, e);
																				for (var i = new Array(r), o = 0; o < r; o++) i[o] = B(t, n[o], e[o]);
																				return i
																			}(t, e.gt, r.gt)), e.c ? (o.c = C(t, e.c, r.c), o.rd = D(t, e.rd, r.rd)) : e.f && (o.f = C(t, e.f, r.f), o.to = C(t, e.to, r.to)), o
																		}
																}
																if ("c" === e.t && "g" === r.t || "c" === r.t && "g" === e.t) {
																	var u = "c" === e.t ? e : r,
																		a = "g" === e.t ? n({}, e) : n({}, r),
																		l = a.s.map((function(t) {
																			return {
																				c: u.v,
																				o: t.o
																			}
																		}));
																	return a.s = "c" === e.t ? Jt(t, l, a.s) : Jt(t, a.s, l), a
																}
															}
															return q(t, e, r)
														}

														function Jt(t, n, e) {
															if (n.length === e.length) return n.map((function(n, r) {
																return Zt(t, n, e[r])
															}));
															for (var r = Math.max(n.length, e.length), i = [], o = 0; o < r; o++) {
																var u = Zt(t, n[Math.min(o, n.length - 1)], e[Math.min(o, e.length - 1)]);
																i.push(u)
															}
															return i
														}

														function Zt(t, n, e) {
															return {
																o: L(t, n.o, e.o || 0),
																c: G(t, n.c, e.c || {})
															}
														}

														function Kt(t) {
															return t.replace(/-fill-([0-9]+)$/, (function(t, n) {
																return "-fill-" + (+n + 1)
															}))
														}
														var Wt = {
																fill: Qt,
																"fill-opacity": Yt,
																stroke: Qt,
																"stroke-opacity": Yt,
																"stroke-width": zt,
																"stroke-dashoffset": {
																	f: yt,
																	i: B
																},
																"stroke-dasharray": {
																	f: function(t) {
																		var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : " ";
																		return t && t.length > 0 && (t = t.map((function(t) {
																			return p(t, 4)
																		}))), gt(t, n)
																	},
																	i: function(t, n, e) {
																		var r, i, o, u = n.length,
																			a = e.length;
																		if (u !== a)
																			if (0 === u) n = z(u = a, 0);
																			else if (0 === a) a = u, e = z(u, 0);
																		else {
																			var l = (o = (r = u) * (i = a) / function(t, n) {
																				for (var e; n;) e = n, n = t % n, t = e;
																				return t || 1
																			}(r, i)) < 0 ? -o : o;
																			n = Y(n, Math.floor(l / u)), e = Y(e, Math.floor(l / a)), u = a = l
																		}
																		for (var s = [], f = 0; f < u; f++) s.push(p(D(t, n[f], e[f])));
																		return s
																	}
																},
																opacity: Yt,
																transform: function(t, n, r, i) {
																	if (!(t = function(t, n) {
																			if (!t || "object" !== e(t)) return null;
																			var r = !1;
																			for (var i in t) t.hasOwnProperty(i) && (t[i] && t[i].length ? (t[i].forEach((function(t) {
																				t.e && (t.e = n(t.e))
																			})), r = !0) : delete t[i]);
																			return r ? t : null
																		}(t, i))) return null;
																	var o = function(e, i, o) {
																		var u = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : null;
																		return t[e] ? r(i, t[e], o) : n && n[e] ? n[e] : u
																	};
																	return n && n.a && t.o ? function(n) {
																		var e = r(n, t.o, Dt);
																		return Gt.recomposeSelf(e, o("r", n, B, 0) + e.a, o("k", n, C), o("s", n, C), o("t", n, C)).toString()
																	} : function(t) {
																		return Gt.recomposeSelf(o("o", t, Bt, null), o("r", t, B, 0), o("k", t, C), o("s", t, C), o("t", t, C)).toString()
																	}
																},
																r: zt,
																"#size": bt,
																"#radius": mt,
																_: function(t, n) {
																	if (Array.isArray(t))
																		for (var e = 0; e < t.length; e++) this[t[e]] = n;
																	else this[t] = n
																}
															},
															Xt = function(t) {
																! function(t, n) {
																	if ("function" != typeof n && null !== n) throw new TypeError("Super expression must either be null or a function");
																	t.prototype = Object.create(n && n.prototype, {
																		constructor: {
																			value: t,
																			writable: !0,
																			configurable: !0
																		}
																	}), n && l(t, n)
																}(u, t);
																var n, e, i = (n = u, e = s(), function() {
																	var t, r = a(n);
																	if (e) {
																		var i = a(this).constructor;
																		t = Reflect.construct(r, arguments, i)
																	} else t = r.apply(this, arguments);
																	return c(this, t)
																});

																function u() {
																	return r(this, u), i.apply(this, arguments)
																}
																return o(u, null, [{
																	key: "build",
																	value: function(t) {
																		var n = h(a(u), "build", this).call(this, t, Wt);
																		if (!n) return null;
																		n.el, n.options,
																			function(t, n, e) {
																				t.play()
																			}(n.player)
																	}
																}]), u
															}(vt);
														return Xt.init(), Xt
													}));
													(function(s, i, o, w, d, a, b) {
														w[o] = w[o] || {};
														w[o][s] = w[o][s] || [];
														w[o][s].push(i);
													})('5c7f360c', {
														"root": "eH89I1l4MF51",
														"version": "2022-05-04",
														"animations": [{
															"elements": {
																"eH89I1l4MF52": {
																	"transform": {
																		"data": {
																			"t": {
																				"x": -34.29335,
																				"y": -18.846491
																			}
																		},
																		"keys": {
																			"o": [{
																				"t": 0,
																				"v": {
																					"x": 16.147522,
																					"y": -18.846609,
																					"type": "corner"
																				}
																			}, {
																				"t": 1900,
																				"v": {
																					"x": 31.53324,
																					"y": 18.846607,
																					"type": "corner"
																				}
																			}]
																		}
																	}
																},
																"eH89I1l4MF53": {
																	"transform": {
																		"data": {
																			"t": {
																				"x": -34.633506,
																				"y": -84.986797
																			}
																		},
																		"keys": {
																			"o": [{
																				"t": 0,
																				"v": {
																					"x": 14.767468,
																					"y": 159.613197,
																					"type": "corner"
																				}
																			}, {
																				"t": 1900,
																				"v": {
																					"x": 32.913296,
																					"y": 85.132797,
																					"type": "corner"
																				}
																			}]
																		}
																	}
																},
																"eH89I1l4MF54": {
																	"transform": {
																		"data": {
																			"t": {
																				"x": -88.453901,
																				"y": -87.0466
																			}
																		},
																		"keys": {
																			"o": [{
																				"t": 0,
																				"v": {
																					"x": 113.243336,
																					"y": 159.6132,
																					"type": "corner"
																				}
																			}, {
																				"t": 1900,
																				"v": {
																					"x": 86.298298,
																					"y": 89.8596,
																					"type": "corner"
																				}
																			}]
																		}
																	}
																},
																"eH89I1l4MF55": {
																	"transform": {
																		"data": {
																			"t": {
																				"x": -91.953602,
																				"y": -40.079953
																			}
																		},
																		"keys": {
																			"o": [{
																				"t": 0,
																				"v": {
																					"x": 54.660502,
																					"y": -37.693219,
																					"type": "corner"
																				}
																			}, {
																				"t": 1900,
																				"v": {
																					"x": 89.967202,
																					"y": 40.079941,
																					"type": "corner"
																				}
																			}]
																		}
																	}
																},
																"eH89I1l4MF57": {
																	"opacity": [{
																		"t": 0,
																		"v": 0
																	}, {
																		"t": 1900,
																		"v": 1
																	}]
																},
																"eH89I1l4MF512": {
																	"opacity": [{
																		"t": 100,
																		"v": 0
																	}, {
																		"t": 1900,
																		"v": 1
																	}]
																}
															},
															"s": "MTDA1ZDhhTTMxNzM4NDSgxNzA4M1c3ODdlN2QQzMVM0OTQyM2YzZjNmXM2IzMTczVDc4TzgxNLzQ3MjgzNzhPN2U3ZDHMxNDk0MEczYjMxNzgC4Mzc0ODE3MDgzNzg3DZTdkODIzMVc0OTQwMJ2IzMTc1Nzg3YjdiMzXFRNDk0MDNiMzFTNzAE3YjgzVDc0SjgxN2Q3XMDgzNzQzMTQ5NzU3MFDdiODI3NE0zYjMxODVI3Zjc0NzQ3MzMxSzQV5NDAzYjMxNzVRN2Y4LMjMxNDk0MDNmM2Y4YAw|"
														}],
														"options": "MLDAxMDg4MmZVODA4MTUZlN2Y4MTJmNDcyZjcK5N2M2ZTcxMmY4YQ|"
													}, '__SVGATOR_PLAYER__', window, document)
													]]>
												</script>
											</svg>
										</span>
									</a>
								</div>
								<div class="navbar-end lg:w-[70%]">
									<div class="nav-menu hidden xl:block lg:mr-3">
										<div class="mr-1">
											<ul class="nav-menu">
												<li class="group/menu inline-block relative">
													<a href="/#music-distribution" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-white current:text-black">
														Music Distribution
													</a>
												</li>
												<li class="group/menu inline-block relative">
													<a href="/#marketing-promotions" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-white current:text-black">
													Marketing & Promotions
													</a>
												</li>
												<li class="group/menu inline-block relative">
													<a href="/#yotube-channel" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-white current:text-black">
													Monetization & Management
													</a>
												</li>
												<li class="group/menu inline-block relative ">
													<a href="<?= get_permalink(26); ?>" class="group-hover/menu:text-primary block font-medium py-2 px-3 transition-all duration-300 ease-in text-white current:text-black">
														Contact Us
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="flex items-center">
										<a href="<?= get_permalink(499); ?>" class="btn btn-primary">Client Login</a>
										<div class="open-drawer py-2.5 pl-2.5 cursor-pointer xl:hidden">
											<i class="h-[3px] w-8 bg-primary block"></i>
											<i class="h-[3px] w-5 bg-primary block my-1"></i>
											<i class="h-[3px] w-2.5 bg-primary block"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<input type="checkbox" id="drawer-left" class="drawer-toggle" />
			<label class="overlay" for="drawer-left"></label>
			<div class="drawer !max-w-full">
				<div class="drawer-content pt-10 flex flex-col h-full px-1">
					<div for="drawer-left" class="mobile-menu-remove btn btn-sm btn-circle btn-ghost absolute text-[48px] right-2 top-2 z-[2]">✕</div>
					<div>
						<ul class="pt-[50px] font-agoka text-[25px] text-center">
							<li class="mb-[28px] overflow-hidden pt-[5px]"><a href="/#music-distribution" class="mobile-menu-link mobile-menu-link-effect inline-block text-[18px]">Music Distribution</a></li>
							<li class="mb-[28px] overflow-hidden pt-[5px]"><a href="/#marketing-promotions" class="mobile-menu-link mobile-menu-link-effect inline-block text-[18px]">Marketing & Promotions</a></li>
							<li class="mb-[28px] overflow-hidden pt-[5px]"><a href="/#yotube-channel" class="mobile-menu-link mobile-menu-link-effect inline-block text-[18px]">Monetization & Management</a></li>
							<li class="mb-[28px] overflow-hidden pt-[5px]"><a href="/#royalties-licenses" class="mobile-menu-link mobile-menu-link-effect inline-block text-[18px]">Royalty Distribution</a></li>
							<li class="mb-[28px] overflow-hidden pt-[5px]"><a href="<?= get_permalink(26); ?>" class="mobile-menu-link mobile-menu-link-effect inline-block text-[18px]">Contact Us</a></li>
						</ul>
					</div>
					<div class="h-full flex flex-row justify-end items-end gap-2">
					</div>
				</div>
			</div>


		</header>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">