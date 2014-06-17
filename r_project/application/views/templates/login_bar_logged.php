<title><?php echo $title ?> - EIN-e-Shops</title>
</head>
<body>
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
      <a href = "/r_project/index.php/pages/index/registration"  class = "navi" id="posledny_link_v_nav">Registrácia</a> 
    </li> 
   
    <?php echo form_open('pages/logout'); $input3 = array('type' => 'submit', 'class' => 'login', 'id' => 'logout');?>
  <p class="logovatko" id="logged">Prihlásený ako <a href="/r_project" alt="user_profile" class="logovatko"><?php echo $this->session->userdata('logged')?></a> <?php echo form_submit($input3, 'Logout'); echo form_close()?></p>
</ul>