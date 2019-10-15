<?php get_header(); ?>

<main class="container">
	<div class="home row">
		<div class="col-md-5 home--left">
			<nav class="home--menu">
				<?php
                    wp_nav_menu(["menu_class"=>"default-ul inline-ul"]);
                ?>
			</nav>
			<h1>Gabriel Carvalho Gama</h1>
			<h2>Desenvolvedor web, mobile e apaixonado por café e astronomia.</h2>
			<div class="home--social">
				<ul class="default-ul inline-ul">
					<li><a target="_blank" href="https://facebook.com/gabrielcgama"><i class="fab fa-facebook-f"></i></a></li>
					<li><a target="_blank" href="https://instagram.com/gabriel.carvalhogama"><i class="fab fa-instagram"></i></a></li>
					<li><a target="_blank" href="https://github.com/gabrielcarvalhogama"><i class="fab fa-github"></i></a></li>
					<li><a target="_blank" href="mailto:eu@gabrielgamadev.com.br"><i class="far fa-envelope"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-7 home--right">
			<img src="<?=bloginfo("template_url")?>/assets/images/Gabriel.png" alt="Foto de Gabriel" class="home--photo" />
		</div>
	</div>	
</main>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143331941-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143331941-4');
</script>

</body>
</html>