<?php 
// mengkoneksikan ke database
$conn = mysqli_connect("localhost","root","","kobil");

// mengambil data dari table database
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}


?>