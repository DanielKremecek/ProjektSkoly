<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mapa_controller
 *
 * @author kremecek_daniel
 */
class Mapa_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    /*
     * naštení hlavní stránky webu
     */
    public function mapa() {
        $data["title"] = "Mapa";
        $data["main"] = "frontend/mapa";
        $this->layout->generate($data);
    }
}