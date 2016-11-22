<?php include 'templates/header.view.php';?>

<h1>USER <?= $user[0]['User_Login'] ?></h1>

<ul>

    <? foreach ($user[0] as $key => $value) : ?>

        <li><strong><?= $key ?></strong> - <?= $value?></li>

    <? endforeach; ?>

</ul>

<? dd($user);?>
