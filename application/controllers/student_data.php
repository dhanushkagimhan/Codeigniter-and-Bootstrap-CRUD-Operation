<?php

class Student_data extends CI_Controller {

    public function __construct(){
        parent ::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('stu_model');
    }

    public function index() {

        $this->load->view('stu_view');

    }

    public function savedata(){
        $this->load->view('stu_reg_view');

        if($this->input->post('save')){
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $pnum=$this->input->post('pnum');
            $this->stu_model->saverecords($name,$email,$pnum);
            $this->load->view('stu_reg_s_view');
        }
    }

    public function displaydata(){
        $result['data']=$this->stu_model->get_data();
        $this->load->view('stu_list',$result);
    }

    public function deletedata(){
        $index_n=$this->input->get('index_n');
        $this->stu_model->delete_user($index_n);
        redirect("student_data/displaydata");
    }

    public function updatedata(){
        $index_n=$this->input->get('index_n');
        $result['data']=$this->stu_model->getuserbyindex($index_n);
        $this->load->view('stu_update_view',$result);

        if($this->input->post('update')){
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $pnum=$this->input->post('pnum');
            $this->stu_model->update_user($index_n,$name,$email,$pnum);
            redirect("student_data/displaydata");
        }
    }
}

?>