  <?php
  include('../my_config.php');
  $con=mysqli_connect(ASG_HOSTNAME,ASG_USERNAME,ASG_PASSWORD,ASG_DATABASE);
  if (mysqli_connect_errno())
  {
    echo "Error en la conexión: " . mysqli_connect_error();
  }
  mysqli_set_charset($con,"utf8");
  