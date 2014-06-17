<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Controller {
  function contruct() {
    parent::__construct();
    $this->check_isvalidated();
  }
  
  public function validate($username, $password){
        // safen user input
        $username = $this->security->xss_clean($username);
        $password = $this->security->xss_clean($password);
       // $sql = "SELECT * FROM users WHERE username = $username AND password = $password " ;
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
    
        $query = $this->db->get('users');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
              $data['userid'] = $row->id;
              $data['logged'] = $row->username;
              $data['admin'] = $row->admin;
              $data['validated'] = true;
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
    
  public function register_user() {  //kontroluje ci sa username uz nachadza v databaze
      $register_data = array (
        'username' => $this->input->post('username'),
        'password' => MD5($this->input->post('password')),
        'fname' => $this->input->post('fname'),
        'lname' => $this->input->post('lname'),
        'mail' => $this->input->post('mail'),
        'city' => $this->input->post('city'),
        'street' => $this->input->post('street'),
        'hnumber' => $this->input->post('hnumber'),
        'phone' => $this->input->post('phone')
        );
        $this->db->insert('users', $register_data);
  }
  
  public function get_all_users() {
    $rows = array(); //will hold all results
    $query = $this->db->get('users');

    foreach($query->result_array() as $row){    
        $rows[] = $row; //add the fetched result to the result array;
    }
    return $rows; // returning rows, not row
  }
  
  public function zmen_admin_status($username, $data) {
    $this->db->where('username', $username);
    $this->db->update('users', $data);
  }
  
  public function get_user_count() {
    return $this->db->count_all('users');
  }
  
  public function get_user_by_username($username) {
      $this->db->where('username', $username);
      $query = $this->db->get('users');
      $row = $query->row();
      $data['zakaznik'] = $row->username;
      $data['meno'] = $row->fname;
      $data['priezvisko'] = $row->lname;
      $data['mail'] = $row->mail;
      $data['mesto'] = $row->city;
      $data['street'] = $row->street;
      $data['hnumber'] = $row->hnumber;
      $data['phone'] = $row->phone;
      return $data;
  }
    
}
?>