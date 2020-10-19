<?php
/**
 * Description of Hlavni_model
 *
 * @author kremecek_daniel
 */
class Hlavni_model extends CI_Model {
    //protected $table = 'skola';
    public function __construct() {
        parent::__construct();
    }
    
    function fetch_data() {
        $query = $this->db->select('skola.id id, skola.nazev nazev, mesto.nazev nazevMesta, skola.geolat geolat, skola.geolong geolong')
        ->from('skola', 'pocet_prijatych')
        ->join('mesto','mesto = mesto.id')
        ->get();
        return $query->result();
    }
}
