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

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="../node_modules/mdbootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../node_modules/mdbootstrap/css/mdb.min.css">
        <link rel="stylesheet" href="../node_modules/mdbootstrap/css/style.css">

        <script type="text/javascript" src="../node_modules/mdbootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="../node_modules/mdbootstrap/js/popper.min.js"></script>
        <script type="text/javascript" src="../node_modules/mdbootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../node_modules/mdbootstrap/js/mdb.min.js"></script>

        <title>Document</title>
    </head>
    <body>
        <h1>Hola <?php echo $_SESSION['user_data']['name'] ?></h1>
        <a class="dropdown-item" href="../service/close_session.php">Cerrar sesión</a>

        <button type="button" class="btn btn-outline-primary btn-rounded waves-effect">Primary</button>
<button type="button" class="btn btn-outline-default btn-rounded waves-effect">Default</button>
<button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Secondary</button>
<button type="button" class="btn btn-outline-success btn-rounded waves-effect">Success</button>
<button type="button" class="btn btn-outline-info btn-rounded waves-effect">Info</button>
<button type="button" class="btn btn-outline-warning btn-rounded waves-effect">Warning</button>
<button type="button" class="btn btn-outline-danger btn-rounded waves-effect">Danger</button>
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