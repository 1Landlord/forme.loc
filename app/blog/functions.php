
<?php
    function get_categories() {
        global $dbc;

        $sql = "SELECT * FROM categoryes";
        // помещаем результат запроса в $result
        $result = mysqli_query($dbc, $sql);
        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $categories;
    }

    function get_articles() {
        global $dbc;

        $sql = "SELECT * FROM articles";
        $result = mysqli_query($dbc, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $articles;
    }
    //функция вывода статьи
    function get_article_by_id($article_id) {
        global $dbc;

        $sql = "SELECT * FROM articles WHERE id = ".$article_id;
        $result = mysqli_query($dbc, $sql);
        $article = mysqli_fetch_assoc($result);
        return $article;
    }
    //функция вывода категорий
    function get_article_by_category($category_id) {
        global $dbc;

        $category_id = mysqli_real_escape_string($dbc, $category_id);
        $sql = 'SELECT * FROM articles WHERE category_id = " '. $category_id. ' "';
        $result = mysqli_query($dbc, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $articles;
    }
    //функция вывода названия категории
    function get_category_title($category_id) {
        global $dbc;

        $category_id = mysqli_real_escape_string($dbc, $category_id);
        $sql = 'SELECT title FROM categoryes WHERE id = " '. $category_id. ' "';

        $result = mysqli_query($dbc, $sql);
        $category = mysqli_fetch_assoc($result);
        return $category['title'];
    }

?>

