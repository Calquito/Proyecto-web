<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css"><!--styles-->
</head>
<body>
    <!-- external html-->
    <div w3-include-html="header.html"></div><!--header-->
    <div w3-include-html="form.html"></div>

    <!--external scripts-->
    <script src="include.js"></script><!--include external files-->
    <script>includeHTML();</script><!--call function to include external files-->
    <script src="modal_window.js"></script><!--modal window -->
    
</body>
</html>
<!-- fetch from database-->
<?php include ("fetch.php"); ?>
