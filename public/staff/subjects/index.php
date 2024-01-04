<?php require_once('../../../private/initialize.php') ?>

<?php
  $subject_set = find_all_subjects();

  $subjects = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
  ];
?>

<?php $page_title='Staff Object'; $css_link="../../stylesheets/dist/style.css"?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
  <div>
    <h1>Subjects</h1>

    <div>
      <a href="<?php echo url_for("subjects/new.php") ?>">Create New Subject</a>
    </div>

  	<table>
  	  <tr>
        <th>ID</th>

        <th>Position</th>

        <th>Visible</th>

  	    <th>Name</th>

  	    <th>&nbsp;</th>

  	    <th>&nbsp;</th>

        <th>&nbsp;</th>
  	  </tr>

      <?php while ($subject = mysqli_fetch_assoc($subject_set)) { ?>
        <tr>
          <td><?php echo $subject['id']; ?></td>

          <td><?php echo $subject['position']; ?></td>

          <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>

    	    <td><?php echo $subject['menu_name']; ?></td>

          <td><a href=<?php echo url_for("subjects/show.php?id=" . $subject['id']) ?>>View</a></td>

          <td><a href="<?php echo url_for("subjects/edit.php?id=" . $subject['id']) ?>">Edit</a></td>

          <td><a href="">Delete</a></td>
    	</tr>
      <?php } ?>
  	</table>

    <?php
      mysqli_free_result($subject_set);
    ?>

  </div>

</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>