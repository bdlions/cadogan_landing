<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


/*
code is exctract from page.php controller

*/

class LandingPage extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('org/admin/admin_page_library');
        $this->load->library('org/admin/admin_submenu_library');
        $this->load->library('org/utility/Image_utils');
	if (!$this->ion_auth->logged_in()) {
            redirect('admin/auth/login', 'refresh');
        }	
    }

    /*
     * This method will show all submenu items
     */

    public function index() {
        $this->data['page_Detail'] = $this->admin_page_library->get_landing_pages()->result_array();
		
        $this->template->load(NULL, "admin/landingpage/index", $this->data);
    }

    /*
     * update coloumns
     */

   public function update_landingpage_coloum($id=0,$coloum = 0){

        $this->data['message'] = '';
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('description', 'Title', 'required');
        if ($this->input->post()) {
                    
            
            if ($this->form_validation->run() == true) {

                if (isset($_FILES["userfile"]) && $_FILES["userfile"]['error'] == 0 ) {
                    $file_info = $_FILES["userfile"];
                    $result = $this->image_utils->upload_image($file_info, IMAGE_UPLOAD_PATH);
                    $path = IMAGE_UPLOAD_PATH.$result['upload_data']['file_name'];
                    $this->image_utils->resize_image($path, $path, 120, 300);
                    $result = $this->image_utils->upload_image($file_info, IMAGE_UPLOAD_PATH);
                   
                    
                  
                }



                if($coloum == 1){
                    $additional_data = array(
                    'title_one' => $this->input->post('title'),
                    'description_one' => $this->input->post('description'),
                    
                    );
                    if(isset($result['upload_data']['file_name'])){
                        $additional_data['title_one_image'] = $result['upload_data']['file_name'];
                    }

                }
                elseif ($coloum == 2) {
                    $additional_data = array(
                    'title_two' => $this->input->post('title'),
                    'description_two' => $this->input->post('description'),
                    );

                    if(isset($result['upload_data']['file_name'])){
                        $additional_data['title_two_image'] = $result['upload_data']['file_name'];
                    }
                }

                 elseif ($coloum == 3) {
                    $additional_data = array(
                    'title_three' => $this->input->post('title'),
                    'description_three' => $this->input->post('description'),
                    );

                    if(isset($result['upload_data']['file_name'])){
                        $additional_data['title_three_image'] = $result['upload_data']['file_name'];
                    }
                }



               

               
                if ($this->admin_page_library->update_landing_page($id, $additional_data)) {
                    $this->data['message'] = "Page is updated successfully.";
                } else {
                    $this->data['message'] = 'Error while updating the page.';
                }
            } else {
                $this->data['message'] = validation_errors();
            }





            
        }


        $landing_page_coloum_info_array = $this->admin_page_library->get_landing_pages()->result_array();
        if(!empty($landing_page_coloum_info_array)){
            $landing_page_coloum = $landing_page_coloum_info_array[0]; 
            $this->data['coloum_info'] = $landing_page_coloum;
           
            
        }
        
       // print_r($landing_page_coloum);
        if ($coloum == 1) {
            $this->data['image'] = $landing_page_coloum['title_one_image'];
            $this->data['coloum'] = $coloum;
            $this->data['title'] = array(
            'name' => 'title',
            'id' => 'address',
            'type' => 'text',
            'value' => $landing_page_coloum['title_one'],
            'rows' => '4',
            'cols' => '10',
            );
            $this->data['description'] = array(
            'name' => 'description',
            'id' => 'address',
            'type' => 'textarea',
            'value' => $landing_page_coloum['description_one'],
            'rows' => '4',
            'cols' => '10',
             );


        } else if($coloum == 2) {

            $this->data['image'] = $landing_page_coloum['title_two_image'];
            $this->data['coloum'] = $coloum;
            $this->data['title'] = array(
            'name' => 'title',
            'id' => 'address',
            'type' => 'text',
            'value' => $landing_page_coloum['title_two'],
            'rows' => '4',
            'cols' => '10',
             );
            $this->data['description'] = array(
            'name' => 'description',
            'id' => 'address',
            'type' => 'textarea',
            'value' => $landing_page_coloum['description_two'],
            'rows' => '4',
            'cols' => '10',
             );

            
        }elseif ($coloum == 3) {
           $this->data['image'] = $landing_page_coloum['title_three_image'];
           $this->data['coloum'] = $coloum;
            $this->data['title'] = array(
            'name' => 'title',
            'id' => 'address',
            'type' => 'text',
            'value' => $landing_page_coloum['title_three'],
            'rows' => '4',
            'cols' => '10',
            );
            $this->data['description'] = array(
            'name' => 'description',
            'id' => 'address',
            'type' => 'textarea',
            'value' => $landing_page_coloum['description_three'],
            'rows' => '4',
            'cols' => '10',
            );
        }

        $this->data['submit_update_page'] = array(
            'id' => 'submit_update_page',
            'name' => 'submit_update_page',
            'type' => 'submit',
            'value' => 'Update',
        );


     
        $this->template->load(NULL, "admin/landingpage/update_page_coloum", $this->data);
        
        /*$this->data['description'] = array(
            'id' => 'description',
            'name' => 'description',
            'type' => 'text',
            'value' => html_entity_decode(html_entity_decode($page['description'])),
            'rows' => '4',
            'cols' => '10'
        );*/

        $this->data['submit_update_page'] = array(
            'id' => 'submit_update_page',
            'name' => 'submit_update_page',
            'type' => 'submit',
            'value' => 'Update',
        );
        //$this->template->load(NULL, "admin/landingPage/update_page", $this->data);
   }
    /*
     * This method will update page
     */

    public function update_page($id = 0) {

        $this->data['message'] = '';
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('addressField', 'Title', 'required');
        if ($this->input->post()) {
             //echo "test";exit();
            ///echo $this->input->post('email');
            $result = array();
            if ($this->form_validation->run() == true) {
                $additional_data = array(
                    'email' => $this->input->post('email'),
                    'telephone' => $this->input->post('telephone'),
                    'address' => $this->input->post('addressField'),
                );
                //print_r($additional_data); exit();
                if (isset($_FILES["userfile"]) && $_FILES["userfile"]['error'] == 0 ) {
                    $file_info = $_FILES["userfile"];
                    
                    $result = $this->image_utils->upload_image($file_info, IMAGE_UPLOAD_PATH);
                    
                    $path = IMAGE_UPLOAD_PATH.$result['upload_data']['file_name'];

                    $this->image_utils->resize_image($path, $path, PAGE_IMAGE_HEIGHT, PAGE_IMAGE_WIDTH);
                    if(isset($result['upload_data']['file_name'])){
                        $additional_data['logo'] = $result['upload_data']['file_name'];
                    }
                                                      
                    
                }

                if (isset($_FILES["userfilebanner"]) && $_FILES["userfilebanner"]['error'] == 0 ) {
                    $file_info_banner = $_FILES["userfilebanner"];
                    //print_r($file_info_banner); exit();      
                    $result_banner= $this->image_utils->upload_image($file_info_banner, IMAGE_UPLOAD_PATH,'userfilebanner');
                   
                    $path = IMAGE_UPLOAD_PATH.$result_banner['upload_data']['file_name'];
                    $this->image_utils->resize_image($path, $path, 300, 1250);
                    if(isset($result_banner['upload_data']['file_name'])){
                        $additional_data['banner'] = $result_banner['upload_data']['file_name'];
                    }
                                                      
                    
                }    



                if ($this->admin_page_library->update_landing_page($id, $additional_data)) {
                    $this->data['message'] = "Page is updated successfully.";
                } else {
                    $this->data['message'] = 'Error while updating the page.';
                }
            } else {
                $this->data['message'] = validation_errors();
            }
           
           //$this->view->load(NULL, "admin/landingpage/index", $this->data);  

        }
        $landing_page_info_array = $this->admin_page_library->get_landing_pages()->result_array();
        $page = array();
        //$page_info_array = $this->admin_page_library->get_page($id)->result_array();
        if (!empty($landing_page_info_array)) {
            $page = $landing_page_info_array[0];
            //print_r($page);
        }
        $this->data['page'] = $page ;
        $this->data['address'] = array(
            'name' => 'addressField',
            'id' => 'addressField',
            'type' => 'textarea',
            'value' => html_entity_decode(html_entity_decode($page['address'])),
            'rows' => '4',
            'cols' => '10',
        );

        $this->data['telephone'] = array(
            'name' => 'telephone',
            'id' => 'telephone',
            'type' => 'text',
            'value' => $page['telephone'],
        );
        
         $this->data['email'] = array(
            'name' => 'email',
            'id' => 'email',
            'type' => 'email',
            'value' => $page['email'],
        );

        /*$this->data['description'] = array(
            'id' => 'description',
            'name' => 'description',
            'type' => 'text',
            'value' => html_entity_decode(html_entity_decode($page['description'])),
            'rows' => '4',
            'cols' => '10'
        );*/


        $this->data['submit_update_page'] = array(
            'id' => 'submit_update_page',
            'name' => 'submit_update_page',
            'type' => 'submit',
            'value' => 'Update',
        );
        $this->template->load(NULL, "admin/landingpage/update_page", $this->data);
    }

    /*
     * Ajax call to delete page
     * This method will delete a page
     */

    public function delete_page() {
     $result = array();
//        $id = $this->input->post('page_id');
        $id = $this->input->post('id');
     
        if($this->admin_page_library->delete_page($id))
        {
            $result['message'] = "Page is deleted successfully.";
        }
        else
        {
            $result['message'] = "Error while deleting page.";
        }
        echo json_encode($result);   
    }
    
    public function update_bg_img($id = 0)
    {
        $this->data['message'] = "";
        if ($this->input->post()) 
        {
            $result = array();
            $additional_data = array(
                'bg_title' => $this->input->post('bg_title'),
                'bg_subtitle' => $this->input->post('bg_subtitle')
            );
            if (isset($_FILES["userfile"])) {
                $file_info = $_FILES["userfile"];
                $result = $this->image_utils->upload_image($file_info, IMAGE_UPLOAD_PATH);
                $path = IMAGE_UPLOAD_PATH.$result['upload_data']['file_name'];
                $this->image_utils->resize_image($path, $path, 558, 1600);
                $additional_data['bg_img'] = $result['upload_data']['file_name'];
            }
            if ($this->admin_page_library->update_landing_page($id, $additional_data)) {
                $result['message'] = "Background Info is updated successfully.";
            } else {
                $result['message'] = 'Error while updating background Info.';
            }
            echo json_encode($result);
            return;
        }
        
        $this->data['page_detail'] = $this->admin_page_library->get_landing_pages()->result_array();
        $this->template->load(NULL, "admin/landingpage/update_bg_img", $this->data);
    }

}
