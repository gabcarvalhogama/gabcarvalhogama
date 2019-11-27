<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

<main class="container blog">
	<div class="row">
		<div class="col-md-6">
			<!-- <h2>Assine nossa newsletter!</h2>
			<h3>E fique por dentro do que estamos falando.</h3>
			<form action="" class="signNewsletter">
				<div class="form-group">
					<input type="email" required="required" placeholder="seuemail@mundo.com.br" class="input-field" />
					<button class="input-submit">
						<img src="<?=bloginfo("template_url")?>/assets/images/ic_arrow_right.svg" />
					</button>
				</div>
			</form> -->
			<h2>Bem-vindo ao meu blog!</h2>
			<h3>Vamos compartilhar conhecimentos.</h3>
			<form action="<?=get_option('home')?>" class="signNewsletter">
				<div class="form-group">
					<input type="search" name="s" id="s" required="required" placeholder="Faça uma pesquisa..." class="input-field" />
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

	

		<?php 
			$categories = ['Carreira', 'HTML', 'CSS', 'JS', 'BACK-END', 'MOBILE'];
			foreach($categories as $category):
		?>
		<div class="posts--group">
			<h4 class="posts--group-category"><?=$category?> <span>{</span></h4>
			<div class="row">
				<?php 
					$args = array(
						'posts_per_page' => 4,
						'category_name' => $category,
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$posts_array = get_posts($args);
					if(count($posts_array) > 0):
						foreach($posts_array as $post):  setup_postdata($post);
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
				<?php endforeach;else: ?>
					Não encontrei postagens para <?=$category?> categoria.
				<?php endif; ?>
			</div>
			<a href="category/<?=$category?>" class="posts--group-more">Ver outras &rarr;</a>
		</div>
		<?php endforeach; ?>
	</div>
</section>
<?php get_footer(); ?>