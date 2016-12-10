<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('org/admin/admin_menu_library');
    }

    public function index() {


        $this->data['menu_list'] = $this->admin_menu_library->get_all_menus()->result_array();
        $this->template->load(NULL, "admin/menu/index", $this->data);
    }

    /*
     * This method will create menu item
     */

    public function create_menu() {
        $this->data['message'] = '';
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('title', 'Title', 'xss_clean|required');
        
        if ($this->input->post('submit_create_menu')) {
            if($this->form_validation->run() == true)
            {
                $additional_data = array(
                    'title' => $this->input->post('title'),
                    'order' => $this->input->post('order'),
                );
                $menu_id = $this->admin_menu_library->create_menu($additional_data);
                if($menu_id !== FALSE)
                {
                    $this->data['message'] = "Menu is created successfully.";
                }
                else
                {
                    $this->data['message'] = 'Error while creating a menu.';
                }
            }
            else
            {
                $this->data['message'] = validation_errors();
            }            
        }

        $this->data['title'] = array(
            'id' => 'title',
            'name' => 'title',
            'type' => 'text',
        );
        $this->data['order'] = array(
            'id' => 'order',
            'name' => 'order',
            'type' => 'text',
        );

        $this->data['submit_create_menu'] = array(
            'id' => 'submit_create_menu',
            'name' => 'submit_create_menu',
            'type' => 'submit',
            'value' => 'create',
        );
        
//          $this->data['description'] = array(
//            'name' => 'description',
//            'id' => 'description',
//            'type' => 'text',
//            'value' => $this->form_validation->set_value('description'),
//            'rows'  => '4',
//            'cols'  => '10'
//        );
        
        $this->template->load(NULL, "admin/menu/create_menu", $this->data);
    }

    /*
     * This method will update menu item
     */

    public function update_menu($menu_id) {
        
        $this->data['message'] = '';
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('title', 'Title', 'xss_clean|required');
        if ($this->input->post('submit_update_menu')) {
            if($this->form_validation->run() == true)
            {
                $additional_data = array(
                    'title' => $this->input->post('title'),
                    'order' => $this->input->post('order'),
                );
                if($this->admin_menu_library->update_menu($menu_id, $additional_data))
                {
                    $this->data['message'] = "Menu is updated successfully.";
                }
                else
                {
                    $this->data['message'] = 'Error while updating a menu.';
                }
            }
            else
            {
                $this->data['message'] = validation_errors();
            }            
        }
        $menu_info = array();
        $menu_info_array = $this->admin_menu_library->get_menu($menu_id)->result_array();
        if(!empty($menu_info_array))
        {
            $menu = $menu_info_array[0];
        }
        $this->data['menu'] = $menu;
        
        $this->data['title'] = array(
            'name' => 'title',
            'id' => 'title',
            'type' => 'text',
            'value' => $menu['title'],
        );  
        $this->data['order'] = array(
            'name' => 'order',
            'id' => 'order',
            'type' => 'text',
            'value' => $menu['order'],
        );
        $this->data['submit_update_menu'] = array(
            'id' => 'submit_update_menu',
            'name' => 'submit_update_menu',
            'type' => 'submit',
            'value' => 'Update',
        );
        $this->template->load(NULL, "admin/menu/update_menu", $this->data);
    }

    /*
     * Ajax call to delete menu item
     * This method will delete a menu item
     */

    public function delete_menu() {
        $result = array();
        $menu_id = $this->input->post('menu_id');
        if($this->admin_menu_library->delete_menu($menu_id))
        {
            $result['message'] = "Menu is deleted successfully.";
        }
        else
        {
            $result['message'] = "Error while deleting menu.";
        }
        echo json_encode($result);
    }

}
