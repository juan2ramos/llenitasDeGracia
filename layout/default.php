<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<head>

    <title><?php echo $title ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="Llenitas de gracia"/>
    <meta name="contact" content="webmaster@simonsein.com"/>
    <meta name="description" content="La arepa, alimento tradicional colombiano, decide llenarse de la gracia de diversos sabores del mundo, ofreciendo una propuesta gastronómica para el disfrute y deleite de quien la consume.
        Para empezar esta travesía Llenitas de Gracia comienza en casa y viaja a varios países rescatando recetas tradicionales aportándole un toque personal a cada una de ellas."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>

    <!-- Meta Facebook -->
    <meta property="og:url" content="http://llenitasdegracia.com">
    <meta property="og:title" content="Llenitas de gracia - Restauramte de arepas gourmet"/>
    <meta property="og:description"
          content="La arepa, alimento tradicional colombiano, decide llenarse de la gracia de diversos sabores del mundo, ofreciendo una propuesta gastronómica para el disfrute y deleite de quien la consume. Para empezar esta travesía Llenitas de Gracia comienza en casa y viaja a varios países rescatando recetas tradicionales aportándole un toque personal a cada una de ellas."/>
    <meta property="og:image" content="images/llenitas-de-gracia.png"/>
    <meta property="og:site_name" content="Llenitas de gracia"/>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>


    <!-- Estilos -->
    <link rel="stylesheet" href="css/normalize.css"/>
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>


</head>
<body>

<div class="open-nav">
    <div class="line one"></div>
    <div class="line two"></div>
    <div class="line three"></div>
</div>
<header>
    <figure class="logo"><a href="/"><img src="images/logo-llenitas-de-gracia.png" alt="logo llenitas de gracia"/></a>
    </figure>
    <nav>
        <ul>
            <li><a href="home">home</a></li>
            <li><a href="menu">menú</a></li>
            <li><a href="#">recomendada</a></li>
            <li><a href="origen">el origen</a></li>
            <li><a href="contacto">contacto</a></li>
            <li><a href="domicilios">Domicilios</a></li>
            <li><a href="#">eventos</a></li>
        </ul>
    </nav>
    <div class="domicilios-fixed">
        <?php include("images/moto.svg") ?>
        <a href="tel:3167668821">Domicilios 316 7668821</a>
    </div>
    <ul class="network">

        <li><a href="https://www.facebook.com/LlenitasDeGracia" target="_blank" class="icon-facebook3"> </a></li>
        <li><a href="https://instagram.com/llenitasdegracia/" target="_blank" class="icon-instagram-with-circle"> </a>
        </li>
        <li><a href="https://www.pinterest.com/llenitasdgracia/" target="_blank" class="icon-pinterest"> </a></li>
    </ul>
</header>
<main>
    <?php include $fileName; ?>
</main>

<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/script.js"></script>
</body>
</html>