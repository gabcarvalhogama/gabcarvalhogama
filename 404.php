<?php get_header(); ?>


<main class="container e404">
	<div class="e404--highlight">
		<img src="<?=bloginfo("template_url")?>/assets/images/404-highlight.svg" alt="Imagem de Astronauta sem conexão com o foguete.">
		<a href="https://www.freepik.com/free-photos-vectors/business">www.freepik.com</a>
	</div>
	<h1>Houston, we've had a problem</h1>
	<h2>Parece que essa página não existe (ou nunca existiu). Use o menu e conheça meu site!</h2>
	<nav class="menu">
		<?php
            wp_nav_menu(["menu_class"=>"default-ul inline-ul"]);
        ?>
	</nav>
</main>


<?php get_footer(); ?>