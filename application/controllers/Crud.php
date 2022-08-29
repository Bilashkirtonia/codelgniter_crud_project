<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    public function index(){
        $data['products']=$this->Crud_model->AllProduct();
        $this->load->view('welcome_message',$data); 
    }
    public function addProduct(){
       $this->form_validation->set_rules('name','Produce name','trim|required');
       $this->form_validation->set_rules('price','Produce price','trim|required');
       $this->form_validation->set_rules('quelity','Produce quelity','trim|required');

       if($this->form_validation->run() == false){
            $data_error = ['error' => validation_errors()];
            $this->session->set_flashdata($data_error);

       }else{

        $result = $this->Crud_model->insertData([
            'name' =>$this->input->post('name'),
            'price'=>$this->input->post('price'),
            'quelity'=>$this->input->post('quelity')
        ]);

        if($result){
            $this->session->set_flashdata('insert','your data is insert successfully!');
        }
       }
       redirect('Crud');
    }

    public function edit($id){
        $data['singledata'] = $this->Crud_model->editData($id);
        $this->load->view('editdata',$data);

    }

    public function update($id){

        $this->form_validation->set_rules('name','Produce name','trim|required');
        $this->form_validation->set_rules('price','Produce price','trim|required');
        $this->form_validation->set_rules('quelity','Produce quelity','trim|required');

       if($this->form_validation->run() == false){
            $data_error = ['error' => validation_errors()];
            $this->session->set_flashdata($data_error);

       }else{

        $result = $this->Crud_model->updateData([
            'name' =>$this->input->post('name'),
            'price'=>$this->input->post('price'),
            'quelity'=>$this->input->post('quelity')
        ],$id);

        if($result){
            $this->session->set_flashdata('update','your data is update successfully!');
        }
       }
       redirect('Crud');

    }


    public function delete($id){
        
       $result = $this->Crud_model->deleteData($id);
        
       if($result == true){
        $this->session->set_flashdata('delete','Data delete successfully ! ');
       }
       redirect('Crud');

    }
}