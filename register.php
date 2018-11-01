<?
if ($_POST['name'] != '' && $_POST['email'] != '' && $_POST['password'] != '') {
  $name = $_POST['name'];
  $email= $_POST['email'];
  $password = hash('ripemd160',$_POST['password']);

  $conn = mysqli_connect("localhost", "db", "pass", "user");
  $addart = "INSERT INTO `users` VALUES ('', '$name', '$email', '$password');";
  $artaddcon = $conn->query($addart);
  header('Location: index.php?message=Registratie%20gelukt!');
}//end if isset name-email-password
?>
