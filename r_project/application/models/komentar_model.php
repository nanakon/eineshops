<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class komentar_model extends CI_Controller {
  function contruct() {
    parent::__construct();
    $this->check_isvalidated();
  }
  
  public function get_komentare($id) {
      $this->db->where('Tovar_ID', $id);
      $this->db->order_by('cas', 'desc');
      $query = $this->db->get('komentare');
      return $query->result_array();    
  }
  
  public function vloz_komentar($autor, $id_tovaru, $komentar) {
    $obsah = array ('Tovar_ID' => $id_tovaru, 'autor' => $autor, 'Komentar' => $komentar);
    $this->db->insert('komentare', $obsah);
  }
  
  public function zmaz_komentar($id_komentara) {
    $this->db->where('ID', $id_komentara);
    $this->db->delete('komentare');
  }
    
}
?>