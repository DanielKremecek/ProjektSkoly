<?php
/**
 * Description of countries
 *
 * @author kremecek_daniel
 */
class countries extends CI_Controller {
    
     public function index() {
         $this->layout->setLayout('layout/layout_main-logged');
         $this->load->model("countries_model");
         $data["fetch_data"] = $this->countries_model->fetch_data();
         $data["title"] = "Kinema administrace | Země";
         $data["main"] = "backend/admin_countries";
         $this->layout->generate($data);
     }
     
     public function form_validation() {
         $this->form_validation->set_rules("nazev", "Název země", "required");
         if($this->form_validation->run()) {
             $this->load->model("countries_model");
             $data = array(
                 "nazev"=>$this->input->post("nazev")
             );
             if($this->input->post("update")) {
                 $this->countries_model->update_data($data, $this->input->post("hidden_id"));
                 redirect(base_url()."countries/updated");
             }
             if($this->input->post("insert")) {
                 $this->countries_model->insert_data($data);
                 redirect(base_url()."countries/inserted");
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
         $this->load->model("countries_model");
         $this->countries_model->delete_data($id);
         redirect(base_url()."countries/deleted");
     }
     
     public function deleted() {
         $this->index();
     }
     
     public function update_data() {
         $user_id = $this->uri->segment(3);
         $this->load->model("countries_model");
         $data["user_data"] = $this->countries_model->fetch_single_data($user_id);
         $data["fetch_data"] = $this->countries_model->fetch_data();
         $this->layout->setLayout('layout/layout_main-logged');
         $data["title"] = "Kinema administrace | Země";
         $data["main"] = "backend/admin_countries";
         $this->layout->generate($data);
     }
     
     public function updated() {
         $this->index();
     }
}