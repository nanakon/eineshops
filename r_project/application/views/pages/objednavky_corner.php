<table cellpadding="6" cellspacing="1" style="width:100%" border="0">
    <tr class="vypis_userov">
      <th></th>
      <th>ID objednávky</th>
      <th>Zakaznik</th>
      <th>ID tovaru</th>
      <th>Názov tovaru</th>
      <th>Množstvo</th>
      <th>Spôsob dopravy</th>
      <th>Vybavená</th>
      <th></th>
      <th></th>
    </tr>
<?php foreach ($all_objednavky as $single_objednavka): ?> 
    <tr class="vypis_userov" id="vypis_userov_obsah">
      <th class="riadok_vo_vypise"><?php ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_objednavka['id_objednavky'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_objednavka['zakaznik'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_objednavka['ID'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_objednavka['nazov_tovaru'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_objednavka['pocet_kusov'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_objednavka['sposob_dopravy'] ?></th>
      <th class="riadok_vo_vypise"><?php 
      if ($single_objednavka['vybavena'] == 1) {
        $array_checkbox = array('name' => 'objednavka_checkbox', 'value' => 1, 'checked' => TRUE); 
      }
      else {
        $array_checkbox = array('name' => 'objednavka_checkbox', 'value' => 1, 'checked' => FALSE);
      }
        $array0 = array('type' => 'submit', 'class' => 'login', 'id' => 'upravit_uzivatela'); echo form_open('pages/uprav_objednavku/'.$single_objednavka['id_objednavky']), form_checkbox($array_checkbox), form_submit($array0, 'Upraviť'), form_close();?></th>
      <th class="riadok_vo_vypise"><?php $array1 = array('type' => 'submit', 'class' => 'login', 'id' => 'odstranit_objednavku');
        echo form_open('pages/odstran_objednavku/'.$single_objednavka['id_objednavky']), form_submit($array1, 'Odstrániť'), form_close();?></th>
      <th class="riadok_vo_vypise"></th>
    </tr>
  

<?php endforeach; ?>
  </table>