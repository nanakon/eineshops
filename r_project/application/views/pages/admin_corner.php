<table cellpadding="6" cellspacing="1" style="width:100%" border="0">
    <tr class="vypis_userov">
      <th></th>
      <th>Username</th>
      <th>Meno</th>
      <th>Priezvisko</th>
      <th>Email</th>
      <th>Telefónne číslo</th>
      <th>Mesto</th>
      <th>Ulica</th>
      <th>Popisne číslo</th>
      <th>Admin status</th>
      <th>Admin status</th>
      <th></th>
      <th></th>
    </tr>
<?php foreach ($all_users as $single_user): ?> 
    <tr class="vypis_userov" id="vypis_userov_obsah">
      <th class="riadok_vo_vypise"><?php ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_user['username'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_user['fname'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_user['lname'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_user['mail'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_user['phone'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_user['city'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_user['street'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_user['hnumber'] ?></th>
      <th class="riadok_vo_vypise"><?php echo $single_user['admin']?></th>
      <th class="riadok_vo_vypise"><?php 
      if ($single_user['admin'] == 1) {
        $array_checkbox = array('name' => 'admin_checkbox', 'value' => 1, 'checked' => TRUE); 
      }
      else if ($single_user['admin'] == 2) {
        echo "Absolute";
      }
      else {
        $array_checkbox = array('name' => 'admin_checkbox', 'value' => 1, 'checked' => FALSE);
      }
      if ($single_user['admin'] != 2) {
        $array0 = array('type' => 'submit', 'class' => 'login', 'id' => 'upravit_uzivatela'); echo form_open('pages/uprav_uzivatela/'.$single_user['username']), form_checkbox($array_checkbox), form_submit($array0, 'Upraviť'), form_close();?></th>
        
      <th class="riadok_vo_vypise"><?php $array1 = array('type' => 'submit', 'class' => 'login', 'id' => 'odstranit_uzivatela');
        echo form_open('pages/odstran_uzivatela/'.$single_user['username']), form_submit($array1, 'Odstrániť'), form_close();?></th><?php } ?>
      <th class="riadok_vo_vypise"></th>
    </tr> 
  

<?php endforeach; ?>
  </table>