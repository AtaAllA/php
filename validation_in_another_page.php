<?php 
$error = "";
$name = "";
$email = "";
$messege = "";
$SMS= "";
if(count($_POST) > 0)
{
    $name = $_POST("name");
    $email = $_POST("email");
    $messege = $_POST("message");

    if(empty($name) || empty($email) || empty($messege)){
        $error = "Some Fields Are Empty";
    }

    elseif(strlen($name)>100)
    $error = "Name must less than 100 Char";
} 
elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){

    $error = "Email not Valid";
}
    elseif(strlen($messege)>255){
        $error = "Messege must less than 255 char";
    }
    else{
        echo "Thank you for contacting Us” in addition to listing all the data which have been submitted by the user ";
        $SMS = "Dear Clint".PHP_EOL;
        $SMS = $SMS."Name : $name".PHP_EOL;
        $SMS = $SMS."Email : $email".PHP.EOL;
        $SMS = $SMS."Messeges : $messege".PHP_EOL;
foreach($_POST as $key => $value)
{

    echo "<strong> $key </strong> : $value";
}

die ("hank you for contacting Us");

    }
?>