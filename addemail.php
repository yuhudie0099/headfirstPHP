<?php
$dbc=mysqli_connect('localhost','root','','elvis_store')
or die('Error connecting to MYSQL sever.');
$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$email=$_POST['email'];
$query="INSERT INTO email_list (first_name,last_name,email)".
"VALUES('$first_name','$last_name','$email')";
$result=mysqli_query($dbc,$query) or die('Error querying database.');
echo 'CUSTOMER ADDED.';
mysqli_close($dbc);
 ?>
