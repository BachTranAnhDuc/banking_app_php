<?php require_once('../../../private/initialize.php') ?>

<?php $page_title='Staff Object'; $css_link="../../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<?php
$id = $_GET['id'] ?? '1';

$subject = find_subject_by_id($id);
?>

<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
    <h1><?php echo hsc($id) ?></h1>

    <a href="<?php echo "index.php" ?>">Back to List</a>

    <div>
        <dl>
            <dt>Menu name</dt>
            <dd>
                <?php echo hsc($subject['menu_name']); ?>
            </dd>
        </dl>

        <dl>
            <dt>Position</dt>
            <dd>
                <?php echo hsc($subject['position']); ?>
            </dd>
        </dl>

        <dl>
            <dt>Visible</dt>
            <dd>
                <?php echo hsc($subject['visible'] == '1' ? 'true' : 'false'); ?>
            </dd>
        </dl>
    </div>
</div>


<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>