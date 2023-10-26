<?php

if (isset($_COOKIE["login"])) {
    echo "evvelce cixis etmelisniz";
} else {
    echo "ana sehife";}



?>
<a HREF="./logout.php">Cixis et</a>
<form action = "server.php" method ="post">
    Email: <input type="email" id="email" name="email">
    <br><br>
    Password: <input type="password" id="pwd" name="pwd">
    <br><br>
     <input type="submit" name="gonder" value="Anketi Gonder">
</form>