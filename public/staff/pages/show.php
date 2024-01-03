<?php require_once('../../../private/initialize.php'); ?>

<?php
$id = $_GET['id'] ?? '1'; // PHP > 7.0
?>

<?php $page_title='Show Pages'; $css_link="../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">

  <a class="back-link" href="<?php echo url_for('pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="page show">

    Page ID: <?php echo hsc($id); ?>

  </div>

</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>
