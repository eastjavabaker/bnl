<?php

class Gallerymodel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_gallery_list($page, $pagenumber){
             
             $this->db->select('*');
             $this->db->from('mod_gallery');             
             $this->db->order_by("id", "desc");
             $this->db->limit($pagenumber, $page);
             $query = $this->db->get();
             return $query->result();
    }
    
    function get_count_gallery_list(){
             $this->db->select("count(1) as 'num'");
             $this->db->from('mod_gallery');
             $query = $this->db->get(); $num = 0;
             foreach($query->result() as $v){
                     $num = $v->num;
             }
             return $num;
    }
    
        
    function insert($img="")
    {
        $data = array();        
        $data['category'] = $this->input->post('category');
        $data['caption'] = $this->input->post('caption');
        $data['embed_video'] = $this->input->post('video');
        if($img){
           $data['picture'] = $img;
        }

        $data['created'] = date('Y-m-d H:i:s');
        $data['post_by'] = "admin";
        $this->db->insert('mod_gallery', $data);
      
    }
    
   
    function get_all_gallery_field($id){
             $this->db->select('*');
             $this->db->from('mod_gallery');
             $this->db->where('id',$id); 
             $query = $this->db->get();
             return $query->result();
    }
    
    function update($id, $img="")
    {
        
        $data = array();  
        $data['category'] = $this->input->post('category');
        $data['caption'] = $this->input->post('caption');
        $data['embed_video'] = $this->input->post('video');
        if($img){
           $data['picture'] = $img;
        }

        $data['created'] = date('Y-m-d H:i:s');
        $data['post_by'] = "admin";
        $this->db->update('mod_gallery', $data, array('id' => mysql_escape_string($id)));
        
    }
    
    function delete($id)
    {
             foreach($id as $v){                     
                     $table = array('mod_gallery');
                     $this->db->where('id', $v);
                     $this->db->delete($table);
             }
    }
    

}

?>