<?php

	if ( function_exists( 'register_nav_menu' ) ) 
		register_nav_menu('main-menu', 'Menu Principal' );

	add_theme_support( 'post-thumbnails');
	set_post_thumbnail_size( 720, 480, true );





	function opengraph_tags() {
        // defaults
        $title = get_bloginfo('title');
        $img_src = get_stylesheet_directory_uri() . '/assets/images/default-opengraph.jpg';
        $excerpt = get_bloginfo('description');
        // for non posts/pages, like /blog, just use the current URL
        $permalink = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if(is_single() || is_page()) {

            global $post;
            setup_postdata( $post );

            $title = get_the_title();
            $permalink = get_the_permalink();

            if (has_post_thumbnail($post->ID)) {
                $img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];
            }

            $excerpt = get_the_excerpt();

            if ($excerpt) {
                $excerpt = strip_tags($excerpt);
                $excerpt = str_replace("", "'", $excerpt);
            }
        }
        echo '<meta property="fb:app_id" content="768541876932707" />
        <meta property="og:title" content="'.$title.'"/>
        <meta property="og:description" content="'.$excerpt.'"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="'.$permalink.'"/>
        <meta property="og:site_name" content="'.get_bloginfo().'"/>
        <meta property="og:image" content="'.$img_src.'"/>';
    }








	$submitted = $_POST["submitted"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$cellphone = $_POST["cellphone"];
	$callType = $_POST["callType"];

    $response = "";
    function my_contact_form_generate_response($type, $message){
        global $response;
        $response = ($type == "success") ?  "<div class='alert alert-success'>{$message}</div>" : "<div class='alert alert-danger'>{$message}</div>";
    }

    //php mailer variables
    $to = get_option('admin_email');
    $subject = "Alguém enviou mensagem de ".get_bloginfo('name');
    $headers = 'From: '. $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";

	if($submitted){
		if(empty($name)){
			my_contact_form_generate_response("error", "Você não disse o seu nome!");
		}else if(empty($email)){
			my_contact_form_generate_response("error", "Você não disse o seu e-mail!");
		}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			my_contact_form_generate_response("error", "Parece que esse e-mail não é válido!");
		}else if(empty($cellphone)){
			my_contact_form_generate_response("error", "Você não disse o seu número de celular!");
		}else if(empty($callType)){
			my_contact_form_generate_response("error", "Parece que o tipo de contato é inválido!");
		}else{
			$sent = wp_mail($to, $subject, strip_tags($message), $headers);
            if($sent) my_contact_form_generate_response("success", $message_sent);
            else my_contact_form_generate_response("error", $message_unsent);
		}
	}