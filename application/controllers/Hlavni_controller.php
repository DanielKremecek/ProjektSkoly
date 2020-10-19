<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hlavni_controller
 *
 * @author kremecek_daniel
 */
class Hlavni_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    /*
     * naštení hlavní stránky webu
     */
    public function index() {
        $data["title"] = "Domovská strana";
        $data["main"] = "frontend/index";
        $this->load->model("Hlavni_model");  
        $data["data"] = $this->Hlavni_model->fetch_data();
        $this->layout->generate($data);
    }
    
    public function mapa() {
        $data["title"] = "Mapa";
        $data["main"] = "frontend/mapa";
        $this->load->model("Hlavni_model");  
        $data["data"] = $this->Hlavni_model->fetch_data();
        $this->layout->generate($data);
    }
}