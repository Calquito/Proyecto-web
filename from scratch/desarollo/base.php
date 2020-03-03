<?php
  if(true){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <html>
    <head>
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <title>confesionesdeu.com ¡el sitio de las confesiones universitarias!</title>

    </head>
    <body>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->	
        <script src="jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>


        <!--includes -->
        <?php 
        include 'nav_and_bar.php';
        include 'send_confession_modal_window.php';
        include 'paises_modal_window.php';
        include 'universidades_modal_window.php';
        include 'posts_scripts.php'
        ?>
        
          <div class="d-flex flex-row bd-highlight justify-content-around ">
            <!--scrolls--> 
            <div class=" bd-highlight w-100 ">
              <?php include 'load_scroll.php';?>
            </div>
            <!--sidebar-->
            <div class=" bd-highlight d-none d-sm-block w-50 ">
              <div class="d-flex flex-row bd-highlight justify-content-around ">
                <div class=" bd-highlight w-25">
                </div>
                <div class=" bd-highlight w-100">
                  esto va en en sidebar y no deberia mostrarse luego de disminuir tanto
                </div>
              </div>
            </div>    
          </div>

        <!-- variables of the navbar -->
        <input type="hidden" name="todas" id="todas" value="<?php echo $todas;?>">
        <input type="hidden" name="pais" id="pais" value="<?php echo $pais;?>">
        <input type="hidden" name="universidad " id="universidad" value="<?php echo $universidad;?>">
            
    </body>
    </html>
  <?php
  }
  else{
    include 'error.php';
  }
?>

