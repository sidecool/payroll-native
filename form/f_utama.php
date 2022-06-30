<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../index.html");
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Dot Payroll</title>
    
    <link rel="icon" href="../assets/DotCom-1.png" type="image/icon type">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style/template.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>   
</head>
<body>
    <div id="wrapper">
        <div id="navbar">
            <div id="logo">
                Dot Payroll                
            </div>
            <div id="toggle">Toggle</div>
            <div id="navbar-right">

            </div>
        </div>
        <div id="sidebar" style="width: 270px;">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
            <a href="../logout.php">Logout</a>
        </div>                
    </div>    

    <div style="margin-top:210px;padding:15px 15px 2500px;font-size:30px">
        <p><b>This example demonstrates how to shrink a navigation bar when the user starts to scroll the page.</b></p>
        <p>Scroll down this frame to see the effect!</p>
        <p>Scroll to the top to remove the effect.</p>
        <p><b>Note:</b> We have also made the navbar responsive, resize the browser window to see the effect.</p>
        <p>Lorem ipsum dolor dummy text to enable scrolling, sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <script src="script/transition.js"></script>
</body>
</html>    