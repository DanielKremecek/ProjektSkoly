<?php
/**
 * Description of movies
 *
 * @author kremecek_daniel
 */
class movies extends CI_Controller {
    
     public function index() {
         $this->layout->setLayout('layout/layout_main-logged');
         $this->load->model("movies_model");
         $data["fetch_data"] = $this->movies_model->fetch_data();
         $data["title"] = "Kinema administrace | Filmy";
         $data["main"] = "backend/admin_movies";
         $this->layout->generate($data);
     }
     
     public function form_validation() {
         $this->form_validation->set_rules("nazev_original", "Původní název", "required");
         $this->form_validation->set_rules("delka_min", "Délka v minutách", "required");
         $this->form_validation->set_rules("typ", "Typ filmu", "required");
         if($this->form_validation->run()) {
             $this->load->model("movies_model");
             $data = array(
                 "nazev_original"=>$this->input->post("nazev_original"),
                 "delka_min"=>$this->input->post("delka_min"),
                 "typ"=>$this->input->post("typ")
             );
             if($this->input->post("update")) {
                 $this->movies_model->update_data($data, $this->input->post("hidden_id"));
                 redirect(base_url()."movies/updated");
             }
             if($this->input->post("insert")) {
                 $this->movies_model->insert_data($data);
                 redirect(base_url()."movies/inserted");
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
         $this->load->model("movies_model");
         $this->movies_model->delete_data($id);
         redirect(base_url()."movies/deleted");
     }
     
     public function deleted() {
         $this->index();
     }
     
     public function update_data() {
         $user_id = $this->uri->segment(3);
         $this->load->model("movies_model");
         $data["user_data"] = $this->movies_model->fetch_single_data($user_id);
         $data["fetch_data"] = $this->movies_model->fetch_data();
         $this->layout->setLayout('layout/layout_main-logged');
         $data["title"] = "Kinema administrace | Filmy";
         $data["main"] = "backend/admin_movies";
         $this->layout->generate($data);
     }
     
     public function updated() {
         $this->index();
     }
}