<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Revoke Digital 1.0
 */

get_header();
?>

<div class="bg-black relative overflow-hidden py-10 md:py-20" id="mayaJaalSec">
	<div class="relative z-[2]">
		<div class="mx-auto max-w-screen-2xl px-4 md:px-8">
			<div class="flex flex-col items-center">
				<!-- logo - start -->
				<a href="/" class="mb-8 inline-flex items-center gap-2.5 text-2xl font-bold md:text-3xl" aria-label="logo">
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
				<!-- logo - end -->

				<p class="mb-4 text-sm font-semibold uppercase text-indigo-500 md:text-base">That’s a 404</p>
				<h1 class="mb-2 text-center text-2xl font-bold text-gray-800 md:text-3xl">Page not found</h1>

				<p class="mb-12 max-w-screen-md text-center text-gray-500 md:text-lg">The page you’re looking for doesn’t exist.</p>

				<a href="/" class="btn btn-primary px-14">Go home</a>
			</div>
		</div>
	</div>
	<div id="mayaJaal" class="absolute top-0 left-0 right-0 bottom-0 w-full h-full z-[1]"></div>
</div>

<?php
get_footer();
?>
<script src="<?php bloginfo('template_directory'); ?>/js/three-page-not-found.min.js"></script>
<script>
	$(document).ready(function() {
		var mouseX = 0,
			mouseY = 0,
			windowHalfX = window.innerWidth / 2,
			windowHalfY = window.innerHeight / 2,
			SEPARATION = 200,
			AMOUNTX = 10,
			AMOUNTY = 10,
			camera,
			scene,
			renderer;

		init();
		animate();

		function init() {

			var container,
				separation = 100,
				amountX = 50,
				amountY = 50,
				particle;

			container = document.getElementById('mayaJaal');
			mayaJaalSec = document.getElementById('mayaJaalSec');
			// document.body.appendChild( container );

			scene = new THREE.Scene();

			renderer = new THREE.CanvasRenderer({
				alpha: true
			}); // gradient; this can be swapped for WebGLRenderer
			renderer.setSize(window.innerWidth, window.innerHeight);
			container.appendChild(renderer.domElement);

			camera = new THREE.PerspectiveCamera(
				75,
				window.innerWidth / window.innerHeight,
				1,
				10000
			);
			camera.position.z = 100;

			// particles
			var PI2 = Math.PI * 2;
			var material = new THREE.SpriteCanvasMaterial({
				color: 0xffffff,
				program: function(context) {
					context.beginPath();
					context.arc(0, 0, 0.5, 0, PI2, true);
					context.fill();
				}
			});

			var geometry = new THREE.Geometry();

			for (var i = 0; i < 100; i++) {
				particle = new THREE.Sprite(material);
				particle.position.x = Math.random() * 2 - 1;
				particle.position.y = Math.random() * 2 - 1;
				particle.position.z = Math.random() * 2 - 1;
				particle.position.normalize();
				particle.position.multiplyScalar(Math.random() * 10 + 450);
				particle.scale.x = particle.scale.y = 10;
				scene.add(particle);
				geometry.vertices.push(particle.position);
			}

			// lines
			var line = new THREE.Line(geometry, new THREE.LineBasicMaterial({
				color: 0xffffff,
				opacity: 0.5
			}));
			scene.add(line);

			// mousey
			document.addEventListener('mousemove', onDocumentMouseMove, false);
			document.addEventListener('touchstart', onDocumentTouchStart, false);
			document.addEventListener('touchmove', onDocumentTouchMove, false);

			window.addEventListener('resize', onWindowResize, false);

		} // end init();

		function onWindowResize() {

			windowHalfX = window.innerWidth / 2;
			windowHalfY = window.innerHeight / 2;

			camera.aspect = window.innerWidth / window.innerHeight;
			camera.updateProjectionMatrix();

			renderer.setSize(window.innerWidth, window.innerHeight);

		}

		function onDocumentMouseMove(event) {

			mouseX = event.clientX - windowHalfX;
			mouseY = event.clientY - windowHalfY;

		}

		function onDocumentTouchStart(event) {

			if (event.touches.length > 1) {

				event.preventDefault();

				mouseX = event.touches[0].pageX - windowHalfX;
				mouseY = event.touches[0].pageY - windowHalfY;

			}
		}

		function onDocumentTouchMove(event) {

			if (event.touches.length == 1) {

				event.preventDefault();

				mouseX = event.touches[0].pageX - windowHalfX;
				mouseY = event.touches[0].pageY - windowHalfY;

			}
		}

		function animate() {

			requestAnimationFrame(animate);
			render();

		}

		function render() {

			camera.position.x += (mouseX - camera.position.x) * .05;
			camera.position.y += (-mouseY + 200 - camera.position.y) * .05;
			camera.lookAt(scene.position);

			renderer.render(scene, camera);

		}
	});
</script>