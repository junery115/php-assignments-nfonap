<?php
$name = "";
    if(isset($_GET['submit'])){
        $name = $_GET['fname'];
        echo $name;
    }

    echo "welcome " . $name;