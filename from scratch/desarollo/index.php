<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Hello, world!</title>

</head>
<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!--navbar and inferior bar-->
    <?php include 'nav_and_bar.html';?>

    <!-- modal window-->
    <?php include 'modal_window.php';?><!-- modal window-->

    
    <div class="d-flex flex-row bd-highlight mb- justify-content-around ">
      <!--scroll-->
      <div class=" bd-highlight w-75 mr-3"><?php include 'load_scroll.php';?></div>
      <!--sidebar-->
      <div class=" bd-highlight d-none d-sm-block w-25 ">
      </div>    
    </div>
    
    
</body>
</html>


