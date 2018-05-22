<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

	<!-- wrapper -->


        <div id="mb-main">
            <div id="mb-hmenu-bg" class="mb-bar mb-nav">
            </div>
            <div class="mb-sheet clearfix">


		<header class="mb-header header" role="banner">
			<div id="navigation"  class="nav-container">

				<!-- nav -->
<!--				<nav class="nav" role="navigation">-->
<!--					--><?php //lwp_nav(); ?>
<!--				</nav>-->
				<!-- /nav -->
			</div>

                <div class="mb-shapes">

                </div>

                <h1 class="mb-headline">
                    <a href="<?php home_url() ;?>"><?php bloginfo('name');?></a>
                </h1>
                <h2 class="mb-slogan">Производственное предприятие</h2>

                <nav class="mb-nav">
                    <div class="mb-nav-inner">
                        <ul class="mb-hmenu"><li><a href="o_kompanii.html">О компании</a></li><li><a href="politika.html">Политика</a></li><li><a href="produkciya.html">Продукция</a><ul><li><a href="produkciya/kontejjnery.html">Контейнеры</a></li><li><a href="produkciya/kontejjnernye_ploshhadki.html">Контейнерные площадки</a></li><li><a href="produkciya/autonovinka.html">Автоновинка</a></li><li><a href="produkciya/dorozhnoe_ograzhdenie.html">Дорожное ограждение</a></li><li><a href="produkciya/urny.html">Урны</a></li><li><a href="produkciya/zabory_i_drugoe.html">Заборы и другое</a></li></ul></li><li><a href="hit_prodaj.html">Хит продаж</a></li><li><a href="publications.html">Статьи</a></li><li><a href="kontakty.html">Контакты</a></li></ul>
                    </div>
                </nav>
		</header>				
