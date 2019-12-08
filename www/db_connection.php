<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "anderscr";
    $dbpass = "1834579";
    $db = "iFrameURLs";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

}

function CloseCon($conn)
{
    $conn -> close();
}

?>
