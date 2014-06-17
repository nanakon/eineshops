<?php
class tovar_model extends CI_Model {

	public function __construct()
	{ parent::__construct();
	}
  
  public function get_tovar($vyrobca, $procesor, $procesor_vyrobca, $grafika, $grafika_vyrobca, $ram, $hdd, $uhlopriecka) {  //vrati array vsetkych riadkov
    if ($vyrobca != 'NULL') {
      $this->db->where('vyrobca', $vyrobca);
    }
    if ($procesor != 'NULL') {
      $this->db->where('procesor', $procesor);
    }
    if ($procesor_vyrobca != 'NULL') {
      $this->db->where('procesor_vyrobca', $procesor_vyrobca);
    }
    if ($grafika != 'NULL') {
      $this->db->where('grafika', $grafika);
    }
    if ($grafika_vyrobca != 'NULL') {
      $this->db->where('grafika_vyrobca', $grafika_vyrobca);
    }
    if ($ram != 'NULL') {
      $this->db->where('ram', $ram);
    }
    if ($hdd != 'NULL') {
      $this->db->where('hdd', $hdd);
    }
    if ($uhlopriecka != 'NULL') {
      $this->db->where('uhlopriecka', $uhlopriecka);
    }
    $this->db->order_by('cena', 'asc');
    //$this->db->limit($kolko, $odkial);
    $query = $this->db->get('tovar');
    return $query->result_array();
  }
  
  public function get_detail($id) { //vrati riadok s ID z parametra
    $this->db->where('id', $id);
    $query = $this->db->get('tovar');
    $row = $query->row_array();
    $row['id'] = $id;
    return $row;
  }
  
  public function zapis_objednavku($objednavka) {
    $tovar = $objednavka['kosik'];
    $zakaznik = $objednavka['zakaznik'];
    $zakaznik = $zakaznik['zakaznik'];
    $sposob_dopravy = $objednavka['doprava'];
    
    foreach ($tovar as $item):
      $objednavka_data = array (
          'zakaznik' => (string)$zakaznik,
          'nazov_tovaru' => (string)$item['name'],
          'ID' => $item['id'],
          'pocet_kusov' => $item['qty'],
          'sposob_dopravy' => (string)$sposob_dopravy,
          'vybavena' => 0
          );
          $this->db->insert('objednavky', $objednavka_data);
    endforeach;
    
  }
  
  public function odstran_objednavku($id_objednavky) {
    $this->db->where('id_objednavky', $id_objednavky);
    $this->db->delete('objednavky');
  }
  
  public function zmen_vybavena_status($id_objednavky, $data) {
    $this->db->where('id_objednavky', $id_objednavky);
    $this->db->update('objednavky', $data);
  }
  
  public function get_all_objednavky() {
    $rows = array(); //will hold all results
    $this->db->group_by('zakaznik');
    $query = $this->db->get('objednavky');

    foreach($query->result_array() as $row){    
        $rows[] = $row; //add the fetched result to the result array;
    }
    return $rows; // returning rows, not row
  }
  
  public function get_objednavky_count() {
    return $this->db->count_all('objednavky');
  }


}
