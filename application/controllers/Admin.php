<?php
class Admin extends CI_Controller {

        public function index()
        {
                $data ['title']='simple log-in with setion';
                $this->load->view('admin_login', $data);
        }	
        public function admin_view()
        {
                $this->load->view('admin_view');
        }

        public function login_validation(){
                
                
                // $this->form_validation->set_rules('username', 'user name', 'required');
                // $this->form_validation->set_rules('password', 'user Password', 'required');

                        $username = $this->input->post('username'); 
                        $password = $this->input->post('password');
                        // $password = $this->input->post(md5('password'));

                        $this->load->model('Admin_model');
                        
                        if($this->Admin_model->can_login($username, $password)){
                                $this->load->view('admin_view');
                                $this-> verify_car_owners();
                                $this ->verify_customers();
                        }

                else{     
                        
                      echo"log in was not succesiful";
                      $this->load->view('admin_login');

                }
                
        }        
        public function carinDB(){
                 
		$name=$this->input->post('name');
		$makename=$this->input->post('makename');
		$yearofmodel=$this->input->post('yearofmodel');
                $timeofrent=$this->input->post('timeofrent');
			
                $data = array(
                        'name'=> $name,
                        'makename' => $makename,
                        'yearofmodel'=>$yearofmodel,
                        'timeofrent'=>$timeofrent
                );
                $this->load->model('Admin_model');
                $this->Car_owner_model->carsaving($data);
		if($this->Car_owner_model->carsaving($data)==true){
			echo "Saved Successfully await verification";
		}
		else{
			echo "Insert error !";
		}        
        }
        public function carinimage(){
                //renaming

                $this->load->helper('url', 'form');
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 2000;
                $config['max_width'] = 1500;
                $config['max_height'] = 1500;
                $this->load->library('upload');

                $this->upload->initialize($config);
        }
        
        public function verify_customers(){
                // get the forms and check them
                $this->load->model("Admin_model");
                $data["verify_customer"] =  $this->Admin_model-> get_waiting_customers();

                $this->load->view('admin_view',$data);
        }

        public function verify_car_owners(){
                // get the forms and check them
                $this->load->model("Admin_model");
                $data["verify_car_owner"] =  $this->Admin_model-> get_waiting_car_owners();

                $this->load->view('admin_view',$data);
        }
        public function results_car_owner(){
                // takes the evaluation of the admin to the model
                $good = $this->input->post('verified');
                $notgood = $this->input->post('not_verified');  
                
                $this->load->model('Admin_model');
                $this->Admin_model-> verify_car_owners();
        }
        public function results_customer(){
                // takes the evaluation of the admin to the model
                $good = $this->input->post('verified');
                $notgood = $this->input->post('not_verified');  
                
                $this->load->model('Admin_model');
                $this->Admin_model-> verify_customers();
        }
}
