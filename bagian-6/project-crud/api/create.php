<?php


require 'db.php';


$post = $_POST;


$sql = "INSERT INTO articles (title,description) 


	VALUES ('" . $post['title'] . "','" . $post['description'] . "')";


$result = $mysqli->query($sql);


$sql = "SELECT * FROM articles Order by id desc LIMIT 1";


$result = $mysqli->query($sql);


$data = $result->fetch_assoc();


echo json_encode($data);
