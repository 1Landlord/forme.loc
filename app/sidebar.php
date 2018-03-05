<?php
    require_once 'blog/dbc.php';
    require_once 'blog/functions.php';
    $categories = get_categories();
?>

    <!-- SIDEBAR -->
    <div class="sidebar col-lg-3 col-md-3">
        
            <!-- META WIDGET -->
            <div class="sidepanel widget_meta">
                <?php foreach($categories as $category): ?>
                <ul>
                    <li>
                    <a href="category.php?id=<?=$category['id']?>"> <?=$category["title"]?></a>
                    </li>
                </ul>
                <?php endforeach; ?>
            </div>
            <!-- //META WIDGET -->
            
            <!-- POPULAR POSTS WIDGET -->
            <div class="sidepanel widget_popular_posts">
            <h3><b>Последние</b> статьи</h3>
            <?php
                $query = "SELECT title, img, alt, date FROM articles WHERE title IS NOT NULL ORDER BY date DESC LIMIT 3";
                $data = mysqli_query($dbc, $query);

                // Прохождение в цикле массива данных
                while ($row = mysqli_fetch_array($data)) {
                echo '<div class="recent_posts_widget clearfix">';
                echo '<div class="post_item_img_widget">';
                    echo '<img class="img-responsive" src=" ' . $row['img'] .' " alt=" ' . $row['alt'] .' " />';
                echo '</div>';
                echo '<div class="post_item_content_widget">';
                echo '<h2><a class="title" href="#">' . $row['title'] . '</a></h2>';
                echo '<ul class="post_item_inf_widget"><li><b>Дата: </b> ' . $row['date'] . ' </li></ul>';
                echo '</div>';
                echo '</div>';
                }
                echo '</div>';
            ?>
            <!-- //POPULAR POSTS WIDGET -->

            <hr>

            <!-- TEXT WIDGET -->
            <div class="sidepanel widget_text">
                <h3>
                    <b>O</b> Блоге</h3>
                <p>Возможно собраная информация кому то, и пригодится. Скопились заметки, решил поделиться! Да и самому удобней здесь память освежить. А так же практика, практика, практика.</p>
            </div>
            <div>
            <a href="http://proflinks.ru/registration/17413" target="_blank">
                <img src="http://proflinks.ru/banners/220x350_2.png" alt="продвижение сайта" title="продвижение сайта" /></a>
            </div>
            <!-- //TEXT WIDGET -->
            
    </div>
    <!-- //SIDEBAR -->


    