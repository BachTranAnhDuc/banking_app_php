
<?php require_once('../../../private/initialize.php') ?>

<?php $page_title='Edit Page'; $css_link="../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<?php
if (!isset($_GET['id'])) {
    redirect_to(url_for('pages/index.php'));
}

$id = $_GET['id'];
$menu_name = "";
$position = "";
$visible = "";

if (is_post_request()) {
    $menu_name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';
}
?>


<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
    <div>
        <a href="<?php echo "index.php" ?>">Back to List</a>
    </div>

    <div>
        <form action="<?php echo url_for("pages/edit.php?id=" . hsc(ued($id))); ?>" method="post">
            <dl>
                <dt>Menu Name</dt>
                <dd>
                    <input type="text" name="menu_name" value="<?php echo hsc($menu_name); ?>"/>
                </dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position">
                        <option value="1" <?php if($position == '1'){ echo " selected"; }?>>1</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd>
                    <input type="hidden" name="visible" value="0" />
                    <input type="checkbox" name="visible" value="1" <?php if ($visible == '1') { echo " checked"; } ?>/>
                </dd>
            </dl>

            <div>
                <button type="submit">Edit Page</button>
            </div>
        </form>
    </div>
</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>