<?php

	if ( function_exists( 'register_nav_menu' ) ) 
		register_nav_menu('main-menu', 'Menu Principal' );

	add_theme_support( 'post-thumbnails');

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