<?php
class Demo_Model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }
   
    
    public function pi()
    {
        $this->db->select('animal_breed,count(animal_breed) as animal');
        $this->db->from('animal_master ');
        $this->db->group_by('animal_breed');
        $qry=$this->db->get();
        return $qry->result_array();
    }
}
?>
