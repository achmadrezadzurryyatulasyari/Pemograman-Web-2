<<<<<<< HEAD
<?php 
session_start();
if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 1;
}else{
    $count = $_SESSION['count'];
    $_SESSION['count'] = $count + 1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Implementasi Sesion</h1>
    <p>anda telah mengunjungi halaman ini <?php echo $_SESSION
    ['count']?> kali.</p> 

    <!-- delete session -->
     <?php
     if(isset($_SESSION['count'])){
        unset($_SESSION['count']);
     }?>
</body>
=======
<?php 
session_start();
if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 1;
}else{
    $count = $_SESSION['count'];
    $_SESSION['count'] = $count + 1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Implementasi Sesion</h1>
    <p>anda telah mengunjungi halaman ini <?php echo $_SESSION
    ['count']?> kali.</p> 

    <!-- delete session -->
     <?php
     if(isset($_SESSION['count'])){
        unset($_SESSION['count']);
     }?>
</body>
>>>>>>> 09866dd7e2419bcb2ed28c6cee9c201d053da652
</html>