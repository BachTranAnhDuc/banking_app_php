<?php require_once('../../../private/initialize.php') ?>

<?php $page_title='Edit Subject'; $css_link="../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<?php
if (!isset($_GET['id'])) {
    redirect_to(url_for('subjects/index.php'));
}

$id = $_GET['id'];


if (is_post_request()) {
    $subject = [];
    $subject['id'] = $id;
    $subject['menu_name'] = $_POST['menu_name'] ?? '';
    $subject['position'] = $_POST['position'] ?? '';
    $subject['visible'] = $_POST['visible'] ?? '';

    $result = update_subject($subject);

    redirect_to(url_for('subjects/show.php?id=' . $id));
}
else {
    $subject = find_subject_by_id($id);

    $subject_set = find_all_subjects();
    $subject_count = mysqli_num_rows($subject_set);
    mysqli_free_result($subject_set);
}
?>


<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
    <div>
        <a href="<?php echo "index.php" ?>">Back to List</a>
    </div>

    <div>
        <h1>Edit Subject</h1>

        <form action="<?php echo url_for("subjects/edit.php?id=" . hsc(ued($id))); ?>" method="post">
            <dl>
                <dt>Menu Name</dt>
                <dd>
                    <input type="text" name="menu_name" value="<?php echo hsc($subject['menu_name']); ?>"/>
                </dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position">
                        <?php
                            for ($i = 1; $i <= $subject_count; $i++) {
                                echo "<option value=\"{$i}\"";
                                if ($subject["position"] == $i) {
                                    echo " selected";
                                }
                                echo ">{$i}</option>";
                            }
                        ?>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd>
                    <input type="hidden" name="visible" value="0" />
                    <input type="checkbox" name="visible" value="1" <?php if (hsc($subject['visible']) == '1') { echo " checked"; }?>/>
                </dd>
            </dl>

            <div>
                <input type="submit" value="Edit Subject"/>
            </div>
        </form>
    </div>
</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>