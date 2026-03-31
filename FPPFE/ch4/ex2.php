<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['check_list'])) {
        $checked_count = count($_POST['check_list']);
        $name = $_POST['username'];

        echo $name . "'s favourite colors are " . $checked_count . " option(s): <br>";

        foreach ($_POST['check_list'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
    } else {
        echo "<b>Please Select At least One Option.</b>";
    }
}




?>