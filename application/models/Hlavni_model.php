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
        /*$query = $this->db->select('skola.id id, skola.nazev nazev, obor.nazev obor, pocet_prijatych.pocet pocet, skola.geolat geolat, skola.geolong geolong')
        ->from('pocet_prijatych')
        ->join('skola', 'pocet_prijatych.skola = skola.id') 
        ->join('obor', 'pocet_prijatych.obor = obor.id')        */
        
        $query = $this->db->select('pocet_prijatych.id id, skola.nazev nazev, obor.nazev obor, pocet_prijatych.pocet pocet, pocet_prijatych.rok rok, skola.geolat geolat, skola.geolong geolong')
        //->from('pocet_prijatych, skola')
        ->from('pocet_prijatych')        
        //->join('mesto','skola.mesto = mesto.id') mesto.nazev nazevMesta,
        ->join('skola', 'pocet_prijatych.skola = skola.id') 
        ->join('obor', 'pocet_prijatych.obor = obor.id')
               
        //->join('mesto','mesto = mesto.id')
        ->get();
        return $query->result();
    }
}
