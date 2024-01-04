
<?php require_once('../../../private/initialize.php') ?>

<?php $page_title='Create Subject'; $css_link="../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<?php
$menu_name = $_POST['menu_name'] ?? '';
$position = $_POST['position'] ?? '';
$visible = $_POST['visible'] ?? '';

// echo "Form parameters <br/>";
// echo "Menu name: " . $menu_name . "<br/>";
// echo "Visible: " . $visible . "<br/>";
?>


<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
    <div>
        <a href="<?php echo "index.php" ?>">Back to List</a>
    </div>

    <div>
        <p>Form Parameters</p>

        <p>Menu name: <?php echo $menu_name ?></p>

        <p>Position: <?php echo $position ?></p>

        <p>Vsible: <?php echo $visible ?></p>
    </div>
</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>