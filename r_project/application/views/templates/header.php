  <div class = "header"><a id= "logo" href="/r_project"><img src="<?php echo base_url();?>images/logo02.png" alt = "home" width='326' height='70' ></a>
  <?php 
    if ($this->session->flashdata("login_fail") == 1) {	
	     echo "<div class='pridane_chyba'>Nesprávne prihlasovacie meno/heslo</div>";  
    }
  ?>
  
  </div>