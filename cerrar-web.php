<?php
/*  Copyright 2014  Tecneca Networks, S.L.  (email : info@tecneca.com)
    
    Based on Close Site from Oakwood Creative and Freelancer template from http://startbootstrap.com/template-overviews/freelancer/

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
Plugin Name: Cerrar Web
Description: Si está activo, cierra la web. Los usuarios registrados pueden continuar navegando.
Version: 0.1
Author: Tecneca Networks
Author URI: http://tecneca.com
License: GPL2
*/

/* You can change $mantenimiento and $pie to put your own message and data */

function tec_plugin_web_cerrada() {

    $plugindir = plugins_url();
    $title = get_bloginfo('name');
    $mantenimiento = 'En estos momentos estamos renovando la web, disculpen las molestias';
    $pie = ' Copyright © '.$title;

	if(!is_user_logged_in()){
			echo '
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="sbellver at Tecneca .com">
    <title>'.$title.'</title>
   <link href="'.$plugindir.'/cerrar-web/close/css/bootstrap.min.css" rel="stylesheet">
   <link href="'.$plugindir.'/cerrar-web/close/css/freelancer.css" rel="stylesheet">
   <link href="'.$plugindir.'/cerrar-web/close/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body id="page-top" class="index" style="background-color: #18bc9c;">

    
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="'.$plugindir.'/cerrar-web/close/img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">'.$title.'</span>
                        <hr class="star-light">
                        <span class="skills">'.$mantenimiento.'</span>
                    </div>
                    <span class="skills">'.$pie.'</span>
                </div>
            </div>
        </div>
    </header>
</body>

</html>

';
		die;
	}
}
add_action( 'send_headers', 'tec_plugin_web_cerrada', 0 );
?>