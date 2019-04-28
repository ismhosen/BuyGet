<?php
// include 'connection.php';
function feedback($name,$email,$comment)
 {
	return mysqli_query(connection(),"INSERT INTO feedback(name,email,comment) VALUES('$name','$email','$comment')");
 }
 function get_all_feedback()
 {
	return mysqli_query(connection(),"SELECT * FROM feedback");
 }