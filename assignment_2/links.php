<?php
/* Header */
$page_title = 'Webprogramming Assignment 2';
$navigation = Array(
    'active' => 'Links',
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
        <h1>Welcome to the links section!</h1>
        <ul id="link_list">
            <li><a id="link" href="https://github.com/">Github</a> </li>
            <li><a id="link" href="https://www.facebook.com/">Facebook</a></li>
            <li><a id="link" href="https://www.dumpert.nl/">Dumpert</a></li>
            <li><a id="link" href="https://www.rug.nl/">RUG</a></li>
        </ul>
        <button class ="btn btn-primary" id="hide_list" type="button">Press the button!</button>
    </div>

    <div class="col-md-12">
        <div class="form-group">
        <input type="website" class="form-control" id="website_name" placeholder="Website">
        </div>
        <div class="form-group">
        <input type="url" class="form-control" id="url_name" placeholder="Url">
        </div>
        <button class ="btn btn-primary" id="add_url" type="button">Add the website to the list!</button>

    </div>
<?php
include __DIR__ . '/tpl/body-end.php';
/* Footer */
include __DIR__ . '/tpl/footer.php';
?>