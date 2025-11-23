<?php 

    setcookie("name", "Ashmoon", time() - 1);
    setcookie("theme", "dark", time() - 1);
    setcookie("age", 20);
    setcookie("race", "Burmese");
    setcookie("path", "cookie", time() + 60, "/form/");

    echo "See view-cookie.php";