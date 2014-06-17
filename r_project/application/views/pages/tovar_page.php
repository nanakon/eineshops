<section class="telo">
<?php //echo $this->pagination->create_links(); ?>
<?php foreach ($tovar as $tovar_item): ?>
  <div class="item">
     <h3><a href="/r_project/index.php/pages/detail/<?php echo $tovar_item['ID']?>" title="<?php echo $tovar_item['nazov']?>" > <?php echo $tovar_item['nazov']?> </a> </h3>
        <p class="slug"><?php echo $tovar_item['slug'] ?></p>
        <p class="thumbnail"><a href="/r_project/index.php/pages/detail/<?php echo $tovar_item['ID']?>" title="<?php echo $tovar_item['nazov']?>" ><img src ="<?php echo base_url()?>images/products/<?php echo $tovar_item['ID']?>/thub/s.jpg" alt="<?php echo $tovar_item['nazov']?> thumbnail"></a></p>
    <h3 class="cena"><?php echo number_format($tovar_item['cena'],2,",","."); ?></h3>
        <?php if ($tovar_item['kusov'] > 0) echo '<p class="skladom">Skladom</p>';
              if ($tovar_item['kusov'] == 0) echo '<p class="nie_skladom">Nedostupné</p>' ?>
        
   </div>
<?php endforeach ?>
</section>
<aside>
<ul> 
  <li class="aside_navigator">Procesor </li>
    <li class="aside_vyssia_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/Intel" >Intel</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/Pentium/Intel" >Pentium</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/Corei3/Intel" >Core i3</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/Corei5/Intel" >Core i5</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/Corei7/Intel" >Core i7</a></li>
    <li class="aside_vyssia_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/AMD" >AMD</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/Aseries/AMD" >A-series</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/Zacate/AMD" >Zacate</a></li>
      
  <li class="aside_navigator">Grafická karta</li>
    <li class="aside_vyssia_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NVidia" >Nvidia</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/GT710M/NVidia/" >GT 710M</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/GT720M/NVidia/" >GT 720M</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/GT730M/NVidia/" >GT 730M</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/GT740M/NVidia/" >GT 740M</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/GT750M/NVidia/" >GT 750M</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/GT770M/NVidia/" >GT 770M</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/GT780M/NVidia/" >GT 780M</a></li>
    <li class="aside_vyssia_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/AMD" >AMD Ati</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/HD8240/AMD/" >Radeon HD 8240</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/HD8730/AMD/" >Radeon HD 8730</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/HD8750/AMD/" >Radeon HD 8750</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/HD8850/AMD/" >Radeon HD 8850</a></li>
    <li class="aside_vyssia_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/Intel" >Intel</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/HD4000/Intel/" >HD 4000</a></li>
      <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/HD4500/Intel/" >HD 4500</a></li>
  
  <li class="aside_navigator">RAM</li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/2GB" >2GB</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/4GB" >4GB</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/6GB" >6GB</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/8GB" >8GB</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/32GB" >32GB</a></li>
  
  <li class="aside_navigator">Disk</li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/NULL/128GB" >128 GB</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/NULL/500GB" >500 GB</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/NULL/750GB" >750 GB</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/NULL/1000GB" >1000 GB</a></li>
  
  <li class="aside_navigator">Veľkosť</li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/NULL/NULL/13.3" >13,3"</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/NULL/NULL/15.6" >15,6"</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/NULL/NULL/NULL/NULL/NULL/NULL/NULL/17.3" >17,3"</a></li>
  
  <li class="aside_navigator">Výrobca</li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/ACER" >Acer</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/ASUS" >ASUS</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/LENOVO" >Lenovo</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/PACKARDBELL" >Packard-Bell</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/MSI" >MSI</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/SONY" >SONY</a></li>
    <li class="aside_polozka"><a href="/r_project/index.php/pages/index/tovar_page/TOSHIBA" >Toshiba</a></li>
  
</ul>  

<div class = "kosik">
  <a class="kosik_header", href="/r_project/index.php/pages/index/kosik">Nákupný košík</a>
  <?php
  if ($this->cart->total_items() == 0) {
    echo '<a class="kosik_header_1", href="/r_project/index.php/pages/index/kosik">Váš košík je prázdny</a>';
  }
  else {
    if ($this->cart->total_items() == 1) {
      echo '<a class="kosik_header_1", href="/r_project/index.php/pages/index/kosik">V košíku je '.$this->cart->total_items().' položka <br>za celkom '.$this->cart->total().' €</a>';
    } 
    else if ($this->cart->total_items()== 2 or $this->cart->total_items()==3 or $this->cart->total_items()==4 ) {
      echo '<a class="kosik_header_1", href="/r_project/index.php/pages/index/kosik">V košíku sú '.$this->cart->total_items().' položky <br>za celkom '.$this->cart->total().' €</a>';
    }
    else {
      echo '<a class="kosik_header_1", href="/r_project/index.php/pages/index/kosik">V košíku je '.$this->cart->total_items().' položiek <br>za celkom '.$this->cart->total().' €</a>'; 
    }
  }
  ?>
</div>

<?php if ($this->session->userdata('admin') ) { 
echo '<div class = "kosik" id="Admin_corner">';
 echo '<a class="kosik_header", href="/r_project/index.php/pages/index/admin_corner">Admin corner</a>';
 echo '<a class="kosik_header_1", href="/r_project/index.php/pages/index/admin_corner">Databáza obsahuje '.$user_count.' registrovaných užívateľov.</a>';
echo '</div>';

echo '<div class = "kosik" id="Admin_corner">';
 echo '<a class="kosik_header", href="/r_project/index.php/pages/index/objednavky_corner">Objednávky</a>';
 echo '<a class="kosik_header_1", href="/r_project/index.php/pages/index/objednavky_corner">Je evidovaných '.$objednavky_count.' objednávok.</a>';
echo '</div>';
}
?>
</aside>