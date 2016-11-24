<?php include 'templates/header.view.php';?>
<h1>Login</h1>

<form method="post" action="logUser">

    <input name="Login" type="text" placeholder="login" autocomplete="off"><br/>
    <input name="Pass" type="password" placeholder="pass" autocomplete="off"><br/>
    <button type="submit" name="submit">toReg</button>

</form>