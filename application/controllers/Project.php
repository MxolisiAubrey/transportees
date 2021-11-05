<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller {
 
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Project_model', 'project');
 
   }
 
   /*
      Display all records in page
   */
  public function index()
  {
    $data['projects'] = $this->project->get_all();
    $data['title'] = "Manage Transportees";
    $this->load->view('layout/header');       
    $this->load->view('project/index',$data);
    $this->load->view('layout/footer');
  }
 
  /*
 
    Display a record
  */
  public function show($id)
  {
    $data['project'] = $this->project->get($id);
    $data['title'] = "Transportee Profile";
    $this->load->view('layout/header');
    $this->load->view('project/show', $data);
    $this->load->view('layout/footer'); 
  }
 
  /*
    Create a record page
  */
  public function create()
  {
    $data['title'] = "Create A Transportee Profile";
    $this->load->view('layout/header');
    $this->load->view('project/create',$data);
    $this->load->view('layout/footer');  
  }
 
  /*
    Save the submitted record
  */
  public function store()
  {
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('description', 'Description', 'required');
    $this->form_validation->set_rules('morning_dep', 'Morning_dep', 'required');
    $this->form_validation->set_rules('afternoon_dep', 'Afternoon_dep', 'required');
 
    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('project/create'));
    }
    else
    {
       $this->project->store();
       $this->session->set_flashdata('success', "Transportee profile created Successfully!");
       redirect(base_url('project'));
    }
 
  }
 
  /*
    Edit a record page
  */
  public function edit($id)
  {
    $data['project'] = $this->project->get($id);
    $data['title'] = "Update Transportee Profile";
    $this->load->view('layout/header');
    $this->load->view('project/edit', $data);
    $this->load->view('layout/footer');     
  }
 
  /*
    Update the submitted record
  */
  public function update($id)
  {
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('description', 'Description', 'required');
    $this->form_validation->set_rules('morning_dep', 'Morning_dep', 'required');
    $this->form_validation->set_rules('afternoon_dep', 'Afternoon_dep', 'required');
 
    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('project/edit/' . $id));
    }
    else
    {
       $this->project->update($id);
       $this->session->set_flashdata('success', "Transportee profile updated Successfully!");
       redirect(base_url('project'));
    }
 
  }
 
  /*
    Delete a record
  */
  public function delete($id)
  {
    $item = $this->project->delete($id);
    $this->session->set_flashdata('success', "Transportee profile removed Successfully!");
    redirect(base_url('project'));
  }
 
 
}
