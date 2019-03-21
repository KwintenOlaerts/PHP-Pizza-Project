<?php 
$conn = mysqli_connect('localhost', 'Kwinten', 'all4mom7', 'quotes');
// check connection 
if(!$conn){
    echo 'connection error ' . mysqli_connect_error();
}
?>