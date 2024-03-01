<?php
    $conn = mysqli_connect('localhost','ossama','1234','nibiru');

    if(!$conn) {
        echo 'Error: ' . mysqli_connect_error();
    }