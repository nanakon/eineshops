</div><section id="uc1">
<br />
<h2>Zaregistrovať nového zákazníka</h2>
<?php 
  $input1 = array('name' => 'fname', 'placeholder' => 'povinná položka', 'value' => set_value('fname'), 'size' => '50', 'class' => 'register');
  $input2 = array('name' => 'lname', 'placeholder' => 'povinná položka', 'value' => set_value('lname'),'size' => '50', 'class' => 'register');
  $input3 = array('name' => 'mail', 'placeholder' => 'povinná položka', 'value' => set_value('mail'),'size' => '50', 'class' => 'register');
  $input4 = array('name' => 'username', 'placeholder' => 'povinná položka','value' => set_value('username'),'size' => '50', 'class' => 'register');
  $input5 = array('name' => 'password', 'placeholder' => 'povinná položka', 'value' => set_value('password'), 'size' => '50', 'class' => 'register');
  $input6 = array('name' => 'password_ensure', 'placeholder' => 'povinná položka', 'value' => set_value('password_ensure'), 'size' => '50', 'class' => 'register');
  $input7 = array('name' => 'city', 'placeholder' => 'povinná položka', 'value' => set_value('city'),'size' => '50', 'class' => 'register');
  $input8 = array('name' => 'street', 'placeholder' => 'povinná položka','value' => set_value('street'), 'size' => '50', 'class' => 'register');
  $input9 = array('name' => 'hnumber', 'placeholder' => 'povinná položka','value' => set_value('hnumber'), 'size' => '50', 'class' => 'register');
  $input10 = array('name' => 'phone', 'placeholder' => '9xx xxx xxx nepovinná položka', 'value' => set_value('phone'), 'size' => '50', 'class' => 'register');  
  $input11 = array('type' => 'submit', 'class' => 'login');
  
  echo form_open('pages/process_registration'), 
   '<ul>
     <li> Meno: ',
      form_input($input1),form_error('fname'),
     '</li>
     <li>Priezvisko: ',
      form_input($input2),form_error('lname'),
     '</li>
     <li> Emailová adresa: ',
       form_input($input3),form_error('mail'),
     '</li>
     <li> Užívateľské meno: ',
      form_input($input4),form_error('username'),
     '</li>
     <li> Heslo: ',    
      form_password($input5),form_error('password'),
     '</li>
     <li> Heslo opakovane: ',            
      form_password($input6),form_error('password_ensure'),
     '</li> <br /> <br/><br>
     <li> Mesto: ',                  
      form_input($input7), form_error('city'),
     '</li>
     <li> Ulica: ',                        
      form_input($input8), form_error('street'),
     '</li>
     <li> Popisné číslo: ',
      form_input($input9), form_error('hnumber'),
     '</li>
     <li> Telefónne číslo: +421',
      form_input($input10), form_error('phone'),
     '</li>
     <li>',
      form_submit($input11, 'Zaregistrovať'),
    '</li>
   </ul>',
  form_close();
?>
<br>
</section>