<?php

class Demo  extends CI_Controller{
    function __construct() {
        parent::__construct();
       
         $this->load->model('Demo_Model'); 
    }
    public function index()
    {

        $this->monthly_milk_report();
    }
     public function monthly_milk_report() {
      $data['mm']=$this->Demo_Model->pi();
        $this->load->view('Dtables_view',$data);
    }
    

    
}
