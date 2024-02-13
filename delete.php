<?php 
require_once('database.php');
$id = $_GET['id'];
$data = Delete('notes', $id); 
if ($data){
    header("location:Login.php");
}
?>