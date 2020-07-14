<?php
session_start();
if(isset($_SESSION['user_data'])){
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Hola <?php echo $_SESSION['user_data']['name'] ?></h1>
        <a class="dropdown-item" href="../service/close_session.php">Cerrar sesión</a>
    </body>
    </html>

<?php
}
else{
?>
    <script>
        window.location = '../index.php'
    </script>
<?php
}
?>