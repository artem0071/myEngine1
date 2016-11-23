<?php include 'templates/header.view.php';?>

<h1>USERS</h1>

<ul>
    <? foreach ($Users as $user) : ?>

        <li><a href="/user/<?= $user['User_Login'] ?>" ><?= $user['User_Login'] ?></a></li>

    <? endforeach; ?>
</ul>

<form method="post" autocomplete="off" action="/addUser">

    <input type="text" name="name" placeholder="name">
    <button>ADD</button>



</form>