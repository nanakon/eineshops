<title><?php echo $title ?> - EIN-e-Shops</title> 
</head>
<body>  

<?php
  $input1 = array('name' => 'username', 'placeholder' => 'Prihlasovacie meno','value' => set_value('username'), 'class' => 'login', 'id' => 'login_username');
  $input2 = array('name' => 'password', 'placeholder' => 'Heslo', 'class' => 'login', 'id' => 'login_password');
  $input3 = array('type' => 'submit', 'class' => 'login', 'id' => 'login_submit'); 
  ?>
  <ul id="login_bar">
	  <li>
		  <a href="/r_project" class="navi">Home</a>
    </li>
    <li>
      <a href = "/r_project/index.php/pages/index/about" class = "navi">O projekte</a>
    </li>
    <li>  
      <a href = "/r_project/index.php/pages/index/how_buy" class = "navi">Ako nakupovať </a>
    </li>
    <li>
      <a href = "/r_project/index.php/pages/index/registration" class = "navi" id="posledny_link_v_nav">Registrácia</a> 
    </li>
    <li id="nelognuty_form">
    <?php
      echo form_open('pages/process/'.$title), form_input($input1), form_password($input2), form_submit($input3, 'Login'), form_close(); 
      ?>
    </li>
    </ul>  
<div class = body_class>      
     
    
     

    
  