<?php
/**
 * Description of Skola_model
 *
 * @author kremecek_daniel
 */
class Skola_model extends CI_Model {
    
    // Vložení nového záznamu
    function insert_data($data) {
        $this->db->insert("skola", $data);
        // SELECT * FROM akce;
    }
    
    // Zobrazení všech záznamů
    function fetch_data() {
        $query = $this->db->select('skola.id id, skola.nazev nazev, mesto.nazev mesto, skola.geolat geolat, skola.geolong geolong')
        ->from('skola') 
        ->join('mesto', 'skola.mesto = mesto.id') 
        ->get();
        return $query;
        
        /*$this->db->select("*");
        $this->db->from("skola");
        $query = $this->db->get();
        return $query;*/
    }
    
    // Vymazání záznamu
    function delete_data($id) {
        $this->db->where("id", $id);
        $this->db->delete("skola");
        // DELETE FROM zeme WHERE id_zeme="$id";
    }
    
    // Select záznamu, který má odpovídající id
    function fetch_single_data($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("skola");
        return $query;
        // SELECT * FROM akce WHERE id_akce="$id";
    }
    
    // Edit záznamu o akce
    function update_data($data, $id) {
        $this->db->where("id", $id);
        $this->db->update("skola", $data);
        // UPDATE akce SET nazev="$nazev" WHERE id_akce="$id";
    }
}