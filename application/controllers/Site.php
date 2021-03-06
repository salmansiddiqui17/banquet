<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}




	public function index()
	{
		
		// $data['page'] = "home/dashboard";
		// $this->load->view('Template/main', $data);
		$data['banquets'] = $this->db->where('is_delete',0)->get('banquet')->result_array();
		$data['bookings'] = array_column($this->db->get('bookings')->result_array(),'booking');
		foreach ($data['bookings'] as $key => $value) {
			$data['bookings'][$key] = date('n-j-Y',strtotime($value));
		}
		$data['bookings']=json_encode($data['bookings']);
		$this->load->view('site/index',$data);
		
	}

	public function reservation()
	{
		if($_POST){
			$data = $_POST;
			
			$this->load->library('email');
			$config['protocol'] = "smtp";
			$config['smtp_crypto'] = "ssl";
			$config['smtp_host'] = "smtp.gmail.com";
			$config['smtp_port'] = "465";
			$config['smtp_user'] = "salman.smartinsider@gmail.com"; 
			$config['smtp_pass'] = "sam31000";
			$config['charset'] = "utf-8";
			$config['mailtype'] = "html";
			$config['newline'] = "\r\n";
			
			$this->email->initialize($config);
			  
			$message = "Dear management Banquet Management System,<br>
						Mr./Mrs. $data[name] wants to book $data[hall] on $data[date] on time $data[time].<br>
						Reservation is for $data[no_of_people] people.<br>
						Contact no: $data[contact]<br>
						Thank you.";
			$this->email->set_newline("\r\n");
			$this->email->from('Banquet Management System'); // change it to yours
			$this->email->to('zahidzaidi57@gmail.com');// change it to yours
			// $this->email->to('salmansidd17@gmail.com');// change it to yours
			$this->email->subject('New Banquet Reservation Request');
			$this->email->message($message);
			$this->db->insert('bookings',['booking'=>date('Y-m-d',strtotime($data['date'])),'message'=>$message]);
			if($this->email->send())
			{
				echo "success";
				// redirect('/site');
			}
			else
			{
				var_dump('<pre>',$this->email->print_debugger());die;
			}
		}
	}
	
	public function getInTouch()
	{
		if($_POST){
			$data = $_POST;

			$this->load->library('email');
			$config['protocol'] = "smtp";
			$config['smtp_crypto'] = "ssl";
			$config['smtp_host'] = "smtp.gmail.com";
			$config['smtp_port'] = "465";
			$config['smtp_user'] = "salman.smartinsider@gmail.com"; 
			$config['smtp_pass'] = "sam31000";
			$config['charset'] = "utf-8";
			$config['mailtype'] = "html";
			$config['newline'] = "\r\n";
			
			$this->email->initialize($config);
			  
			$message = $data['message'];
			$message .= "<br>From: ".$data['first_name']." ".$data['last_name'];
			$message .= "<br>email: ".$data['email'];

			$this->email->set_newline("\r\n");
			$this->email->from($data['first_name']." ".$data['last_name']); // change it to yours
			$this->email->to('zahidzaidi57@gmail.com');// change it to yours
// 			$this->email->to('salmansidd17@gmail.com');// change it to yours
			$this->email->subject($data['subject']);
			$this->email->message($message);
			if($this->email->send())
			{
				echo "success";
				// redirect('/site');
			}
			else
			{
				var_dump('<pre>',$this->email->print_debugger());die;
			}
		}
	}

	public function ShowArrangements($banq_id='')
	{
		if($banq_id!=''){
			$data['arrangements'] = $this->db->where('banq_id',$banq_id)->where('is_delete',0)->get('hall_arrangements')->result_array();
			$this->load->view('site/arrangements',$data);
		}
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
