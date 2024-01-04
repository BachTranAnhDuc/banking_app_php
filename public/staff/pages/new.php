<?php require_once('../../../private/initialize.php') ?>

<?php $page_title='New Page'; $css_link="../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<?php
if(is_post_request()) {

  $page = [];

  $page['subject_id'] = $_POST['subject_id'] ?? '';
  $page['menu_name'] = $_POST['menu_name'] ?? '';
  $page['position'] = $_POST['position'] ?? '';
  $page['visible'] = $_POST['visible'] ?? '';
  $page['content'] = $_POST['content'] ?? '';

  $result = insert_page($page);

  $new_id = mysqli_insert_id($db);

  redirect_to(url_for('pages/show.php?id=' . $new_id));
} 
else {
  $page = [];

  $page['subject_id'] = '';
  $page['menu_name'] = '';
  $page['position'] = '';
  $page['visible'] = '';
  $page['content'] = '';

  $page_set = find_all_pages();
  $page_count = mysqli_num_rows($page_set) + 1;
  mysqli_free_result($page_set);
}
?>


<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
    <div>
        <a href="<?php echo "index.php" ?>">Back to List</a>
    </div>

    <div>
        <form action="<?php echo url_for("pages/new.php"); ?>" method="post">
            <dl>
                <dt>Subject</dt>

                <dd>
                    <select name="subject_id">
                    <?php
                        $subject_set = find_all_subjects();

                        while($subject = mysqli_fetch_assoc($subject_set)) {
                            echo "<option value=\"" . hsc($subject['id']) . "\"";

                            if($page["subject_id"] == $subject['id']) {
                                echo " selected";
                            }
                            echo ">" . hsc($subject['menu_name']) . "</option>";
                        }

                        mysqli_free_result($subject_set);
                    ?>
                    </select>
                </dd>
            </dl>

            <dl>
                <dt>Menu Name</dt>
                <dd>
                    <input type="text" name="menu_name" value="<?php echo hsc($page['menu_name']); ?>"/>
                </dd>
            </dl>

            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position">
                        <?php
                            for ($i = 1; $i <= $page_count; $i++) {
                                echo "<option value=\"{$i}\"";

                                if ($page["position"] == $i) {
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
                    <input type="checkbox" name="visible" value="1" <?php if ($page['visible'] == '1') { echo " checked"; } ?>/>
                </dd>
            </dl>

            <dl>
                <dt>Content</dt>
                <dd>
                    <textarea name="content" cols="60" rows="10">
                        <?php echo hsc($page['content']); ?>
                    </textarea>
                </dd>
            </dl>

            <div>
                <button type="submit">Create Page</button>
            </div>
        </form>
    </div>
</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>