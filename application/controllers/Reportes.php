<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('reporte');
        $this->load->model('user');
        //Do your magic here
    }
    


    public function index()
    {
        $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));        
            $this->load->view('reporte',$data);

            // if($this->session->userdata('isUserLoggedIn'))
            // {

    if($_POST)
    {
        
        //var_dump($_POST);

        $reporte = new obj_reporte();
        
        $reporte->id = $_POST['id'];
        $reporte->fecha = date('Y-m-d');
        $reporte->tipo = $_POST['tipo'];
        $reporte->descripcion = $_POST['descripcion'];
        $reporte->foto =$_FILES['foto']['name'];
        $reporte->lat = $_POST['lat'];
        $reporte->lng = $_POST['lng'];

        //var_dump($reporte);

        $this->db->insert('reportes',$reporte);
        
        echo "<script>alert('Se ah guardado tu reporte, ¡Gracias!.');</script>";
        
         redirect('home', 'refresh');

        //$reporte->id = $this->db->insert_id();

            //esto solo le sale bn a Amadis!! xD
        // foreach($reporte as $prop=>$value)
        // {
        // $reporte->$prop=$_POST[$prop];

        // //echo "<pre>".$prop.$value."</pre>";
        // }
        //if($_FILES) {  var_dump($_FILES); }

        if($_FILES['foto']['error'] == 0 )
        {
		move_uploaded_file($_FILES['foto']['tmp_name'], "fotos_reportes/{$reporte->foto}");
        }
    }
//            }
    }

}

/* End of file Reportes.php */
