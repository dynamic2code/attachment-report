<?php
class Car_owner extends CI_Controller{
    public function index(){
        $this->load->view('car_owner_view');
    }
	
    public function login_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        

        if ($this->form_validation->run())
        {
               
               $password = md5($this->input->post('password'));
               $email = $this->input->post('email');

               $this->load->model('Car_owner_model');
               $details= $this->Car_owner_model->can_login($email,$password);
               
               if($details){

                    $newdata = array( 
                        'first_name'=> $details['first_name'], 
                        'email'     => $email, 
                        'password' => $password,
                        'owners_id'=> $details['id']
                        );
                   $this->session->set_userdata($newdata);
                    $this->index();

               } else{
                $this->session->set_flashdata('car_log_error_message', 'Login unsuccessful:wrong password or email ');
                redirect('Customer/index');
                }

        } 

        }
        public function register(){
                //takes the input data from the form to the db
                global $email;
                $firstname=$this->input->post('firstname');
                $secondname=$this->input->post('secondname');
                $email=$this->input->post('email');
                $password=md5($this->input->post('password'));
                            
                    global $data;
                        $data = array(
                                    
                                'firstname'=> $firstname,
                                'secondname'=> $secondname,
                                'email' => $email,
                                'password'=>$password
                                    
                        );
                       
                $this->load->model('Car_owner_model');
                
                if($this->Car_owner_model->donotexist($email)){
                    $this->load->model('Car_owner_model');
                            // $this->Car_owner_model->carsaving($data);
                    $id = $this->Car_owner_model->carownersaving($data);
                    if($id){
                            $newdata = array(  
                                'email'     => $data['email'], 
                                'password' => $data['password'],
                                'first_name'=> $data['firstname'],
                                'owners_id' => $id,
                                
                                ); 
                        $this->session->set_userdata($newdata);
                        $this->session->set_flashdata('car_owner_ reg_message', 'Congrats! registration was succesful await verification');
                        $this->index();
                    }
                }              
                else{
                        $this->session->set_flashdata('error_message', 'Registration was unsuccessful! Please try entering anoter email');
                        redirect('Customer/index');
                }
            }

        // input data on the car
        public function carinDB(){
                 
		$name=$this->input->post('name');
		$makename=$this->input->post('makename');
		$yearofmodel=$this->input->post('yearofmodel');
        $timeofrent=$this->input->post('renttime');
		$location = $this->input->post('location');
                // $picture = $this->input->post('picture');
                $data = array(
                        'name'=> $name,
                        'makename' => $makename,
                        'yearofmodel'=>$yearofmodel,
                        'timeofrent'=>$timeofrent,
                        'location' =>$location,
                        'car_owners_id'=> $this->session->userdata('owners_id')
                );
                $this->load->model('Car_owner_model');
                $result = $this->Car_owner_model->carsaving($data);
                if($result){
                    $this->session->set_flashdata('carindb_message', 'Successful! your car will now be available for hire.');
                    redirect('car_owner');
                }
                else{
                    $this->session->set_flashdata('carindb_error_message', 'Saving was unsuccessful! please try entering another car details');
                    redirect('car_owner');
                }
                
                //getting the car location
              
                

        }
        
      
        // public function carimg($insert_id){
        //   $this->load->model('Car_owner_model');
        //   $this->Car_owner_model->carcarimgindb($insert_id);
        // }
}