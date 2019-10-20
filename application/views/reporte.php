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
                    <a href="<?=base_url('reportes');?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Reportar</p>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('users/account');?>">
                        <i class="ti-user"></i>
                        <p>User profile</p>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('users/logout');?>">
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
                    <div class="header">
                                <h4 class="title">Nuevo reporte</h4>
                            </div>
                         
                </div>
            </div>
                           
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-8">
                        <div class="card">
                            <div class="content">
                                <form method="post" enctype="multipart/form-data" >
                                    <div class="row">
                                        <input name="id" type="hidden">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control border-input" readonly value="<?php echo $user['name'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control border-input" readonly value="<?php echo $user['email'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                            <label>Latitude</label>
                                                <input name="lat" type="text" class="form-control border-input" placeholder="latitud" value="">
                                               
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                            <label>Longitud</label>
                                                <input name="lng" type="text" class="form-control border-input" placeholder="Longitud" value="">
                                               
                                        </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Tipo de problema</label>
                                            <select name="tipo" class="form-control border-input">
                                            <option value=""></option>    
                                            <option value="hoyos">hoyos</option>
                                            <option value="tapa de alcantarilla no presente">tapa de alcantarilla no presente</option>
                                            <option value="aguas estancadas">aguas estancadas</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                            <div class="map">
                                            <div id="map"></div>
                        
                                            </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                            </div>                                               
                                            <label>Descripcion</label>
                                                <textarea name="descripcion"  cols="15" rows="5" class="form-control border-input">

                                                </textarea>
                                                
                                            </div>
                                        </div>
                                    </div>


                                    
                                    <div class="row">
                                        
                                    <div class="col-md-5">
                                            <div class="form-group">
                                            <label>Foto de evidencia</label>
                                            <input  name="foto" type="file" class="form-control border-input" id="file" required  onchange="return fileValidation()"/>                                               
                                        </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                            <div id="imagePreview" style="maxwidth:10%; maxheigth:10%;" ></div>
                                        </div>
                                        </div>
                                        
                                    </div>

                                
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Reportar <span class="ti-tag"></span></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>
    <!--   Core JS Files   -->
    <script src="<?=base_url('js/jquery-1.10.2.js');?>" type="text/javascript"></script>
	<script src="<?=base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?=base_url('js/bootstrap-checkbox-radio.js');?>"></script>

	<!--  Charts Plugin -->
	<script src="<?=base_url('js/chartist.min.js');?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?=base_url('js/bootstrap-notify.js');?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?=base_url('js/paper-dashboard.js');?>"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project!
	<script src="<?php//base_url('js/demo.js');?>"></script> -->

    <script>
    function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(.jpg)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert("Oops...", "Esto no es una imagen, solo se aceptan imagenes del tipo .jpg", "error");
        //alert('');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img class="img-responsive" style="maxheight:400px;maxwidth:350px;" src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
</script>

</html>