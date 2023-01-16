<?php
$flog = (file_exists("log.txt"))?file("log.txt"):0;
if ($flog)
{

foreach($flog as $line_by_line){

    $arr = explode("," , $line_by_line);
    echo "<br>";
    echo"Visited Date".$arr[0]."<br>";
    echo"Mail".$arr[1]."<br>";
    echo"Name".$arr[2]."<br>";
    echo"IP Address".$arr[3]."<br>";
    echo "<br><hr><br>";



}

}
