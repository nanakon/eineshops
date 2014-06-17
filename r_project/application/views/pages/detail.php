<section class="detail">
<h2><?php echo $nazov; ?></h2>
<?php 
	if ($this->session->flashdata("success") == 1) {
		//zobrazi ze bolo pridane do kosika
		//echo "<script>pridane_do_kosika();</script>";		
	  echo "<div class='pridane_notification'>Tovar úspešne pridaný do košíka</div>";
  }
	else if ($this->session->flashdata("success") == 3) {
		echo "<div class='pridane_chyba'>Chyba</div>";
	}
	else {
		$this->session->set_flashdata("success", 0);
	}
?>
<div id="header_detailu">
<img src="<?php echo base_url();?>images/products/<?php echo $id ?>/thub/m.jpg" alt="<?php echo $nazov?>"/>
<p id="detail_slug"><?php echo $slug; ?></p><br>
<p class="detail_cena">Cena s DPH: <span><?php echo number_format($cena,2,",","."); ?></span><br><br>
Cena bez DPH: <span id="cena_bez_dph"><?php echo number_format($cena*0.8,2,",","."); ?></span><br><br>
Kusov na sklade: <?php echo $kusov ?>
</p><br>
</div>

<div class="do_kosika_button">
<?php echo form_open('pages/do_kosika/'.$id); $input4 = array('type' => 'submit', 'id' => 'do_kosika_button');
$pocet_kusov = array('name' => 'pocet_kusov', 'value' => 1, 'min' => 1, 'max' => $kusov, 'id' => 'pocet_kusov_input', 'size' => 2);?>
Množstvo: <?php echo form_input($pocet_kusov), form_submit($input4, 'Do Košíka'), form_close()?>
</div>

<div class="detail_navi">
<ul>
  <li><a href="/r_project/index.php/pages/detail/<?php echo $id?>/detail_popis" title="popis">Popis</a></li>
  <li><a href="/r_project/index.php/pages/detail/<?php echo $id?>/detail_tabulka" title="detaily">Detaily</a></li>
  <li><a href="/r_project/index.php/pages/detail/<?php echo $id?>/detail_foto" title="foto">Foto</a></li>
  <li><a href="/r_project/index.php/pages/detail/<?php echo $id?>/detail_komentare" title="recenzie">Hodnotenia</a></li>
</ul>
</div>


