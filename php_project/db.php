<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
  die("connection to this database failed due to".mysqli_connect_error());
}
//echo "Success conn";

$name = $_POST["name"];
$age = $_POST["age"] ;
$gender = $_POST["gender"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$desc = $_POST["desc"];
$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `info`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

//echo $sql;

if($con->query($sql) == true){
  //echo "Successfully inserted";
  
}
else{
  echo "Error : $sql <br> $con->error";
}

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to travel form</title>
  <link rel="stylesheet" href="index.css">

</head>
<body>
  <img class="bg" src="collage.jpeg" alt="Subhash University">
  <div class="container">
    <h1> Welcome to collage trip form </h1>
    <p> Confirm your participation by entering your details and submitting this form </p>

    <form action="db.php" method="post">
      <input type="text" name="name" id="name" placeholder="Enter Your name">
      <input type="text" name="age" id="age" placeholder="Enter Your Age">
      <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
      <input type="email" name="email" id="email" placeholder="Enter Your e-mail">
      <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone number">
      <textarea type="desc" name="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
      
        <button class="btn"><a href="thanks.html">Submit</a></button>
  </form>
  </div>
  <script src="index.js"></script>
  
</body>
</html>

