<footer class="container footer">
	<div class="footer--logo">
		<a href="<?=get_site_url();?>"><img src="<?=bloginfo("template_url")?>/assets/images/Gabriel.png" alt="Foto de Gabriel" /></a>
	</div>
	<div class="footer--rights">
		<h2>Gabriel Gama Dev</h2>
		<p>Estou aqui para aprender junto com você.</p>
	</div>
	<div class="footer--social">
		<ul class="default-ul inline-ul">
			<li><a target="_blank" href="https://facebook.com/gabrielcgama"><i class="fab fa-facebook-f"></i></a></li>
			<li><a target="_blank" href="https://instagram.com/gabriel.carvalhogama"><i class="fab fa-instagram"></i></a></li>
			<li><a target="_blank" href="https://github.com/gabrielcarvalhogama"><i class="fab fa-github"></i></a></li>
			<li><a target="_blank" href="mailto:eu@gabrielgamadev.com.br"><i class="far fa-envelope"></i></a></li>
		</ul>
	</div>
</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143331941-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143331941-4');
</script>
	<?php wp_footer(); ?>
</body>
</html>