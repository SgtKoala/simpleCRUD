<?php
include_once("config.php");
$id = $_GET["   deleteid"];

$result = mysqli_query($link, "DELETE FROM post WHERE id=$id");

header("Location:index.php");
?>