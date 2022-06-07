<?php
class Car_owner_model extends CI_Model {

     
        public function can_login($email, $password){
                $query = $this->db->query("SELECT * FROM Carowner WHERE email= '$email' AND password ='$password' ");
               // $this->db->where('user_name','$user_name');
               // $this->db->where('password','$password');
                

                if( $query->num_rows() > 0 ){
                        $details['id'] = $this->db->query("SELECT car_owners_id FROM Carowner WHERE email = '$email' AND password = '$password'");
                        $details['first_name'] = $this->db->query("SELECT firstname FROM Carowner WHERE email = '$email' AND password = '$password'");
                      

                        return $details;
                }else{
                        return false;
                }

        }

        public function carsaving($data){
                $this->db->select('cars');
                $insert = $this->db->insert('cars',$data);
                $insert_id = $this->db->insert_id();
                $this->load->helper(array('form', 'url'));
                if ($insert){
                     if(basename($_FILES['picture']['name'])!=''){
                            
                            
                            $config['upload_path'] = './images/';
                            $config['allowed_types'] = 'gif|jpg|jpeg|png';
                            $config['max_size']	= '0';
                            $config['max_width']  = '0';
                            $config['max_height']  = '0';
                            
                            $this->load->library('upload',$config);
                            $this->upload->initialize($config);
                            $q = $this->upload->do_upload('picture');
                            
                            if($q){	
                                                            
                                $det = $this->upload->data();
                                $this->db->where(array('car_id'=>$insert_id));				
                                $this->db->update('cars', array('imagename' => $det['file_name']));
                                return $insert_id;
                                    
                            }else{
                                     
                                    return $this->upload->display_errors();
                            }
                    }else{
                             return "Saved Successfully await verification";
                    }
                } else {
                         return "Error saving car details to database";
                }
            }


        public function donotexist($email){
                $query = $this->db->query("SELECT 'email' FROM Carowner WHERE email = '$email'");
                if($query->num_rows() == 0){
                        return true;
                }
        }

        public function carownersaving($data){
                $insert = $this->db->insert('Carowner',$data);
                $id = $this->db->insert_id();
                // $this->load->helper(array('form', 'url'));
                // getting the car owner id from the db
                if ($insert){
                        if(basename($_FILES['id_front']['name'])!=''){
                               
                               
                                $config['upload_path'] = './owner_id_front/';
                                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                                $config['max_size']	= '0';
                                $config['max_width']  = '0';
                                $config['max_height']  = '0';
                                
                                $this->load->library('upload',$config);
                                $this->upload->initialize($config);
                                $q = $this->upload->do_upload('id_front');
                                
                                if($q){	
                                                                
                                    $det = $this->upload->data();
                                    $this->db->where(array('car_owner_id'=>$id));				
                                    $this->db->update('Carowner', array('id_front' => $det['file_name']));
                                    return $id;
                                        
                                }else{
                                         
                                        return $this->upload->display_errors();
                                }
                        }else{
                                echo("error");
                        }       

                        if(basename($_FILES['id_back']['name'])!=''){
                               
                               
                                        $config['upload_path'] = './owner_id_back/';
                                        $config['allowed_types'] = 'gif|jpg|jpeg|png';
                                        $config['max_size']	= '0';
                                        $config['max_width']  = '0';
                                        $config['max_height']  = '0';
                                        
                                        $this->load->library('upload',$config);
                                        $this->upload->initialize($config);
                                        $q = $this->upload->do_upload('id_back');
                                        
                                        if($q){	
                                                                        
                                            $det = $this->upload->data();
                                            $this->db->where(array('car_owner_id'=>$id));				
                                            $this->db->update('Carowner', array('id_back' => $det['file_name']));
                                            return $id;
                                                
                                        }else{
                                                 
                                                return $this->upload->display_errors();
                                        } 
                                }else{
                                        echo("error");
                                }       

                        if(basename($_FILES['supporting_documents']['name'])!=''){
                               
                               
                               $config['upload_path'] = './supporting_documents/';
                               $config['allowed_types'] = 'gif|jpg|jpeg|png';
                               $config['max_size']	= '0';
                               $config['max_width']  = '0';
                               $config['max_height']  = '0';
                               
                               $this->load->library('upload',$config);
                               $this->upload->initialize($config);
                               $q = $this->upload->do_upload('supporting_documents');
                               
                               if($q){	
                                                               
                                   $det = $this->upload->data();
                                   $this->db->where(array('car_owner_id'=>$id));				
                                   $this->db->update('Carowner', array('supporting_documents' => $det['file_name']));
                                   return $id;
                                       
                               }else{
                                        
                                       return $this->upload->display_errors();
                               }
                       }else{
                                return "Saved Successfully await verification";
                       }
                   } else {
                            return "Error saving car details to database";
                   }
 
                return $id;
        }


 
}