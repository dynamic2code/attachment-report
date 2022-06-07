<?php
class Customer_model extends CI_Model {

        public function donotexist($email){
                $query = $this->db->query("SELECT 'email' FROM Customer WHERE email = '$email'");
                if($query->num_rows() == 0){
                        return true;
                }
        }

         public function random_results($customer_location){
                 //should take the state of the car active or available
                 $this->db->from('cars');
                //  $this->db->limit(3);
                 return $this->db->get()->result();
                //  $query = $this->db->query("SELECT * FROM cars WHERE location = '$customer_location' LIMIT 3");
                //  if($query){
                //          return $this->db->get()->result();
                //  }
                //  else{
                //          $bsql = "SELECT * FROM cars LIMIT 3";
                //          $q = $this->db->query($bsql);
                //          return $q->get()->result();
                //  }

         }
        public function random_results_count($customer_location){
                 //should take the state of the car active or available
                 $this->db->from('cars');
                 // $this->db->limit(3);
                 return $this->db->count_all_results();
        }

     
        public function can_login($email, $password){
                $query = $this->db->query("SELECT * FROM Customer WHERE email = '$email' AND password = '$password'");

                if($query->num_rows() > 0){
                        $details['id'] = $this->db->query("SELECT customer_id FROM Customer WHERE email = '$email' AND password = '$password'");
                        $details['firstname'] = $this->db->query("SELECT firstname FROM Customer WHERE email = '$email' AND password = '$password'");
                       
                        return $details;
                }else{
                        return false;
                }
                

        }
        public function customersaving($data){
                $this->db->select('Customer');
                $insert = $this->db->insert('Customer',$data);
                $id = $this->db->insert_id();
                if ($insert){
                        if(basename($_FILES['id_front']['name'])!=''){
                               
                               
                                $config['upload_path'] = './user_id_front/';
                                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                                $config['max_size']	= '0';
                                $config['max_width']  = '0';
                                $config['max_height']  = '0';
                                
                                $this->load->library('upload',$config);
                                $this->upload->initialize($config);
                                $q = $this->upload->do_upload('id_front');
                                
                                if($q){	
                                                                
                                    $det = $this->upload->data();
                                    $this->db->where(array('customer_id'=>$id));				
                                    $this->db->update('Customer', array('id_front' => $det['file_name']));
                                    return $id; 
                                        if(basename($_FILES['id_back']['name'])!=''){                          
                                                $config['upload_path'] = './user_id_back/';
                                                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                                                $config['max_size']	= '0';
                                                $config['max_width']  = '0';
                                                $config['max_height']  = '0';
                                                
                                                $this->load->library('upload',$config);
                                                $this->upload->initialize($config);
                                                $q = $this->upload->do_upload('id_back');
                                                
                                                if($q){	
                                                                                
                                                        $et = $this->upload->data();
                                                        $this->db->where(array('customer_id'=>$id));				
                                                        $this->db->update('Customer', array('id_back' => $et['file_name']));
                                                        return $id;
                                                        if(basename($_FILES['driving_license']['name'])!=''){
                                                                
                                                                
                                                                $config['upload_path'] = './driving_license/';
                                                                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                                                                $config['max_size']	= '0';
                                                                $config['max_width']  = '0';
                                                                $config['max_height']  = '0';
                                                                
                                                                $this->load->library('upload',$config);
                                                                $this->upload->initialize($config);
                                                                $q = $this->upload->do_upload('driving_license');
                                                                
                                                                if($q){	
                                                                                                
                                                                        $dt = $this->upload->data();
                                                                        $this->db->where(array('customer_id'=>$id));				
                                                                        $this->db->update('Customer', array('driving_license' => $dt['file_name']));
                                                                        return $id;
                                                                        
                                                                }
                                                        }

                                                }     
                                        
                                        }                                    
                                }



                        }else{
                                return $this->upload->display_errors();
                        }       
                } else {
                            return "Error saving car details to database";
                }
 
                return $id;
        }

        function get_search_results( $customer_location, $serch_term ) {


                $this->db->from('cars');
                $query = $this->db->query("SELECT * FROM cars  WHERE name LIKE '$serch_term' OR makename LIKE '$serch_term' OR yearofmodel LIKE '$serch_term' ");
              
                // $this->db->group_start();
                // $this->db->like('name','$search_term' );
                // $this->db->or_like('makename','$search_term');
                // $this->db->or_like('yearofmodel','$search_term');
                // $this->db->group_end();
                if ($query){
                        return $this->db->get()->result();
                }else{
                        $this->random_results($customer_location);
                }         
     
        }
        function save_order($oderdata){
                $this->db->select('Order');
                $this->db->insert('Order',$oderdata); 
  
        }
        public function emailgetter($location){
                //the location is that of the car tobe hired
                $agentsemail= $this->db->query("SELECT email FROM agents WHERE location== '$location'");
                $carowneremail = $this->db->query();
                #come back 
                //carowners email is the email of the owner of the car to be hired
                
                
        }
        public function support($thedata){
                $this->db->select('support');
                $this->db->insert('support',$thedata);

        }
        public function help($data){
                $this->db->select('help');
                $this->db->insert('help',$data);
                global $latest_help;
                $latest_help = $this->db->insert_id();

        }
        public function march($thlocation,$distress){

                $march = $this->db->query("SELECT email FROM support WHERE location LIKE'$thlocation'AND support LIKE '$distress'");
        
                if($march){
                        return $march;
                }
                else{
                        // find the nearrest
                }
        }


}