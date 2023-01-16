<?php
$error = "";
$name = "";
$mail = "";
$msg = "";

if (count($_POST)) {
  $name = $_POST['name'];
  $mail = $_POST['email'];
  $msg = $_POST['message'];

  //validating
  if (strlen($name) > 10 || empty($name)) 
    $error .= "name max len is 100 char and not empty<br>";

  if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL))
    $error .= "email is not valid or empty<br>";
    
 if (empty($msg) )
    $error .= "message is empty or more than 255 char<br>";

  if ($error == "") {
    echo "Thanks for contact us<br>";
    foreach ($_POST as $key => $val) {
      if ($key != 'submit') echo "<strong>$key</strong>: $val <br>";
    }




/*Day 2 Assigment */

$flog = fopen("log.txt" , "a+");

$write_in_log = date('l js \of F Y h:i:s A') ."," ."$mail , $name".",".$_SERVER['REMOTE_ADDR'] .PHP_EOL ;
fwrite($flog , $write_in_log );

fclose($flog);

include_once("read_from.php");
include_once("configuration.php");

    die("");
  }

}

