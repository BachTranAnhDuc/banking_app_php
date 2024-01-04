<?php require_once('../../../private/initialize.php') ?>

<?php $page_title='New Page'; $css_link="../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<?php
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
        <form action="<?php echo url_for("pages/new.php"); ?>" method="post">
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
                <button type="submit">Create Page</button>
            </div>
        </form>
    </div>
</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>