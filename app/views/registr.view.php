<?php include 'templates/header.view.php';?>
<h1>Registr</h1>

<form method="post" action="regUser">

    <input name="Login" type="text" placeholder="login" autocomplete="off"><br/>
    <input name="Pass" type="password" placeholder="pass" autocomplete="off"><br/>
    <button type="submit" name="submit">toReg</button>

</form>