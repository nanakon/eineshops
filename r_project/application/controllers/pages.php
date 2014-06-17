<?php
  class Pages extends CI_Controller {
    
  public function __construct(){
		parent::__construct();
		$this->load->model('tovar_model');
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->helper('directory');
    $this->load->library('pagination');
    $this->load->library('cart');
    $this->load->library('javascript');
    $this->load->library('email');
	}
                                      
  private function check_isvalidated() {
    $temp = $this->session->userdata('validated');
    if ($temp == false) {
    return false;
  }
  return true;
  }
  
  public function index($page = 'tovar_page', $filter_vyrobca = 'NULL', $filter_procesor = 'NULL', $filter_procesor_vyrobca = 'NULL', $filter_grafika = 'NULL', $filter_grafika_vyrobca = 'NULL', $filter_ram = 'NULL', $filter_hdd = 'NULL', $filter_uhlopriecka = 'NULL') {
    if ( ! file_exists('application/views/pages/'.$page.'.php')) {
		show_404(); // Whoops, we don't have a page for that!
    }
    $kolko = 12;
    $config['base_url'] = '/r_project/index.php/pages/index';
    $config['total_rows'] = 18;
    $config['per_page'] = 6;
    $this->pagination->initialize($config); 
    if (! $this->check_isvalidated()) {
      $data['page'] = $page;
      $data['error'] = NULL;
      $data['tovar'] = $this->tovar_model->get_tovar($filter_vyrobca, $filter_procesor, $filter_procesor_vyrobca, $filter_grafika, $filter_grafika_vyrobca, $filter_ram, $filter_hdd, $filter_uhlopriecka);  
      $userdata['title'] = ucfirst($page); // Capitalize the first letter
      $this->load->view('templates/declaration'); 
      $this->load->view('templates/login_bar', $userdata);
  	  $this->load->view('templates/header', $data);
  	  $this->load->view('pages/'.$page, $data);
  	  $this->load->view('templates/footer', $data);
    }
    else {
      if ($page == 'Login_prompt') {
        $this->index("vyber_dopravy");
      }
      $data['page'] = $page;  
      $data['error'] = NULL;    
      $data['tovar'] = $this->tovar_model->get_tovar($filter_vyrobca, $filter_procesor, $filter_procesor_vyrobca, $filter_grafika, $filter_grafika_vyrobca, $filter_ram, $filter_hdd, $filter_uhlopriecka);   
      $userdata['title'] = ucfirst($page); // Capitalize the first letter
      $userdata['username'] = $this->session->userdata('username');
      $this->load->view('templates/declaration'); 
      $this->load->view('templates/login_bar_logged', $userdata);
  	  $this->load->view('templates/header', $data);
      if ($this->session->userdata('admin') == 1 or $this->session->userdata('admin') == 2 ) {
        $this->load->model('login_model');
        $data['all_users'] = $this->login_model->get_all_users();
        $data['user_count'] = $this->login_model->get_user_count();
        $data['all_objednavky'] = $this->tovar_model->get_all_objednavky();
        $data['objednavky_count'] = $this->tovar_model->get_objednavky_count();  
      }
  	  $this->load->view('pages/'.$page, $data);
  	  $this->load->view('templates/footer', $data);
       }
    }
    
   private function index_error($page = 'tovar_page', $filter_vyrobca = 'NULL', $filter_procesor = 'NULL', $filter_procesor_vyrobca = 'NULL', $filter_grafika = 'NULL', $filter_grafika_vyrobca = 'NULL', $filter_ram = 'NULL', $filter_hdd = 'NULL', $filter_uhlopriecka = 'NULL') {
   $filter = array ('cena' => NULL, 'nazov' => NULL, 'vyrobca' => NULL, 'procesor' => NULL, 'procesor_vyrobca' => NULL, 'grafika' => NULL, 'grafika_vyrobca' => NULL, 'ram' => NULL, 'hdd' => NULL, 'uhlopriecka' => NULL, 'kusov' => NULL, 'id' => NULL);  
      $data['page'] = $page;
      $data['tovar'] = $this->tovar_model->get_tovar($filter_vyrobca, $filter_procesor, $filter_procesor_vyrobca, $filter_grafika, $filter_grafika_vyrobca, $filter_ram, $filter_hdd, $filter_uhlopriecka);      
      $userdata['title'] = ucfirst($page); // Capitalize the first letter
      $data['error'] = 'Zadali ste nesprávne prihlasovacie meno alebo heslo!';
      $this->load->view('templates/declaration'); 
      $this->load->view('templates/login_bar', $userdata);
  	  $this->load->view('templates/header', $data);
  	  $this->load->view('pages/'.$page, $data);
  	  $this->load->view('templates/footer', $data);
   }
   
   public function spit_images_count($id) {
      $directory = "/r_project/images/products/"; // dir location
      if (glob($directory . "*.*") !== false)
      {
        $filecount = count(glob($directory . "*.*"));
        return $filecount;
      }
      else
      {
      return 0;
      }
    }  
   
   public function detail($ID, $detail_state = 'detail_popis') {
      $this->load->model('komentar_model');
      $detail = $this->tovar_model->get_detail($ID);  //udaje o konkretnom tovare
      $detail['komentare'] = $this->komentar_model->get_komentare($ID);
      if (! $this->check_isvalidated()) { 
        $data['page'] = $detail['nazov'];
        $data['error'] = NULL;
        $userdata['title'] = ucfirst($detail['nazov']);
        $this->load->view('templates/declaration'); 
        $this->load->view('templates/login_bar', $userdata);
  	    $this->load->view('templates/header', $data);
  	    $this->load->view('pages/detail', $detail);
        $this->load->view('templates/'.$detail_state, $detail);
  	    $this->load->view('templates/footer', $data);
      }
      else {
        $data['page'] = $detail['nazov'];  
        $data['error'] = NULL;     
        $userdata['title'] = ucfirst($detail['nazov']); // Capitalize the first letter
        $userdata['username'] = $this->session->userdata('username');
        $this->load->view('templates/declaration'); 
        $this->load->view('templates/login_bar_logged', $userdata);
  	    $this->load->view('templates/header', $data);
  	    $this->load->view('pages/detail', $detail);
        $this->load->view('templates/'.$detail_state, $detail);
  	    $this->load->view('templates/footer', $data);
       } 
   } 
   
   public function process($page){ //login funkcia
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->login_model->validate($username, $password);
        // Now we verify the result
        if (!$result){
            $error = true;
            // If user did not validate, then show them login page again
            //redirect('pages/index();
            $this->session->set_flashdata("login_fail", 1);
            redirect("pages/index/".lcfirst($page));
            //$this->index_error(lcfirst($page));
        }
        else {
            if ($page != 'tovar_page' AND $page != 'about' AND $page != 'how_buy' AND $page != 'registration' AND $page != 'Vyber_dopravy' AND $page != 'Login_prompt') {
              redirect('pages/index');
            }
            else if ($page == "Login_prompt") {
              redirect('pages/index/vyber_dopravy');
            }
            else {
            redirect('pages/index/'.lcfirst($page));
            }
        }        
    }
    
    public function process_komentar($uzivatel, $id) { //vlozi komentar do tabulky
       $this->load->model('komentar_model');
       $komentar = strip_tags($this->input->post('komentar'));
       $this->komentar_model->vloz_komentar($uzivatel, $id, $komentar);
       redirect('pages/detail/'.$id.'/detail_komentare');    
    }
    
    public function delete_komentar($id_komentara, $id_tovaru) {
      $this->load->model('komentar_model');
      $this->komentar_model->zmaz_komentar($id_komentara);
      redirect('pages/detail/'.$id_tovaru.'/detail_komentare');
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('pages/index');
    }
    
    public function uprav_uzivatela($username) {
      if ($this->input->post('admin_checkbox') == 1) {
        $data = array('admin' => 1 );
      }
      else {
        $data = array('admin' => 0);
      } 
        $this->load->model('login_model');
        $this->login_model->zmen_admin_status($username, $data);
        redirect('pages/index/admin_corner');
    }
    
    public function do_kosika($id) {
      $pridavany_tovar = $this->tovar_model->get_detail($id);
      $data = array ('id' => $id, 'qty' => $this->input->post('pocet_kusov'), 'price' => $pridavany_tovar['cena'], 'name' => $pridavany_tovar['nazov'] );
      if ($data['qty'] <= $pridavany_tovar['kusov'] and $data['qty'] > 0) {
        $this->cart->insert($data);
        $this->session->set_flashdata("success", 1);
        redirect('/pages/detail/'.$id);
      }
      else {
        $this->session->set_flashdata("success", 3);
        redirect('/pages/detail/'.$id);
      }
    }
    
    public function vyprazdnit_kosik() {
      $this->cart->destroy();
      redirect('pages/index/kosik');
    }
    
    public function kupit() {
      if (! $this->check_isvalidated()) { 
         redirect('/pages/index/login_prompt');
      }
      else {
          redirect('pages/index/vyber_dopravy');
       } 
    }
    
    private function send_mail($nakup) {
      $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'eineshops@gmail.com', // change it to yours
      'smtp_pass' => 'eineshop', // change it to yours
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'wordwrap' => TRUE
      );
      $obsah_kosika = $nakup['kosik'];
      $zakaznik = $nakup['zakaznik'];
      $sposob_dopravy = $nakup['doprava'];
        $message = 'Toto je potvdzujúci mail automaticky generovaný systémom eineshops.<br>
        Slúži ako potvrdenie objednávky na našom obchode.<br>
        <br>Na túto správu nie je potrebné odpovedať.<br><br>
        Ďakujeme za Váš nákup';        
        
        /*$i = 1;
        
        foreach ($this->cart->contents() as $items):
          $message += '<tr>';
      	  $message += '<td>';
          form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); $message += '</td>
      	  <td>
      		<a href="/r_project/index.php/pages/detail/'; $message += (string)$items['id']; $message += ', class="item_v_kosik_page_link">'; $message += (string)$items['name']; $message += '</a>';
      
      			if ($this->cart->has_options($items['rowid']) == TRUE):
      
      				$message += '<p>';
      					foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value):
      
      						$message += '<strong>'; $message += (string)$option_name; $message += ':</strong>'; $message += (string)$option_value; $message += '<br>';
      
      					endforeach;
      				$message += '</p>';
      
      			endif;
      
      	  $message += '</td>
      	  <td style="text-align:right">€ '; $message += (string)$this->cart->format_number($items['price']); $message += '</td>';
      	  $message += '<td style="text-align:right">€ '; $message += (string)$this->cart->format_number($items['subtotal']); $message += '</td>
      	</tr>';
      
          $i++;
        endforeach;  */
        
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('eineshops@gmail.com'); // change it to yours
        $this->email->to($zakaznik['mail']);// change it to yours
        $this->email->subject('Potvrdenie objednavky - Eineshops');
        $this->email->message($message);
        if($this->email->send())
       {
        echo 'Email sent.';
       }
       else
      {
       show_error($this->email->print_debugger());
      }
      
  }
    
    public function potvrdit_objednavku() {
      $this->load->model('login_model');
      $objednavka = array ('kosik' => $this->cart->contents(), 'zakaznik' => $this->login_model->get_user_by_username($this->session->userdata('logged')), 'doprava' => $this->input->post('Doprava'));
      $this->send_mail($objednavka);
      $this->load->model('tovar_model');
      $this->tovar_model->zapis_objednavku($objednavka);
      $this->cart->destroy();
      redirect("/pages/index/thx_msg");
    }
    
    public function update_kosik() {
      $data = array(
               'rowid' => 'b99ccdf16028f015540f341130b6d8ec',
               'qty'   => 3
            );
      $this->cart->update($data); 
              // Or a multi-dimensional array

      $data = array(
               array('rowid' => 'b99ccdf16028f015540f341130b6d8ec',
                       'qty' => 3),
               array('rowid' => 'xw82g9q3r495893iajdh473990rikw23',
                       'qty' => 4),
               array('rowid' => 'fh4kdkkkaoe30njgoe92rkdkkobec333',
                       'qty' => 2)
            );

      $this->cart->update($data);
    }
    
    public function uprav_objednavku($id_objednavky) {
      if ($this->input->post('objednavka_checkbox') == 1) {
        $data = array('vybavena' => 1 );
      }
      else {
        $data = array('vybavena' => 0);
      } 
        $this->load->model('tovar_model');
        $this->tovar_model->zmen_vybavena_status($id_objednavky, $data);
        redirect('pages/index/objednavky_corner');
    }
    
    public function odstran_objednavku($id_objednavky) {
      $this->load->model('tovar_model');
      $this->tovar_model->odstran_objednavku($id_objednavky);
      redirect('pages/index/objednavky_corner');
    }
    
    public function process_registration()  {
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div class="error" id="registration_error">', '</div>');
      $this->form_validation->set_message('required', 'Chyba! Položka %s je povinná');
      $this->form_validation->set_message('min_length', 'Chyba! Položka %s musí obsahovať aspoň %d znaky');
      $this->form_validation->set_message('max_length', 'Chyba! Položka %s musí obsahovať najviac %d znakov');
      $this->form_validation->set_message('integer', 'Chyba! Telefónne číslo smie obsahovať iba číslice');
      $this->form_validation->set_message('exact_length', 'Chyba! Telefónne číslo musí obsahovať 8 čísel');
      $this->form_validation->set_message('is_unique', 'Chyba! So zadaným %s sa už viaže iný účet');
      $this->form_validation->set_message('integer', 'Chyba! Telefónne číslo smie obsahovať iba číslice');
      
      
      $this->form_validation->set_rules('fname', 'Meno', 'trim|required|min_length[2]|max_length[15]|xss_clean|strip_tags');
      $this->form_validation->set_rules('lname', 'Priezvisko', 'trim|required|min_length[2]|max_length[15]|strip_tags|xss_clean');
      $this->form_validation->set_rules('mail', 'emailom', 'trim|required|valid_email|strip_tags|is_unique[users.mail]');
      $this->form_validation->set_rules('username', 'užívateľským menom', 'trim|required|min_length[4]|max_length[15]|strip_tags|is_unique[users.username]');
      $this->form_validation->set_rules('password', 'Heslo', 'trim|required|matches[password_ensure]|strip_tags');
      $this->form_validation->set_rules('password_ensure', 'Heslo', 'trim|required|matches[password]|strip_tags');
      $this->form_validation->set_rules('city', 'Mesto', 'trim|required|min_length[4]|max_length[30]|strip_tags|xss_clean');
      $this->form_validation->set_rules('street', 'Ulica', 'trim|required|min_length[4]|max_length[30]|strip_tags|xss_clean');
      $this->form_validation->set_rules('hnumber', 'Popisné číslo', 'required|max_length[9]|strip_tags');
      $this->form_validation->set_rules('phone', 'Telefónne číslo', 'trim|exact_length[8]|strip_tags|xss_clean|integer');
      
      $username = $this->input->post('username');
      //$valid = $this->load->login_model->check_existing_user($username);
      if ($this->form_validation->run() == FALSE){
		  	$this->index_error('registration');
		  }
      else {
        $this->load->model('login_model');
        $added = $this->login_model->register_user();
        $this->index('registration_success');
      }
      
      
      
      
    }
    }