<?php require_once('../../private/initialize.php') ?>

<?php $page_title='Staff Menu'; $css_link="../stylesheets/dist/style.css" ?>

<?php include(SHARE_PATH . '/staff/header/header.php') ?>

<div class="max-w-7xl w-full bg-blue-50 px-8 py-4 justify-self-center">
    <h1 class="text-2xl font-bold text-pink-500">This is content</h1>

    <div>
        <ul>
            <li><a href=<?php echo url_for('subjects/index.php') ?>>Subject menu</a></li>

            <li><a href=<?php echo url_for('pages/index.php') ?>>Page</a></li>
        </ul>

        <?php echo WWW_ROOT; ?>
    </div>
</div>

<?php include(SHARE_PATH . '/staff/footer/footer.php') ?>