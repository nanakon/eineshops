</div><section class="login_prompt" id="vyber_dopravy">
<br>
<p>Vyberte si spôsob dopravy:</p>
<div>
<?php

echo form_open("pages/potvrdit_objednavku");

$data0 = array(
    'name'        => 'Doprava',
    'id'          => 'doprava',
    'value'       => 'osobne',
    'checked'     => TRUE,
    'style'       => 'margin:10px',
    );
    
$data1 = array(
    'name'        => 'Doprava',
    'id'          => 'doprava',
    'value'       => 'dobierka',
    'checked'     => FALSE,
    'style'       => 'margin:10px',
    );
    
$data2 = array(
    'name'        => 'Doprava',
    'id'          => 'doprava',
    'value'       => 'kurier',
    'checked'     => FALSE,
    'style'       => 'margin:10px',
    );

echo form_radio($data0)."Osobne<br>";
echo form_radio($data1)."Dobierkou<br>";
echo form_radio($data2)."Kuriérom<br>";

$potvrdit = array ('type' => 'submit', 'class' => 'login', 'id' => 'kupit_submit_final');

echo "<br>";

echo form_submit('potvrdit', 'Kúpiť'), form_close();

?>

<br>
</section>
