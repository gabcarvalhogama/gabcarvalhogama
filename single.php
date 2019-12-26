<?php get_header(); ?>

<main class="single">
	<div class="single--thumb">
		<img src="<?=( has_post_thumbnail() ) ? get_the_post_thumbnail_url() : bloginfo('template_url').'/assets/images/post-placeholder.png';?>" alt="Imagem de destaque de: <?=the_title()?>">
	</div>
	<div class="single--post">
		<h1><?php the_title(); ?></h1>
		<div class="single--post-meta">
			<span><i class="fas fa-calendar"></i> Postado em <strong><?php the_time('j \d\e F \d\e Y')?></strong></span>
		</div>

		<article class="single--post-content">
			<?php
     			if ( have_posts() ) : 
     				while ( have_posts() ) : the_post();
						the_content();
		            endwhile;
	            else:
	                _e('<h2 class="text-center">Oops! Postagem não encontrada!</h2>');
	            endif;
	 		?>
		</article>

		<div class="single--post-share">
			<ul class="default-ul">
				<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?=get_permalink()?>"><i class="fab fa-facebook-f"></i></a></li>
				<li><a target="_blank" href="http://twitter.com/share?text=Ei, vejam este artigo: <?=the_title();?>&url=<?=get_permalink()?>"><i class="fab fa-twitter"></i></a></li>
				<li><a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
			</ul>
		</div>

		<div class="single--post-comments">
			<div id="disqus_thread"></div>
			<script>
			var disqus_config = function () {
				this.page.url = "<?=the_permalink()?>";  // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = "<?=the_permalink()?>";
			};
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://gabriel-gama-dev.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Por favor, ative o JavaScript para ver <a href="https://disqus.com/?ref_noscript">os comentários.</a></noscript>                          
		</div>
	</div>

</main>

<?php get_footer(); ?>