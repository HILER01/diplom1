<!DOCTYPE html>
<html lang="ru">
	<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width,inital-sacle=1.0"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/assets/css/1.css">
    <link rel="stylesheet" href="/assets/css/2.css">
    <script src="/assets/js/jquery.min.js"></script>
    
    <title>Админ панель</title>
  </head>
  <body>
    <div>

      <?php 
        if($_COOKIE['user'] == '') :
      ?>

    <div class="general">

      <div class="col auth-general">
        <div class="text-authorization"><h1>Авторизация</h1><hr></div>
          <form action="includes/ext/auth.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"> <br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"> <br>
            <button class="btn btn-success" type="submit">Войти</button>
          </form>
        </div>
      </div>

      <?php else:?>
        <?php 
          include 'admin.php'; 
          include 'includes/admin/general.php'; 
        ?>
      <?php endif;?>
    </div>
  </body>
</html>