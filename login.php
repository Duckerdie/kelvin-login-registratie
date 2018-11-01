<?
if ($_POST['email'] != '' && $_POST['password'] != '') {
  $email= $_POST['email'];
  $password = hash('ripemd160',$_POST['password']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gebruiker Kelvin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <?
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=dbname', 'dbpass', 'password');
            foreach($dbh->query('SELECT * from users where email = "'.$email.'"') as $user) {
              echo '<h1>Hallo '.$user['name'].'</h1>';
              if ($password == $user['password']) {
                echo '<p>Wachtwoord klopt!</p>';
              }else{
                echo '<p>Wachtwoord klopt niet!</p>';
              }
              if ($email == $user['email']) {
                echo '<p>Email klopt!</p>';
              }
            }
            $dbh = null;
          } catch (PDOException $e) {
              print "Error!: " . $e->getMessage() . "<br/>";
              die();
          }
      }//end if isset name-email-password
      ?>
    </div>
    <div class="col-md-3"></div>
    </div>
  </div>
</body>
</html>
