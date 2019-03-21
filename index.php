<?php

include('db_connect.php');
// include('db_connect.php');

//  2 options for database connection: MySQLI(improved MySQL) or PDO 
$conn = mysqli_connect('localhost', 'Kwinten', 'all4mom7', 'quotes');
// check connection 
if(!$conn){
    echo 'connection error ' . mysqli_connect_error();
}

// write query for all pizzas
$sql = 'SELECT title, quotes, id FROM quotes ORDER BY created_at';

// make query & get result

$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

// close connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<?php include('frameworks/header.php'); ?>

<h4 class="center grey-text">'Quote's</h4>

<div class="container">
<div class="row">
<?php foreach($pizzas as $pizza){ ?>

<div class="col s6 md3">
<div class="card-content center">
<h6><?php echo htmlspecialchars($pizza['title']);  ?></h6>
<div><?php echo htmlspecialchars($pizza['quotes']); ?> </div>
</div>
<div class="card-action right-align">
<a class="brand-text" href="details.php?id=<?php echo $pizza['id']?>">more info</a>
</div>
</div>
<?php } ?>
</div>
</div>

<?php include('frameworks/footer.php'); ?>


</html>

