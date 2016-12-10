<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_page_model extends Ion_auth_model
{
    public function __construct() {
        parent::__construct();
    }
            
    public function page_identity_check($identity = '') {
        
    }
    
    public function create_page($additional_data)
    {
      $additional_data = $this->_filter_data($this->tables['pages'], $additional_data);
        $this->db->insert($this->tables['pages'], $additional_data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    
    public function get_all_pages()
    { 
        return $this->db->select($this->tables['submenus'].'.title as submenu_title,'.$this->tables['pages'].'.*')
                ->from($this->tables['pages'])
                ->join($this->tables['submenus'], $this->tables['pages'] . '.submenu_id=' . $this->tables['submenus'] . '.id', 'left')
                ->get();  
    }
	
	public function get_landing_pages()
    { 
        return $this->db->get('landing_page');

		  
    }
    
     public function update_landing_page($id, $additional_data)
    {  
        
     //$data = $this->_filter_data($this->tables['landing_page'], $additional_data);
        $this->db->where('id', $id);
        $this->db->update('landing_page', $additional_data);
        
        
        if ($this->db->affected_rows() == 0) {
            return FALSE;
        }
        return TRUE;
        
    }
   


    public function get_page($id)
    {
        $this->db->where($this->tables['pages'] . '.id', $id);
        return $this->db->select($this->tables['pages'] . '.*')
                        ->from($this->tables['pages'])
                        ->get();
    }
    

    
    public function update_page($id, $additional_data)
    {
      $data = $this->_filter_data($this->tables['pages'], $additional_data);
        $this->db->where('id', $id);
        $this->db->update($this->tables['pages'], $data);
        if ($this->db->affected_rows() == 0) {
            return FALSE;
        }
        return TRUE;
        
    }

   

    
    public function delete_page($id)
    {
      $this->db->where('id',$id);
       $this->db->delete($this->tables['pages']);   
    }
}