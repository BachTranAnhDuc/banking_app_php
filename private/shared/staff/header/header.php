<?php 
if (!isset($page_title)) {
    $page_title = "Staff Area";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=<?php echo $css_link; ?> rel="stylesheet"/>
    <title>BA <?php echo $page_title; ?></title>
</head>
<body>
   <main class="grid gap-y-8">
    <header class="bg-teal-50 px-8 py-4">
        <navigation>
            <ul>
                <li>
                    <a href=<?php echo url_for('index.php'); ?>>Menu</a>
                </li>
            </ul>
        </navigation>
    </header>