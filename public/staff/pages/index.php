<?php require_once('../../../private/initialize.php'); ?>

<?php
  $page_set = find_all_pages();
?>

<?php $page_title='Pages'; $css_link="../../stylesheets/dist/style.css"?>


<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
  <div class="pages listing">
    <h1>Pages</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('pages/new.php') ?>">Create New Page</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>

        <th>Position</th>

        <th>Visible</th>

  	    <th>Name</th>

  	    <th>&nbsp;</th>

  	    <th>&nbsp;</th>

        <th>&nbsp;</th>
  	  </tr>

      <?php while($page = mysqli_fetch_assoc($page_set)) { ?>
        <tr>
          <td><?php echo hsc($page['id']); ?></td>
          
          <td><?php echo hsc($page['position']); ?></td>

          <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>

    	    <td><?php echo hsc($page['menu_name']); ?></td>

          <td><a class="action" href="<?php echo url_for('pages/show.php?id=' . hsc(ued($page['id']))); ?>">View</a></td>

          <td><a class="action" href="<?php echo url_for('pages/edit.php?id=' . hsc(ued($page['id']))) ?>">Edit</a></td>

          <td><a class="action" href="<?php echo url_for('pages/delete.php?id=' . hsc(ued($page['id']))) ?>">Delete</a></td>

    	</tr>
      <?php } ?>
  	</table>

    <?php mysqli_free_result($page_set); ?>

  </div>

</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>
