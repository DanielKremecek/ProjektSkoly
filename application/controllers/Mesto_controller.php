<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mesto_controller
 *
 * @author kremecek_daniel
 */
class Mesto_controller extends Admin_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->layout->setLayout('layout/layout_main-logged');
    }

    public function index() {
        $data['title'] = "Administrace měst";
        $data['main'] = 'backend/pridaniMesta';
        $this->load->model("Mesto_model");  
        $data["fetch_data"] = $this->Mesto_model->fetch_data();  
        $this->layout->generate($data);
    }
    
    public function form_validation() {
        $this->load->library('form_validation'); 
        $this->form_validation->set_rules("nazev", "Název", "required");
        if($this->form_validation->run()) {
            $this->load->model("Mesto_model");
            $data = array(
                "nazev"=>$this->input->post("nazev"),
            );
            if($this->input->post("update")) {
                $this->Mesto_model->update_data($data, $this->input->post("hidden_id"));
                redirect(base_url()."Mesto_controller/updated");
            }
            if($this->input->post("insert")) {
                $this->Mesto_model->insert_data($data);
                redirect(base_url()."Mesto_controller/inserted");
            }
        } else {
            $this->index();
        }
     }
     
    public function inserted() {
        $this->index();
    }
    
    public function delete_data() {
        $id = $this->uri->segment(3);
        $this->load->model("Mesto_model");
        $this->Mesto_model->delete_data($id);
        redirect(base_url()."Mesto_controller/deleted");
    }
    
    public function deleted() {
        $this->index();
    }
     
    public function update_data() {
        $user_id = $this->uri->segment(3);
        $this->load->model("Mesto_model");
        $data["user_data"] = $this->Mesto_model->fetch_single_data($user_id);
        $data["fetch_data"] = $this->Mesto_model->fetch_data();
        $this->layout->setLayout('layout/layout_main-logged');
        $data["title"] = "Administrace měst";
        $data["main"] = "backend/pridaniMesta";
        $this->layout->generate($data);
    }
    
    public function updated() {
        $this->index();
    }
}