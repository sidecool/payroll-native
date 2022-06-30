<?php

include '../config/database.php';

error_reporting(0);
session_start();

if(isset($_SESSION['username'])){
    header("Location: f_utama.php", true, 301);
}

if(isset($_POST['login'])){    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT username, password, id_akses, status FROM users WHERE username='$username' AND password='$password'";
    $stmt = $connection->query($query);
    $user = $stmt->fetch();

    // echo '<script> alert("'.$query.' \n '.$user['username'].'") </script>';

    if($user['username']==''){
        echo '<script type="text/javascript">alert("Login gagal, pastikan Username dan Password Anda sudah benar.")</script>';    
    } else {
        if(!$user['status']='Aktif'){
            echo '<script type="text/javascript">alert("User sudah tidak aktif, silahkan hubungi Administrator.")</script>';
        } else {
            $_SESSION['username'] = $user['username'];
            $_SESSION['id_akses'] = $user['id_akses'];
            header("Location: f_utama.php", true, 301);
        }    
    }       
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
    <link rel="stylesheet" href="style/login.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>   
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']; ?>
    </div>
    
    <div id="mainButton">
	    <div class="btn-text" onclick="openForm()">Masuk</div>
	    <div class="modal">
            <div class="close-button" onclick="closeForm()">x</div>
            <form action="" method="post">
                <div class="form-title">Aplikasi Penggajian</div>
                <div class="input-group">
                    <input type="text" name="username" id="username" autocomplete="new-password" required
                    onblur="checkInput(this)" oninvalid="validasiUser()" oninput="input(this)" />
                    <label for="username">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" autocomplete="new-password" required
                    onblur="checkInput(this)" oninvalid="validasiPassword()" oninput="input(this)" />
                    <label for="password">Password</label>
                </div>
                <input class="form-button" type="submit" name="login" value="Masuk">
                <!-- <div class="codepen-by">CodePen by Cole Waldrip</div> -->
            </form>                
            </div>
        </div>
    <!-- <div class="codepen-by">CodePen by Cole Waldrip</div> -->    
    <script src="script/login.js"></script>
</body>
</html>