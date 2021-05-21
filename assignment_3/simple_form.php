<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
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
<div class="container"
    <div class="row">
        <div class="column col-12">
            <?php if(isset($_GET['submit'])) { ?>
                <h1>Welcome <?= $_GET['inputName'] ?></h1>
                <?php if($_GET['inputPlace'] == 'Amsterdam') { ?>
                    <p>You're from the capital of the Netherlands!</p>
                <?php }
                else { ?>
                    <p>You're from <?= $_GET['inputPlace'] ?></p>
                <?php }
            } ?>


            <form action="simple_form.php" method="GET">
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="inputPlace">Place/residence</label>
                    <input type="text" class="form-control" name="inputPlace" id="inputPlace" placeholder="Place/residence">
                </div>
                <button name="submit" onclick="validateForm()" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
?>