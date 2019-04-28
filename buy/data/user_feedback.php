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
 function feedback_delete($f_id)
 {
	return mysqli_query(connection(),"DELETE FROM feedback WHERE id='$f_id'");
 }