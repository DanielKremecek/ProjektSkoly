<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pocet_prijatych_controller
 *
 * @author kremecek_daniel
 */
class Pocet_prijatych_controller extends Admin_Controller {

    public function index() {
        $this->layout->setLayout('layout/layout_main-logged');
        $this->load->model("Pocet_prijatych_model");  
        $data["fetch_data"] = $this->Pocet_prijatych_model->fetch_data();
        $data['title'] = "Administrace počtu";
        $data['main'] = 'backend/pridaniPoctu';
        $this->layout->generate($data);
    }
    
    public function form_validation() {
        $this->form_validation->set_rules("obor", "Název školy", "required");
        $this->form_validation->set_rules("id_oboru", "ID oboru", "required");
        $this->form_validation->set_rules("skola", "Škola", "required");
        $this->form_validation->set_rules("pocet", "Počet", "required");
        $this->form_validation->set_rules("rok", "rok", "required");
        if($this->form_validation->run()) {
            $this->load->model("Pocet_prijatych_model");
            $data = array(
                "obor"=>$this->input->post("obor"),
                "id_oboru"=>$this->input->post("id_oboru"),
                "skola"=>$this->input->post("skola"),
                "pocet"=>$this->input->post("pocet"),
                "rok"=>$this->input->post("rok")
            );
            if($this->input->post("update")) {
                $this->Pocet_prijatych_model->update_data($data, $this->input->post("hidden_id"));
                redirect(base_url()."Pocet_prijatych_controller/updated");
            }
            if($this->input->post("insert")) {
                $this->Pocet_prijatych_model->insert_data($data);
                redirect(base_url()."Pocet_prijatych_controller/inserted");
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
        $this->load->model("Pocet_prijatych_model");
        $this->Pocet_prijatych_model->delete_data($id);
        redirect(base_url()."Pocet_prijatych_controller/deleted");
    }
    
    public function deleted() {
        $this->index();
    }
     
    public function update_data() {
        $user_id = $this->uri->segment(3);
        $this->load->model("Pocet_prijatych_model");
        $data["user_data"] = $this->Pocet_prijatych_model->fetch_single_data($user_id);
        $data["fetch_data"] = $this->Pocet_prijatych_model->fetch_data();
        $this->layout->setLayout('layout/layout_main-logged');
        $data["title"] = "Administrace počtu";
        $data["main"] = "backend/pridaniPoctu";
        $this->layout->generate($data);
    }
    
    public function updated() {
        $this->index();
    }
}