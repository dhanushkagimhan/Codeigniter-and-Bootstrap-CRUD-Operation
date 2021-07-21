<?php
    class Stu_model extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        
        public function saverecords($name,$email,$pnum){
            $this->db->set('name',$name);
            $this->db->set('email',$email);
            $this->db->set('phone_num',$pnum);
            $this->db->insert('student');
        }

        public function get_data(){
            $query = $this->db->get('student');
            return $query->result();
        }

        public function delete_user($index_n){
            $this->db->delete('student',array('index_num'=>$index_n));
        }

        public function getuserbyindex($index_n){
            $query=$this->db->get_where('student',array('index_num'=>$index_n));
            return $query->result();
        }

        public function update_user($index_n,$name,$email,$pnum){
            $this->db->set('name',$name);
            $this->db->set('email',$email);
            $this->db->set('phone_num',$pnum);
            $this->db->where('index_num',$index_n);
            $this->db->update('student');
        }
    }
?>