<?php require_once('../../../private/initialize.php') ?>

<?php $page_title='Staff New'; $css_link="../../stylesheets/dist/style.css"?>

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
    <h1 class="text-2xl font-bold text-pink-500"><?php echo $test; ?></h1>
</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>