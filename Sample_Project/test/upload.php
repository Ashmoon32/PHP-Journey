<?php

    print_r( $_FILES);

    $name = $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp, $name);