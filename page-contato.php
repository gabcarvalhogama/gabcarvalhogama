<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>

<main class="container contact">
	<div class="row">
		<div class="col-md-6 contact--left">
			<h2>Entre em contato comigo...</h2>
			<ul class="default-ul">
				<li>
					<a href="mailto:eu@gabrielgamadev.com.br"v>
						<img src="<?=bloginfo("template_url")?>/assets/images/ic_email_filled.svg" alt="Ícone de E-mail"><span>eu@gabrielgamadev.com.br</span>
					</a>
				</li>
				<li>
					<a href="https://api.whatsapp.com/send?phone=5527996039678&text=Ol%C3%A1%2C%20Gabriel!" target="_blank">
						<img src="<?=bloginfo("template_url")?>/assets/images/ic_whatsapp_filled.svg" alt="Ícone de E-mail"><span>(27) 9 9603-9678</span>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/gabrielgamadev" target="_blank">
						<img src="<?=bloginfo("template_url")?>/assets/images/ic_facebook_filled.svg" alt="Ícone de E-mail"><span>/gabrielgamadev</span>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/gabrielgamadev/" target="_blank">
						<img src="<?=bloginfo("template_url")?>/assets/images/ic_instagram_filled.svg" alt="Ícone de E-mail"><span>@gabriel.carvalhogama</span>
					</a>
				</li>
				<li>
					<a href="https://github.com/gabrielcarvalhogama/" target="_blank">
						<img src="<?=bloginfo("template_url")?>/assets/images/ic_github_filled.svg" alt="Ícone de E-mail"><span>gabrielcarvalhogama</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="col-md-6 contact--right">
			<h2>... Ou eu entro em contato com você.</h2>
			<?=$response?>
			<form action="<?php 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>#contato" method="post">
				<div class="form-group">
					<label for="name">Qual o seu nome? <span class="text-danger">*</span></label>
					<input type="text" name="name" id="name" class="form-control" placeholder="Ex.: Maria" required value="<?=esc_attr($_POST['name']); ?>" />
				</div>
				<div class="form-group">
					<label for="email">Qual o seu e-mail? <span class="text-danger">*</span></label>
					<input type="email" name="email" id="email" class="form-control" placeholder="Ex.: ola@gabrielgamadev.com.br" required value="<?=esc_attr($_POST['email']); ?>" />
				</div>
				<div class="form-group">
					<label for="cellphone">Qual o seu celular? <span class="text-danger">*</span></label>
					<input type="tel" name="cellphone" id="cellphone" class="form-control" placeholder="(__) _ ____-____" required value="<?=esc_attr($_POST['cellphone']); ?>" />
				</div>
				<div class="form-row">
					<div class="col-md-8">
						<label for="">Como devo entrar em contato? <span class="text-danger">*</span></label>
						<div class="custom-control custom-switch">
							<div class="col-4">
								<img src="<?=bloginfo("template_url")?>/assets/images/ic_whatsapp_green.svg" alt="Ícone do WhatsApp" />
								<span>WhatsApp</span>
							</div>
							<div class="col-4">
								<input type="checkbox" class="custom-control-input" name="callType" id="customSwitch1" value="<?=esc_attr($_POST['callType']); ?>">
								<label class="custom-control-label" for="customSwitch1"></label>
							</div>
							<div class="col-4">
								<img src="<?=bloginfo("template_url")?>/assets/images/ic_call.svg" alt="Ícone de Ligação" />
								<span>Ligação</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<input type="submit" class="form-submit" value="Enviar mensagem" name="submitted" />
					</div>
				</div>
			</form>
		</div>
	</div>
</main>

<?php get_footer(); ?>