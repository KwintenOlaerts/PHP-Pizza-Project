<?php


//  2 options for database connection: MySQLI(improved MySQL) or PDO 
$conn = mysqli_connect('localhost', 'kwinten', '', 'rapper-quotes');

// check connection 
if(!$conn){
    echo 'Connection error ' . mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include('frameworks/header.php'); ?>

<?php include('frameworks/footer.php'); ?>


</html>

