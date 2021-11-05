<?php
 
 
class Project_model extends CI_Model{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
 
    
    //Get all the records from the database
    public function get_all()
    {
        $projects = $this->db->get("transportees")->result();
        return $projects;
    }
 
    
    //Store the record in the database
   public function store()
       {    
        $data = [
            'name'        => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'morning_dep' => $this->input->post('morning_dep'),
            'afternoon_dep' => $this->input->post('afternoon_dep')
        ];
 
        $result = $this->db->insert('transportees', $data);
        return $result;
    }
 
    
    // Get an specific record from the 
    public function get($id)
    {
        $project = $this->db->get_where('transportees', ['id' => $id ])->row();
        return $project;
    }

    //Update or Modify a record in the database
    public function update($id) 
    {
        $data = [
            'name'        => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'morning_dep'        => $this->input->post('morning_dep'),
            'afternoon_dep' => $this->input->post('afternoon_dep')
        ];
 
        $result = $this->db->where('id',$id)->update('transportees',$data);
        return $result;
                 
    }   
    //Destroy or Remove a record in the database
    public function delete($id)
    {
        $result = $this->db->delete('transportees', array('id' => $id));
        return $result;
    }
     
}
?>
