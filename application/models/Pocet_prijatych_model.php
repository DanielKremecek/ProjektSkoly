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
    
    function obor_data() {
        $query = $this->db->select('obor.nazev nazev_oboru, pocet_prijatych.obor obor')
        ->distinct('pocet_prijatych.obor')        
        ->from('pocet_prijatych') 
        ->join('obor', 'pocet_prijatych.obor = obor.id')
        ->get();
        return $query;
    }
    
    function skola_data() {
        $query = $this->db->select('skola.nazev nazev_skoly, pocet_prijatych.skola skola')
        ->distinct('pocet_prijatych.skola')        
        ->from('pocet_prijatych') 
        ->join('skola', 'pocet_prijatych.skola = skola.id')
        ->get();
        return $query;
    }

    // Zobrazení všech záznamů
    function fetch_data() {
        $query = $this->db->select('pocet_prijatych.id id, obor.nazev obor, skola.nazev skola, pocet_prijatych.pocet pocet, pocet_prijatych.rok rok')
        ->from('pocet_prijatych')        
        ->join('skola', 'pocet_prijatych.skola = skola.id') 
        ->join('obor', 'pocet_prijatych.obor = obor.id')
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