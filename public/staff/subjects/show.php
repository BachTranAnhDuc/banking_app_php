<?php require_once('../../../private/initialize.php') ?>

<?php $page_title='Staff Object'; $css_link="../../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<?php
$id = $_GET['id'] ?? '1';
?>

<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
    <h1><?php echo hsc($id) ?></h1>

    <a href="<?php echo "index.php" ?>">Back to List</a>

    <ul>
        <li><a href="show.php?name=<?php echo ued("Anh Duc")?>">Link 1</a></li>

        <li><a href="show.php?company=<?php echo ued("Anh Duc")?>">Link 2</a></li>

        <li><a href="show.php?query=<?php echo ued("*!@#")?>">Link 3</a></li>
    </ul>
</div>


<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>