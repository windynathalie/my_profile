<?php

include "file.php";

$feedback = $_REQUEST['feedback'];

// $mysqli = "INSERT INTO registrasi_baru(feedback) VALUES ('$feedback')";

// $result = mysqli_query($conn, $mysqli);

$duplicate= mysqli_query($conn,"select * from registrasi_baru where feedback='$feedback'");
if (mysqli_num_rows($duplicate)>0)
{
    include "error.php";
}
else{
    $mysqli = "INSERT INTO registrasi_baru(feedback) VALUES ('$feedback')";
    $result = mysqli_query($conn, $mysqli);
    include "success.php";
}

// if($result){
//     include "success.php";
// }
// else{
//     include "error.php";
// }

mysqli_close($conn);
?>