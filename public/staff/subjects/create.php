
<?php require_once('../../../private/initialize.php') ?>

<?php $page_title='Create Subject'; $css_link="../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<?php
if(is_post_request()) {
  $subject = [];
  $subject['menu_name'] = $_POST['menu_name'] ?? '';
  $subject['position'] = $_POST['position'] ?? '';
  $subject['visible'] = $_POST['visible'] ?? '';

  $result = insert_subject($subject);
  $new_id = mysqli_insert_id($db);

  redirect_to(url_for('subjects/show.php?id=' . $new_id));

} else {
  redirect_to(url_for('subjects/new.php'));
}
?>


<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
    <div>
        <a href="<?php echo "index.php" ?>">Back to List</a>
    </div>

</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>