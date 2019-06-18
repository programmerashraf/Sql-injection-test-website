<?php
include "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM schools WHERE id = $id";
    echo $query;
    $result = $mysqli->query($query);
    echo "<pre>";
    print_r($result->fetch_array());
}