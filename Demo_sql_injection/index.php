<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SQL Injection demo">
    <meta name="author" content="Francesco Borzì">

    <title>SQL Injection Demo</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header hidden-xs">
        <ul class="nav nav-pills pull-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Standard Login<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
            <li><a href="login1.php?attempt=2">Vulnerable</a></li>
            <li><a href="login2.php?attempt=2">Secure</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Numeric Login<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="login3.php?attempt=2">Vulnerable</a></li>
              <li><a href="login4.php?attempt=2">Secure</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="books1.php?all=1">Vulnerable</a></li>
              <li><a href="books2.php?all=1">Secure</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="regexp.php">Regular Expression Checker</a></li>
            </ul>
          </li>
        </ul>
        <h3 class="text-muted"><a href="index.php">SQL Injection Demo</a></h3>
      </div>
      <?php include("mobile-navbar.php"); ?>

      <div class="jumbotron">
        <h1>SQL Injection</h1>
        <h2>Kiểm Chứng Phần Mềm</h2>
      </div>

      <?php include("footer.php"); ?>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
