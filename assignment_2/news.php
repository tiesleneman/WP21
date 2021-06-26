<?php
/* Header */
$page_title = 'Webprogramming Assignment 2';
$navigation = Array(
    'active' => 'News',
    'items' => Array(
        'Home' => '/assignment_2/index.php',
        'Links' => '/assignment_2/links.php',
        'News' => '/assignment_2/news.php',
        'Future' => '/assignment_2/future.php'
    )
);
include __DIR__ . '/tpl/head.php';
/* Body */
include __DIR__ . '/tpl/body-start.php';
?>
    <div class="col-md-12">
        <h1>Welcome to the news section of my website!</h1>
    </div>
<?php
include __DIR__ . '/tpl/body-end.php';
/* Footer */
include __DIR__ . '/tpl/footer.php';
?>