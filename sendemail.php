<?php

$from='yuhudie0099@gmail.com';
$subject=$_POST['subject'];
$text=$_POST['elvisemail'];
$dbc=mysqli_connect('localhost','root','','elvis_store') or die('Eroor connect to MySql server.');
$query="SELECT * FROM email_list";
$result=mysqli_query($dbc,$query) or die('Error querying database.');


// require_once("functions.php");
// $flag = sendMail('yuhudie0099@gmail.com','emailtest','welcome to Katherine\'s home');
// if($flag){
//     echo "Message has been sent!";
// }else{
//     echo "Message could not be sent.";
// }

while($row=mysqli_fetch_array($result)){

//  echo $msg;
  require_once("functions.php");
  $first_name=$row['first_name'];
  $last_name=$row['last_name'];
  $emailto=$row['email'];
  $msg="Dear $first_name $last_name,\n$text";
  $flag = sendMail($emailto,$subject,$msg);
  if($flag){
      echo 'Email sent to:'.$emailto.'<br/>';
  }else{
      echo "Message could not be sent.";
  }
}

mysqli_close($dbc);
 ?>
