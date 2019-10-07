<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title><?php
				$site_description = get_bloginfo( 'description', 'display' );
				$site_name = get_bloginfo( 'name' );
			    //for home page
				if ( $site_description && ( is_home() || is_front_page() ) )
					echo $site_name.' - '.$site_description; 
				else if(is_single())
					echo $site_name . ' - '.get_the_title();
				else if(is_category())
					echo $site_name . " - ".single_cat_title('', false);
				else if(is_404())
					echo $site_name . " - 404";
				else if(is_search())
					echo $site_name . " - Resultados para ".get_search_query();
				else
					echo $site_name . ' - '.get_the_title();
			?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		
	   	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?=bloginfo("template_url")?>/assets/css/styles.css" type="text/css" />
	    <meta name="theme-color" content="#839ECB" />
	</head>
	<body>

		<?php 
		if(!is_home() AND !is_404())
			include_once("template/header.template.php");