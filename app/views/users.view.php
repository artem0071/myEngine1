<?php include 'templates/header.view.php';?>

<h1>USERS</h1>

<ul>
    <? foreach ($Users as $user) : ?>

        <li><?= $user['User_Login'] ?></li>

    <? endforeach; ?>
</ul>

<form method="post" autocomplete="off" action="/addUser">

    <input type="text" name="name" placeholder="name">
    <button>SEND</button>



</form>