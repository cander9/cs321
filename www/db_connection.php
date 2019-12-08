<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "anderscr";
    $dbpass = "1834579";
    $db = "db_anderscr";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}

?>
