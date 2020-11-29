<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Skola_controller
 *
 * @author kremecek_daniel
 */
class Skola_controller extends CI_Controller {

    public function index() {
        $this->layout->setLayout('layout/layout_main-logged');
        $this->load->model("Skola_model");  
        $data["fetch_data"] = $this->Skola_model->fetch_data();
        $data["mesta_data"] = $this->Skola_model->mesta_data();
        $data['title'] = "Administrace školy | insert";
        $data['main'] = 'backend/pridaniSkoly';
        $this->layout->generate($data);
    }
    
    public function form_validation() {
        $this->form_validation->set_rules("nazev", "Název školy", "required");
        $this->form_validation->set_rules("mesto", "Město", "required");
        $this->form_validation->set_rules("geolat", "geolat", "required");
        $this->form_validation->set_rules("geolong", "geolong", "required");
        if($this->form_validation->run()) {
            $this->load->model("Skola_model");
            $data = array(
                "nazev"=>$this->input->post("nazev"),
                "mesto"=>$this->input->post("mesto"),
                "geolat"=>$this->input->post("geolat"),
                "geolong"=>$this->input->post("geolong")
            );
            if($this->input->post("update")) {
                $this->Skola_model->update_data($data, $this->input->post("hidden_id"));
                redirect(base_url()."Skola_controller/updated");
            }
            if($this->input->post("insert")) {
                $this->Skola_model->insert_data($data);
                redirect(base_url()."Skola_controller/inserted");
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
        $this->load->model("Skola_model");
        $this->Skola_model->delete_data($id);
        redirect(base_url()."Skola_controller/deleted");
    }
    
    public function deleted() {
        $this->index();
    }
     
    public function update_data() {
        $user_id = $this->uri->segment(3);
        $this->load->model("Skola_model");
        $data["user_data"] = $this->Skola_model->fetch_single_data($user_id);
        $data["fetch_data"] = $this->Skola_model->fetch_data();
        $data["mesta_data"] = $this->Skola_model->mesta_data();
        $this->layout->setLayout('layout/layout_main-logged');
        $data["title"] = "Administrace škol | update";
        $data["main"] = "backend/pridaniSkoly";
        $this->layout->generate($data);
    }
    
    public function updated() {
        $this->index();
    }
}