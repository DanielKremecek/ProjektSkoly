<?php
/**
 * Description of Mesto_model
 *
 * @author kremecek_daniel
 */
class Mesto_model extends CI_Model {
    
    // Vložení nového záznamu
    function insert_data($data) {
        $this->db->insert("mesto", $data);
        // SELECT * FROM akce;
    }
    
    // Zobrazení všech záznamů
    function fetch_data() {
        $this->db->select("*");
        $this->db->from("mesto");
        $query = $this->db->get();
        return $query;
    }
    
    // Vymazání záznamu
    function delete_data($id) {
        $this->db->where("id", $id);
        $this->db->delete("mesto");
        // DELETE FROM zeme WHERE id_zeme="$id";
    }
    
    // Select záznamu, který má odpovídající id
    function fetch_single_data($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("mesto");
        return $query;
        // SELECT * FROM akce WHERE id_akce="$id";
    }
    
    // Edit záznamu o akce
    function update_data($data, $id) {
        $this->db->where("id", $id);
        $this->db->update("mesto", $data);
        // UPDATE akce SET nazev="$nazev" WHERE id_akce="$id";
    }
}