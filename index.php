<!doctype html>
<html>
  <head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <form action="login.php" method="post">
    <h2>LOGIN</h2>
    <?php if(isset($_GET['error'])) { ?>
    <p class="error"> <?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>username</label>
    <input type="text" name="uname" placeholder="username"><br>
    <label>password</label>
    <input type="password" name="password" placeholder="password"><br>

    <button type="submit">Login</button>
    </form>

</body>
    </html>