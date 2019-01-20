<?php
class Import_model extends CI_Model {
 
    public function importData($data) {
 
        $res = $this->db->insert_batch('student_info',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
 
    }
 
}

 