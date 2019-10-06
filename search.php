<?php /* Template Name: Search */ ?>
<?php get_header(); ?>

<main class="container blog">
	<div class="row">
		<div class="col-md-6">
			<h2>Aqui está o que você procurou:</h2>
			<!-- <h3>Vamos compartilhar conhecimentos.</h3> -->
			<form action="<?=get_option('home')?>" class="signNewsletter">
				<div class="form-group">
					<input type="search" name="s" id="s" required="required" placeholder="Faça uma pesquisa..." class="input-field" value="<?=get_search_query()?>" />
					<button class="input-submit">
						<img src="<?=bloginfo("template_url")?>/assets/images/ic_arrow_right.svg" />
					</button>
				</div>
			</form>
		</div>
		<div class="col-md-6 blog--highlight">
			<img src="<?=bloginfo("template_url")?>/assets/images/ic_highlight_blog.svg" alt="Ícone de destaque de Blog">
		</div>
	</div>
</main>
<section class="posts">
	<div class="container">
		<div class="posts--group">
			<h4 class="posts--group-category">Exibindo resultados para <strong><?=get_search_query()?></strong> <span>{</span></h4>
			<div class="row">


				<?php if(have_posts()):
					while(have_posts()):
						the_post();
				?>
					<div class="col-md-3 posts--post">
						<div class="posts--post-image">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php
									if(has_post_thumbnail()){
										$thumb = get_the_post_thumbnail_url(); 
										$alt = get_post_meta ( $image_id, '_wp_attachment_image_alt', true );
										echo '<img src="'.$thumb.'" alt="' . esc_html ( $alt ) . '" />';
									}else{
										echo '<img src="'.get_template_directory_uri().'/assets/images/placeholder.jpg" alt="" />';
									}
								?>
							</a>
						</div>
						<div class="posts-post-content">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h5><?php the_title(); ?></h5></a>
							<p><?php echo get_the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Continuar lendo &rarr;</a>
						</div>
					</div>
				<?php endwhile;else: ?>
					Oops, não consegui encontrar postagens para essa pesquisa.
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>