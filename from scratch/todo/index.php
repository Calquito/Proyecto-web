<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <!-- extern html files-->
    <div w3-include-html="header.html"></div>

<!-- Starts modal ..........................................................................................-->
    <button id="myBtn">Modal in php</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form method="post" action="connect.php">
                comentario:<br>
                <input type="text" name="comentario" value="comentario enviado a base de datos"><br>
                <input type="submit" value="Submit">
              </form>
        </div>
    </div>
    <script src="include.js"></script>
    <script>includeHTML();</script>
    <script src="modal_window.js"></script>
<!-- Ends modal ..........................................................................................-->
</body>
</html>
<!-- Starts fetch from database ..........................................................................................-->
<?php include ("fetch.php"); ?>
<!-- Ends fetch from database ..........................................................................................-->
