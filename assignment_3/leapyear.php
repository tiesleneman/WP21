<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Leap Year',
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
    <script src="scripts/leapyear.js"></script>

    <div class="row">
        <div class="column col-12">
            <?php if(isset($_POST['submit'])) { ?>
                <h1>Welcome, <?= $_POST['inputName'] ?></h1>
                <p>The next 5 leap years, this will be your age!</p>
                <?php if($_POST['inputPlace'] == 'Groningen') { ?>
                    <p>Wat mooi you live in het hoge noorden!</p>
                <?php } ?>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Year</th>
                        <th scope="col">Age</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2024</td>
                        <td><?= $_POST['inputAge'] + 3 ?></td>
                    </tr>
                    <tr>
                        <td>2028</td>
                        <td><?= $_POST['inputAge'] + 7 ?></td>
                    </tr>
                    <tr>
                        <td>2032</td>
                        <td><?= $_POST['inputAge'] + 11 ?></td>
                    </tr>
                    <tr>
                        <td>2036</td>
                        <td><?= $_POST['inputAge'] + 15 ?></td>
                    </tr>
                    <tr>
                        <td>2040</td>
                        <td><?= $_POST['inputAge'] + 19 ?></td>
                    </tr>
                    </tbody>
                </table>
            <?php } ?>
            <form action="leapyear.php" method="POST">
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter your name">
                </div>
                <div class="invalid-feedback">
                    Wrong!
                </div>
                <div class="form-group">
                    <label for="inputAge">Age</label>
                    <input type="number" class="form-control" id="inputAge" name="inputAge" placeholder="Enter your age">
                </div>
                <div class="invalid-feedback">
                    Wrong!
                </div>
                <div class="form-group">
                    <label for="inputName">E-mail</label>
                    <input type="email" class="form-control" id="emailField" name="inputEmail" placeholder="Enter your email">
                </div>
                <div class="invalid-feedback">
                    Wrong!
                </div>
                <div class="form-group">
                    <label for="inputPlace">Place/residence</label>
                    <input type="text" class="form-control" id="inputPlace" name="inputPlace" placeholder="Enter your place/residence">
                </div>
                <div class="invalid-feedback">
                    Wrong!
                </div>
                <button name="submit" id="button" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
<?php
include __DIR__ . '/tpl/body_end.php';
?>