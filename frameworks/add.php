<?php

$title = $email = $ingredients = '';
$errors = array('email'=>'', 'title'=>'','ingredients'=>'');

if(isset($_POST['submit'])){


  // check email
  if(empty($_POST['email'])){
    $errors['email'] = 'Voer een geldig emailadres in <br />';
  }
   else{
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] = 'Gelieve een geldig emailadres in te voeren';
    }
  }

   //check rapper
   if(empty($_POST['title'])){
    $errors['title'] = 'Voer een rapper in <br />';
  }
  else {
   $title = $_POST['title'];
    if(!preg_match('/^[*a-zA-Z\s]', $title)){
      $errors['title'] = 'Gebruik een echte naam';
    }
    }

  //  check quote
   if(empty($_POST['ingredients'])){
    echo 'Voor uw favoriete quote in <br />';
  }
  else {
    $ingredients = $_POST['ingredients'];
    if(!preg_match('/^[a-zA-Z\s]+)(,\s*[a-zA-Z\s]*$/', $ingredients)){
      $errors['ingredients'] = 'Voer een quote in, met enkel woorden';
  }
  }
  if(array_filter($errors)){

  } else {
    header('Location: index.php');
  }
} // END OF POST CHECK



// We will see many of thes types of arrays $_POST, they are called globals.
// xss= attacks to do cross browser attacks, hackers use this.
// Use a function in php called html special chars
// before you render data, you should always use html special chars

// form validation
// we need to validate the data a users puts in.
// We won't to check this data: is this the correct type and have
// you put in anything at all 

// Print input on html page

// echo $_GET['email'];
// echo $_GET['title'];
// echo $_GET['ingredients'];
 



?>

<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<section class="container grey-text">
  <h4 class="center">Voeg een quote toe</h4>
  <form class="white" action="add.php" method="POST">
  <label>Your Email:</label>
  <input type="text" name="email">
  <div class="red-text"><?php echo $errors['email']; ?></div>
  <label>Naam Rapper</label>
  <input type="text" name="title">
  <div class="red-text"><?php echo $errors['title']; ?></div>
  <label>Quote</label>
  <input type="text" name="ingredients">
  <div class="red-text"><?php echo $errors['ingredients']; ?></div>
  <div class="center">
  <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
  </div>

<section class="container grey-text">
</section>

<?php include('footer.php'); ?>

</html>
