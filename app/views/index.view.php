<?php include 'templates/header.view.php';?>

<h1>INDEX</h1>

<ul>
    <? foreach ($words as $word) : ?>

        <li><?= $word ?></li>

    <? endforeach; ?>
</ul>
