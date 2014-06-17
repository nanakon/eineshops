  <?php
  $this->load->helper('form');
  $input1 = array('name' => 'username', 'placeholder' => 'Prihlasovacie meno', 'class' => 'login');
  $input2 = array('pwd' => 'password', 'placeholder' => 'Heslo', 'class' => 'login');
  $input3 = array('type' => 'submit', 'class' => 'login'); 
  ?>
  <div id = "login_bar">
  <a href = "index" alt="home" class = "navi"> Home </a>
  <a href = "about" alt="O n·s" class = "navi"> O n·s </a>  
  <a href = "how_buy" alt"Ako Nakupovaù" class = "navi"> Ako nakupovaù </a>
  <a href = "register" alt="Registr·cia" class = "navi"> Registrovaù </a> 
  <?php 
  echo form_input($input1);
  echo form_password($input2);
  echo form_submit($input3, 'Login');
  ?>
</div>