<?php
//onlly process the form if $_POST is not Empty
if(!empty ($_POST)) {
//Connect to Mysqli
$mysqli = new mysqli ("localhost", "root", "", "codefirst");

//check connection
if($mysqli -> connect_error) {
die("Connect Error:". $mysqli-> connect_errno. ':'.$mysqli->connect_error);
}
//insert our data

$sql ="INSERT INTO subscribe (name, email) values
('{$mysqli -> real_escape_string($_POST['name'])}',
'{$mysqli -> real_escape_string($_POST['email'])}')";
$insert = $mysqli->query($sql);

//print response for mysql
if( $insert ) {
echo "Successfully Subscribed to BioTech StAndrews! Row ID:{$mysqli->insert_id}";
} else {
  die("Error:($mysqli->errno}:{mysqli->error}");
}
//close conncetion
$mysqli->close();

}

?>
