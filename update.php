<?php
 require_once("database.php");
 $xnote = $_POST['notes'];
 $id=$_POST['id'];

 $sql2=updatedata("notes",$xnote,$id);
 if ($sql2) {
     header("location:list_notes.php");
 }

?>