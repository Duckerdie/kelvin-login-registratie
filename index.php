<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kelvin Log in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="padding-top:50px;">
          <?
          if (isset($_GET['message'])) {
            ?>
            <span class="alert alert-success"><?echo $_GET['message']?></span>
            <br><br>
            <h1>Inloggen</h1>
            <form class="login" action="login.php" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="voorbeeld@domein.nl" required>
              </div>
              <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input class="form-control" type="password" name="password" placeholder="••••••••" required>
              </div>
              <input class="btn btn-success" type="submit" name="submit" value="Inloggen">
            </form>
            <?
          }else{?>
            <h1>Registreren</h1>
            <form class="register" action="register.php" method="post">
              <div class="form-group">
                <label for="name">Naam</label>
                <input class="form-control" type="text" name="name" placeholder="Jeff" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="voorbeeld@domein.nl" required>
              </div>
              <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input class="form-control" type="password" name="password" placeholder="••••••••" required>
              </div>
              <input class="btn btn-success" type="submit" name="submit" value="Registreren">
            </form>
          <?}
          ?>

        </div>
        <div class="col-md-3"></div>
      </div>
    </div>

  </body>
</html>
