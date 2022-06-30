<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dotcom Systems</title>

    <link rel="icon" href="../assets/DotCom-1.png" type="image/icon type">
    <style>
        * { font-family: Tahoma, Verdana, sans-serif; }
        .center {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border: 5px solid #FFFF00;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="center">
        <?php

        try {
            $connection = new PDO("mysql:host=localhost;dbname=db_payroll", "root", "usbw");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // echo '<script>alert("Database Connected")</script>';
        } catch (PDOException $ex) {
            die('Mohon maaf, terjadi kesalahan sistem. Database tidak terhubung </br>'.$ex->getMessage());            
        }

        ?>
    </div>    
</body>
</html>