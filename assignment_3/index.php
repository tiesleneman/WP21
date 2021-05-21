<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'News',
    'items' => Array(
        'News' => '/assignment_3/index.php',
        'Add news item' => '/assignment_3/news_add.php',
        'Leap Year' => '/assignment_3/leapyear.php',
        'Simple Form' => '/assignment_3/simple_form.php'
    )
);

include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>
    <script type="application/javascript" src="scripts/main.js"></script>


    <div class="card text-center news-card">
        <div class="card-header"></div>
        <div class="card-body"><h5 class="card-title"></h5>
            <p class="card-text"></p>
            <div class=“row">
                <div class="col-md-6" style="text-align: right;">
                    <form action="news_edit.php" method="POST">
                        <input  type="hidden" name="id" value="1">
                        <button type="submit" class="btn btn-light">Edit</button>
                    </form>
                </div>
                <div class="col-md-6" style="text-align: left;">
                    <button class="btn btn-danger article_remove" data-article-id="1">Remove</button>
                </div>

            </div>
        </div>
        <div class="card-footer text-muted"></div>
    </div>
<?php
include __DIR__ . '/tpl/body_end.php';
?>