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
                <li class="active">
                    <a href="<?=base_url('users/login')?>">
                        <i class="ti-plug"></i>
                        <p>Iniciar Session</p>
                    </a>
                </li>
                
                <li>
                    <a href="<?=base_url('users/registration')?>">
                        <i class="ti-pencil-alt"></i>
                        <p>Registrase</p>
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
<div class="jumbotron" style="background-color:black;">
<div class="text-center">
<h2 style="color:white;">User Login</h2>
</div>
<br />
    <?php
    if(!empty($success_msg)){
        echo '<p class="alert-success">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="alert-danger">'.$error_msg.'</p>';
    }
    ?>
    <form action="" method="post">
    <div class="row">
    <div class="col col-md-3"></div> 
    <div class="col col-md-6">
    <span class="help-block">Si estas registrado puedes iniciar digitando tu...</span>
        <div class="form-group has-feedback">
            <input type="email" class="form-control border-input" name="email" placeholder="E-mail" required="">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control border-input" name="password" placeholder="Contraseña" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
        <div class="text-center">
        <a href="<?=base_url('')?>" class="btn btn-default">Volver</a>
        <input type="submit" name="loginSubmit" class="btn btn-primary" value="Enviar"/>
        </div>
        </div>
        </div>
        </div>
    </form><hr/>
    <p class="footInfo" style="color:gray;">Sin cuenta aún? <a class="a" href="<?=base_url('users/registration');?>">Registrate aqui</a></p>
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
