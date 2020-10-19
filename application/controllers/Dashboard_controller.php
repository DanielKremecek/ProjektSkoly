<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard_controller
 *
 * @author kremecek_daniel
 */
class Dashboard_controller extends Admin_controller {
    
    public function __construct() {
        parent::__construct();
        $this->layout->setLayout('layout/layout_main-logged');
    }
    
    /*
     * Dashboard - úvodní stránka administrace
     */
    public function dashboard() {
        $data["title"] = "Dashboard";
        $data["main"] = "backend/dashboard";
        $this->layout->generate($data);
    }
    
    /*
     * odhlášení z administrace - přesměrování na úvodní stránku webu
     */
    function logout() {
        $this->ion_auth->logout();
        redirect("");
    }
}
