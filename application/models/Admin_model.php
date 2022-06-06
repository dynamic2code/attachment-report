<?php
class Admin_model extends CI_Model {

     
        public function can_login($username, $password){
                // $query = $this->db->select('Admin');
                // $que=$this->db->query("SELECT * FROM Admin where user_name='$username' and password='$password'");
                $this->db->where(array('user_name' => $username, 'password' => $password));
                $query = $this->db->get('Admin');
                $row = $query->num_rows();
                if($row >0){
                       return true;
                }else{
                      return false;
                }

        }
        public function carsaving($data){
                $this->db->select('cars');
                $this->db->insert('cars',$data);
                return true;
        }
        public function get_waiting_customers(){
                //gets from db the latest registerd users that are not verified
                // $location = $this->db->query("SELECT 'location' FROM Admin");
                // $waiting = "waiting";
                // $this->db->query("SELECT  FROM Customer WHERE 'status' ='waiting' AND 'location' = '$location' ");
                $this->db->from('Customer');
                return $this->db->get()->result();
        }
        public function get_waiting_car_owners(){
                //gets from db the car owners who have not not been verified
                // $location = $this->db->query("SELECT 'location' FROM Admin");
                // $waiting = "waiting";
                // $this->db->query("SELECT  FROM Carowner WHERE 'status' ='waiting' AND  'location'= '$location'");
                $this->db->from('Carowner');
                return $this->db->get()->result();
                // $this->db->select('Carowner');
                // $query = $this->db->get('Carowner');
                // return $query;
        }
        public function verified_customer(){
                // writes to the db whether the customer is verified or not
        }
        public function verified_car_owner(){
                //writes to the db on the desition made on the car owners status
        }
}
