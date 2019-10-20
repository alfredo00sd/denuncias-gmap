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
                <li class="active">
                    <a href="<?=base_url('');?>">
                        <i class="ti-map-alt"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <?php
                if($this->session->userdata('isUserLoggedIn'))  
                    {
                        ?>
                <li>
                    <a href="<?=base_url('reportes');?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Reportar</p>
                    </a>
                </li>
                <li>
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

                <?php
                    }else{ ?>
                        
                <li>
                <a href="<?=base_url('users/login')?>">
                    <i class="ti-plug"></i>
                    <p>Iniciar Session</p>
                </a>
            </li>
                        
                <?php
                    }
                ?>
                
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
                    <a class="navbar-brand" href="<?base_url('');?>">Dashboard</a>
                </div>
                </div>
        </nav>

		<div class="content">
            <div class="container-fluid">
                <div class="card card-map">
					<div class="header">
                        <h4 class="title">Google Maps</h4>
                    </div>
					<div class="map">
                        <div id="map"></div>
                        
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
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?=base_url('js/jquery-1.10.2.js');?>" type="text/javascript"></script>
	<script src="<?=base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="<?=base_url('js/bootstrap-notify.js');?>"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?=base_url('js/paper-dashboard.js');?>"></script>

<script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(18.7356897,-70.1976707),
          zoom: 7
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl("<?php echo base_url('markers/markers.php');?>", function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              
              var id = markerElem.getAttribute('id');
              var fecha = markerElem.getAttribute('fecha');
              var type = markerElem.getAttribute('tipo');
              var descripcion = markerElem.getAttribute('descripcion');
              var foto = markerElem.getAttribute('foto');
              var lat = markerElem.getAttribute('lat');
              var lng = markerElem.getAttribute('lng');


              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent ="<h3>"+id+"</h3>"+"<h4>"+descripcion+"</h4>"+"<h4>"+type+"</h4>" ;

              
            
              
             // var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
               
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>

    <script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpzdhL4g9uZTdRjJM_XmAr7RuwHOfhzj8&callback=initMap">
    </script>

<?php
if($this->session->userdata('isUserLoggedIn')) { ?> 

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-map',
            	message: "Bienvenido a <b>AlfredGmaps</b> - tu app de reportes para problemas viales."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

<?php }else{?>

<?php }?>


</html>
