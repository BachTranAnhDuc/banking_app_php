<?php require_once('../../../private/initialize.php') ?>

<?php $page_title='Delete Page'; $css_link="../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<?php
if(!isset($_GET['id'])) {
  redirect_to(url_for('pages/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

  $result = delete_page($id);
  redirect_to(url_for('pages/index.php'));

} else {
  $page = find_page_by_id($id);
}
?>


<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
    <div>
        <a href="<?php echo "index.php" ?>">Back to List</a>
    </div>

    <div>
        <h1>Delete Page</h1>

        <p>Are you sure you want to delete this page?</p>
        <p><?php echo hsc($page['menu_name']); ?></p>

        <form action="<?php echo url_for("pages/delete.php?id=" . hsc(ued($page['id']))) ?>" method="post">
            <div>
                <button type="submit">Delelte Subject</button>
            </div>
        </form>
    </div>
</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>