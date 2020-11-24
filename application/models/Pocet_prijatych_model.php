<?php
/**
 * Description of Pocet_prijatych_model
 *
 * @author kremecek_daniel
 */
class Pocet_prijatych_model extends CI_Model {
    
    // Vložení nového záznamu
    function insert_data($data) {
        $this->db->insert("pocet_prijatych", $data);
        // SELECT * FROM akce;
    }
    
    // Zobrazení všech záznamů
    function fetch_data() {
        /*$this->db->select("*");
        $this->db->from("mesto");
        $query = $this->db->get();
        return $query;*/
        //$query = $this->db->select('skola.id id, skola.nazev nazev, mesto.nazev, skola.geolat geolat, skola.geolong geolong')
        //->from('pocet_prijatych, skola')
        $query = $this->db->select('pocet_prijatych.id id, obor.nazev obor, skola.nazev skola, pocet_prijatych.pocet pocet, pocet_prijatych.rok rok')
        ->from('pocet_prijatych')        
        ->join('skola', 'pocet_prijatych.skola = skola.id') 
        ->join('obor', 'pocet_prijatych.obor = obor.id')
        /*$this->db->select("*");
        $this->db->from("pocet_prijatych");
        $query = $this->db->get();*/
        ->get();
        return $query;
    }
    
    // Vymazání záznamu
    function delete_data($id) {
        $this->db->where("id", $id);
        $this->db->delete("pocet_prijatych");
        // DELETE FROM zeme WHERE id_zeme="$id";
    }
    
    // Select záznamu, který má odpovídající id
    function fetch_single_data($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("pocet_prijatych");
        return $query;
        // SELECT * FROM akce WHERE id_akce="$id";
    }
    
    // Edit záznamu o akce
    function update_data($data, $id) {
        $this->db->where("id", $id);
        $this->db->update("pocet_prijatych", $data);
        // UPDATE akce SET nazev="$nazev" WHERE id_akce="$id";
    }
}