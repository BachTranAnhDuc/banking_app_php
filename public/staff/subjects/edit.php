<?php require_once('../../../private/initialize.php') ?>

<?php $page_title='Edit Subject'; $css_link="../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<?php
$test = $_GET['test'] ?? 'No content here';
$result = '';

if ($test == '404') {
    error_404();
}
elseif ($test == '500') {
    error_500();
}
elseif ($test == 'redirect') {
    redirect_to(url_for("subjects/index.php"));
}
else {
    $result = 'No error';
}
?>


<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
    <div>
        <h1 class="text-2xl font-bold text-pink-500"><?php echo $test; ?></h1>
        <a href="<?php echo "index.php" ?>">Back to List</a>
    </div>

    <div>
        <h1>Edit Subject</h1>

        <form action="" method="post">
            <dl>
                <dt>Menu Name</dt>
                <dd>
                    <input type="text" name="menu_name" value=""/>
                </dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position">
                        <option value="1">1</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd>
                    <input type="hidden" name="visible" value="0" />
                    <input type="checkbox" name="visible" value="1" />
                </dd>
            </dl>

            <div>
                <input type="submit" value="Edit Subject"/>
            </div>
        </form>
    </div>
</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>