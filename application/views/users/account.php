<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('img/apple-icon.png');?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url('img/favicon.png');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Tarea10</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url('css/bootstrap.min.css');?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?=base_url('css/animate.min.css');?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?=base_url('css/paper-dashboard.css');?>" rel="stylesheet"/>


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?=base_url('css/themify-icons.css');?>" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
            <a href="<?=base_url('');?>" class="simple-text">
                    Gmpas Reportes 
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?=base_url('');?>">
                        <i class="ti-map-alt"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('reportes');?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Reportar</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?=base_url('users/account');?>">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('users/logout')?>">
                        <i class="ti-power-off"></i>
                        <p>Cerrar Session</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                </div>
                </div>
        </nav>

<div class="container">
    <div class="col col-md-10">
<div class="jumbotron" style="background-color:teal">

<div class="text-center">
    <h2 style="color:white;">Perfil de Usuario</h2><hr>
</div>
<div class="account-info">
    <p style="color:white;">
        <b>Nombre: </b><?php echo $user['name']; ?><br>
        <b>E-mail: </b><?php echo $user['email']; ?><br>
        <b>Telefono: </b><?php echo $user['phone']; ?><br>
        <b>Genero: </b><?php echo $user['gender']; ?><br>
    </p>
    </div>
</div>
</div>
</div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?=base_url('js/jquery-1.10.2.js');?>" type="text/javascript"></script>
	<script src="<?=base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?=base_url('js/paper-dashboard.js');?>"></script>



</html>
