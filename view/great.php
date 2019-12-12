<?php
defined ('ABSPATH') or die ('¡No HACKS Man!');

// global $wp_styles;
// print_r($wp_styles->registered);
get_header('sleek');
wp_print_styles();
?>
<section id="s1" class="buceo parallax py-5 text-light">
	<div class="container">
		<div class="row">
			<div class="col-md-5 pb-0 pb-5 align-self-center animated fadeIn">
				<h1 class="display-1 text-light text-uppercase text-md-left text-center text-shadow">
					Siempre<br>existe un<br>próximo<br>nivel
				</h1>
				<img src="<?php echo plugins_url().'/Great/public/img/great.png'; ?>" alt="Great Logo">
				<p>6 SESIONES COMPLETAS DE GREAT™ COACHING, apoyados por 6 Video Lecciones y 2 Webinars.
				Llenos de Poder Transformador.</p>
			</div>
			<div class="col-md-7">
				<div class="embed-responsive embed-responsive-16by9" style="height:auto;">
					<iframe rel="nofollow noopener noreferrer" class="embed-responsive-item animated fadeIn shadow-lg p-3" src="https://player.vimeo.com/video/297692738?color=4b314c&title=0&byline=0&portrait=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="Great"></iframe>		
				</div>
				<div class="text-center py-5 animated fadeIn">
					<p class="pb-5">Estamos entrando en un paradigma de vida donde el mundo se transforma y cambia más rápido de lo que hemos conocido antes. Hoy más que nunca, entender cómo es que operamos, y cómo salir de estados estancados para operar desde un máximo nivel de desempeño para avanzar hacia una vida extraordinaria. Bienvenido a tu próximo nivel, bienvenido a GREAT Coaching.</p>
					<a href="#s5" class="btn btn-primary btn-lg rounded-pill text-light shadow-lg" rel="nofollow noopener noreferrer">COMIENZA AHORA Y ELIGE TU COACH</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="s2" class="container py-5">
	<div class="row text-center">
		<div class="col-md-12 pb-5">
			<h1 class="font-italic text-center programa"  data-aos="fade-zoom-in"   data-aos-duration="1500">Estrategia, Pasión, Relación, Acción, Transformación</h1>
		</div>
		<div class="col-md-7 pb-md-0 pb-5">
			<img src="<?php echo plugins_url().'/Great/public/img/mockup.webp'; ?>" alt="Mockup" data-aos="fade-zoom-in" data-aos-duration="1500">
		</div>
		<div class="col-md-5">
			<img src="<?php echo plugins_url().'/Great/public/img/great.webp'; ?>" alt="Great Logo" class="pb-5"  data-aos="fade-zoom-in" data-aos-duration="1500">
			<p class="text-md-left" data-aos="fade-zoom-in" data-aos-duration="1500">Durante  éstas  lecciones  podrás  interactuar  con  Master  Life  Coaches  Certificados  por  la  ILC Academy  y  GREAT™  Coach  Trainers  para  consolidar  tu  compromiso  de  dejar  de  una  vez  por todas  tus  creencias  limitantes  y  avanzar  a  una  vida  bajo  tus  criterios.  Es  momento  de  dejar  las viejas formas, conectar con tu pasión y vivir en plenitud.</p>
		</div>
	</div>
</section>
<section id="s3" class="bg-secondary  text-center py-5">
	<div class="container" id="responsiveCarrousel">
		<div class="row justify-content-center">
			<div class="col-md-12" data-aos="fade-zoom-in" data-aos-duration="1500"><h1 class="text-primary">GREAT™ Coaching </h1><h2 class="text-primary">5 Espacios para Desatar tu Poder Personal</h2></div>
			<div class="col-md-8 pb-5" data-aos="fade-zoom-in" data-aos-duration="1500">Durante 6 Video Lecciones, 2 Webinars en Vivo con Fernando Celis, Master Life Coach Trainer y  creador  del  Modelo  GREAT™  Coaching,  podrás  tener  una  visión  más  clara  de  quién  eres, conocerte mejor y comenzar a esbozar el Resultado Deseado conectado a propósitos que vibran con   tu   verdadera   naturaleza. Tu compromiso se ve fortalecido al decidir tener un acompañamiento personal VIP con un GREAT™ Coach.</h2>
		</div>
		<!-- En Js Se está añadiendo aquí el carrousel de videos de great -->
	</div>
</section>
<section id="s4" class="py-5 city-lights text-light text-center">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 pb-5">
				<h1 class="text-light">AHORA QUE CONOCES TU CREENCIA LIMITANTE</h1>
				<h2 class="text-light">Elige un GREAT Coach y resuelve de una vez ese Conflicto Estructural que te separa de tu Grandeza y continúa el viaje con los videos de Fernando Celis y los 2 Webinars.</h2>
			</div>
			<div class="col-md-5 order-md-2 order-3 pb-5" id="coach-section">
				<!-- Aquí el carrousel -->
			</div>
			<div class="col-md-7 order-md-3 order-2 pt-0 pb-5 align-self-center" >
				<h2 class="text-light">Los GREAT™ Coaches. Son Coaches formados por ILC Academy entre los cuales están nuestras ECoaches Senior y nuestros GREAT™ Coach Trainers. Elige el que deseas y pauta tu primera conversación, tu primera sesión de Coaching orientado a lograr los resultados que deseas.</h2>
			</div>
		</div>

	</div>
</section>
<section id="s5" class="container py-5 text-center">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<h1 class="pb-5">AGENDA TU PRIMERA SESIÓN DE COACHING GRATIS</h1>
		</div>
		<div class="col-md-8"  data-aos="fade-zoom-in" data-aos-duration="1500">
			<!-- Hook de booked -->
			<?php 
				echo do_shortcode('[bookly-form category_id="1" service_id="1" hide="categories,week_days,time_range"]');
			?>
			<a href="https://ilccampus.com/unit/mod-great-1/?id=155819" class="btn btn-primary m-5 btn-lg rounded-pill text-light shadow" rel="nofollow noopener noreferrer">TE INVITAMOS A VER LAS PRIMERAS DOS VIDEO LECCIONES</a>
		</div>
	</div>
</section>
<section id="s6" class="bg-info py-5 text-light text-center bg-fernando">
	<div class="container">
		<div class="row">
			<div class="col-md-9 align-self-center">
				<h1 class="fernando font-italic text-light" data-aos="fade-zoom-in" data-aos-duration="1500">Master Life Coach Trainer, CMC y CEO de ILC Academy Worldwide</h1><br class="d-md-block d-none"><br class="d-md-block d-none">
				<p>Durante los últimos 25 años Fernando Celis, Surfista de Alma y Master Life Coach se ha dedicado a estudiar a fondo y aplicar los elementos que producen resultados para sacar el máximo de su Poder Personal. En ese viaje pudo diseñar una metodología de Coaching que dio a la luz ILC Academy, desde las calles de Caracas, y junto a Samuel González y María Alexandra Duque construyeron una Escuela de Pensamiento de Coaching que une puentes, desata las manos y logra entrar a un nivel más profundo a los detonantes que liberan el Poder Humano para producir cambios sustentables en el tiempo.<br>Hoy Fernando forma parte del BOG de la IAC International Association of Coaching, es Certified Masteries Coach de la IAC y ha llevado Coaching a un nivel Profesional con las alianzas universitarias entre ellas la Florida Global University en Miami, donde hoy vive.
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
				<h1 class="mb-3">Comienza tu Viaje</h1>
				<p class="text-md-left text-center pb-3">Al entrar al portal de GREAT junto a un COACH llevarás tu viaje a nuevos niveles de maestría. Explora a nivel íntimo tus sueños, anhelos, historias y vulnerabilidades con un Profesional Competente que te acompañará hacia una vida de plenitud a medida que te desafía, empuja y apoya, creyendo en tí y dejándote espacios para la reflexión y la celebración. Al decidir este camino tendrás adicional:</p>
				<ul class="text-center pb-3 list-position-inside" style="list-style-type: square;">
					<li>Coaches Profesionales a nivel de CLC y Masteries Practitioner.</li>
					<li>6 Sesiones de Life Coaching.</li>
					<li>2 Webinars en VIVO con Fernando Celis.</li>
					<li>6 Video lecciones que acompañan tu viaje.</li>
					<li>Material adicional, hojas de trabajo para tu plan de vida.</li>
					<li>Una sesión personal con Fernando para evaluar tu GRAN MAPA.</li>
				</ul>	
				<a href="#s5" class="btn btn-primary btn-lg rounded-pill text-light shadow-lg" rel="nofollow noopener noreferrer">COMIENZA AHORA Y ELIGE TU COACH</a>
			</div>
		<div class="col-md-6 bg-conferencia text-light px-0">
			<div id="testimonios" class="py-5 px-3 h-100" style="background:rgba(0,0,0,0.5);">
				<h1 class="py-3 text-light">Testimonios</h1>
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
<!-- MODAL -->
<div class="modal fade" id="testimonioModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content bg-dark">
			<div class="modal-body">
          	<!-- 
          	<div style="color:#fff;cursor: pointer; font-size: 20px; text-align:right;">
          		<span id="modal-cerrar">&times;</span>
          	</div> 
          	-->
				<div class="vimeo embed-responsive embed-responsive-16by9"> 
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ===== -->
<?php
wp_print_scripts();
?>
<script>
  	AOS.init();
</script>
<?php
get_footer('bottom');
?>