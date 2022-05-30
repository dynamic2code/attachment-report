<?php
class Customer extends CI_Controller{

    public function index(){
        //to show the welcome page with random results from cars
        $customer_location = '';//json_decode(file_get_contents("http://ipinfo.io/"));
        // $this->load->model('Customer_model');
        
        
        $this->load->model('Customer_model');
    
            $data['results'] = $this->Customer_model-> random_results( $customer_location);
            $data['results_count'] = $this->Customer_model-> random_results_count( $customer_location);
            
            $this->load->view('welcome',$data);

    }
    public function search(){
        $serch_term = $this->input->post('search_term') ;
        $this->load->model('Customer_model');
        $data['results'] = $this->Customer_model->get_search_results($this->session->userdata('clocation'), $serch_term);
        $this->load->view('welcome', $data);

    }
    public function exist(){
        
        $firstname=$this->input->post('firstname');
        $secondname=$this->input->post('secondname');
        $email=$this->input->post('email');
        $password=md5($this->input->post('password'));
                    
            
                $data = array(
                            
                        'firstname'=> $firstname,
                        'secondname'=> $secondname,
                        'email' => $email,
                        'password'=>$password,
                            
                );
               
        $this->load->model('Customer_model');
        if($this->Customer_model->donotexist($email)){
            $this->register($data);
        }  
        else{
            $this->session->set_flashdata('customer_reg_error_message', 'Registration was unsuccessful! Please try again or login if you aready have an account ');
            redirect('Customer/index');
        }
    }
    
    public function register($data){
        //takes the input data from the form to the db
        //session data after first registering
            $this->load->model('Customer_model');
                    // $this->Car_owner_model->carsaving($data);

            $id = $this->Customer_model->customersaving($data);
            if($id){
                $customer_location = '';//json_decode(file_get_contents("http://ipinfo.io/"));
                
                $newdata = array(  
                    'email'     => $data['email'], 
                    'password' => $data['password'],
                    'first_name'=> $data['firstname'],
                    'customer_id' => $id,
                    'clocation'=> $customer_location
                    ); 
                // $this->load->library('session');    
                $this->session->set_userdata($newdata);

                $this->session->set_flashdata('customer_reg_message', 'Saved Successfully await verification');
                redirect('Customer/index');   
            }
            else{
                $this->session->set_flashdata('error_message', 'Registration was unsuccessful! Please try entering anoter email');
                redirect('Customer/index');
             }

    
    }
    // verification
    public function welcomeem($data, $newdata, $email){
        global $carhireemail;
        $carhireemail = 'dynamicdesingns@gmail.com';
         if($this->register($data, $newdata)){
            $this->load->library('email');
            $this->email->from($carhireemail, 'Identification');
            $this->email->to($this->session->userdata('email'));
            $this->email->subject('Welcome to Carhire');
            $this->email->message('The email send using codeigniter library');
        //     the message to be updated
        }
        
    }

    
    public function login_validation(){
        $this->load->library('form_validation');
       
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
       

        if ($this->form_validation->run())
        {
                
               $password = md5($this->input->post('password'));
               $email = $this->input->post('email');


               $this->load->model('Customer_model');
               //$this->Customer_model->can_login($email,$password);
               $details =$this->Customer_model->can_login($email,$password) ;
               if($details){
                $customer_location = '';//json_decode(file_get_contents("http://ipinfo.io/"));
                $newdata = array( 
                    'first_name'=> $details['first_name'], 
                    'email'     => $email, 
                    'password' => $password,
                    'customer_id'=> $details['id'],
                    'clocation'=> $customer_location
                    );
                    echo($this->session->set_userdata($newdata));
                    //session after loging in     
                    
                $this->session->set_flashdata('customer_log_message', 'Login successful! Welcome back');
                redirect('/index');
               }else{
                //    echo"log in unsuccesful";
                //    $this->load->view('welcome');
                $this->session->set_flashdata('customer_log_error_message', 'Login unsuccessful, try another email and password or registerring');
                redirect('Customer/index');
               }

        }
        else
        {
            $this->session->set_flashdata('error_message', 'Please enter all required details in the form');
            redirect('Customer/index');
         }
    }

    public function make_order(){
        if($this->session->userdata('first_name')!== null){
                    $pickupplace = $this->input->post('pickupplace');
        $dropoffplace = $this->input->post('dropoffplace');
        $pickuptime = $this->input->post('pickuptime');
        $dropofftime = $this->input->post('dropofftime');
        $drivingmode = $this->input->post('mode');
        $rent_time =$this->input->post('time');
        $car_id = $this->input->post('car_id');

        $oderdata = array(
            'pickupplace'=>$pickupplace,
            'dropoffplace'=>$dropoffplace, 
            'pickuptime'=>$pickuptime, 
            'dropofftime'=>$dropofftime,
            'driving_mode'=>$drivingmode,
            'time_for_rent'=>$rent_time,
            'car_id'=> $car_id,
            'customer_id'=>$this->session->userdata('customer_id')
            
        );
        $this->load->model('Customer_model');
        // $this->Customer_model-> customersaving($data);
        if($this->Customer_model-> save_order($oderdata)){
            $this->session->set_flashdata('error_message', 'hire successfuly an email will be sent to you with all the detail');
            redirect('Customer/index');
        }else{
            $this->session->set_flashdata('error_message', 'hire was unsuccessfuly! please try again');
            redirect('Customer/index');
        }
        }else{
            $this->session->set_flashdata('customer_notregisterd_error_message', 'Hire was unsuccesful register or log in first to access this service. Go to the menue to register or log in if you aready have an account');
            redirect('Customer/index');
        }


    }
    public function sent_messages($oderdata,$email, $carhireemail, $location,$agentsemail,$carowneremail){
        // this will send the messages toall the parties customer, car owner and the neerlest agent
        $this->load->model('Customer_model');
        if($this->Customer_model->save_order($oderdata)){
            $this->load->library('email');
            $this->email->from($carhireemail, 'successful hire');
            $this->email->to($email);
            $this->email->subject('Hire details');
            $this->email->message('The email send using codeigniter library');

            $this->load->model('Customer_model');
            $this-> Customer_model->emailgetter();

            $this->load->model('Customers_model');
            $this->Customers_model->emailgetter($location);

            $this->email->from($carhireemail, 'successful hire');
            $this->email->to($agentsemail);
            $this->email->subject('Derivery detals');
            $this->email->message('The email send using codeigniter library');

           
            $this->email->from($carhireemail, 'successful hire');
            $this->email->to($carowneremail);
            $this->email->subject('Successful Hire');
            $this->email->message('The email send using codeigniter library');
        }
    }
    //getting the coustomers location

    public function register_support(){
        $institution = $this->input->post('institution');
        $support = $this->input->post('support');
        $baselocation = $this->input->post('location');
        $certificate = $this->input->post('cert');

        $thedata =array(
                'institution'=> $institution,
                'support'=>$support,
                'location'=> $baselocation,

        );

        $this->load->model('Customer_model');
        if($this->Customer_model->support($thedata)){
            $this->session->set_flashdata('error_message', 'Registation successful');
            redirect('Customer/index');
        };
    }
    public function get_help(){
        // should go through only if the user is registerd
        $thlocation = $this->input->post('location');
        $disterss = $this->input->post('distress');
        $description = $this->input->post('details');
        
        $data =array(
            'location'=>$thlocation,
            'distress'=> $disterss,
            'details'=> $description
        );

        $this->load->model('Customer_model');
        $this->Customer_model->march($thlocation,$disterss);
        $this->Customer_model->help($data);
        $this->session->set_flashdata('error_message', 'Help is on its way');
        redirect('Customer/index');
    }
    public function march_help_to_support($thlocation,$distress, $march, $carhireemail){
        $this->load->model('Customer_model');
        $this->Cusomer_model->march($thlocation,$distress);

        foreach($march as $email){
            $this->load->library('email');
            $this->email->from($carhireemail, 'Availabbility for support');
            $this->email->to($email);
            $this->email->subject('Availability for support');
            $this->email->message('The email send using codeigniter library');
        }
    }
    public function log_out(){
        $okay =  $this->session->sess_destroy();
        redirect('Customer/index');
        // if($okay){ 
        //      $this->session->set_flashdata('logout_message', 'Logging out was sucessiful!');
             
        // }
       
    }
    
}