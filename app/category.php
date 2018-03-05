<?php
    require_once 'blog/dbc.php';
    require_once 'blog/functions.php'; 
    $category_id = $_GET['id'];
    
    //Получаем массив категории
    $articles = get_article_by_category($category_id);
    $category_title = get_category_title($category_id);
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
  <title><?=$category_title?></title>
  <meta name="description" content="Категория OpenCart, статьи по OpenCart, ocStore">
  <meta name="keywords" content="Блог it, веб-разработка">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


  <meta property="og:image"        content="img/article/redirect.jpg" />
  <meta property="og:image:width"  content="700" />
  <meta property="og:image:height" content="460" />
  <meta property="og:type"         content="article" />
  <meta property="og:title"        content="Категория Хостинг, статьи по хостингу, доменам и т.д." />
  <meta property="og:description"  content="Статьи по OpenCart и ocStore" />
  <meta property="og:url"          content="https://masterche.ru/opencart.html" />
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

<article class=category-blog>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumbs">
                    <a href="/">Главная</a>
                    <a href="blog.html">Блог</a>
                    <a class="active" href="javascript:void(0);"><?php echo $category_title; ?></a>
                </div>
            </div>
            <!-- BLOG BLOCK -->
            <div class="blog_block col-lg-9 col-md-9">
                <!-- BLOG POST -->
                <?php foreach($articles as $article): ?>
                <div class="blog_post clearfix" data-animated="fadeInUp">
                    <div class="blog_post_img">
                        <img class="img-responsive" src="<?php echo $article['img']; ?>" alt="<?php echo $article['alt']; ?>" />
                        <a class="zoom" href="article.php?article_id=<?php echo $article['id']; ?>" ></a>
                    </div>
                    <div>
                        <div class="blog_post_date"><i>Опубликовано: </i> <?php echo $article['date']; ?></div>
                        <h2>
                            <a class="blog_post_title" href="article.php?article_id=<?php echo $article['id'];?>" ><?php echo $article['title']; ?></a>
                        </h2>
                        <ul class="blog_post_info">
                            <li><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo $article['author'];?></li>
                            <li><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $article['views'];?></li>
                        </ul>
                        <hr>
                        <div class="blog_post_content"><?php echo $article['description'];?></div>
                        <a class="read_more_btn" href="article.php?article_id=<?php echo $article['id'];?>" >Читать далее</a>
                    </div>
                </div><!-- //BLOG POST -->
                <?php endforeach; ?>
                    
                    <!-- PAGINATION 
                    <ul class="pagination clearfix">
                        <li class="active"><a href="javascript:void(0);" >1</a></li>
                        <li><a href="javascript:void(0);" >2</a></li>
                        <li><a href="javascript:void(0);" >3</a></li>
                        <li><a href="javascript:void(0);" >. . .</a></li>
                        <li><a href="javascript:void(0);" >7</a></li>
                    </ul>//PAGINATION -->
            </div><!-- //BLOG BLOCK -->
            <!--======= aside =======-->
                <?php
                    require_once "sidebar.php";
                    mysqli_close($dbc);
                ?>
            <!--====== /aside =======-->

        </div><!--/row-->
    </div><!--/container-->
  </article>

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


