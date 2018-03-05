<?php
    require_once 'blog/dbc.php';
    require_once 'blog/functions.php';
    
    $article_id = $_GET['article_id'];
    //Получаем массив статьи
    $article = get_article_by_id($article_id);

?>
<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
    <meta charset="utf-8">

    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99829182-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-99829182-1');
    </script>
    
    <title><?=$article['title']?></title>
    <meta name="description" content="Два домена один сайт, насколько доменов на сайт">
    <meta name="keywords" content="Склейка доменов, веб-разработка">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <meta property="og:image"        content="<?=$article['img']?>" />
    <meta property="og:image:width"  content="720" />
    <meta property="og:image:height" content="460" />
    <meta property="og:title"        content="<?=$article['title']?>" />
    <meta property="og:description"  content="Два домена на один сайт. Зеркало сайта, склейка доменов." />
    <meta property="og:url"          content="https://masterche.ru/blog/hosting/odin-sajt-dva-domena.html" />
    <meta property="og:type"         content="article" />
    <meta property="article:published_time" content="<?=$article['date']?>" />
    <meta property="article:section" content="Хостинг и домены" /> 
    <meta property="fb:app_id"       content="779526218917383" />
    <meta name='author'              content='<?=$article['author']?>' />



    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#F8F8F8">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#F8F8F8">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#F8F8F8">
    <meta name="yandex-verification" content="95d24a0bee5bb759" />
    <style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>

</head>

<body class="blog">
    <div class="preloader"><div class="pulse"></div></div>

<!--============ Header ====================-->
<?php
		require_once "blocks/header.php";
?>
<!--============ / Header ====================-->

<article class=item-article>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumbs">
                    <a href="/">Главная</a>
                    <a href="blog.html">Блог</a>
                    <a class="active" href="javascript:void(0);"><?=$article['title']?></a>
                </div>
            </div>
            <div class="col-sm-9">
              
                <h1><?=$article['title']?></h1>
                    <ul class="blog_post_info">
                        <li><i class="fa fa-user-o" aria-hidden="true"></i> <?=$article['author']?></li>
                        
                        <li class="blog_post_date"><i>Опубликовано: </i><?=$article['date']?></li>
                        <li><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $article['views'];?></li>
                    </ul>
                    <img class="img-responsive" src="<?=$article['img']?>" alt="<?=$article['alt']?>" />
                    <br />
                    <?=$article['content']?>
                    <br />

            <p>ПОДЕЛИТЬСЯ СТАТЬЕЙ:</p>
            <!-- Rambler.Likes script start -->
            <div class="rambler-share"></div>
            <script>
            (function() {
            var init = function() {
            RamblerShare.init('.rambler-share', {
                "style": {
                    "buttonHeight": 33,
                    "iconSize": 20,
                    "borderRadius": 50
                },
                "utm": "utm_medium=social",
                "counters": true,
                "buttons": [
                    "vkontakte",
                    "facebook",
                    "odnoklassniki",
                    "twitter",
                    "moimir",
                    "googleplus",
                    "telegram",
                    "viber",
                    "whatsapp"
                ]
            });
            };
            var script = document.createElement('script');
            script.onload = init;
            script.async = true;
            script.src = 'https://developers.rambler.ru/likes/v1/widget.js';
            document.head.appendChild(script);
            })();
            </script>
            <!--  Rambler.Likes script end  -->
            </div> <!--/ col-sm-9-->

            <!--============ sidebar ================-->
            <?php
                require_once "sidebar.php";
                mysqli_close($dbc);
            ?>
            <!--============ /sidebar ================--> 
            

        </div> <!-- /row -->
    </div><!-- /container -->
</article><!-- /article -->

<!--Подключения библиотек min.css, min.js-->	
<?php  
require_once "blog/appvars.php";
?>
<!-- /Подключения библиотек min.css, min.js-->

<!--============ Footerß ================-->
<?php
    require_once "blocks/footer.php";
?>
<!--============ /Footerß ================-->

