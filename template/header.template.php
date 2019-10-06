<header class="header default">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="header--left">
					<a href="<?=get_site_url();?>"><img src="<?=bloginfo("template_url")?>/assets/images/Gabriel.png" alt="Foto de Gabriel" class="header--logo" /></a>
					<span class="header--left-keys">{}</span>
					<?php 
						if(is_single())
							echo '<span class="header--left-title">BLOG</span>';
						else if(is_category())
							echo '<h1 class="header--left-title">'.single_cat_title('', false).'</h1>';
						else if(is_search())
							echo '<h1 class="header--left-title">Pesquisa</h1>';
						else
							echo '<h1 class="header--left-title">'.get_the_title().'</h1>';
					?>
				</div>
			</div>
			<div class="col-md-8">
				<nav class="header--menu">
					<?php
	                    wp_nav_menu(["menu_class"=>"default-ul inline-ul"]);
	                ?>
				</nav>
			</div>
		</div>
	</div>
</header>