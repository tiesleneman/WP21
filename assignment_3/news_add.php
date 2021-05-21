<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Add news item',
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

<form action="scripts/add_item.php" method="POST">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="article">Article</label>
        <textarea class="form-control" id="article" name="article" rows="3"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php
include __DIR__ . '/tpl/body_end.php';
?>