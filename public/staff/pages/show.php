<?php require_once('../../../private/initialize.php'); ?>

<?php
$id = $_GET['id'] ?? '1'; // PHP > 7.0

$page = find_page_by_id($id);
?>

<?php $page_title='Show Pages'; $css_link="../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">

  <a href="<?php echo url_for('pages/index.php'); ?>">&laquo; Back to List</a>

  <div>
    <h1>
      Page ID: <?php echo hsc($id); ?>
    </h1>

    <div>
      <?php $subject = find_subject_by_id($page["subject_id"]); ?>

      <dl>
        <dt>Subject</dt>
        <dd>
          <?php echo hsc($subject['menu_name'])?>
        </dd>
      </dl>

      <dl>
        <dt>Position</dt>
        <dd>
          <?php echo hsc($page['position'])?>
        </dd>
      </dl>

      <dl>
        <dt>Visible</dt>
        <dd>
          <?php echo hsc($page['content'])?>
        </dd>
      </dl>
    </div>

  </div>

</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>
