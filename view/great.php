<?php
defined ('ABSPATH') or die ('¡No HACKS Man!');
print_r(wp_print_scripts());
print_r(wp_print_styles());
// global $wp_styles;
// print_r($wp_styles->registered);
get_header('sleek');
?>
<section id="s1" class="buceo parallax py-5 text-light">
	<div class="container">
		<div class="row">
			<div class="col-md-5 pb-0 pb-5 align-self-center animated fadeIn">
				<h1 class="display-1 text-uppercase text-md-left text-center text-shadow">
					Siempre<br>existe un<br>próximo<br>nivel
				</h1>
			</div>
			<div class="col-md-7">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe rel="nofollow noopener noreferrer" class="embed-responsive-item animated fadeIn shadow-lg p-3" src="https://www.youtube.com/embed/aemLNc00QVo?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="Great"></iframe>		
				</div>
				<div class="text-center py-5 animated fadeIn">
					<p class="pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam qui fugit magnam eius rerum neque laborum minima et voluptas voluptatem reiciendis, nemo, tempore laboriosam molestias, amet ipsam aspernatur autem nulla.</p>
					<a href="#" class="btn btn-primary btn-lg rounded-pill text-light shadow-lg" rel="nofollow noopener noreferrer">Comienza ahora</a>
					<br class="d-lg-none d-block">
					<span class="px-5">o</span>
					<br class="d-lg-none d-block">
					<a href="#s5" class="btn btn-primary btn-lg rounded-pill text-light shadow-lg" rel="nofollow noopener noreferrer">Elige tu coach</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="s2" class="container py-5">
	<div class="row text-center">
		<div class="col-md-12 pb-5">
			<h1 class="font-italic text-center programa"  data-aos="fade-zoom-in" data-aos-duration="1500">Pasión, Vida, Coaching</h1>
		</div>
		<div class="col-md-7 pb-md-0 pb-5">
			<img src="<?php echo plugins_url().'/Great/public/img/mockup.webp'; ?>" alt="Mockup" data-aos="fade-zoom-in" data-aos-duration="1500">
		</div>
		<div class="col-md-5">
			<img src="<?php echo plugins_url().'/Great/public/img/great.webp'; ?>" alt="Great Logo" class="pb-5"  data-aos="fade-zoom-in" data-aos-duration="1500">
			<p class="text-md-left" data-aos="fade-zoom-in" data-aos-duration="1500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae enim officiis molestias hic doloribus dolorum! Commodi possimus, nostrum cupiditate labore voluptatibus ab laudantium veritatis sed, iusto dolore, similique ut! Nesciunt?</p>
		</div>
	</div>
</section>
<section id="s3" class="bg-secondary  text-center py-5">
	<div class="container" id="responsiveCarrousel">
		<div class="row justify-content-center">
			<div class="col-md-12" data-aos="fade-zoom-in" data-aos-duration="1500"><h1 class="text-primary">6 pasos</h1><h2 class="text-primary">Para mejorar tu desempeño</h2></div>
			<div class="col-md-8 pb-5" data-aos="fade-zoom-in" data-aos-duration="1500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quos, rerum, quaerat asperiores ab libero quidem commodi architecto error voluptatum itaque perferendis praesentium atque illo mollitia nostrum iste quam veniam.</h2>
		</div>
		<!-- En Js Se está añadiendo aquí el carrousel de videos de great -->
	</div>
</section>
<section id="s4" class="py-5 city-lights text-light text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12 pb-5">
				<h1>Elige tu Coach</h1>
			</div>
			<div class="col-md-5 pb-md-0 pb-5">
				<img src="<?php echo plugins_url().'/Great/public/img/equipo.webp'; ?>" alt="Equipo"  data-aos="fade-zoom-in" data-aos-duration="1500">
			</div>
			<div class="col-md-7" >
				<h1>Fernando Celis</h1>
				<h2>Lorem ipsum sit amet, consectetur</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consequatur assumenda, facere ad dicta doloribus reprehenderit sint odit. Ipsam fugiat repellat laboriosam, quisquam aliquam magnam quam voluptate asperiores. Sunt, neque.</p>
			</div>
		</div>

	</div>
</section>
<section id="s5" class="container py-5 text-center">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<h1 class="pb-5">Elige tu cita</h1>
		</div>
		<div class="col-md-8"  data-aos-duration="1500">
			<!-- Hook de booked -->
			<?php 
				echo do_shortcode('[bookly-form category_id="0" service_id="1" staff_member_id="1" hide="categories"]');
			?>
		</div>
	</div>
</section>
<section id="s6" class="bg-info py-5 text-light text-center bg-fernando">
	<div class="container">
		<div class="row">
			<div class="col-md-9 align-self-center">
				<h1 class="fernando font-italic" data-aos="fade-zoom-in" data-aos-duration="1500">Master Speaker, Coach de Desempeño Óptimo</h1><br class="d-md-block d-none"><br class="d-md-block d-none">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, praesentium laborum! In esse quos voluptatum deleniti modi non iste nostrum odio sint excepturi odit eligendi, voluptates eius temporibus, doloribus beatae.<br><br>
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. A corrupti, vitae ab, pariatur quasi voluptatem unde sit suscipit nesciunt, nemo accusantium. Reiciendis voluptatum deserunt veniam error minima provident suscipit qui.
				</p>
			</div>
			<div class="col-md-3">
				<img src="<?php echo plugins_url().'/Great/public/img/fernando.webp'; ?>" alt="Fernando" style="visibility: hidden;"> <!-- oculto -->
			</div>
		</div>
	</div>
</section>
<section id="s7" class="container py-5 px-5 text-center">
	<div class="row border shadow-lg" data-aos="fade-zoom-in" data-aos-duration="1500">
		<div class="col-md-6 py-5 px-3">
				<h1 class="mb-3">Lorem ipsum dolor sit amet, consectetur</h1>
				<p class="text-md-left text-center pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus unde saepe, exercitationem et dolores a? Maxime a voluptates eligendi voluptatem alias. At deserunt dignissimos doloribus fugiat vel aperiam itaque quidem.</p>
				<ul class="text-center pb-3" style="list-style-type: square;">
					<li>Lorem ipsum dolor sit amet.</li>
					<li>Lorem ipsum dolor sit amet.</li>
					<li>Lorem ipsum dolor sit amet.</li>
					<li>Lorem ipsum dolor sit amet.</li>
				</ul>	
				<a href="#" class="btn btn-primary btn-lg rounded-pill text-light shadow-lg" rel="nofollow noopener noreferrer">Comienza ahora</a>
				<br class="d-xl-none d-block">
				<span class="px-5">o</span>
				<br class="d-xl-none d-block">
				<a href="#s5" class="btn btn-primary btn-lg rounded-pill text-light shadow-lg" rel="nofollow noopener noreferrer">Elige tu coach</a>
			</div>
		<div class="col-md-6 bg-conferencia text-light px-0">
			<div id="testimonios" class="py-5 px-3 h-100" style="background:rgba(0,0,0,0.5);">
				<h1 class="py-3">Testimonios</h1>
				<!-- Aquí agregamos en Js el Carrousel de testimonios -->
			</div>
		</div>
	</div>
</section>
<section id="s8" class="bg-info py-5">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-4 pb-md-0 pb-5"><img src="<?php echo plugins_url().'/Great/public/logo/ilc-logo.webp'; ?>" alt="ILC Academy Logo" data-aos="fade-zoom-in" data-aos-duration="1500"></div>
			<div class="col-md-4 pb-md-0 pb-5 align-self-center"><img src="<?php echo plugins_url().'/Great/public/logo/iac-logo.webp'; ?>" alt="IAC Logo" data-aos="fade-zoom-in" data-aos-duration="2000"></div>
			<div class="col-md-4"><img src="<?php echo plugins_url(); ?>/Great/public/logo/lizard-logo.webp" alt="Fernando Lizard Logo" data-aos="fade-zoom-in" data-aos-duration="2500"></div>
		</div>
	</div>
</section>
<?php
get_footer('bottom');