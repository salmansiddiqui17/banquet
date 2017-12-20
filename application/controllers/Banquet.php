<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banquet extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->userInfo = $this->user_model->userInfo("first_name,last_name,role_id");
        $this->user_model->check_login();
    }

	public function view()
	{
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;

        $this->db->select("*"); 
        $this->db->from('banquet');
        $this->db->where("is_delete","0");
        $data['banquets'] = $this->db->get()->result_array();

        $data['page']='banquets/view';
        $this->load->view('Template/main',$data);
	}

	public function add()
    {
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;

        $data['page']='banquets/add';
        $this->load->view('Template/main',$data);
    }

    public function save()
    {
        if($_POST){
            $img = $this->do_upload('img');
            if($img){
                $_POST['img'] = $img;
            }
            $this->db->insert('banquet',$_POST);
        }
        redirect('banquet/view');
    }

    public function edit($id='')
    {
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;

        $this->db->select("*"); 
        $this->db->from('banquet');
        $this->db->where("is_delete","0");
        $this->db->where("id",$id);
        $data['banquet'] = $this->db->get()->row_array();
        
        $data['page']='banquets/edit';
        $this->load->view('Template/main',$data);
    }

    public function update()
    {
        if($_POST){
            $id = $_POST['id'];
            if(!empty($_FILES['img'])){
                $img = $this->do_upload('img');
                if($img){
                    $_POST['img'] = $img;
                }
            }
            $this->db->where('id',$id)->update('banquet',$_POST);
        }
        redirect('banquet/view');
    }

    public function delete($id='')
    {
        $this->db->where('id',$id)->update('banquet',['is_delete'=>1]);
        redirect('banquet/view');
    }

    public function do_upload($img='',$width=1000)
    {
        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "jpg|png|jpeg",
            'overwrite' => TRUE,
            'encrypt_name' => TRUE,
            'max_size' => "10000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "5000",
            'max_width' => "5000"
        );
        $this->load->library('upload', $config);
        if($this->upload->do_upload($img))
        {
            $data = array('upload_data' => $this->upload->data());
            $name = $data['upload_data']['file_name'];
            
            $config2['image_library'] = 'gd2';
            $config2['source_image'] = "./uploads/".$name;
            $config2['maintain_ratio'] = TRUE;
            $config2['width']         = $width;
            
            $this->load->library('image_lib', $config2);
            
            $this->image_lib->resize();
            $this->image_lib->clear();

            return 'uploads/'.$name;
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
            return false;
        }
    }

    public function hall_arrangments()
    {
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;

        $this->db->select("*"); 
        $this->db->from('banquet');
        $this->db->where("is_delete","0");
        $data['banquets'] = $this->db->get()->result_array();
        // foreach ($data['banquets'] as $key => $value) {
        //     $banquets[$key]['hall_arrangements'] = $this->db->where('is_delete',0)->where('banq_id',$value['id'])->get('hall_arrangements')->result_array();
        // }

        $data['page']='banquets/hall_arrangements';
        $this->load->view('Template/main',$data);
    }

    public function view_arrangements($id = '')
    {
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;

        $data['banq_id'] = $id;

        $this->db->select("*"); 
        $this->db->from('hall_arrangements');
        $this->db->where("is_delete","0")->where('banq_id',$id);
        $data['hall_arrangements'] = $this->db->get()->result_array();

        $data['page']='banquets/view_arrangements';
        $this->load->view('Template/main',$data);
    }

    public function delete_arrangements($banq_id='',$id='')
    {
        $this->db->where('id',$id)->update('hall_arrangements',['is_delete'=>1]);
        redirect('banquet/view_arrangements/'.$banq_id);
    }

    public function add_arrangements($banq_id='')
    {
        $data['base_url'] = base_url();
        $data['userInfo'] = $this->userInfo;

        $data['banq_id'] = $banq_id;
        $data['page']='banquets/add_arrangements';
        $this->load->view('Template/main',$data);
    }

    public function save_arrangements()
    {
        $banq_id = $this->input->post('banq_id');
        $filesCount = count($_FILES['imgs']['name']);
        
        for($i = 0; $i < $filesCount; $i++){
            $_FILES['img']['name'] = $_FILES['imgs']['name'][$i];
            $_FILES['img']['type'] = $_FILES['imgs']['type'][$i];
            $_FILES['img']['tmp_name'] = $_FILES['imgs']['tmp_name'][$i];
            $_FILES['img']['error'] = $_FILES['imgs']['error'][$i];
            $_FILES['img']['size'] = $_FILES['imgs']['size'][$i];

            $img = $this->do_upload('img');
            if($img){
                $imgs[$i]['img'] = $img;
                $imgs[$i]['banq_id'] = $banq_id;
            }
        }

        $this->db->insert_batch('hall_arrangements',$imgs);

        redirect('banquet/view_arrangements/'.$banq_id);
    }

}
