 <?php 
 $lognuty = $this->session->userdata('validated');
 if ($lognuty == false) {
  echo '<p>Pre pridanie komentára sa musíte prihlásiť</p>';
 }
 else {
  $uzivatel = $this->session->userdata('logged');
  $komentar_array = array('name' => 'komentar', 'placeholder' => 'Sem môžte napísať svoj komentár k tovaru', 'value' => set_value('komentar'), 'maxlength' => 900);
  $submit_array = array('type' => 'submit', 'id' => 'komentar_submit');
  echo form_open('pages/process_komentar/'.$uzivatel.'/'.$id);
  echo form_textarea($komentar_array); 
  echo form_submit($submit_array, 'Odovzdať');
  echo form_close(); 
 }
 ?>
<?php 
 foreach($komentare as $komentar): ?>
 <div class="detail_komentar">
  <span class="header_komentara"><span class="autor_komentara"><?php echo $komentar['autor'].'</span><span class="cas_komentara"> '.$komentar['Cas']; ?></span></span>
 <br>
 <?php echo $komentar['Komentar'];
 if ($lognuty == true) { 
  if ($uzivatel == $komentar['autor']) {
    $delete_array = array('type' => 'submit', 'id' => 'komentar_delete');
    echo form_open('pages/delete_komentar/'.$komentar['ID'].'/'.$id);
    echo form_submit($delete_array, 'Zmazať');
    echo form_close();  
  }
  }
 ?>
 </div>
<?php  
 endforeach;
?>
<br><br>
</section>