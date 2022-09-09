<?php
$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=rumahsakit", 'root', '');
$query = $db->query("DELETE FROM tb_user WHERE id='$id'");

if($query){
    header("location:admin.php");
}