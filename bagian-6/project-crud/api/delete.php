<?php


require 'db.php';


$id  = $_POST["id"];


$sql = "DELETE FROM articles WHERE id = '" . $id . "'";


$result = $mysqli->query($sql);


echo json_encode([$id]);
